<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\storeAs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myaccount()
    {
        $user_info=Auth::user();
        $countries=DB::table('countries')->get();
        $state=DB::table('states')->where('country_id','=',$user_info->country)->get();
        return view('buyerprofile',compact('user_info','countries','state'));
       
    }
    public function sellerdisputes()
    {
        $user_id=Auth::user()->id;
        $ordersdispute=DB::table('order_details')
        ->join('order_statuses', 'order_statuses.id', '=', 'order_details.Status')


        ->where('order_details.order_user_id','=',$user_id)
        ->orderBy('order_details.date', 'DESC')
        ->where('order_details.Status','=',5)
        ->get();
        // return $ordersdispute;
       return view('sellerdisputes',compact('ordersdispute'));

    }
    public function sellerreport()
    {
        $user_info=Auth::user();
        $reportinfo=DB::table('report_product')
        ->join('products', 'products.id', '=', 'report_product.product_id')
        ->orderBy('report_product.product_report_id', 'DESC')
        ->where('report_product.user_id','=',$user_info->id)

        ->get();

        return view('sellerreport',compact('reportinfo'));
       
    }
    public function orderdetails(request $request)
    {
        
        $orders_details=DB::table('order_product')->where('order_product.order_id','=',$request->order_id)->get();

        $orders_address=DB::table('address')->where('address.tracking_id','=',$request->tracking_id)->get();

        // return $orders_address;

        return view('orderdetails',compact('orders_details','orders_address'));

        
    }
    public function order()
    {
        $user_id=Auth::user()->id;
        $orders=DB::table('order_details')
        ->join('address', 'address.tracking_id', '=', 'order_details.tracking_id')
        ->join('order_statuses', 'order_statuses.id', '=', 'order_details.Status')

        ->select('order_details.order_details_id as order_id','order_details.tracking_id as tracking_id','order_details.date as created_at','address.add1 as address','order_details.total_price as total','order_statuses.name as status','order_details.Status as statusid')
        
        ->orderBy('order_details.order_user_id', 'DESC')

        ->where('order_details.order_user_id','=',$user_id)
        ->where('order_details.Status','!=',5)
        ->get();
        // return $orders;
        return view('order',compact('orders'));



    }
    public function orderdispute(request $request){
         // return $request;
        $data=array('order_id'=>$request->orderid,"status_id"=>$request->status_id);
        DB::table('order_status_history')->insert($data);

        $data=array('order_details_id'=>$request->orderid,"Status"=>$request->status_id);
        DB::table('order_details')->where('tracking_id',$request->track_id)->update($data);

    }
    public function wishlist()
    {
        $user_id=Auth::user()->id;
        $check_wish=DB::table('wishlists')
        ->join('products', 'products.id', '=', 'wishlists.product_id')

        ->join('product_images', 'product_images.product_id', '=', 'products.id')
        ->select('products.id as Products_id','products.name as product_name','product_images.name as product_image','products.price')
        
        ->where('wishlists.user_id','=',$user_id)
        ->orderBy('wishlists.wish_id', 'DESC')
        ->groupBy('product_images.product_id')
        ->get();

        return view('wishlist',compact('check_wish'));
    }
    public function profile()
    {
        $user_info=Auth::user();
        $countries=DB::table('countries')->get();
        $state=DB::table('states')->where('country_id','=',$user_info->country)->get();
        return view('buyerprofile',compact('user_info','countries','state'));
    }

    public function state($id){

        $state=DB::table('states')->where('country_id','=',$id)->get();
        return view('state',compact('state'));

    }

    public function profilesubmit(Request $request)
    {
        $user_info=Auth::user();
        $name     = $request->name;
        $address  = $request->address;
        $gender   = $request->gender;
        $age      = $request->age;
        $country  = $request->country;
        $city     = $request->city;
        $phone    = $request->phone;
        $zipcode  = $request->zipcode;

      $data=array('name'=>$name,"address"=>$address,"gender"=>$gender,"country"=>$country,"city"=>$city,"phone"=>$phone,"zip_code"=>$zipcode,"age"=>$age);
      DB::table('users')->where('id',$user_info->id)->update($data);

        return redirect($request->lang.'/profile');
    }

    public function  editprofile(Request $request)
    {

        $user_id=Auth::user()->id;
        $user = DB::table('users')->where('id','=',$user_id)->get();
        
        if ($request->hasFile('imagefile')){
            // $file_path = url('').Storage::url('upload/user_image/').$user[0]->image;
            if($user[0]->image != null ){

                Storage::delete('public/upload/user_image/'.$user[0]->image);
            }
            
            // return $file_path;
            $imagefile = $request->file('imagefile');
            $imagefile = date('mdYHis').uniqid().$imagefile->getClientOriginalName();
            $request->imagefile->storeAs('public/upload/user_image',$imagefile);

            $data=array('image'=>$imagefile);
            DB::table('users')->where('id',$user[0]->id)->update($data);

        }
        return redirect('profile');

    }
   

    
    public function wish($id){

        $product_id = $id;
        $user_id=Auth::user()->id;
        $check_wish=DB::table('wishlists')
        ->where('product_id','=',$id)
        ->where('user_id','=',$user_id)
        ->count();
        
        if($check_wish <= 0){
            $data=array('product_id'=>$product_id,"user_id"=>$user_id);
            DB::table('wishlists')->insert($data);
            return "Add To Wish Card Successfully";
        }  
        else{
            return "Already in wishlist";
        }

    }

    public function wishdelete($id){

        $product_id = $id;
        $user_id=Auth::user()->id;
        $check_wish=DB::table('wishlists')->where([
           'product_id' => $product_id,
           'user_id' => $user_id
        ])->delete();

        return "Successfully";

    }

}

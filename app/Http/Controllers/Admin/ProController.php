<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;



class ProController extends Controller
{
    //


    
    public function  deleteproduct(request $request){
            

        $data=array('active'=>'2');
        DB::table('products')->where('id',$request->deleteid)->update($data);
        // return $request->deleteid;

    }
    public function deletespecialprice(request $request){
            

        DB::table('specific_prices')->where('product_id',$request->deleteid)->delete();

    }

   
    public function offer(request $request){

    	$data=array('offer'=>$request->offer_id);
    	DB::table('products')->where('id',$request->product_id)->update($data);
        return $request;
    }


    public function premium(request $request){

    	$data=array('premium'=>$request->premium_id);
    	DB::table('products')->where('id',$request->product_id)->update($data);

    }

    public function deletevendor(request $request){


        DB::table('vendor_product')->where('vendo_product_id', $request->vendorid)->delete();
        
        if (file_exists( public_path() . '/storage/upload/vendor_products/'.$request->vendorimage)){

            $image_path = public_path().'/storage/upload/vendor_products/'.$request->vendorimage;
            unlink($image_path);

        }
    }


    public function delux(request $request){

    	$data=array('delux'=>$request->delux_id);
    	DB::table('products')->where('id',$request->product_id)->update($data);

    }
    public function collection(request $request){

    	$data=array('collection'=>$request->collection_id);
    	DB::table('products')->where('id',$request->product_id)->update($data);
    }
    public function editvendor(request $request){

        $vendor=DB::table('vendor_product')
        ->join('products', 'products.id', '=', 'vendor_product.product_id')
        ->select('vendo_product_id','vendor_product.product_id as product_id','name','color','image')
        ->where('vendor_product.product_id','=',$request->editvendor)->get();
        // return $request->editvendor;
        $size= DB::table('attribute_values')->where('attribute_id','=',1)->get();
        return view('admin.editvendor',compact('vendor','size'));


    }

    public function product(){

    	$user=Auth::user();
		$user= DB::table('users')->join('role_users', 'role_users.user_id', '=', 'users.id')->where('role_users.user_id','=',$user->id)->get();

        $size= DB::table('attribute_values')->where('attribute_id','=',1)->get();

		$user = json_decode($user);

		// return $user[0]->id;

		if($user[0]->role_id == 1){

    	$product = DB::table('products')
    	 ->join('category_product', 'category_product.product_id', '=', 'products.id')
    	 ->join('categories', 'categories.id', '=', 'category_product.category_id')->select('products.id as product_id','products.name as name','products.sku as sku','products.price as price','products.stock','products.active','categories.name as categorie_name','offer','premium','delux','collection')

        ->join('users', 'users.id', '=', 'products.user_id')
        ->where('products.active', '!=', '2')
    	->where('users.active', '=', '1')
        ->orderBy('products.id', 'DESC')->get();

		}
		else{

			$product = DB::table('products')
			 ->join('category_product', 'category_product.product_id', '=', 'products.id')
			 ->join('categories', 'categories.id', '=', 'category_product.category_id')->select('products.id as product_id','products.name as name','products.sku as sku','products.price as price','products.stock','products.active','categories.name as categorie_name','offer','premium','delux','collection')

			 ->where('products.user_id','=',$user[0]->id )
             ->where('products.active', '!=', '2')
        	 ->orderBy('products.id', 'DESC')->get();
			 
		}

    	
    	return view('admin.pro',compact('product','size'));

    }

    public function seller(){

        $user_info=Auth::user();
        $sellers=DB::table('users')
        ->join('role_users', 'role_users.user_id', '=', 'users.id')
        ->select('users.name as name','users.id as seller_id','users.active as status')
        ->where('role_id','=',2)
        ->get();
        $lists = [];
        // $rep_count = [];

        foreach($sellers as $key=> $viewsellers){
            

           $report_count=DB::table('report_product')
           ->join('products', 'products.id', '=', 'report_product.product_id')
           ->where('products.user_id','=',$viewsellers->seller_id)
           ->count();

           $product_dispute=DB::table('order_product')
           ->join('products', 'products.id', '=', 'order_product.product_id')
           ->join('order_details', 'order_details.order_details_id', '=', 'order_product.order_id')

           ->where('products.user_id','=',$viewsellers->seller_id)
           ->where('order_details.order_details_id','=',5)
           ->count();



           $sales=DB::table('products')
           ->join('order_product', 'order_product.product_id', '=', 'products.id')
           ->where('products.user_id','=',$viewsellers->seller_id)
           ->sum('total_price');

            
           // $lists[]     =   $viewsellers;
           $rep_count[] =  array(
            'report_count'  => $report_count,
            'sellersinfo'   => $viewsellers,
            'sales'         => $sales,
            'product_dispute' => $product_dispute
            );
           // $lists[] = ['forum_id' => $value];

        }

        // dd($rep_count);
        // return $rep_count;
        return view('admin.selleraccount',compact('lists','rep_count'));
            
    }


    public function updatevendor(request $request){

        $file_upload=[];
        $file_key=[];

        if($request->hasFile('fileUpload'))
        {
            $allowedfileExtension=['jpg','png'];
             // $files = $request->file('fileUpload');
            foreach($request->fileUpload as $key => $file){
                  
                $filename = Carbon::now()->timestamp."-".$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                 
                $file->storeAs('public/upload/vendor_products',$filename);
                $file_key[]     =   $key;
                $file_upload[]  =   $filename;

            }
           
        }

        // return $request;

        $count = count($request->productid)-1;
        $c_img=0;
        for ($i=0; $i <= $count ; $i++) { 

            $design_id  =   $i;
            $list_desings_ids = $file_key;

            if(in_array($design_id, $list_desings_ids)){
                $images     =   $file_upload[$c_img];
                $c_img++;
            }
            else{
                $images     =   '';
            }

            $vendor_id  =   $request->vendorid[$i];
            $productid  =   $request->productid[$i];
            $color      =   $request->color[$i];
            $image      =   $images;



            $vendot_count=DB::table('vendor_product')
            ->where(['vendo_product_id'=> $vendor_id])->count();

            $vendot_details=DB::table('vendor_product')
            ->where(['vendo_product_id'=> $vendor_id])->get();

            $product_name=DB::table('products')->select('name')
            ->where([
                   'id'     => $productid
            ])->get();


            if($vendot_count != 0 ){

                if($image  != ''){

                    if (file_exists( public_path() . '/storage/upload/vendor_products/'.$vendot_details[0]->image)){

                       $image_path = public_path().'/storage/upload/vendor_products/'.$vendot_details[0]->image;
                        unlink($image_path);

                    }
                   
                    $data=array('product_id'=>$productid ,"color"=>$color,"image"=>$image);
                    DB::table('vendor_product')->where('vendo_product_id',$vendor_id)->update($data);
                    // return '$color';

                }else{

                    $data=array('product_id'=>$productid ,"color"=>$color);
                    DB::table('vendor_product')->where('vendo_product_id',$vendor_id)->update($data);

                }

                $swalmessage[] = [
                    "id"        => 1,
                    "name"      => 'Update '.$product_name[0]->name.' Product and Color '.$color.' Successfully'
                ];

                session()->put('swalmess', $swalmessage);

            }
            else{

                if($image != ''){

                    $data=array('product_id'=>$productid ,"color"=>$color,"image"=>$image);
                    DB::table('vendor_product')->insert($data);

                   $swalmessage[] = [
                        "id"        => 1,
                        "name"      => 'Add '.$product_name[0]->name.' Product and Color '.$color.' Successfully'
                    ];

                    session()->put('swalmess', $swalmessage);
                }


            }

        }   
        // return $image;

        // return $swalmessage->id;
        
        Session::flash('vendor','$swalmessage');
        // return redirect('/products');
        return redirect()->back();

        return $request;

    }

    public function Addvendor(Request $request)
    {
        // $file_upload='';
        
        if($request->hasFile('fileUpload'))
        {
            $allowedfileExtension=['jpg','png'];
             // $files = $request->file('fileUpload');
            foreach($request->fileUpload as $file){
                  
                $filename = Carbon::now()->timestamp."-".$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                  // Storage::putFile('public',$request->file('fileUpload'));
                 
                $file->storeAs('public/upload/vendor_products',$filename);
                $file_upload[]=$filename;

            }
           
        }
         // return $file_upload;

        $count = count($request->productid)-1;

        for ($i=0; $i <= $count ; $i++) { 

            $productid  =   $request->productid[$i];
            $color      =   $request->color[$i];
            $image      =   $file_upload[$i];

            $vendot_count=DB::table('vendor_product')
            ->where([
                   'product_id'     => $productid,
                   'color'          => $color
                ])->count();

            $product_name=DB::table('products')
            ->select('name')
            ->where([
                   'id'     => $productid
            ])->get();

            // return ;

            // return $vendot_count;
            if($vendot_count == 0 ){

                // foreach($request->fileUpload as $file){
                      
                //     $filename = $file->getClientOriginalName();
                //     $extension = $file->getClientOriginalExtension();
                //     $check=in_array($extension,$allowedfileExtension);
                //       // Storage::putFile('public',$request->file('fileUpload'));
                     
                //     $file->storeAs('public/upload/vendor_products',$image);
                //     // $file_upload[]=$filename;

                // }

                $data=array('product_id'=>$productid ,"color"=>$color,"image"=>$image);
                DB::table('vendor_product')->insert($data);

                $swalmessage[] = [
                        "id"        => 1,
                        "name"      => 'Add '.$product_name[0]->name.' Product and Color '.$color.' Successfully'
                ];

                session()->put('swalmess', $swalmessage);
                

            }
            else{
                $swalmessage[] = [
                        "id"        => 2,
                        "name"      => 'Already Insert '.$product_name[0]->name.' Product and Color '.$color
                    ];

                session()->put('swalmess', $swalmessage);

            }

        }   

        // return $swalmessage->id;
        
        Session::flash('vendor','$swalmessage');
        // return redirect('/products');
        return redirect()->back();

    }


}

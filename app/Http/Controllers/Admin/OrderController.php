<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function orders()
    {
    	$user_info=Auth::user();
        $user= DB::table('users')->join('role_users', 'role_users.user_id', '=', 'users.id')->where('role_users.user_id','=',$user_info->id)->get();

        if($user[0]->role_id == 1){

        	$order_details=DB::table('order_details')
        	->join('users', 'users.id', '=', 'order_details.order_user_id')
        	->join('order_statuses', 'order_statuses.id', '=', 'order_details.Status')
        	->select('order_statuses.name as status','users.name as username','order_details.date as date','tracking_id','total_price')
            ->orderBy('order_details.date', 'DESC')
        	->get();

           
        
        }else{

            $order_details=DB::table('order_product')
            ->join('products', 'products.id', '=', 'order_product.product_id')

            ->join('order_details', 'order_details.order_details_id', '=', 'order_product.order_id')

            ->select('order_details.tracking_id as tracking_id','order_product.name as productname',
                'order_product.price as price','order_product.color as color','order_product.size as size','order_product.total_price as total_price','order_product.quantity as quantity','order_details.date as date','address.countries as countries','address.state as state','address.add1 as add1')
            
            ->join('address', 'address.tracking_id', '=', 'order_details.tracking_id')

            ->where('products.user_id','=',$user_info->id)
            ->orderBy('order_details.tracking_id', 'DESC')
            ->get();


            // return $order_details;
           
        }
         return view('admin.order',compact('order_details'));

        
    }
    public function ordersid(request $request)
    {
    	$user_info=Auth::user();
    	$address=DB::table('address')->where(
    		'address.tracking_id','=',$request->id
    	)->get();
    	$order_statuses=DB::table('order_statuses')->get();

    	$order_details=DB::table('order_details')
    	->join('order_product', 'order_product.order_id', '=', 'order_details.order_details_id')
    	->select('order_product.order_id as order_id','order_details.tracking_id as tracking_id','order_details.date as date','order_details.total_price as total_price','name','color','size','price','quantity','order_product.total_price as total_product_price')
		->where(
    		'order_details.tracking_id','=',$request->id
    	)->get();

    	$order_history=DB::table('order_status_history')
    	->join('order_statuses', 'order_statuses.id', '=', 'order_status_history.status_id')
    	->select('order_statuses.name  as name','order_status_history.created_at as created_at')
		->where('order_id','=',$order_details[0]->order_id)
		->orderBy('order_status_history.created_at', 'DESC')
    	->get();

	 	return view('admin.order_details',compact('address','order_details','order_statuses','order_history'));
        
    }

    public function ordersstatus(request $request)
    {
        // return $request;
    	$data=array('order_id'=>$request->orderid,"status_id"=>$request->status_id);
    	DB::table('order_status_history')->insert($data);

    	$data=array('order_details_id'=>$request->orderid,"Status"=>$request->status_id);
    	DB::table('order_details')->where('tracking_id',$request->track_id)->update($data);

    	return redirect('admin/orders/'.$request->track_id );
        
    }
    
}

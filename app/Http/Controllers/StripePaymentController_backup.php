<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;
use Session;
use Auth;
use Stripe;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        try {

            $countries=DB::table('order_details')->get();
            $date = Carbon::now();
            $track_id = date('YmdHis');
            $user_id=Auth::user()->id;
            $total_amount=0;
            // return $request;

            $data=array('tracking_id'=>$track_id,"order_user_id"=>$user_id,"total_price"=>$request->price);
            DB::table('order_details')->insert($data);

            $address=array('tracking_id'=>$track_id,'first_name'=>$request->first_name,"phonenumber"=>$request->phonenumber,"emailaddress"=>$request->emailaddress,'countries'=>$request->countries,"state"=>$request->state,"zip"=>$request->zip,'add1'=>$request->add1,"stripeToken"=>$request->stripeToken
            );
            DB::table('address')->insert($address);

            $id = DB::getPdo()->lastInsertId();;
            
            foreach (Session::get('cart') as $key => $cart_item) {
                $total_price=$cart_item['price']*$cart_item['quantity'];
                $data=array(
                    'product_id'    =>  $cart_item['p_id'],
                    "order_id"      =>  $id,
                    "name"          =>  $cart_item['name'],
                    "color"         =>  $cart_item['color'],
                    "size"          =>  $cart_item['size'],
                    "quantity"      =>  $cart_item['quantity'],
                    "price"         =>  $cart_item['price'],
                    "total_price"   =>  $total_price
                );
                
                DB::table('order_product')->insert($data);
               
            }

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                    "amount" 		=>  $request->price * 100,
                    "currency" 		=> "usd",
                    "source" 		=> $request->stripeToken,
                    "description" 	=> "Test payment from Grayupon" 
            ]);
            Session::forget('cart');
            Session::flash('OrderNo',$track_id);

            return redirect('/');

        } catch (Exception $e) {


            
        }



    }
}
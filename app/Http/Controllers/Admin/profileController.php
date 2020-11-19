<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\storeAs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    //

    public function profile(){

        $user_info=Auth::user();
        $countries=DB::table('countries')->get();
        $state=DB::table('states')->where('country_id','=',$user_info->country)->get();
 
    	return view('admin.profile',compact('countries','state'));

    }

    public function editprofiledata(request $request){

        $user_info=Auth::user();
        $name     = $request->name;
        $email    = $request->email;
        $country  = $request->country;
        $city     = $request->city;
        $address  = $request->address;
        $phone    = $request->phone;
        $gender   = $request->gender;
        $bank       = $request->bank;
        $ibanno   = $request->ibanno;
        $typeseller  = $request->typeseller;

        // return $type;
        $data=array('name'=>$name,"email"=>$email,"country"=>$country,"city"=>$city,"address"=>$address,"phone"=>$phone,"gender"=>$gender,"typeseller"=>$typeseller,
        "bank"=>$bank,
        "ibanno"=>$ibanno);

        DB::table('users')->where('id',$user_info->id)->update($data);

        return redirect('admin/edit-account');
    }
    
    
    public function deleteprofile($id){

        $data=array('active'=>'0');
        DB::table('users')->where('id',$id)->update($data);
        
        // DB::table('users')->where('id', $id)->delete();
        Auth::logout();
        return redirect('/');
        
    }



    public function editprofile(Request $request){

    	$user_id=Auth::user()->id;
    	$user = DB::table('users')->where('id','=',$user_id)->get();
    	
    	if ($request->hasFile('imagefile')){

            if($user[0]->image != null ){

                Storage::delete('public/upload/user_image/'.$user[0]->image);
            }

    		// $file_path = url('').Storage::url('upload/user_image/').$user[0]->image;
    		
    		// return $file_path;
	    	$imagefile = $request->file('imagefile');
	    	$imagefile = date('mdYHis').uniqid().$imagefile->getClientOriginalName();
    		$request->imagefile->storeAs('public/upload/user_image',$imagefile);

    		$data=array('image'=>$imagefile);
    		DB::table('users')->where('id',$user[0]->id)->update($data);

    	}
    	return redirect('admin/edit-account');
    }
}

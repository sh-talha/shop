<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function dashboard(){

    	$contactuss = DB::table('contactus')->orderBy('contact_id', 'DESC')->get();

    	return view('vendor.backpack.base.dashboard',compact('contactuss'));

    }
}

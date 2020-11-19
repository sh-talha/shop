<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

//use Illuminate\Support\Facades\Request;

class websiteController extends Controller
{

    public function index()
    {
        $latest_products = DB::table('products')
            ->join('product_images', 'product_images.product_id', '=', 'products.id')
            ->select('products.id as products_id', 'products.name as product_name', 'product_images.name as product_image', 'products.price', 'products.price_with_vat')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('users.active', '=', '1')
            ->where('products.active', '=', '1')
            ->groupBy('product_images.product_id')
            ->orderBy('products.updated_at', 'DESC')->take(8)->get();

        return view('index', compact('latest_products'));

    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function faq()
    {
        return view('faq');
    }

    public function termandcondition()
    {
        return view('termandcondition');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function policy()
    {
        return view('policy');
    }

    public function intellectualproperty()
    {
        return view('intellectualproperty');
    }

    public function contact(request $request)
    {


        $data = array('name' => $request->name, "Email" => $request->email, "Message" => $request->text);
        DB::table('contactus')->insert($data);

    }

    public function shop(request $request)
    {

        $products = DB::table('products')
            ->join('product_images', 'product_images.product_id', '=', 'products.id')->select('products.id as Products_id', 'products.name as product_name', 'product_images.name as product_image', 'products.description as product_description', 'products.price', 'products.price_with_vat')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('users.active', '=', '1')
            ->where('products.active', '=', '1');

        if ($request->has('offer')) {

            $filter = Str::lower($request->offer);

            if ($filter == 'oferta') {
                $filter = 'offer';
            } elseif ($filter == 'colección') {
                $filter = 'collection';
            } elseif ($filter == 'Delux') {
                $filter = 'celux';
            } elseif ($filter == 'prima') {
                $filter = 'premium';
            }

            $products = $products->where($filter, '=', 1);
        }

        $products = $products->groupBy('product_images.product_id');

        if ($request->has('sort_by')) {
            $sortBy = $request->sort_by;
            if ($sortBy == 'price_desc') {
                $products = $products->orderBy('products.price', 'DESC');
            } elseif ($sortBy == 'price_asc') {
                $products = $products->orderBy('products.price', 'ASC');
            } elseif ($sortBy == 'date_desc') {
                $products = $products->orderBy('products.id', 'DESC');
            } elseif ($sortBy == 'date_asc') {
                $products = $products->orderBy('products.id', 'ASC');
            } else {
                $products = $products->orderBy('products.id', 'DESC');
            }
        } else {
            $products = $products->orderBy('products.id', 'DESC');
        }

        $products = $products->get();
        $cat = categorie::all();
        return view('shop', compact('products', 'cat'));
    }


    public function login()
    {
        return view('login');
    }

    public function sellerlogin()
    {
        return view('sellerlogin');
    }

    public function selleraccount()
    {
        return view('selleraccount');
    }

    public function registration()
    {
        return view('registration');
    }

    public function product_detail($request)
    {
        $request = Request()->segment(3);
        $products = DB::table('products')
            ->join('product_images', 'product_images.product_id', '=', 'products.id')->select('products.id as Products_id', 'products.name as product_name', 'product_images.name as product_image', 'products.price', 'products.price_with_vat', 'products.description', 'products.stock')->where('products.id', '=', $request)
            ->get();
        $color = DB::table('attribute_values')->where('attribute_id', '=', 2)->get();

        $reviews = DB::table('product_reviews')
            ->join('users', 'users.id', '=', 'product_reviews.user_id')
            ->select('rating', 'description', 'users.name', 'image_1', 'image_2', 'image_3', 'users.image')->where('product_reviews.product_id', '=', $request)->orderBy('product_reviews.review_id', 'DESC')->get();

        $total_review_count = DB::table('product_reviews')->where('product_reviews.product_id', '=', $request)->count();
        $review_count_5 = DB::table('product_reviews')->where([
            'product_reviews.product_id' => $request,
            'product_reviews.rating' => '5'
        ])->count();
        $review_count_4 = DB::table('product_reviews')->where([
            'product_reviews.product_id' => $request,
            'product_reviews.rating' => '4'
        ])->count();
        $review_count_3 = DB::table('product_reviews')->where([
            'product_reviews.product_id' => $request,
            'product_reviews.rating' => '3'
        ])->count();
        $review_count_2 = DB::table('product_reviews')->where([
            'product_reviews.product_id' => $request,
            'product_reviews.rating' => '2'
        ])->count();
        $review_count_1 = DB::table('product_reviews')->where([
            'product_reviews.product_id' => $request,
            'product_reviews.rating' => '1'
        ])->count();

        $overall = DB::table('product_reviews')->where([
            'product_reviews.product_id' => $request
        ])->sum('product_reviews.rating');

        if ($total_review_count > 0)
            $overall = ($overall / ($total_review_count * 5)) * 5;


        $products_vendor = DB::table('vendor_product')->where([
            'product_id' => $request,
        ])->get();

        $vendor_count = DB::table('vendor_product')->where([
            'product_id' => $request,
        ])->count();

        return view('product_details', compact('products', 'reviews', 'total_review_count', 'review_count_5', 'review_count_4', 'review_count_3', 'review_count_2', 'review_count_1', 'overall', 'products_vendor', 'vendor_count', 'color'));
        // return $overall;
    }
}

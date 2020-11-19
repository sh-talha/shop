<?php

namespace App\Http\Controllers;

use App\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\storeAs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));

    }

    public function reportproduct(request $request)
    {
        $user_info = Auth::user();
        $data = array('user_id' => $user_info->id, "product_id" => $request->productid);
        DB::table('report_product')->insert($data);


    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        $countries = DB::table('countries')->get();
        return view('checkout', compact('countries'));
    }

    public function confirmation(request $request)
    {
        $info = $request;
        $countries = DB::table('countries')->where('countries.id', '=', $request->country)->get();
        $state = DB::table('states')->where('id', '=', $request->city)->get();

        return view('confirmation', compact('info', 'countries', 'state'));
    }


    public function addreview(Request $request)
    {

        $product_id = $request->input('product_id');
        $user_id = $request->input('user_id');
        $rating = $request->input('selected_rating');
        $lang = $request->input('lang');
        $description = $request->input('message');
        $image_1 = '';
        $image_2 = '';
        $image_3 = '';

        if ($request->hasFile('fileUpload')) {
            $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
            // $files = $request->file('fileUpload');
            $count = 1;
            foreach ($request->fileUpload as $file) {

                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                // Storage::putFile('public',$request->file('fileUpload'));

                if ($check) {
                    $file->storeAs('public/upload/reviews_images', $filename);
                    if ($count == 1)
                        $image_1 = $filename;
                    elseif ($count == 2)
                        $image_2 = $filename;
                    elseif ($count == 3)
                        $image_3 = $filename;
                    $count++;
                }
            }
        }
        //var_dump($lang.'/product/'.$product_id);die;
        $data = array('product_id' => $product_id, "user_id" => $user_id, "rating" => $rating, "description" => $description, "image_1" => $image_1, "image_2" => $image_2, "image_3" => $image_3);
        DB::table('product_reviews')->insert($data);
        return redirect($lang . '/product/' . $product_id);

    }

    public function cat_filters(request $request)
    {
        if ($request->offerCheck != null || $request->offerCheck != '') {

            $product = DB::table('category_product')
                ->join('products', 'products.id', '=', 'category_product.product_id')
                ->join('product_images', 'product_images.product_id', '=', 'products.id')
                ->select('products.id as Products_id', 'products.name as product_name', 'product_images.name as product_image', 'products.price')
                ->join('users', 'users.id', '=', 'products.user_id')
                ->where('users.active', '=', '1')
                ->where('products.active', '=', '1')
                ->where('category_product.category_id', '=', $request->catid)
                ->where($request->offerCheck, '=', '1')
                ->groupBy('product_images.product_id');

        } else {
            $product = DB::table('category_product')
                ->join('products', 'products.id', '=', 'category_product.product_id')
                ->join('product_images', 'product_images.product_id', '=', 'products.id')
                ->select('products.id as Products_id', 'products.name as product_name', 'product_images.name as product_image', 'products.price')
                ->join('users', 'users.id', '=', 'products.user_id')
                ->where('users.active', '=', '1')
                ->where('products.active', '=', '1')
                ->where('category_product.category_id', '=', $request->catid)
                ->groupBy('product_images.product_id');
        }

        if ($request->has('sort_by')) {
            $sortBy = $request->sort_by;
            if ($sortBy == 'price_desc') {
                $product = $product->orderBy('products.price', 'DESC');
            } elseif ($sortBy == 'price_asc') {
                $product = $product->orderBy('products.price', 'ASC');
            } elseif ($sortBy == 'date_desc') {
                $product = $product->orderBy('products.id', 'DESC');
            } elseif ($sortBy == 'date_asc') {
                $product = $product->orderBy('products.id', 'ASC');
            } else {
                $product = $product->orderBy('products.id', 'DESC');
            }
        } else {
            $product = $product->orderBy('products.id', 'DESC');
        }

        $product = $product->get();

        // $product = json_decode($product);
        // return $product ;
        return view('filter_cat_pro', compact('product'));
        // return $request->offerCheck;

    }

    public function filterprice(request $request)
    {

        $lowerprice = $request->lowerprice;
        $higherprice = $request->higherprice;

        $product = DB::table('category_product')
            ->join('products', 'products.id', '=', 'category_product.product_id')
            ->join('product_images', 'product_images.product_id', '=', 'products.id')
            ->select('products.id as Products_id', 'products.name as product_name', 'product_images.name as product_image', 'products.price')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('users.active', '=', '1')
            ->where('products.active', '=', '1')
            ->whereBetween(

                'products.price', array($lowerprice, $higherprice)

            )->orderBy('products.id', 'DESC')->get()
            ->groupBy('product_images.product_id');

        // $product = json_decode($product);
        // return $product ;
        return view('filter_cat_pro', compact('product'));

    }


    public function addToCart(request $request, $P_ids)
    {

        if ($request->qty == null) {
            $quantity = 1;
            $id = $P_ids;
        } else {
            $quantity = $request->qty;
            $id = $request->id;
        }
        $color = '';
        $size = '';

        $product = DB::table('products')
            ->join('product_images', 'product_images.product_id', '=', 'products.id')->select('products.id as Products_id', 'products.name as product_name', 'product_images.name as product_image', 'products.price')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('users.active', '=', '1')
            ->where('products.id', '=', $id)->get();
        // $product = Product::find($id);

        $special_price = DB::table('specific_prices')
            ->where('specific_prices.product_id', '=', $id)
            ->orderBy('specific_prices.id', 'DESC')->take(1)
            ->get();


        $product = json_decode($product);

        if (isset($special_price[0]->reduction) == '') {

            // return $product[0]->price;

            $productprice = $product[0]->price;

        } else {


            $productprice = $special_price[0]->reduction;
        }
        // echo $product[0]->product_name;
        if (!$product) {

            abort(404);

        }

        if (isset($request->color)) {

            if ($request->color != 0 && $request->size != '0') {
                $id = $request->color . $request->size;
                $color = $request->color_text;
                $size = $request->size;
                $product_image = $request->img_url_insert;
                // return $product[0]->product_image;

            } else if ($request->color != 0) {
                $id = $request->color;
                $color = $request->color_text;
                $product_image = $request->img_url_insert;
                // return $request->size;

            } else if ($request->size != '0') {
                $id = $request->id . $request->size;
                $size = $request->size;
                $product_image = $product[0]->product_image;
                // return $request->size;
            } else {
                // return $request->size;
                $product_image = $product[0]->product_image;
            }

        } else if (isset($request->size)) {
            if ($request->size != '0') {
                $id = $request->id . $request->size;
                $size = $request->size;
                $product_image = $product[0]->product_image;
            }
        } else {
            $product_image = $product[0]->product_image;
        }

        $cart = session()->get('cart');


        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "p_id" => $product[0]->Products_id,
                    "name" => $product[0]->product_name,
                    "color" => $color,
                    "size" => $size,
                    "quantity" => $quantity,
                    "price" => $productprice,
                    "photo" => $product_image
                ]
            ];

            session()->put('cart', $cart);


            return view('checkcart');

        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
            session()->put('cart', $cart);
            // return redirect()->back()->with('success', 'Product added to cart successfully!');
            // return $cart[$id]['quantity']+$quantity;

            return view('checkcart');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [

            "p_id" => $product[0]->Products_id,
            "name" => $product[0]->product_name,
            "color" => $color,
            "size" => $size,
            "quantity" => $quantity,
            "price" => $productprice,
            "photo" => $product_image
        ];

        session()->put('cart', $cart);

        // return redirect()->back()->with('success', 'Product added to cart successfully!');

        return view('checkcart');


    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
        // return $request;
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}

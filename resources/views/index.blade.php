@extends('website_layout.layout')
@section('body')
    <!-- start banner Area -->
    
    
   <input type="checkbox" id="cerrar">
   <input type="hidden" id="check_cookie" value="0">
             <label for="cerrar" id="btn-cerrar"><span style="/* margin-top: -50px !important; *//* margin-bottom: 10px; */margin: 4px;">&nbsp;&nbsp;x</span></n></label>
             <div style="display:{{Cookie::get('language') ?'none':'flex'}}" {{Cookie::get('language') ?:'not set'}} class="modall">
                 <div class="contenidoss" style="padding:15px; text-align: center;">
                     <h3 style="color:red;text-align: center;">Choose your language / Elige tu Idioma</h3><br>
                    	
                            	
                            		<span id="myspanish" style="text-align: center;width:100%" class="nav-item">
                            			<img src="{{url('img/sp-flag-icon.png')}}" > @lang('base.spainish')
                            			<input type="hidden" id="spanishlang" value="es">
                            		</span><br>
                            		<span id="myenglish" style="text-align: center;" class="nav-item">
                            			<img src="{{url('img/eflag-icon.png')}}" > @lang('base.english')
                            			<input type="hidden" id="englishlang" value="en">
                            		</span>
                            	
                 </div>
             </div> 
             
    
    
    <section class="banner-area">
        <div class="container">
           
             
                        
          <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">









                        
                        
                         <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                               <div class="banner-img">
                                   <a href="{{ route('shop',app()->getLocale()) }}" >
                                    <img class="img-fluid img1" src="img/banner/banner-img1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7" style="padding: 30px;">
                                
                                 <div class="banner-content">
                                      <h1>{{ __('base.discover_new')}} {{ __('base.collection1')}}</h1>
                                    <p>{{ __('base.home_text')}}</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a style="background: linear-gradient(90deg, #0fef13 0%, #86b2d8 100%);"" class="add-btn" href="{{ route('shop',app()->getLocale()) }}" ><span class="lnr lnr-cross" ></span></a>
                                        
                                        
     <a   href="{{ route('shop',app()->getLocale()) }}" >                                   
                                        <span class="add-text text-uppercase" >{{ __('base.view_more')}}</span>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                          <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                               <div class="banner-img">
                                   <a href="{{ route('shop',app()->getLocale()) }}" >
                                    <img class="img-fluid img1" src="img/banner/banner-img.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7"  style="padding: 30px;">
                                
                                 <div class="banner-content">
                                      <h1>{{ __('base.home_slider_two')}} {{ __('base.collection2')}}</h1>
                                    <p>{{ __('base.slider_text')}}</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a style="background: linear-gradient(90deg, #0fef13 0%, #86b2d8 100%);"" class="add-btn" href="{{ route('shop',app()->getLocale()) }}" ><span class="lnr lnr-cross" ></span></a>
                                        
                                        
     <a   href="{{ route('shop',app()->getLocale()) }}" >                                   
                                        <span class="add-text text-uppercase" >{{ __('base.view_more')}}</span>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      
                       
                        </div>
             </div></div>
        </div>
    </section>
    <br>
    <br><br>
    <!-- End banner Area -->

           
         
             
             
    <!-- Start category Area -->
    <section class="category-area">
        <div class="container">
            <h2 style="text-align:center;">{{ __('base.featured_products')}}</h2>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
                                <form action="{{ url(app()->getLocale().'/shop') }}" method="get" accept-charset="utf-8">
                                    <a href="" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                         <input type="submit" class="button_offer" name="offer" value="{{ __('base.offer')}}" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
                                <form action="{{ url(app()->getLocale().'/shop') }}" method="get" accept-charset="utf-8">
                                    <a href="" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                             <input type="submit" name="offer" value="{{ __('base.collection')}}" class="button_offer" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
                                <form action="{{ url(app()->getLocale().'/shop') }}" method="get" accept-charset="utf-8">
                                    <a href="" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                             <input type="submit" name="offer" class="button_offer" value="{{ __('base.delux')}}" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
                                <form action="{{ url(app()->getLocale().'/shop') }}" method="get" accept-charset="utf-8">
                                    <a href="#" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                             <input type="submit" name="offer" value="{{ __('base.premium')}}" class="button_offer" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
                        <a href="" class="img-pop-ups" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Adds</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Area -->

    <!-- start product Area -->
    <section class="owl-carousel active-product-are section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>{{ __('base.latest_products')}}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                @forelse($latest_products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product img-thumbnail">
                        <a href="{{ url(app()->getLocale().'/product/'.$product->products_id) }}" class="social-info">   <img class="img-fluid filter_image_size" src="uploads/products/{{substr($product->products_id, 0, 1)}}/{{$product->products_id}}/{{$product->product_image}}" ></a>
                           <hr>
                            <div class="product-details">
                              <h6 style="max-width: 200px;text-overflow:ellipsis; white-space:nowrap;overflow:hidden;">{{$product->product_name}}</h6>
                                <div class="price">

                                <?php  $special=\App\Models\SpecificPrice::where(['product_id' =>$product->products_id])->pluck('reduction')->last() ?>
                                  
                                  @if($special == 0 )
                                    <h6>{{ $product->price }} &euro;</h6>
                                  @else
                                    <h6>{{$special}}</h6>
                                    <h6 class="l-through">{{ $product->price}}  &euro;</h6>

                                  @endif

                                </div>
                                <div class="prd-bottom">

                                  {{--  <a class="social-info cart_class" id="{{$product->products_id}}">
                                        <span class="fa fa-shopping-bag"></span>
                                        <p class="hover-text">{{ __('base.add_to_bag')}}</p>
                                    </a> --}}
                                    
                                    <a class="social-info wish_class" data-wish='{{$product->products_id}}'>
                                        <span class="fa fa-heart"></span>
                                        <p class="hover-text">{{ __('base.wishlist')}}</p>
                                    </a>
                                   <a href="{{ url(app()->getLocale().'/product/'.$product->products_id) }}" class="social-info">
                                        <span class="fa fa-eye"></span>
                                        <p class="hover-text">{{ __('base.view_more')}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-lg-12 col-md-12"><br>
                        <div class="alert alert-warning" role="alert">
                          {{ __('base.no_category_product')}}
                        </div>
                    </div>

                @endforelse
                </div>
            </div>
        </div>
        <!-- single product slide -->
       {{--  <div class="single-product-sliders">
           
        </div> --}}
    </section>
    <!-- end product Area -->

    <!-- start features Area -->
    <section class="features-area">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('policy',app()->getLocale()) }}" title="">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>6'97&euro;  {{ __('base.delivery')}}</h6>
                        <p>6'97&euro; {{ __('base.shipping_order')}}</p>
                    </div>
                    </a>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('policy',app()->getLocale()) }}" title="">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="img/features/f-icon2.png" alt="">
                            </div>
                            <h6>{{ __('base.return_policy')}}</h6>
                            <p>{{ __('base.return_policy_text')}}</p>
                        </div>
                    </a>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('policy',app()->getLocale()) }}" title="">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="img/features/f-icon3.png" alt="">
                            </div>
                            <h6>24/7 {{ __('base.support')}}</h6>
                            <p>{{ __('base.support_text')}}</p>
                        </div>
                    </a>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('policy',app()->getLocale()) }}" title="">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="img/features/f-icon4.png" alt="">
                            </div>
                            <h6>{{ __('base.secure_payment')}}</h6>
                            <p>{{ __('base.secure_payment_text')}}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        
        
        
        
        
    </section>
 
    
    
    <!-- end features Area -->
@endsection
@section('activate')
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script
  type="module"
  src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.mjs"
></script>
<script>
     ActiveMenu(1);
      $('.modall').hide();
      $('#btn-cerrar').hide();
</script>
@endsection
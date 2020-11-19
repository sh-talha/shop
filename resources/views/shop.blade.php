@extends('website_layout.layout')
@section('body')

    <style type="text/css">
        .cont {
            width: 95%;
        }

        .product_container {
            display: flex;
            flex-wrap: wrap;
        }

        .pagination {
            margin-top: 0px !important;
            border-left: 0px solid #eee !important;
        }

        .pagination .disabled {
            background-color: white;
            padding: 8px 20px !important;
        }

        .current {
            background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%) !important;
        }

        .pagination .active {
            padding: 8px 20px !important;
            background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%) !important;
        }

        .pagination a {
            color: black !important;
        }


        .pagintion .page {
            display: none;
        }

        .page:first-child,
        .page:last-child,
        .page:nth-child(2),
        .page.current,
        .page.disabled,
        .page.current + .page,
        .page.before + .page {
            display: inline-block !important;
        }
        
   
        
    </style>
    <!-- Start Banner Area -->
    <section class="banner-areas organic-breadcrumb">
        <div class="container">
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        {{--  <div class="row justify-content-center">
                 <div class="col-3 text-center">
                     <h1 class="text-center text-uppercase">
                         {{ Request::get('submit') }}
                     </h1>
                 </div>
             </div>
         --}}
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-5 ">
                <div class="sidebar-categories" style="background-color: white">
                    <nav class="navbar navbar-expand-lg navbar-light bg-lights"
                         style="background-color: #b2dcac;color: white">
                        <a class="navbar-brand" href="#" style="color: white">{{ __('shop.browse_offer')}}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    <nav class="navbar navbar-expand-lg main-categories">
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="col-md-12">
                                <li class="main-nav-list"><a data-toggle="collapse" href="#camisetas"
                                                             aria-expanded="false" aria-controls="meatFish">

                                <li class="main-nav-list class_cat_name" id="">
                                    <a aria-expanded="false" href="{{ route('shop',app()->getLocale()) }}"
                                       aria-controls="meatFish">
                                        {{ __('shop.view_all')}}
                                    </a>
                                </li>


                                <li class="main-nav-list class_cat_name" id="">
                                    <a aria-expanded="false" aria-controls="meatFish">
                                        <form action="{{ url(app()->getLocale().'/shop') }}" method="get"
                                              accept-charset="utf-8">
                                            <input type="submit" class="button_offers
                                        {{(Request::get('offer') == 'Offer' || Request::get('offer') == 'Oferta') ? 'button_offers_color' : ''}}"
                                                   name="offer" value="{{ __('base.offer')}}">
                                            @if(Request::has('sort_by'))
                                                <input type="hidden" name="sort_by" value="{{Request::get('sort_by')}}">
                                            @endif
                                        </form>
                                    </a>
                                </li>
                                
                                
                                
              <li class="main-nav-list class_cat_name" id="" >
                               <a aria-expanded="false" aria-controls="meatFish">
                                    <form action="{{ url(app()->getLocale().'/shop') }}" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        {{(Request::get('offer') == 'Collection' || Request::get('offer') == 'Colección') ? 'button_offers_color' : ''}}"  name="offer" value="{{ __('base.collection')}}" >
                                          @if(Request::has('sort_by'))
                                                <input type="hidden" name="sort_by" value="{{Request::get('sort_by')}}">
                                            @endif
                                   </form>
                               </a> 
                           </li>
                           
                           
                           
                            <li class="main-nav-list class_cat_name" id="" >
                               <a aria-expanded="false" aria-controls="meatFish">
                                   <form action="{{ url(app()->getLocale().'/shop') }}" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        {{(Request::get('offer') == 'Premium' || Request::get('offer') == 'Prima') ? 'button_offers_color' : ''}} " name="offer" value="{{ __('base.premium')}}" >
                                         
                                        @if(Request::has('sort_by'))
                                                <input type="hidden" name="sort_by" value="{{Request::get('sort_by')}}">
                                            @endif  
                                         
                                         
                                         
                                   </form>
                                  
                               </a> 
                           </li>
                           
                           
                           
                           <li class="main-nav-list class_cat_name" id="" >
                               <a aria-controls="meatFish">
                                   <form action="{{ route('shop',app()->getLocale()) }}" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        {{(Request::get('offer') == 'Delux') ? 'button_offers_color' : ''}}" name="offer" value="{{ __('base.delux')}}" >
                                         
                                         @if(Request::has('sort_by'))
                                                <input type="hidden" name="sort_by" value="{{Request::get('sort_by')}}">
                                            @endif  
                                         
                                   </form>
                                 
                               </a> 
                           </li>
                           
                           
                           
                            </ul>
                        </div>
                    </nav>
                </div>
                <br>
                <div class="sidebar-categories" style="
    margin-bottom: 15px;">
                    <div class="sidebar-categories" style="background-color: white">
                        <nav class="navbar navbar-expand-lg navbar-light bg-lights"
                             style="background-color: #b2dcac;color: white">
                            <a class="navbar-brand" href="#" style="color: white">{{ __('shop.browse_categories')}}</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcat"
                                    aria-controls="navbarcat" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                        <nav class="navbar navbar-expand-lg main-categories">
                            <div class="collapse navbar-collapse " id="navbarcat">
                                <ul class="col-md-12">
                                    <li class="main-nav-list"><a data-toggle="collapse" href="#camisetas"
                                                                 aria-expanded="false" aria-controls="meatFish">
                                    @foreach($cat as $view_cat)
                                        <li class="main-nav-list class_cat_name" id="{{$view_cat->id}}"
                                            data-id="{{$view_cat->id}}">
                                            <a data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">

                                                <span class="lnr lnr-arrow-right"></span>
                                                {{-- <input type="radio" class="" name="example1"> --}}
                                                {{$view_cat->name}}
                                                <span class="number"></span>
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </nav>
                    </div>
                    {{-- <div class="head">{{ __('shop.browse_categories')}}</div> --}}
                    {{-- <ul class="main-categories">

                        <li class="main-nav-list"><a data-toggle="collapse" href="#camisetas" aria-expanded="false" aria-controls="meatFish">
                            @foreach($cat as $view_cat)
                                <li class="main-nav-list class_cat_name" id="{{$view_cat->id}}" >
                                    <a data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
                                        <span class="lnr lnr-arrow-right"></span>
                                        {{$view_cat->name}}
                                        <span class="number"></span>
                                    </a>
                                </li>
                            @endforeach

                    </ul> --}}
                </div>
            <!-- <div class="sidebar-filter mt-50">
               
                 <div class="common-filter">
                    <br>
                    <form  method="get" accept-charset="utf-8">
                    {{csrf_field()}}
                    <h4 class="text-mutted">{{ __('shop.price')}}</h4>
						<div class="wrapper" style="padding:5px;">
                        <div class="range-slider">
                            <input type="text" class="js-range-slider" value="" />
                        </div>
                        <hr>
                        <div class="extra-controls form-inline">
                            <div class="form-group">
                                <input type="text" class="js-input-from form-control" name="lowerprice" id="lowerprice" value="0" style="width:80px; border:none;" />
                                <input type="text" class="js-input-to form-control" value="0" name="higherprice" id="higherprice" style="width:80px; border:none;" />
                            </div>

                        </div>
                        <br>
                        <input class="btn btn-warning ml-5- filter_class" type="button" name="sidefilter" value="{{ __('shop.apply_filter')}}">
                    </form>
                    

                    </div>
                </div>
            </div> -->
            </div>
            </form>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!--Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center justify-content-between"
                     style="padding: 10px 20px 10px 20px;">
                    <div class="col-md-6">
                        <form action="" method="get">
                            <input id="filter" type="text" class="form-control col-md-5 filter_classchange"
                                   style="margin-top: 10px; display: block;margin-bottom: 5px; float: left; margin-right: 5px;"
                                   placeholder="Buscar">
                            <select name="sort_by" id="sort_by" class="form-control col-md-7"
                                    style="margin-top: 10px;display: block;margin-bottom: 5px;float: left;max-width: 180px;"
                                    onchange="this.form.submit()">
                                <option value="">Ordenar</option>
                                <option value="price_desc" @if(Request::get('sort_by')=="price_desc") selected @endif>
                                   {{ __('shop.price1')}} 
                                </option>
                                <option value="price_asc" @if(Request::get('sort_by')=="price_asc") selected @endif>
                                  {{ __('shop.price2')}} 
                                </option>
                                <option value="date_desc" @if(Request::get('sort_by')=="date_desc") selected @endif>
                                    {{ __('shop.newto1')}}
                                <option value="date_asc" @if(Request::get('sort_by')=="date_asc") selected @endif>
                                    {{ __('shop.newto2')}}
                                </option>
                            </select>
                            @if(Request::has('offer'))
                                <input type="hidden" name="offer" value="{{Request::get('offer')}}">
                            @endif
                        </form>
                    </div>
                    {{-- <div class="pagination">{{ $products->links() }}</div> --}}
                    <div class="product_container">

                    </div>
                </div>
                <section class="lattest-product-area pb-40 category-list">
                    <!-- end of php  -->
                    <!-- single product -->
                    <div class="conts">
                        <div class="product_container" id="cat_filter_product">
                            @forelse($products as $product)
                                <div class="col-lg-4 col-md-12 col-sm-12  single-item results">
                                    <span class="product_description"
                                          style="display: none"> {{ $product->product_description }} </span>
                                    <div class="single-product img-thumbnail ">
                                        <a href="{{ url(app()->getLocale().'/product/'.$product->Products_id) }}"
                                           class="social-info"> <img loading="lazy" class="img-fluid filter_image_size lazyload"
                                                                    data-src="{{ asset('uploads/products/'.substr($product->Products_id, 0, 1).'/'.$product->Products_id.'/'.$product->product_image)}}"
                                                                     alt=""> </a>
                                        <hr>
                                        <div class="product-details">
                                            <h6 style="max-width: 200px;text-overflow:ellipsis; white-space:nowrap;overflow:hidden;">{{$product->product_name}}</h6>
                                            <div class="price">

                                                <?php  $special = \App\Models\SpecificPrice::where(['product_id' => $product->Products_id])->pluck('reduction')->last() ?>

                                                @if($special == 0 )
                                                    <h6>{{number_format($product->price,2)}} &euro;</h6>
                                                @else
                                                    <h6>{{$special}}  &euro;</h6>
                                                    <h6 class="l-through">{{$product->price}} &euro;</h6>

                                                @endif

                                            </div style="margin: 5px;">
                                            <div>	<span style="color: #ffe907;">
											 
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star "> </i> 
												
											</span></div>
                                            <div class="prd-bottom" style="width:270px; margin-top: 5px !important;">

                                                {{-- <a class="social-info cart_class" id="{{$product->Products_id}}">
                                                    <span class="fa fa-shopping-bag"></span>
                                                    <p class="hover-text ">add to bag</p>
                                                </a> --}}
                                                <a class="social-info wish_class" data-wish='{{$product->Products_id}}'>
                                                    <span class="fa fa-heart"></span>
                                                    <p class="hover-text">Wishlist</p>
                                                </a>

                                                <a href="{{ url(app()->getLocale().'/product/'.$product->Products_id) }}"
                                                   class="social-info">
                                                    <span class="fa fa-eye"></span>
                                                    <p class="hover-text">view more</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12 col-md-12"><br>
                                    <div class="alert alert-warning col-md-12" role="alert">
                                        No Result Found.
                                    </div>
                                </div>
                            @endforelse
                        </div>
                </section>
            {{-- <div class="pagination">{{ $products->links() }}</div> --}}
            <!-- End Best Seller -->
                <!-- Start Filter Bar -->
            <!--{{--   <div class="filter-bar d-flex flex-wrap align-items-center">-->
          <!--      <div class="pagination">-->
          <!--          <a href="?pageid=1" class="active">1</a>-->
          <!--      </div>-->
          <!--  </div> --}}-->
                <br>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>
@endsection
@section('activate')
    <script>
        ActiveMenu(2);
        $(document).ready(function () {
            if (window.performance.getEntriesByType('navigation')[0].type !== "back_forward") {
                setCookie("filter", "", -1);
                setCookie("current_page", 1, -1);
                setCookie("class_cat_id", "", -1);
            } else {
                var classCatId = getCookie("class_cat_id");
                if (classCatId && classCatId > 0) {
                    var classIdString = '.class_cat_name[id="' + classCatId + '"]';
                    $(classIdString).trigger("click");
                }
                var filterValue = getCookie("filter");
                if (filterValue) {
                    $('#filter').val(filterValue);
                    $('#filter').keyup();
                }
                var currentPage = getCookie("current_page");
                if (currentPage && currentPage > 0) {
                    $('.pagination .page').eq(currentPage - 1).trigger("click");
                }
            }
        });
    </script>
    
    <script>
 
 if ('loading' in HTMLImageElement.prototype) {
   // Si el navegador soporta lazy-load, tomamos todas las imágenes que tienen la clase
   // `lazyload`, obtenemos el valor de su atributo `data-src` y lo inyectamos en el `src`.
   const images = document.querySelectorAll("img.lazyload");
    images.forEach(img => {
       img.src = img.dataset.src;    });
  } else {
    // Importamos dinámicamente la libreria `lazysizes`
   let script = document.createElement("script");
  script.async = true; 
  script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js";
   document.body.appendChild(script);
 }

    </script>
@endsection

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>




    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1085339475194719');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1085339475194719&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175034741-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-175034741-1');
    </script>

    <!-- end Global site tag (gtag.js) - Google Analytics -->


    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Granyupon Shop</title>

    <!-- ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/website/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/website/toastr.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/website/sweetalert.css')}}"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style type="text/css">


        .li_padding {
            padding: 10px;

        }

        .product-details {
            padding-left: 10px
        }

        .li_padding:hover {
            color: #68C55B !important;
        }

        .nav_active {
            color: #68C55B !important
        }

        .button_offer {
            background-color: Transparent;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            overflow: hidden;
            outline: none;
            color: white;
            font-weight: bold;
            font-size: 18px;
            line-height: 16.8px
        }

        .button_offers {
            background-color: Transparent;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            overflow: hidden;
            outline: none;
            color: #777777;
            font-size: 14px;
            line-height: 16.8px
        }

        .button_offers_color {
            color: #F7B607;
        }

        .button_offers:hover {
            color: #F7B607;

        }

        .cart_class:hover, .wish_class:hover {
            cursor: pointer;
        }

        .disable {

            cursor: not-allowed;

        }

        .color_disable {
            color: #E8F0F2 !important;

        }

        .click_color {

            color: #F7B607;
        }

        .class_cat_name:hover {
            cursor: pointer;
        }

        .filter-bar {
            padding: 0px 20px 10px 20px;
            background: #b2dcac;
            border-radius: 5px 5px 0px 0px;
        }

        .sidebar-categories .head {
            line-height: 60px;
            background: #b2dcac;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            border-radius: 5px 5px 0px 0px;
        }

        .sidebar-filter .top-filter-head {
            line-height: 60px;
            background: #b2dcac;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            border-radius: 5px 5px 0px 0px;
        }

        .single-product .product-details .prd-bottom .social-info span {
            position: relative;
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            background: #68c55b;
            border-radius: 50%;
            display: inline-block;
            color: #fff;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: 1;
        }

        .gradient-bg-reverse,
        #search_input_box {
            background: -webkit-linear-gradient(270deg, #ea8be4 0%, #f5eef4 100%);
            background: -moz-linear-gradient(270deg, #ea8be4 0%, #f5eef4 100%);
            background: -o-linear-gradient(270deg, #ea8be4 0%, #f5eef4 100%);
            background: linear-gradient(270deg, #ea8be4 0%, #f5eef4 100%);
        }

        @media screen and (min-width: 992px) {
            .filter_image_size {
                height: 250px
            }
        }

        @media (max-width: 767px)

            .organic-breadcrumb {
                background: none;
                background: -webkit-linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);
                background: -moz-linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);
                background: -o-linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);
                background: linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);

            }

            .pagination {
                margin-top: 10px;
                border-left: 1px solid #eee;
                border-radius: 3px;
            }

            .pagination a {
                width: 30px;
                /*line-height: 40px;*/
                /*text-align: center;*/
                /*display: inline-block;*/
                /*background: #fff;*/
                height: 40px !important;

            }

        <!--
            @media screen and (max-width: 600px) {

                .drop_cart {
                    width: 300px;
                    margin-left: -0px
                }

                .cart_align {
                    margin-left: 0px;
                }
            } -->

            @media screen and (min-width: 992px) {

                .drop_cart {
                    width: 300px;
                    margin-left: -210px;
                }

                .cart_align {
                    margin-left: -60px;
                }

            }

            @media screen and (min-width: 1160px) {

                .drop_cart {
                    width: 300px;
                    margin-left: -90px;
                }

                .cart_align {
                    margin-left: -60px;
                }

            }


            @media (max-width: 767px) .organic-breadcrumb {
                background: none;
                background: -webkit-linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);
                background: -moz-linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);
                background: -o-linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);
                background: linear-gradient(90deg, #ea8be4 0%, #f5eef4 100%);


            }


                .del {
                    text-decoration: line-through;
                    color: red;
                }

            <style type

            ="text/css"> #relThumbs .smScroll {
                           white-space: nowrap;
                       }

                #relThumbs ul {
                    margin: 0;
                    padding: 0;
                    display: block;
                    list-style: none;
                    overflow: hidden;
                }


                .mCustomScrollbar {
                    -ms-touch-action: pinch-zoom;
                    touch-action: pinch-zoom;
                }

                .mCustomScrollBox {
                    position: relative;
                    overflow: hidden;
                    height: 100%;
                    max-width: 100%;
                    outline: none;
                    direction: ltr;
                }

                #relThumbs .smScroll .mCSB_container {
                    width: 100%;
                    height: auto;
                    overflow: hidden;
                    font-size: 0;
                }

                .mCSB_horizontal.mCSB_inside > .mCSB_container {
                    margin-right: 0;
                    margin-bottom: 30px;
                }

                #relThumbs li {
                    display: inline-block;
                    margin: 0 0 0 10px;
                    width: 60px;
                    border: 1px solid #e5e5e5;
                    font-size: 0;
                    f line-height: 0;
                }

                #relThumbs li img {
                    width: 100%;
                    font-size: 0;
                    display: block;
                }

                a img {
                    border: none;
                }

                button,
                img,
                input,
                select,
                textarea {
                    border: 0;
                    border-collapse: collapse;
                }

                img {
                    margin: 0;
                    padding: 0;
                    font-size: 0;
                    -ms-interpolation-mode: bicubic;
                }

                #itemOptions h3 {
                    line-height: 24px;
                    overflow: hidden;
                }

                h3 {
                    font-size: 14px;
                }

                #itemOptions .guide {
                    float: right;
                    display: inline-block;
                    overflow: visible;
                    z-index: 1;
                    font-size: 11px;
                    cursor: pointer;
                    padding: 2px 7px;
                }

                .btn.btn-default,
                button.btn-default {
                    background-color: #fff;
                    color: #2e2e2e;
                    border: 1px solid #e5e5e5;
                    transition: color .3s, background-color .3s, border-color .3s, opacity .3s;
                    font-size: 11px;
                    line-height: 18px;
                }

                #itemOptions .options {
                    clear: both;
                    padding: 15px 0 0;
                    margin: 0 -4px -4px 0;
                    overflow: hidden;
                    font-size: 0;
                }

                #itemOptions .options .btn {
                    display: inline-block;
                    text-align: center;
                    min-width: 48px;
                    height: 48px;
                    padding: 0 5px;
                    margin: 0 4px 4px 0;
                    font-size: 12px;
                }

                .btn.btn-default,
                button.btn-default {
                    background-color: #fff;
                    color: #2e2e2e;
                    border: 1px solid #e5e5e5;
                    transition: color .3s, background-color .3s, border-color .3s, opacity .3s;
                    font-size: 11px;
                    line-height: 18px;
                }

                .fulfilment-message {
                    display: block;
                }

                .sizeOptions .fulfilment-message .supplier-message {
                    font-size: 14px;
                }

                .fulfilment-message .supplier-message {
                    color: #1a1a1a;
                    font-weight: 700;
                }

                .fulfilment-message div {
                    padding: 5px 0;
                }

                .fulfilment-message .fulfilment-learn-more {
                    line-height: 1;
                    color: #505050;
                    font-weight: 700;
                }

                .support_message {
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: #585555;
                    padding-left: 25px;
                    padding-top: 5px;
                    color: white;
                    text-align: left;
                    z-index: 9999;
                }

                .modall {
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.8);
                    position: fixed;
                    top: 0;
                    left: 0;
                    display: flex;
                    z-index: 500000;
                    animation: modall 2s 3s forwards;
                    visibility: hidden;
                    opacity: 0;
                }

                .contenidoss {
                    margin: auto;
                    width: 400px;
                    /* height:40%;*/
                    background: white;
                    border-radius: 10px;
                }

                #cerrar {
                    display: none;
                }

                #cerrar + label {
                    position: fixed;
                    color: #fff;
                    font-size: 25px;
                    z-index: 500001;
                    background: darkred;
                    height: 45px;
                    width: 45px;
                    line-height: 40px;
                    border-radius: 50%;
                    right: 10px;
                    margin-top: 10px;
                    margin-right: 10px;
                    cursor: pointer;

                    animation: modall 2s 3s forwards;
                    visibility: hidden;
                    opacity: 0;
                }

                #cerrar:checked + label, #cerrar:checked ~ .modall {
                    display: none;
                }

                @keyframes modall {
                    100% {
                        visibility: visible;
                        opacity: 1;
                    }
                }
                .header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
    color: #ffbc00;
}


    </style>


</head>

<body id="category">


<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{url('img/logo.png')}}" alt=""></a>
                
                 <div class="d-block d-sm-none">  <a href="{{ route('cart',app()->getLocale()) }}" 
                                   id="product_cart_list"><i class="fa fa-shopping-cart" aria-hidden="true"
                                       style="color:#68c55b"></i>  <span
                                            class="badge badge-pill badge-danger">{{ session('cart')!=null?count(session('cart')):0 }}</span></a></div>
                
                
                
                
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto" id="main-menu-navigation">
                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('home',app()->getLocale()) }}">@lang('base.home')</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('shop',app()->getLocale()) }}"
                               class="nav-link dropdown-toggle">@lang('base.shop')</a>
                        </li>


                        @if(session()->get('Role_id.role_id') == 3)
                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('myaccount',app()->getLocale()) }}">@lang('base.my_account')</a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('logout',app()->getLocale()) }}"
                                                    onclick="event.preventDefault();

                             document.getElementById('logout-form').submit();">@lang('base.logout')</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}

                            </form>
                            </form>
                        @else
                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('logins',app()->getLocale()) }}">@lang('base.login')</a>
                            </li>

                        @endif

                        <li class="nav-item dropdown" style="top:10px;">
                            <a style="color: #222222;" href="#" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-expanded="false" aria-haspopup="true">
                                @lang('base.language')
                            </a>

                            <ul class="dropdown-menu">

                                <li style="text-align:center;width:100%" class="nav-item">
                                    <a class="nav-link" href="<?php
                                    if (strpos(url()->current(), '/product/') != False) {
                                        $url = str_replace('en', 'es', url()->current());
                                        echo $url;

                                    } elseif (strpos(Request::url(), '/confirmation') != False) {
                                        $url = substr(Request::fullUrl(), strpos(Request::fullUrl(), "?") + 1);
                                        echo url('es/confirmation?' . $url);
                                    } else {

                                        echo route(Route::currentRouteName(), 'es');
                                    }?>">
                                        <img src="{{url('img/sp-flag-icon.png')}}"> @lang('base.spainish')
                                    </a>
                                </li>
                                <li style="text-align:center" class="nav-item">
                                    <a class="nav-link" href="<?php
                                    if (stripos(url()->current(), '/product/') != False) {
                                        $url = str_replace('es', 'en', url()->current());
                                        echo $url;
                                    } elseif (strpos(Request::url(), '/confirmation') != False) {
                                        $url = substr(Request::fullUrl(), strpos(Request::fullUrl(), "?") + 1);
                                        echo url('en/confirmation?' . $url);
                                    } else {

                                        echo route(Route::currentRouteName(), 'en');
                                    }?>">
                                        <img src="{{url('img/eflag-icon.png')}}"> @lang('base.english')
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            @if(session('cart'))
                               <a href="{{ route('cart',app()->getLocale()) }}" class="btn btn-primary btn-block"
                                   style="display:none; background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%); "
                                   id="product_cart_list"><i class="fa fa-shopping-cart" aria-hidden="true"
                                       style="color:#68c55b"></i> @lang('base.cart') <span
                                            class="badge badge-pill badge-danger">{{ session('cart')!=null?count(session('cart')):0 }}</span></a>
                            @endif

                            <div class="dropdown" id="cart_id">
                                <button type="button" class="btn btn-info" data-toggle="dropdown"
                                        style="color: #222222;background-color: white;border:none;margin-top: 5px">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"
                                       style="color:#68c55b"></i> @lang('base.cart') <span
                                            class="badge badge-pill badge-danger">{{ session('cart')!=null?count(session('cart')):0 }}</span>
                                </button>
                                <div class="dropdown-menu drop_cart">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"
                                               style="margin-left: 80px"></i> <span
                                                    class="badge badge-pill badge-danger">{{ session('cart')!=null?count(session('cart')):0 }}</span>
                                        </div>
                                        <?php $total = 0 ?>
                                        @if(session('cart') != null)
                                            @foreach(session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity'] ?>
                                            @endforeach
                                        @endif

                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right cart_align">
                                            <p>Total: <span class="text-info"> {{ $total }} &euro;</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="container" style="height: 200px;overflow:scroll; overflow-x: hidden">

                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        @if($details["color"] == '')
                                                            <img src="{{ asset('uploads/products/'.substr($details["p_id"], 0, 1).'/'.$details["p_id"].'/'.$details["photo"])}}"
                                                                 width="60" height="60" class="img-responsive"
                                                                 style="padding: 5px"/>
                                                        @else
                                                            <img src="{{$details['photo']}}" width="60" height="60"
                                                                 class="img-responsive" style="padding: 5px"/>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <span>{{ $details['name'] }}</span><br>
                                                        <span class="price text-info">  {{ $details['price'] }} &euro;</span><br>
                                                        <span class="count"> Quantity: {{ $details['quantity'] }}</span>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                        @endif

                                    </div>
                                    <hr>
                                    <div class="container">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{url(app()->getLocale().'/cart')}}"
                                               class="btn btn-primary btn-block"
                                               style="background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%); ">{{ __('base.view_all')}}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                </div>
            </div>
        </nav>
    </div>
    {{-- <div class="search_input" id="search_input_box">
        <div class="container">

            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div> --}}
</header>
<!-- End Header Area -->
@section('body'); @show
<!-- start footer Area -->
<div class="support_message" style="display: none">
    <div class="row">
        <div class="col-md-10">
            <p style="font-size: 12px">Are you new around here? If so, I want you to know that I am using my own and
                third party cookies to achieve perfect navigation. If you continue, I will understand that you agree.
                You have more information on this subject in the Privacy policy..</p>
        </div>
        <div class="col-md-2" style="margin-top: 5px">
            <button type="button" class="btn btn-primary btn-sm" onclick="AcceptCondition()">Ok, Accept</button>
            <a href="{{url('privacy')}}">
                <button type="button" class="btn btn-light btn-sm">More info</button>
            </a>
        </div>

    </div>
</div>
<?php //var_dump(Session::get('OrderNo'));die;?>
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>{{ __('base.contact_us')}}</h6>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control col-md-9" id="contactname"
                                   aria-describedby="emailHelp" placeholder="{{ __('base.enter_name')}}">

                        </div>
                        <div class="form-group ">
                            <input type="email" class="form-control col-md-9" id="contactemail"
                                   placeholder="{{ __('base.email')}}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control  col-md-9" id="contacttext"></textarea>
                        </div>
                        <div class="form-group" style="display: none" id="errorfield">
                            <div class="alert alert-warning col-md-9" role="alert">
                                {{ __('base.footer_form_error')}}
                            </div>
                        </div>

                        <button type="button" id="contactform" class="btn btn-success">{{ __('base.submit')}}</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>{{ __('base.others')}}</h6>

                    <p>
                        <a href="{{ route('selleraccount',app()->getLocale()) }}">
                            卖方账户</a>
                    </p>
                    <p>
                        <a href="{{ route('termandcondition',app()->getLocale()) }}">{{ __('base.term_conditions')}}</a>
                    </p>
                    <p>
                        <a href="{{ route('privacy',app()->getLocale()) }}">{{ __('base.privacy')}}</a>
                    </p>
                    <p>
                        <a href="{{ route('termandcondition#report',app()->getLocale()) }}">{{ __('base.term_text')}}</a>
                    </p>

                    <li class="nav-item submenu dropdown">
                        <a href="{{ route('aboutus',app()->getLocale()) }}"
                           class="nav-link dropdown-toggle">@lang('base.about_us')</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="{{ route('faq',app()->getLocale()) }}"
                           class="nav-link dropdown-toggle">@lang('base.faq')</a>
                    </li>
                    {{-- <p class="nav-item"><a class="nav-link" href="">Nosotros</a></p>
                      <p class="nav-item"><a class="nav-link" href="">Preguntas Frecuentes</a></p> --}}
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">{{ __('base.instragram_feed')}}</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <div style="text-align: center;margin: 20px;">
                            <ul class="instafeed d-flex flex-wrap">
                            <li><img src="{{url('img/i1.jpg')}}" alt=""></li>
                            <li><img src="{{url('img/i2.jpg')}}" alt=""></li>
                            <li><img src="{{url('img/i3.jpg')}}" alt=""></li>
                            <li><img src="{{url('img/i4.jpg')}}" alt=""></li>
                            <li><img src="{{url('img/i5.jpg')}}" alt=""></li>
                            <li><img src="{{url('img/i6.jpg')}}" alt=""></li>
                            <li><img src="{{url('img/i7.jpg')}}" alt=""></li>
                            <li><img src="{{url('img/i8.jpg')}}" alt=""></li>
                        </ul>
                        </div>
                    </ul>
                </div>
            </div>

        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                @ GRANYUPON.COM {{ __('base.copy_rights')}} &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> {{ __('base.rights')}} |
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<!-- Modal Quick Product View -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container relative">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="product-quick-view">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="quick-view-carousel">
                            <div class="item" style="background: url({{url('img/organic-food/q1.jpg')}});">

                            </div>
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quick-view-content">
                            <div class="top">
                                <h3 class="head">Mill Oil 1000W Heater, White</h3>
                                <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span
                                            class="ml-10">$149.99</span></div>
                                <div class="category">Category: <span>Household</span></div>
                                <div class="available">Availibility: <span>In Stock</span></div>
                            </div>
                            <div class="middle">
                                <p class="content">Mill Oil is an innovative oil filled radiator with the most modern
                                    technology. If you are looking for something that can make your interior look
                                    awesome, and at the same time give you the pleasant warm feeling during the
                                    winter.</p>
                                <a href="#" class="view-full">View full Details <span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                            <div class="bottom">
                                <div class="color-picker d-flex align-items-center">Color:
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                </div>
                                <div class="quantity-container d-flex align-items-center mt-15">
                                    Quantity:
                                    <input type="text" class="quantity-amount ml-15" value="1"/>
                                    <div class="arrow-btn d-inline-flex flex-column">
                                        <button class="increase arrow" type="button" title="Increase Quantity"><span
                                                    class="lnr lnr-chevron-up"></span></button>
                                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span
                                                    class="lnr lnr-chevron-down"></span></button>
                                    </div>

                                </div>
                                <div class="d-flex mt-20">
                                    <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- modal box --}}

<!-- Modal -->
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" id="order_details_product">

        </div>
    </div>
</div>


<script src="{{ asset('js/website/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/website/priceslide.js')}}"></script>

<script src="{{ asset('js/website/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/website/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('js/website/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('js/website/jquery.sticky.js')}}"></script>
<script src="{{ asset('js/website/nouislider.min.js')}}"></script>
<script src="{{ asset('js/website/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/website/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/website/owl.carousel.min.js')}}"></script>
<script src="{{ asset('css/website/toastr.js')}}"></script>
<script src="{{ asset('css/website/image-picker.js')}}"></script>
<script src="{{ asset('css/website/sweetalert.min.js')}}"></script>
<script src="{{ asset('css/website/jquery.cookie.js')}}"></script>


<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('js/website/gmaps.min.js')}}"></script>
<script src="{{ asset('js/website/main.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">

    $('.class_img_vendor').click(function (event) {

        var id = $(this).attr('id');
        var num = id.replace(/[^0-9]/g, '');
        $("#img_change").val(num);
        var url_val = $('#item_img_' + num).attr('src');
        $('#img_url_insert').val(url_val);
        $('.class_img_vendor_active').removeClass('vendor_active');
        $('#active_' + num).addClass('vendor_active');
        // alert(id);

    });

    $('.class_size_vendor').click(function (event) {

        var id = $(this).attr('id');
        $("#size").val(id);
        $('.class_size_vendor').removeClass('class_size_color');
        $('#' + id).addClass('class_size_color')

    });


    if (!!$.cookie('acceptsupport')) {
        $('.support_message').hide();
    } else {
        $('.support_message').show();
    }

    function AcceptCondition() {
        $.cookie("acceptsupport", 1);
        $('.support_message').hide();
    }

    $(function () {

        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function (e) {

            $("#pay_now_text").hide();
            $("#loding_text").show();

            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {


                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
                $('.error_class_pay').show();
                $("#pay_now_text").show();
                $("#loding_text").hide();
            } else {
                $('.error_class_pay').hide();
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>

<script type="text/javascript">

    $('#pay_button').click(function (event) {


        if ($('#checkterms').is(":checked")) {
            // $('.error_class_pay').show();
            $('#pay_now').trigger('click');

        } else {

            swal("Please Accept the term and condition");

        }

    });

    function OrderView(trackingid, orderid) {
        var order_id = orderid;
        var tracking_id = trackingid;

        $.get('{{url(app()->getLocale().'/orderdetails')}}',
            {
                _token: "{{ csrf_token() }}",
                order_id: order_id,
                tracking_id: tracking_id

            },
            function (data) {
                // alert(data);
                $('#order_details').modal('show');
                $('#order_details_product').html(data);
                //
            });

    }

    function disputeorder(trackingid, orderid) {
        var order_id = orderid;
        var tracking_id = trackingid;

        swal({
            title: "Are you sure You want to Dispute the order ",
            // text: "Submit to run ajax request",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true

        }, function () {
            setTimeout(function () {

                $.post('{{url(app()->getLocale().'/orderdispute')}}',
                    {
                        _token: "{{ csrf_token() }}",
                        orderid: order_id,
                        track_id: tracking_id,
                        status_id: 5

                    },
                    function (data) {
                        window.location.href = '{{url(app()->getLocale()."/order")}}';
                        // alert(data);
                        // // $('#order_details').modal('show');
                        // // $('#order_details_product').html(data);
                        // // 
                    });

            }, 2000);

        });
    }

    $(function () {

        $('.error_class').hide();
        $('#validation_button').click(function (event) {

            $('.error_class').hide();
            var first_name = $('#Firstname').val();
            var lastname = $('#lastname').val();
            var phonenumber = $('#phonenumber').val();
            var emailaddress = $('#emailaddress').val();
            var countries = $("#countries option:selected").val();
            var add1 = $('#add1').val();
            var zip = $('#zip').val();
            var price = $('#total_price').text();

            $('#total_price_pro').val(price);
            // alert(price);

            if (first_name != '' && phonenumber != '' && emailaddress != '' && countries != '' && add1 != '' && zip != '') {
                $('#form_submit').trigger('click');
            } else {
                if (add1 == '') {
                    $('#address_error').show();
                }
                if (zip == '') {
                    $('#zip_error').show();
                }
                if (countries == '') {
                    $('#country_error').show();
                }
                if (phonenumber == '') {
                    $('#phone_error').show();
                }


            }


        });

        $('#img_change').on('change', function () {
            var selectVal = $("#img_change option:selected").val();
            var url_val = $('#item_img_' + selectVal).attr('src');
            $('#img_url_insert').val(url_val);
            $('.img_class_hide').hide();
            $('#item_img_' + selectVal).show();
        });


        $("#coba").spartanMultiImagePicker({
            fieldName: 'fileUpload[]',
            maxCount: 3,
            rowHeight: '200px',
            groupClassName: 'col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            placeholderImage: {
                image: '{{url('img/placeholder.jpg')}}',
                width: '100%'
            },
            dropFileLabel: "Drop Here",
            onAddRow: function (index) {
                console.log(index);
                console.log('add new row');
            },
            onRenderedPreview: function (index) {
                console.log(index);
                console.log('preview rendered');
            },
            onRemoveRow: function (index) {
                console.log(index);
            },
            onExtensionErr: function (index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function (index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
    });
</script>

<script type="application/javascript">
    //this will execute on page load(to be more specific when document ready event occurs)
    if ($('.ty-compact-list').length > 3) {
        $('.ty-compact-list:gt(2)').hide();
        $('.show-more').show();
    }

    $('.show-more').on('click', function () {
        //toggle elements with class .ty-compact-list that their index is bigger than 2
        $('.ty-compact-list:gt(2)').toggle();
        //change text of show more element just for demonstration purposes to this demo
        $(this).text() === 'Show more' ? $(this).text('Show less') : $(this).text('Show more');
    });
</script>


<script type="text/javascript">


    $(document).ready(function () {

        $(document).on("click", "a.page", function () {

            $(window).scrollTop(0);
        });
        $('#contactform').click(function (event) {
            $('#errorfield').show();
            var name = $('#contactname').val();
            var email = $('#contactemail').val();
            var text = $('#contacttext').val();

            if (name != '' && email != '' && text != '') {

                $('#errorfield').hide();

                $.get('{{url(app()->getLocale().'/contact')}}', {
                        name: name,
                        email: email,
                        text: text
                    },
                    function (data) {
                        toastr.success('Submit Request Successfully');
                        swal("Thank You!", "We will received your message and we will contact you soon.", "success");
                        $('#contactname').val('');
                        $('#contactemail').val('');
                        $('#contacttext').val('');

                    });
            } else {
                $('#errorfield').show();
            }
        });


        $('#submitformvalidation').click(function (event) {

            if ($('#checkterms').is(":checked")) {
                $('#submitform').trigger('click');
            } else {
                swal("Please Accept the term and condition");
            }

        });

        $("#filter").keyup(function () {

            // Retrieve the input field text and reset the count to zero
            var filter = $(this).val(),
                count = 0;

            setCookie("filter", filter, 1);
            setCookie("current_page", 1, -1);

            // Loop through the comment list
            $('#cat_filter_product .results').each(function () {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                    $(this).hide();  // MY CHANGE
                    $('.pagination').hide();

                    // Show the list item if the phrase matches and increase the count by 1
                } else {
                    $(this).show(); // MY CHANGE
                    count++;
                    $('.pagination').show();
                }


            });
            if (filter == '' || filter == '')
                pagination_fun();

        });

        $('#product_review_id').click(function (event) {

            var rating = $('#selected_rating').val();
            var reviews = $('#review_message_id').val();
            if (rating != '' && reviews != '') {
                $(".error_show_rating").hide();
                $("#submit_form").click();

            } else {
                $(".error_show_rating").show();
                // alert();
            }


        });

        $(".btnrating").on('click', (function (e) {

            var previous_value = $("#selected_rating").val();

            var selected_value = $(this).attr("data-attr");
            $("#selected_rating").val(selected_value);

            $(".selected-rating").empty();
            $(".selected-rating").html(selected_value);

            for (i = 1; i <= selected_value; ++i) {
                $("#rating-star-" + i).toggleClass('btn-warning');
                $("#rating-star-" + i).toggleClass('btn-default');
            }

            for (ix = 1; ix <= previous_value; ++ix) {
                $("#rating-star-" + ix).toggleClass('btn-warning');
                $("#rating-star-" + ix).toggleClass('btn-default');
            }

        }));

        // function state($id){

        //     var id=$id.value;

        //     $.get('{{url('state/')}}/'+id,

        //     function(data) {
        //      alert(data);
        //      $('#state').html(data);

        //     });

        // }
        $('#countries').change(function () {

            var id = $(this).val();
            $.get('{{url('state/')}}/' + id,

                function (data) {
                    $('#state').html(data);
                    // alert(data);

                });

        });


        $('.cart_class').click(function (event) {
            var id = $(this).attr('id');
            $.get('{{url('add-to-cart')}}/' + id,
                function (data) {
                    toastr.success('Product added to cart successfully!');

                    $('#cart_id').html(data);
                });
        });
        $('#checkout_btn').click(function (event) {

                    @if(Auth::id() !=null)
            var id = $(this).data('wish');
            window.location.href = '{{ route('checkout',app()->getLocale()) }}';
            @else
                   swal({
  title: "Registrate Primero",
  text: "Please login First!",
  type: "info",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "SI, Registrarme!",
  closeOnConfirm: false
},
function(){
  window.location = "https://granyupon.com/es/registration";
});
            @endif
        });
        $('.wish_class').click(function (event) {

                    @if(Auth::id() !=null)
            var id = $(this).data('wish');
            $.get('{{url('wish')}}/' + id,
                function (data) {
                    toastr.success(data);
                    // alert(data);
                    // $('#cart_id').html(data);
                });

            @else
                   swal({
  title: "Registrate Primero",
  text: "Please login First!",
  type: "info",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "SI, Registrarme!",
  closeOnConfirm: false
},
function(){
  window.location = "https://granyupon.com/es/registration";
});
            @endif


        });
        $('.delete_class').click(function (event) {

            var id = $(this).data('wishlist');
            $.get('{{url('wishdelete')}}/' + id,
                function (data) {
                    $('#cart_id_' + id).remove();
                    toastr.success(data);
                    // alert(data);
                    // $('#cart_id').html(data);
                });
            // alert(id);
        });

        $('.cart_class_s').click(function (event) {
            var ids = $(this).attr('id');
            var size = $("#size option:selected").val();
            var color = $("#img_change option:selected").val();
            var color_text = $("#img_change option:selected").text();
            var img_url_insert = $("#img_url_insert").val();

            if (size != 0) {

                if (color != 0) {

                    $.get('{{url('add-to-cart')}}/' + ids, {
                            _token: $('input[name=_token]').val(),
                            id: ids,
                            size: size,
                            color: color,
                            color_text: color_text,
                            img_url_insert: img_url_insert,
                            qty: $('#quantity').val()

                        },
                        function (data) {
                            toastr.success('Product added to cart successfully!');
                            $('#cart_id').html(data);
                            location.reload();
                            // alert(data);
                        });

                } else {

                    swal("Please Select Color ")

                }

            } else {
                swal("Please Select Size ")
            }


        });

        $('.report_class').click(function (event) {

                    @if(Auth::id() !=null)
            var ids = $(this).attr('id');
            $.get('{{url(app()->getLocale().'/report-product')}}',
                {
                    _token: "{{ csrf_token() }}",
                    productid: ids,

                },
                function (data) {
                    toastr.success('You have report this product');
                    // $('#cart_id').html(data);
                    // alert(data);
                });

            @else
                   swal({
  title: "Registrate Primero",
  text: "Please login First!",
  type: "info",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "SI, Registrarme!",
  closeOnConfirm: false
},
function(){
  window.location = "https://granyupon.com/es/registration";
});
            @endif

        });


        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart')}}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

        $('.class_cat_name').click(function (event) {
            var id = $(this).attr('id');
            var lang = '{{app()->getLocale()}}';
            if (!event.isTrigger) {
                setCookie("filter", "", -1);
                setCookie("current_page", 1, -1);
            }
            setCookie("class_cat_id", id, 1);

            $.get('{{ url(app()->getLocale().'/catfilter')}}',
                {
                    _token: "{{ csrf_token() }}",
                    catid: id,
                    offerCheck: '{{ Request::get('offer') }}',
                    sort_by: '{{ Request::get('sort_by') }}',
                },
                function (data) {

                    $('.class_cat_name').removeClass('click_color name');
                    $('#' + id).addClass('click_color');
                    $('#cat_filter_product').html(data);
                    if ('{{ Request::get('offer') }}' == '') {
                        toastr.success('Filter Categories');
                    } else {
                        toastr.success('Filter Offer and Categories Data');

                    }

                    // alert(data);

                });
        });


        $('.filter_class').click(function (event) {
            var lowerprice = $('#lowerprice').val();
            var higherprice = $('#higherprice').val();
            // alert(higherprice);
            $.get('{{url(app()->getLocale().'/filterprice')}}', {
                    _token: $('input[name=_token]').val(),
                    lowerprice: lowerprice,
                    higherprice: higherprice
                },
                function (data) {
                    $('#cat_filter_product').html(data);
                    toastr.success('Data Filter');
                    // alert(data);

                });
        });

    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function pagination_fun() {
        let disabled_page_before = null
        let disabled_page_before_text = null
        let disabled_page_after = null
        let disabled_page_after_text = null

        $('.pagination').remove();
        (function ($) {
            var pagify = {
                items: {},
                paginations_class: null,
                totalPages: 1,
                perPage: 24,
                currentPage: 1,
                createNavigation: function () {
                    this.totalPages = Math.ceil(this.items.length / this.perPage);
                    $('.pagination', this.paginations_class.parent()).remove();
                    var pagination = $('<div class="pagination"></div>');

                    //.append('<a class="nav prev disabled" data-next="false"><</a>');

                    for (var i = 0; i < this.totalPages; i++) {
                        var pageElClass = "page";
                        if (i == 0)
                            pageElClass = "page current";
                        var pageEl = '<a class="' + pageElClass + '" data-page="' + (
                            i + 1) + '">' + (
                            i + 1) + "</a>";
                        pagination.append(pageEl);
                    }
                    //pagination.append('<a class="nav next" data-next="true">></a>');

                    this.paginations_class.after(pagination);

                    disabled_page_before = $('.pagination .page[data-page="' + (
                        this.currentPage - 2) + '"]')
                    disabled_page_before_text = disabled_page_before.html()

                    disabled_page_after = $('.pagination .page[data-page="' + (
                        this.currentPage + 3) + '"]')
                    disabled_page_after_text = disabled_page_after.html()

                    var that = this;
                    $(".pagination").off("click", ".nav");
                    this.navigator = $(".pagination").on("click", ".nav", function () {
                        var el = $(this);
                        that.navigate(el.data("next"));
                    });

                    $(".pagination").off("click", ".page");
                    this.pageNavigator = $(".pagination").on("click", ".page", function () {
                        var el = $(this);
                        //set cookie
                        setCookie("current_page", el.data("page"), 1);
                        that.goToPage(el.data("page"));
                    });
                },
                navigate: function (next) {
                    // default perPage to 5
                    if (isNaN(next) || next === undefined) {
                        next = true;
                    }
                    $(".pagination .nav").removeClass("disabled");
                    if (next) {
                        this.currentPage++;
                        if (this.currentPage > (this.totalPages - 1))
                            this.currentPage = (this.totalPages - 1);
                        if (this.currentPage == (this.totalPages - 1))
                            $(".pagination .nav.next").addClass("disabled");
                    } else {
                        this.currentPage--;
                        if (this.currentPage < 0)
                            this.currentPage = 0;
                        if (this.currentPage == 0)
                            $(".pagination .nav.prev").addClass("disabled");
                    }

                    this.showItems();
                },
                updateNavigation: function () {

                    var pages = $(".pagination .page");
                    pages.removeClass("current");

                    const current_page = $('.pagination .page[data-page="' + (
                        this.currentPage + 1) + '"]')
                    current_page.removeClass("disabled");
                    current_page.addClass("current");

                    disabled_page_before.removeClass("disabled before")
                    //if (this.currentPage-1 != 1)
                    disabled_page_before.html(disabled_page_before_text)

                    disabled_page_after.removeClass("disabled")
                    // if (this.currentPage+3 != this.totalPages)
                    disabled_page_after.html(disabled_page_after_text)

                    disabled_page_before = $('.pagination .page[data-page="' + (
                        this.currentPage - 1) + '"]')
                    disabled_page_before_text = disabled_page_before.html()

                    disabled_page_after = $('.pagination .page[data-page="' + (
                        this.currentPage + 3) + '"]')
                    disabled_page_after_text = disabled_page_after.html()

                    if (disabled_page_before && this.currentPage - 1 != 1) {
                        disabled_page_before.addClass("disabled before")
                        disabled_page_before.html('...')
                    }

                    if (disabled_page_after && this.currentPage + 3 != this.totalPages) {
                        disabled_page_after.addClass("disabled")
                        disabled_page_after.html('...')
                    }

                },
                goToPage: function (page) {

                    this.currentPage = page - 1;

                    $(".pagination .nav").removeClass("disabled");
                    if (this.currentPage == (this.totalPages - 1))
                        $(".pagination .nav.next").addClass("disabled");

                    if (this.currentPage == 0)
                        $(".pagination .nav.prev").addClass("disabled");
                    this.showItems();

                },
                showItems: function () {
                    this.items.hide();
                    var base = this.perPage * this.currentPage;
                    this.items.slice(base, base + this.perPage).show();

                    this.updateNavigation();
                },
                init: function (paginations_class, items, perPage) {
                    this.paginations_class = paginations_class;
                    this.currentPage = 0;
                    this.totalPages = 1;
                    this.perPage = perPage;
                    this.items = items;
                    this.createNavigation();
                    this.showItems();
                }
            };

            // stuff it all into a jQuery method!
            $.fn.pagify = function (perPage, itemSelector) {
                var el = $(this);
                var items = $(itemSelector, el);

                // default perPage to 5
                if (isNaN(perPage) || perPage === undefined) {
                    perPage = 2;
                }

                // don't fire if fewer items than perPage
                if (items.length <= perPage) {
                    return true;
                }

                pagify.init(el, items, perPage);
            };
        })(jQuery);

        $(".product_container").pagify(24, ".single-item");

        // Overriding default display property
        $('.page').css('display', 'none');
    }

    pagination_fun();

    function ActiveMenu(main_nav) {

        $("#main-menu-navigation> li:nth-child(" + main_nav + ")").addClass("active");

    }

    function ActiveSub(main_nav) {

        $("#nav_id_sub> li:nth-child(" + main_nav + ") > a").addClass("nav_active");
    }


    function ErrorAlert() {
                swal({
  title: "Registrate Primero",
  text: "Please login First!",
  type: "info",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "SI, Registrarme!",
  closeOnConfirm: false
},
function(){
  window.location = "https://granyupon.com/es/registration";
});
    }

    $('#myBtn').click(function () {

        $('.disable').removeAttr("disabled");
        $('.disable').removeClass('disabled ');
        $('.disable').removeClass('disable ');
        $('#myBtn').remove();

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ShowImage')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    @if(Auth::user() != null)
    function deleteaccount() {

        swal({
            title: "Are you sure You want to Delete it ",
            // text: "Submit to run ajax request",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true

        }, function () {
            setTimeout(function () {

                var id ={{Auth::user()->id}};
                $.get('{{url('admin/deleteprofile')}}/' + id, function (data) {

                    swal({
                            title: "Your Account Delete Successfully",
                            // text: "Your will not be able to recover this imaginary file!",
                            type: "success",
                            showCancelButton: false,
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false
                        },
                        function () {

                            document.getElementById('logout-form').submit();

                        });

                });
            }, 2000);

        });
    }

    @endif
    $('.disable').prop('disabled', 'disabled');

</script>
@section('activate')
@show


</body>

</html>

@if(Session::has('register'))

    <script>
 swal("Thank You!", "Te has registrado con éxito..", "success");
        swal({
  title: "Te has registrado con éxito..",
  text: "Por Favor, Accede a tú Perfil",
  type: "success",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Accede a tú Perfil",
  closeOnConfirm: false
},
function(){
  window.location = "https://granyupon.com/es/logins";
});
    </script>


@endif

@if(Session::has('OrderNo'))
    <!-- <div class="modal fade" id="order_no" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order No : {{ Session::get('OrderNo') }} </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Order Completed Successfully! <br> Thank you! Your purchase is complete and Your tracking id is <b>{{ Session::get('OrderNo') }}</b>.
          </div>
          
        </div>
      </div>
    </div>-->

    <script type="text/javascript">
        // $('#order_no').modal('show');
          swal(" Pedido completado con éxito!!", "Thank you! Your purchase is complete and Your tracking id is {{ Session::get('OrderNo') }}", "success");
    </script>
    <?php Session::forget('OrderNo'); ?>
@endif

<!-- Modal -->

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Change Profile Pic</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="box-body box-profile">
                    <div class="profile-userpic" style="margin-left: 25%">
                        @if(Auth::user() !=null)
                            @if(Auth::user()->image == null)
                                <img id="ShowImage" class=" img-responsive rounded"
                                     src="{{ asset(Storage::url("app/public/upload/user_image/default.png"))}}">
                            @else
                                <img id="ShowImage" class=" img-responsive rounded"
                                     src="{{ asset(Storage::url("app/public/upload/user_image/".Auth::user()->image))}}">

                            @endif
                        @endif
                    </div>
                    <br>
                    <div class="text-center">
                        <form method="post" enctype="multipart/form-data" action="{{url('edit-image')}}"
                              accept-charset="utf-8">
                            {{ csrf_field() }}
                            <input type="file" id="files" name="imagefile" hidden onchange="readURL(this);"/>
                            <label for="files" class="btn btn-primary">Select file</label>
                            <button type="submit" class="btn btn-success">Save</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


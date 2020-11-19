@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container" >
    </div>
</section>
<style type="text/css" media="screen">
    body{
        background-color: #fff;
    }
</style>
<!-- End Banner Area -->
<div class="container" style="
    margin-bottom: 30px;" >
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding-bottom: 20px">
                    <div class="profile-sidebar" style="-webkit-box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
-moz-box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
" >
                        <div class="profile-userpics " style="align-content: center;" >
                            @if(Auth::user()->image == null)
                            <img class="img-thumbnail rounded-circle img-responsive" src="{{ asset(Storage::url("upload/user_image/default.png"))}}" width="100px"; style="width: 120px; height: 120px; margin-left: 33%;  ">
                            @else 
                            <img class="img-thumbnail rounded-circle img-responsive" src="{{ asset(Storage::url("upload/user_image/".Auth::user()->image))}}" style="width: 120px; height: 120px; margin-left: 33%;">
                            @endif

                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                {{Auth::user()->name}}
                            </div>
                          {{--   <div class="profile-usertitle-job">
                                Developer
                            </div> --}}
                        </div>

                        <div class="profile-usermenu" style="padding:10px">
                            <ul class="navs text-uppercase" id="nav_id_sub">
                                <li class="li_padding"><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fa fa-user"></i>{{ __('base.cambiar_avatar')}}</a>
                                </li>
                                <li class="li_padding ">
                                    <a href="{{url(app()->getLocale().'/profile')}}" >
                                        <i class="fa fa-user"></i> {{ __('base.cuenta')}} </a>
                                </li>
                                <li class="li_padding">
                                    <a href="{{url(app()->getLocale().'/cart')}}">
                                        <i class="fa fa-shopping-cart"></i> {{ __('base.tu_cesta')}} </a>
                                </li>
                                <li class="li_padding">
                                    <a href="{{url(app()->getLocale().'/wishlist')}}" >
                                        <i class="fa fa-heart"></i> {{ __('base.tu_lista')}}</a>
                                </li>
                                <li class="li_padding">
                                    <a href="{{url(app()->getLocale().'/order')}}">
                                        <i class="fa fa-flag"></i> {{ __('base.pedidos')}}</a>
                                </li>
                              
                                <li class="li_padding">
                                    <a href="{{url(app()->getLocale().'/sellerdisputes')}}">
                                        <i class="fa fa-user"></i> {{ __('base.disputas')}}</a>
                                </li>
                                <li class="li_padding">
                                    <a href="{{url(app()->getLocale().'/sellerreport')}}">
                                        <i class="fa fa-user"></i> {{ __('base.denuncia')}}</a>
                                </li>
                                <li class="li_padding">
                                    <a href="#" onclick="deleteaccount()">
                                        <i class="fa fa-remove"></i> {{ __('base.eliminar')}}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div><br>
               @section('buyerbody');
               @show
            </div>
        </div>
        <center>
        </center>
        <br>
        <br>

    </div>
</div>

@endsection
@section('activate')
<script>
     ActiveMenu(5);
    ActiveSub(2);

</script>
@endsection
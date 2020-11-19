@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<!--================Checkout Area =================-->
<section class="checkout_area section_gap">

    <div class="container" style="margin-top: -120px">

        <h2 style="text-align:left;">{{ __('base.biling_address')}}</h2>
        <div class="billing_details" >
            <div class="row">
                <div class="col-lg-8" style="border: 3px solid #ECECEC;"><br>
                    <h3>{{ __('base.billing_details')}}</h3>
                    <form class="row contact_form" action="{{ route('confirmation',app()->getLocale()) }}" method="get" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control " placeholder="{{ __('base.firstname')}}" id="Firstname" name="firstname" value="{{Auth::user()->name}}">
                            {{-- <span class="placeholder" data-placeholder="First name"></span> --}}
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="{{ __('base.lastname')}}">
                            {{-- <span class="placeholder" data-placeholder="Last name"></span> --}}
                        </div>
                       {{--  <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="company" placeholder="{{ __('base.companyname')}}">
                        </div> --}}
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="emailaddress" name="emailaddress" placeholder="{{ __('base.emailaddress')}}" value="{{Auth::user()->email}}">
                            {{-- <span class="placeholder" data-placeholder="Email Address"></span> --}}

                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control " id="phonenumber" name="phonenumber" placeholder="{{ __('base.phonenumber')}}"><br>
                            {{-- <span class="placeholder" data-placeholder="Phone number"></span> --}}
                            <div class="alert alert-warning error_class" role="alert" id="phone_error">
                              {{ __('base.please_enter_phone_no')}}
                            </div>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            {{-- <label for="exampleInputEmail1">Country</label> --}}
                            <select class="form-control" name="country" id="countries" >
                                 <option  value="">{{ __('base.select_country')}}</option>
                               @foreach($countries as $view_countries)
                                <option  value="{{$view_countries->id}}">{{$view_countries->name}}</option>
                               @endforeach
                            </select><br>
                            <div class="alert alert-warning error_class" role="alert" id="country_error">
                              Please select country
                            </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                           {{-- <label for="exampleInputEmail1">State</label> --}}
                           <div id="state">
                              <select class="form-control" name="city" >
                                 <option value="">{{ __('base.select_state')}}</option>}
                                 
                              </select>

                           </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1" placeholder="{{ __('base.address_line_one')}}">
                            {{-- <span class="placeholder" data-placeholder="Address line 01"></span> --}}

                        </div>
                        <div class="col-md-12" >
                            <div class="alert alert-warning error_class" id="address_error" role="alert">
                              {{ __('base.please_enter_address')}}
                            </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2" placeholder="{{ __('base.address_line_two')}}">
                            {{-- <span class="placeholder" data-placeholder="Address line 02"></span> --}}
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="{{ __('base.postalcode_zip')}}">
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-warning error_class" id="zip_error" role="alert">
                              {{ __('base.please_enter_postcode')}}
                            </div>
                        </div>
                        <input type="text" name="price" id="total_price_pro" style="display: none">
                        <input type="submit" name="" id="form_submit" style="display: none">
                        {{-- <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>{{ __('base.shipping_details')}}</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">{{ __('base.ship_to_a_different_address')}}</label>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                        </div> --}}
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>{{ __('base.your_order')}}</h2>
                      
                        <ul class="list">
                            <li><a href="#"> {{ __('base.product')}}<span>{{ __('base.total')}}</span></a></li>
                            <?php $total = 0 ?>

                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                        <li>
                                            {{-- <a href="#">{{ $details['name'] }} --}}
                                                <span style="color: black; display: inline-block;width: 80px;">{{ $details['name'] }}</span> 
                                                <span class="middle col-md-2" >{{$details['price']}}&euro;</span> 
                                                <span class="middle col-md-2">x{{ $details['quantity'] }}</span> 
                                                <span class="last col-md-2">{{ $details['price'] * $details['quantity'] }}&euro;</span><br>
                                            {{-- </a> --}}
                                        </li>
                                @endforeach
                            @endif
                        </ul>

                        <ul class="list list_2">
                            <li><a href="">{{ __('base.subtotal')}} <span>{{ $total }}</span></a></li>
                            <li><a href="">{{ __('base.shipping')}} <span> 6.97 &euro;</span></a></li> 
                            <li><a href="" >{{ __('base.total')}} <span id="total_price">{{ $total + 6.97 }}</span></a></li>
                        </ul>
                        <div class="creat_account">
                           {{-- <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">{{ __('base.i_have_read_and_accept')}} </label>
                            <a href="http://granyupon.com/termandcondition">{{ __('base.term_conditions')}}*</a>--}}
                        </div>
                        <a class="primary-btn" id="validation_button">{{ __('base.proceed_to_paymentt')}}</a>
                    </div>
                </div>
            </div><br>
              <div class="row" style="padding-right: 15px;padding-left: 15px;">
                    <button class="btn btn-warning "><a href="{{ route('cart',app()->getLocale()) }}" style="color: black" ><i class="fa fa-angle-left"></i> {{ __('base.back')}}</a></button>
                </div>
                    
            
        </div>
    </div>
</section>

<!--================End Checkout Area =================-->
@endsection

@section('activate')
<script>
     ActiveMenu(6);
</script>
@endsection

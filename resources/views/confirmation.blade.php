@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gaps" >
    <div class="container">
    <h2 style="text-align:left;">{{ __('base.confirmation')}}</h2>
        {{-- <h3 class="title_confirmation">{{ __('base.thank_order_text')}}</h3> --}}
       
        <div class="row" style="background-color: white; margin-bottom: 50px;">
            <div class="col-md-8 order_details_table" style="margin-left:-10px;border-radius: 10px;background-color: white;border: solid 1px;"  >
                <div class="row order_d_inner">
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4>{{  __('base.order_info')}}</h4>
                            <ul class="list">
                                <li><a href="#"><span>{{  __('base.name')}}</span> : {{$info->firstname." ". $info->lastname }}</a></li>
                                <li><a href="#"><span>{{  __('base.phonenumber')}}</span> : {{$info->phonenumber}}</a></li>
                                <li><a href="#"><span>{{  __('base.email')}}</span> : {{$info->emailaddress}}</a></li>
                                <li><a href="#"><span>{{  __('base.date')}}</span> : {{ date('Y-m-d') }}</a></li>
                                <li><a href="#"><span>Total</span> : {{$info->price}}</a></li>
                                {{-- <li><a href="#"><span>{{  __('base.payment_method')}}</span> : {{  __('base.check_payments')}}</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4>{{ __('base.biling_address')}}</h4>
                            <ul class="list">
                                <li><a href="#"><span>{{ __('base.country')}}</span> : {{$countries[0]->name}}</a></li>
                                <li><a href="#"><span>{{ __('base.city')}}</span> : {{$state[0]->name}}</a></li>
                                <li><a href="#"><span>{{ __('base.postcode')}} </span> : {{$info->zip}}</a></li>
                                <li><a href="#"><span>{{ __('base.address')}}</span> : {{$info->add1}}</a></li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
                <h2>{{ __('base.ordetails')}}</h2>
                <div class="table-responsive " >
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('base.product')}}</th>
                                <th scope="col">{{ __('base.price')}}</th>
                                <th scope="col">{{ __('base.color')}}</th>
                                <th scope="col">{{ __('base.size')}}</th>
                                <th scope="col">{{ __('base.quantity')}}</th>
                                <th scope="col">{{ __('base.total')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>

                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                            <tr>
                                <td>
                                    <p>{{ $details['name'] }}</p>
                                </td>
                                <td>
                                    <p>{{ $details['price'] }}</p>
                                </td>
                                <td>
                                    <p>{{ $details['color'] }}</p>
                                </td>
                                <td>
                                    <p>{{ $details['size'] }}</p>
                                </td>
                                <td>
                                    <h5>x {{ $details['quantity'] }}</h5>
                                </td>
                                <td>
                                    <p>{{ $details['price'] * $details['quantity'] }}&euro;</p>
                                </td>
                            </tr>
                                @endforeach
                            @endif
                           
                            <tr>
                                <td>
                                    <h4>{{ __('base.total')}}</h4>
                                </td>
                                <td>
                                    <P>{{ __('base.shopping_cost')}}</P>
                                </td>
                                <td>
                                    <P>6,97 &euro;</P>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>{{ $total + 6.97 }}&euro;</p>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr class="visible-xs">
                            {{-- <td class="text-center"><strong>Total {{ $total }}</strong></td> --}}
                        </tr>
                        <tr>
                            <td><a href="{{ route('checkout',App::getLocale()) }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> {{ __('base.back')}}</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            {{-- <td class="hidden-xs text-center"><strong>Total {{ $total }}</strong></td> --}}
                            
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4 order_details_table" style="margin-left:10px; margin-bottom:15px; border-radius: 0px;background-color: #F0F0F0;color: black" >
                <h2>{{ __('base.card_details')}}</h2>
                  @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                  @endif

                <form  role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    {{ csrf_field() }}
                    <hr>
                    <div style="display: none">
                        <input type="text" id="name" name="first_name" value="{{$info->firstname." ". $info->lastname }}">
                        <input type="text" id="phone" name="phonenumber" value="{{$info->phonenumber}}">
                        <input type="text" id="email" name="emailaddress" value="{{$info->emailaddress}}">
                        <input type="text" id="price" name="price" value="{{$info->price}}">
                        <input type="text" id="country" name="countries" value="{{$countries[0]->name}}">
                        <input type="text" id="state" name="state" value="{{$state[0]->name}}">
                        <input type="text" id="zip" name="zip" value="{{$info->zip}}">
                        <input type="text" id="address" name="add1" value="{{$info->add1}}">
                        
                    </div>



                    <div class='form-row row'>
                        {{-- <div class='col-xs-12 form-group'> --}}
                            <label class='control-label'>{{ __('base.name_on_card')}}</label> 
                            <input id="name_on_card" class='form-control' size='4' type='text'>
                        {{-- </div> --}}
                    </div>

                    <div class='form-row row'>
                        {{-- <div class='col-xs-12 form-group card required'> --}}
                            <label class='control-label'>{{ __('base.card_number')}}</label> <input
                                autocomplete='off'  id="card_number" class='form-control card-number' oninput="changeCardNumber()"  min="12" maxlength="20"
                                type='text'>
                        {{-- </div> --}}
                    </div>
                    <br>
                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-3 form-group cvc required'>
                            <label class='control-label'>{{ __('base.cvc')}}</label><br> 
                            <input id="cvc" autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311'  min="1" maxlength="4"
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-5 form-group expiration required'>
                            <label class='control-label'>{{ __('base.expire_month')}}</label> <input
                                class='form-control card-expiry-month' id="expiry_month" placeholder='MM'  maxlength="2" maxlength="2"
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>{{ __('base.expire_year')}}</label> <input
                                class='form-control card-expiry-year' id="expiry_year" placeholder='YYYY' maxlength="4" maxlength="4"
                                type='text'>
                        </div>
                        <div class="form-check row " style="width: 100%; margin-bottom: -15px;">
                            <div class="float-md-left col-md-12">
                               <input type="checkbox" class="form-check-input " id="checkterms">
                               <label class="form-check-label" for="checkterms"><a target="blank" href="{{url(app()->getLocale().'/termandcondition')}}">{{ __('base.term_conditions')}}</a></label>
                                
                            </div><br><br>
                         </div> <br>
                        <div class='form-row row error_class_pay' style="margin: 0 auto; display:block" >
                            <div class='col-md-12 error form-group hide error_class_pay' style="display: none">
                                <div class='alert-danger alert' style="padding: 1px 11px; margin-bottom: 0rem; border: 1px solid transparent; border-radius: .25rem;">{{ __('base.invaild_card_info')}}</div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-md-12 text-center">

                                    
                                     <button class="btn btn-warning btn-block" id="pay_button" type="button">

                                         <span id="pay_now_text"> {{ __('base.pay_now')}} </span>
                                         <span id="loding_text" style="display: none"><i class="fa fa-spinner fa-spin"></i> Processing...</span>
                                        </button>

                                    <button class="btn btn-warning float-right" style="display: none" type="submit" id="pay_now">
                                        {{ __('base.pay_now')}}  
                                        <span id="loding_text" style="display: none"><i class="fa fa-spinner fa-spin"></i> Processing...</span>
                                        {{-- <span id="loding-text" style="display:none"><i class="fa fa-spinner fa-spin"></i> Processing...</span> --}}
                                    </button>
                                </div>
                                <div class="col-md-12" style="margin:0 auto">
                                    
                                    <img src="{{url('img/stripe.webp')}}" class="img-fluid" alt="">
                                
                                </div>
                                
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>

@if(Session::has('PaymentError'))
 
    <script>
        swal("Ops!", "','Something wrong please try again!", "warning");
    </script>
 
@endif
</section>
<!--================End Order Details Area =================-->
@endsection

@section('activate')
<script>
     ActiveMenu(6);

     function changeCardNumber(){
       let cardNumber = cc_format($('#card_number').val());
       console.log(cardNumber);
       $('#card_number').val(cardNumber);
     }

     function cc_format(value) {
        var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
        var matches = v.match(/\d{4,16}/g);
        var match = matches && matches[0] || ''
        var parts = []

        for (i=0, len=match.length; i<len; i+=4) {
            parts.push(match.substring(i, i+4))
        }

        if (parts.length) {
            return parts.join(' ')
        } else {
            return value
    }
}
</script>
@endsection

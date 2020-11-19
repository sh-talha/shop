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
    <h2 style="text-align:left;">Confirmation</h2>
        {{-- <h3 class="title_confirmation">Thank you. Your order has been received.</h3> --}}
       
        <div class="row" style="background-color: white">
            <div class="col-md-8 order_details_table" style="margin-left:-10px;border-radius: 0px;background-color: white"  >
                <div class="row order_d_inner">
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4>Order Info</h4>
                            <ul class="list">
                                <li><a href="#"><span>Name</span> : {{$info->firstname." ". $info->lastname }}</a></li>
                                <li><a href="#"><span>Phone number</span> : {{$info->phonenumber}}</a></li>
                                <li><a href="#"><span>Email</span> : {{$info->emailaddress}}</a></li>
                                <li><a href="#"><span>Date</span> : {{ date('Y-m-d') }}</a></li>
                                <li><a href="#"><span>Total</span> : {{$info->price}}&euro;</a></li>
                                {{-- <li><a href="#"><span>Payment method</span> : Check payments</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4>Billing Address</h4>
                            <ul class="list">
                                <li><a href="#"><span>Country</span> : {{$countries[0]->name}}</a></li>
                                <li><a href="#"><span>City</span> : {{$state[0]->name}}</a></li>
                                <li><a href="#"><span>Postcode </span> : {{$info->zip}}</a></li>
                                <li><a href="#"><span>Address</span> : {{$info->add1}}</a></li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
                <h2>Order Details</h2>
                <div class="table-responsive " >
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Color</th>
                                <th scope="col">Size</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
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
                                    <p>{{ $details['price'] * $details['quantity'] }} &euro;</p>
                                </td>
                            </tr>
                                @endforeach
                            @endif
                           
                            <tr>
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>{{ $total }} &euro;</p>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr class="visible-xs">
                            {{-- <td class="text-center"><strong>Total {{ $total }}</strong></td> --}}
                        &euro;</tr>
                        <tr>
                            <td><a href="{{ url('/checkout') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            {{-- <td class="hidden-xs text-center"><strong>Total {{ $total }} &euro;</strong></td> --}}
                            
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4 order_details_table" style="margin-left:10px;border-radius: 0px;background-color: #F0F0F0;color: black" >
                <h2>Card Details</h2>
                  @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                  @endif

                <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    {{ csrf_field() }}
                    <hr>
                    <div style="display: none">
                        <input type="text" name="first_name" value="{{$info->firstname." ". $info->lastname }}">
                        <input type="text" name="phonenumber" value="{{$info->phonenumber}}">
                        <input type="text" name="emailaddress" value="{{$info->emailaddress}}">
                        <input type="text" name="price" value="{{$info->price}}">
                        <input type="text" name="countries" value="{{$countries[0]->name}}">
                        <input type="text" name="state" value="{{$state[0]->name}}">
                        <input type="text" name="zip" value="{{$info->zip}}">
                        <input type="text" name="add1" value="{{$info->add1}}">
                        
                    </div>



                    <div class='form-row row'>
                        {{-- <div class='col-xs-12 form-group'> --}}
                            <label class='control-label'>Name on Card</label> 
                            <input class='form-control' size='4' type='text'>
                        {{-- </div> --}}
                    </div>

                    <div class='form-row row'>
                        {{-- <div class='col-xs-12 form-group card required'> --}}
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        {{-- </div> --}}
                    </div>
                    <br>
                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-3 form-group cvc required'>
                            <label class='control-label'>CVC</label><br> 
                            <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-5 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                        <div class="form-check ">
                            <div class="float-md-left col-md-12">
                               <input type="checkbox" class="form-check-input " id="checkterms">
                               <label class="form-check-label" for="checkterms"><a target="blank" href="{{url('termandcondition')}}">Accept Term and Conditions</a></label>
                                
                            </div><br><br>
                         </div>
                        <div class='form-row row error_class_pay' >
                            <div class='col-md-12 error form-group hide error_class_pay' style="display: none">
                                <div class='alert-danger alert'></div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-md-4">
                                     <button class="btn btn-warning float-right" id="pay_button" type="button">Pay Now </button>
                                    <button class="btn btn-warning float-right" style="display: none" type="submit" id="pay_now">Pay Now </button>
                                </div>
                                <div class="col-md-8" style="margin-top: -20px">
                                    
                                    <img src="{{url('img/stripe.webp')}}" class="img-fluid" alt="">
                                
                                </div>
                                
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->
@endsection

@section('activate')
<script>
     ActiveMenu(6);


</script>
@endsection

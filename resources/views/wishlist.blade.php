@extends('myaccount')
@section('buyerbody')
<div class="col-md-8">
    <div class="profile-content" style=" margin-bottom:15px;">

       <span style="margin-left:25px;"><h3 style="margin-left:25px;">Your WishList . . .</h3></span>
       
        <hr>
         <div class="container">
            <div class="row">
                @forelse($check_wish as $view_wish)

                <div class="col-lg-4 col-md-6"  id="cart_id_{{$view_wish->Products_id}}">
                    <div class="single-product img-thumbnail">
                       <img class="img-fluid  filter_image_size" src="{{asset('uploads/products/')}}/{{substr($view_wish->Products_id, 0, 1)}}/{{$view_wish->Products_id}}/{{$view_wish->product_image}}" >
                       <hr>
                        <div class="product-details">
                          <h6>{{$view_wish->product_name}}</h6>

                          <div class="price">

                          <?php  $special=\App\Models\SpecificPrice::where(['product_id' =>$view_wish->Products_id])->pluck('reduction')->last() ?>
                            
                            @if($special == 0 )
                              <h6>{{$view_wish->price}} &euro;</h6>
                            @else
                              <h6>{{$special +0.95}}</h6>
                              <h6 class="l-through">{{$view_wish->price}} &euro;</h6>

                            @endif

                          </div>
                          
                            <div class="prd-bottom">
                             <div class="container ">
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                   {{--  <button type="button" class="btn-sm btn cart_class" id="{{$view_wish->Products_id}}" style="background-color: #8BDE7F;color: white">Add To cart </button> --}}
                                 </div>
                                 <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn-sm btn btn-danger delete_class" data-wishlist="{{$view_wish->Products_id}}">Delete</button>
                                    <a href="{{ url(app()->getLocale().'/product').'/'.$view_wish->Products_id}}">
                                      <button type="button" class="btn-sm btn btn-info" style="margin-left: 10px">View</button>
                                    </a>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               @empty
                  <div class="col-lg-12 col-md-12"><br>
                      <div class="alert alert-warning" role="alert">
                        No Wishlist.
                      </div>
                  </div>
              @endforelse
            </div></div> 
    </div>
</div>
@endsection
@section('activate')
<script>
    ActiveMenu(4);
    ActiveSub(4);


</script>
@endsection
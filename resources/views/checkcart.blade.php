<button type="button" class="btn btn-info" data-toggle="dropdown" style="color: #222222;background-color: white;border:none;margin-top: 5px">
    <i class="fa fa-shopping-cart" aria-hidden="true" style="color: #68C55B" ></i> Cart <span class="badge badge-pill badge-danger">{{ session('cart')!=null?count(session('cart')):0 }}</span>
</button>
<div class="dropdown-menu drop_cart">
    <div class="row total-header-section">
        <div class="col-lg-6 col-sm-6 col-md-12">
            <i class="fa fa-shopping-cart" aria-hidden="true"  style="margin-left: 80px"></i> <span class="badge badge-pill badge-danger">{{ session('cart')!=null?count(session('cart')):0 }}</span>
        </div>

        <?php $total = 0 ?>
        @if(session('cart') != null)
        @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
        @endforeach
        @endif
    
        <div class="col-lg-6 col-sm-6 col-6 total-section text-right" style="margin-left: -60px">
            <p>Total: <span class="text-info"> {{ $total }} </span>&euro;</p>
        </div>
    </div>
    <hr>
    <div class="container" style="height: 200px;overflow:scroll; overflow-x: hidden">
        
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            <div class="row cart-detail">
                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">

                    @if($details["color"] == '')
                      <img src="{{ asset('uploads/products/'.substr($details["p_id"], 0, 1).'/'.$details["p_id"].'/'.$details["photo"])}}"  width="60" height="60" class="img-responsive" style="padding: 5px" />
                    @else
                      <img src="{{$details['photo']}}"  width="60" height="60" class="img-responsive" style="padding: 5px" />
                    @endif


                </div>
                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                    <span>{{ $details['name'] }}</span><br> 
                    <span class="price text-info">  {{ $details['price'] }} </span>&euro;<br> 
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
            <a href="{{ url('cart') }}" class="btn btn-primary btn-block"  style="background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%); ">View all</a>
        </div>
    </div>
</div>



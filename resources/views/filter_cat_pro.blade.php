@forelse($product as $product)
	<div class="col-lg-4 col-md-8 single-item">
	    <div class="single-product img-thumbnail">
	       <a href="{{ url(app()->getLocale().'/product/'.$product->Products_id) }}" class="social-info">
	        <img class="img-fluid  filter_image_size" src="{{ asset('uploads/products/'.substr($product->Products_id, 0, 1).'/'.$product->Products_id.'/'.$product->product_image)}}" alt="" > </a>
	        <hr>


	        <div class="product-details">
	            <h6>{{$product->product_name}}</h6>
	            <div class="price">

                <?php  $special=\App\Models\SpecificPrice::where(['product_id' =>$product->Products_id])->pluck('reduction')->last() ?>
                  
                  @if($special == 0 )
                    <h6>{{$product->price}} &euro;</h6>
                  @else
                    <h6>{{$special +0.95}}</h6>
                    <h6 class="l-through">{{$product->price}} &euro;</h6>

                  @endif

                </div>

	            <div class="prd-bottom" style="width:270px">
	               {{--  <a class="social-info cart_class" id="{{$product->Products_id}}">
	                    <span class="fa fa-shopping-bag"></span>
	                    <p class="hover-text ">add to bag</p>
	                </a> --}}
	                <a  class="social-info wish_class" data-wish='{{$product->Products_id}}'>
	                    <span class="fa fa-heart"></span>
	                    <p class="hover-text">Wishlist</p>
	                </a>

	                  <a href="{{ url(app()->getLocale().'/product/'.$product->Products_id) }}" class="social-info">
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

<script type="text/javascript">
$(document).ready(function() {
    $('.cart_class').click(function(event) {
        var id = $(this).attr('id');
         $.get('{{url('add-to-cart')}}/'+id, 
            function(data) {
            toastr.success('Product added to cart successfully!');

            $('#cart_id').html(data);
        });

    });


    $('.wish_class').click(function(event) {

    @if(Auth::id() !=null)
        var id = $(this).data('wish');
        $.get('{{url('wish')}}/'+id,
            function(data) {
            toastr.success(data);
             // alert(data);
            // $('#cart_id').html(data);
        });

    @else
        swal("Registrate Primero","Please login First")
    @endif


    });



});	  
pagination_fun();
</script>
<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLongTitle">Tracking Id : {{$orders_address[0]->tracking_id}} </h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">

	<div class="row">
	    <div class="col-md-5">
	    	<div class="row">
		     	<label for="staticEmail" class="col-sm-4 col-form-label">Name &#160&#160&#160&#160&#160&#160&#160: </label>
	     	    <div class="col-sm-8">
	     	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$orders_address[0]->first_name}}">
	     	    </div>
	    	</div>
	    </div>
        <div class="col-md-5">
        	<div class="row">
    	     	<label for="staticEmail" class="col-sm-4 col-form-label">Phone no &#160&#160&#160: </label>
         	    <div class="col-sm-8">
         	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$orders_address[0]->phonenumber}}">
         	    </div>
        	</div>
        </div>
        <div class="col-md-5">
	    	<div class="row">
		     	<label for="staticEmail" class="col-sm-4 col-form-label">Country &#160&#160&#160&#160:</label>
	     	    <div class="col-sm-8">
	     	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$orders_address[0]->countries}}">
	     	    </div>
	    	</div>
	    </div>
	    <div class="col-md-5">
	    	<div class="row">
		     	<label for="staticEmail" class="col-sm-4 col-form-label">State &#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160:</label>
	     	    <div class="col-sm-8">
	     	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$orders_address[0]->state}}">
	     	    </div>
	    	</div>
	    </div>
	    <div class="col-md-5">
	    	<div class="row">
		     	<label for="staticEmail" class="col-sm-4 col-form-label">Address &#160&#160&#160&#160:</label>
	     	    <div class="col-sm-8">
	     	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$orders_address[0]->add1}}">
	     	    </div>
	    	</div>
	    </div>
	    <div class="col-md-5">
	    	<div class="row">
		     	<label for="staticEmail" class="col-sm-4 col-form-label">Order Date &#160:</label>
	     	    <div class="col-sm-8">
	     	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$orders_address[0]->curent_date}}">
	     	    </div>
	    	</div>
	    </div>

	 </div>

	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">Price</th>
	      <th scope="col">Quantity</th>
	      <th scope="col">Total price</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@php($count =0)
	  	@php($total =0)
	    @foreach($orders_details as $view_orders_details)
	    	<tr>
	    		<td>{{$count+=1}}</td>
	    		<td>{{$view_orders_details->name}}</td>
	    		<td>{{$view_orders_details->price}}</td>
	    		<td>{{$view_orders_details->quantity}}</td>
	    		<td>{{$view_orders_details->total_price}}</td>
	    		@php($total+=$view_orders_details->total_price)
	    		{{-- {{$total+=$view_orders_details->total_price}} --}}
	    	</tr>
	    @endforeach
	     <tr>
	      <th scope="col"></th>
	      <th scope="col"></th>
	      <th scope="col"></th>
	      <th scope="col">Total Price</th>
	      <th scope="col">{{$total}}</th>
	    </tr>

	  </tbody>


	</table>
</div>

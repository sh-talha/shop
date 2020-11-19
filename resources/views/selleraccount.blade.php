@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>

<!--================Login Box Area =================-->
	<section class="login_box_area section_gap" style="margin-top: -110px">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12" style="padding:20PX; max-width:550px; margin:0 auto;" >
					<div class="login_form_inner">
						<h4>Do you already have an account?</h4>
							<a class="primary-btn" href="{{url('/sellerlogin')}}">Login Here!</a>
							<h4>Or Create one!</h4>
						<div class="row">	
		<div class="col-sm-12 col-md-12 col-lg-12" style="padding:10PX; max-width:500px; margin:0 auto;">
		
		<hr />
		
		<form method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		   
		    <div class="col-md-12">
		        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Name">

		        @if ($errors->has('name'))
		            <span class="help-block">
		                <strong>{{ $errors->first('name') }}</strong>
		            </span>
		        @endif
		    </div>
		</div>

		

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		    
		    <div class="col-md-12">
		        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter Email">

		        @if ($errors->has('email'))
		            <span class="help-block">
		                <strong>{{ $errors->first('email') }}</strong>
		            </span>
		        @endif
		    </div>
		</div>

		<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}" style="display: none">
		    <div class="col-md-12">
		        <input id="role" type="hidden" class="form-control" name="role" value="2" required>
		        @if ($errors->has('role'))
		            <span class="help-block">
		                <strong>{{ $errors->first('role') }}</strong>
		            </span>
		        @endif
		    </div>
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		    <div class="col-md-12">
		        <input id="password" type="password" class="form-control" name="password" required placeholder="Enter password">

		        @if ($errors->has('password'))
		            <span class="help-block">
		                <strong>{{ $errors->first('password') }}</strong>
		            </span>
		        @endif
		    </div>
		</div>

		<div class="form-group">
		    <div class="col-md-12">
		        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
		    </div>
		</div>
		<div class="form-check ">
			<div class="float-md-left col-md-6">
			   <input type="checkbox" class="form-check-input " id="checkterms">
			   <label class="form-check-label" for="checkterms"><a target="blank" href="{{url('termandcondition')}}">Accept Term and Conditions</a></label>
				
			</div>
		 </div><br><br>
		 <button type="button" id="submitformvalidation" class="btn btn-success btn-block">Create my account</button>
		  
		  <button type="submit" id="submitform" style="display: none" class="btn btn-success btn-block">Create my account</button>
		</form>		
		</div><BR>	
				<div class="col-sm-12 col-md-12 col-lg-12">
					
				</div>
			</div>			
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

@endsection

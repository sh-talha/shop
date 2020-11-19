@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!--================Login Box Area =================-->
	<section class="login_box_area section_gap" style="margin-top: -110px" >
		<div class="container" >
			<div class="row" >
				<div class="col-lg-6 offset-md-3">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form " method="POST" action="{{ route('login') }}" id="contactForm" novalidate="novalidate">
							{{ csrf_field() }}
							  <div class="col-md-12  form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							  

							  {{-- value="{{ old('email') }}" --}}
							<div class="form-group">
							    <input id="email" type="email" class="form-control " name="email"  required autofocus placeholder="Enter Email" >

								    @if ($errors->has('email'))
								        <span class="help-block">
								            <strong>{{ $errors->first('email') }}</strong>
								        </span>
								    @endif
								</div>
							</div>
							<div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							    {{-- <label for="password" class="col-md-4 control-label">Password</label>
 --}}
							    <div class="">
							        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

							        @if ($errors->has('password'))
							            <span class="help-block">
							                <strong>{{ $errors->first('password') }}</strong>
							            </span>
							        @endif
							    </div>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me

									{{-- <input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label> --}}
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" class="btn btn-primary">
								    Login
								</button>

								{{-- <a class="btn btn-link" href="{{ route('password.request') }}">
								    Forgot Your Password?
								</a> --}}
								{{-- <button type="submit" value="submit" class="primary-btn">Log In</button>
							 --}}
						</form>
						
						
							<!-- Collapse a form when user click Lost your password? link-->
							<p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Lost your password?</a></p>	
							<div class="collapse" id="showForm">
								<div class='well'>
							<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
							    {{ csrf_field() }}

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">									<input type="email" class="form-control" name="email" placeholder="Enter the email associated with the password." required value="{{ old('email') }}">
								
								@if ($errors->has('email'))
								    <span class="help-block">
								        <strong>{{ $errors->first('email') }}</strong>
								    </span>
								@endif
								</div>
										<button type="submit" class="btn btn-dark">Recover Password</button>
									</form>								
								</div>
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
  
  @endsection
@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>

<!--================Reg Box Area =================-->
	<section class="login_box_area section_gap" style="margin-top: -110px">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img" style="margin-right: 0px !important;">
						<img class="img-fluid" src="{{asset('img/new.jpg')}}" alt="">
						<div class="hover">
							<h4>
								{{ __('base.do_you_already_have_an_account')}}</h4>
							<p></p>
							<a class="primary-btn" href="login">{{ __('base.login_here')}}</a>
							<div class="d-block d-sm-none"><br><br><h4>O Crea tu Cuenta</h4>
								<img src="{{url('img/arr.png')}}" style="height: 70px;width: 80px;"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6" >
					<div class="login_form_inner">
						<h3>{{ __('base.create_an_account')}}</h3>
						<div class="row">	
								<div class="col-sm-12 col-md-12 col-lg-12" style="padding:20PX;">
								
								<hr />
								
								<form method="POST" action="{{ route('register') }}">
									{{ csrf_field() }}
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								   
								    <div class="col-md-12">
								        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('base.enter_name')}}">

								        @if ($errors->has('name'))
								            <span class="help-block">
								                <strong>{{ $errors->first('name') }}</strong>
								            </span>
								        @endif
								    </div>
								</div>

								

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								    
								    <div class="col-md-12">
								        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="{{ __('base.enter_email')}}">

								        @if ($errors->has('email'))
								            <span class="help-block">
								                <strong>{{ $errors->first('email') }}</strong>
								            </span>
								        @endif
								    </div>
								</div>

								<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}" style="display: none">
								    <div class="col-md-12">
								        <input id="role" type="hidden" class="form-control" name="role" value="3" required>
								        @if ($errors->has('role'))
								            <span class="help-block">
								                <strong>{{ $errors->first('role') }}</strong>
								            </span>
								        @endif
								    </div>
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								    <div class="col-md-12">
								        <input id="password" type="password" class="form-control" name="password" required placeholder="{{ __('base.enter_passowrd')}}">

								        @if ($errors->has('password'))
								            <span class="help-block">
								                <strong>{{ $errors->first('password') }}</strong>
								            </span>
								        @endif
								    </div>
								</div>

								<div class="form-group">
								    <div class="col-md-12">
								        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('base.confirm_password')}}">
								    </div>
								</div>
								  
								 <div class="form-check ">
								 	<div class="float-md-left col-md-6">
								 	   <input type="checkbox" class="form-check-input " id="checkterms">
								 	   <label class="form-check-label" for="checkterms"><a target="blank" href="{{url(app()->getLocale().'/termandcondition')}}">{{ __('base.accept_term_and_conditions')}}</a></label>
								 		
								 	</div>
								  </div><br><br>
								  <button type="button" id="submitformvalidation" class="btn btn-success btn-block">{{ __('base.create_my_account')}}</button>
								   
								   <button type="submit" id="submitform" style="display: none" class="btn btn-success btn-block">{{ __('base.create_my_account')}}</button>



								</form>	


								</div><BR>	
								<div class="col-sm-12 col-md-12 col-lg-12">
									{{-- <h3>Login</h3><hr /> --}}
									<p>{{ __('base.already_have_an_account')}} <a href="login" title="Login Here">{{ __('base.login_here')}}</a></p>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Reg Box Area =================-->


@endsection
@section('activate')
<script>
     ActiveMenu(5);
</script>
@endsection
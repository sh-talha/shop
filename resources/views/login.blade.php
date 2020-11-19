@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<section style="margin-top:-90px !important;" class="login_box_area section_gap">
		<div class="container">
			<div class="row">
					<div class="col-lg-6">
					<div class="login_box_img" style="margin-right: 0px !important;">
						<img class="img-fluid" src="{{asset('img/login.jpg')}}" alt="">
						<div class="hover">
							<h4>{{ __('base.new_to_our_website')}}</h4>
							<p></p>
							<a class="primary-btn" href="registration">{{ __('base.create_an_account')}}</a>
							<div class="d-block d-sm-none"><br><br><h4>O inicia secion</h4>
								<img src="{{url('img/arr.png')}}" style="height: 70px;width: 80px;"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>{{__('base.log_in_to_enter')}}</h3>
						<form class="row login_form " method="POST" action="{{ route('login',app()->getLocale()) }}" id="contactForm" novalidate="novalidate">
							{{ csrf_field() }}
							  <div class="col-md-12  form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							  

							  {{-- value="{{ old('email') }}" --}}
							 
							<div class="form-group"><span style="
    float: left;
    margin-left: 12px;
">Email :</span>
							    <input id="email" type="email" class="form-control " name="email"  required autofocus value="">

								    @if ($errors->has('email'))
								        <span class="help-block">
								            <strong>{{ $errors->first('email') }}</strong>
								        </span>
								    @endif
								</div>
							</div>
							<div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}"><span style="
    float: left;
    margin-left: 12px;
">Password :</span>
							    {{-- <label for="password" class="col-md-4 control-label">Password</label>
 --}}
							    <div class="">
							        <input id="password" type="password" class="form-control" value="" name="password" required>

							        @if ($errors->has('password'))
							            <span class="help-block">
							                <strong>{{ $errors->first('password') }}</strong>
							            </span>
							        @endif
							    </div>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('base.remember_me')}}

									{{-- <input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label> --}}
								</div>
							</div>
							{{-- <div class="col-12 form-group">
                                <div class="g-recaptcha" data-sitekey="6LfwiPAUAAAAAGoCxFe7rNND0un64drG3Cpu-xQW googlr"></div>
                            </div> --}}
							<div class="col-md-12 form-group">
								<button type="submit" class="btn btn-primary">
								    {{ __('base.login')}}
								</button>

								<a class="btn btn-link" href="{{ route('password.request',app()->getLocale()) }}">
								   {{ __('base.forgot_your_password')}}
								</a>
								{{-- <button type="submit" value="submit" class="primary-btn">Log In</button>
							 --}}
						</form>
						
							<!-- Collapse a form when user click Lost your password? link-->
							{{-- <p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Lost your password?</a></p>	
							<div class="collapse" id="showForm">
								<div class='well'>
									<form action="password-recovery.php" method="post">
										<div class="form-group">										
											<input type="email" class="form-control" name="email" placeholder="Enter the email associated with the password." required>
										</div>
										<button type="submit" class="btn btn-dark">Recover Password</button>
									</form>								
								</div>
							</div> --}}
					</div>
					
					
				
					
					
					
					
				</div>
				
				
				
				
				
				
				
				
			</div>
		</div>
	</section>


@endsection
@section('activate')
<script>
     ActiveMenu(5);
</script>
@endsection
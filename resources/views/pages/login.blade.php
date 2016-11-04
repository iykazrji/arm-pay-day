
@extends('master')

@section('title', 'Login')

@section('content')
	<section>
		<div class="main-container login-main-container col-lg-12">
	      <header>
	        <div id="help-icon-holder">
	          <span class="help-txt">HELP</span>
	          <div class="icon-holder"><img src="{{asset('assets/images/help_icon.png')}}" class="img-responsive center"></div>
	        </div>
	      </header>
	      <div class="login-form-container center">
	        <div class="center logo-holder">
	         <a href="{{ route('product-page')}}"> <img class="img-responsive center" src="{{asset('assets/images/logo_white.png')}}" /></a>
	        </div>
	        <p class="welcome-text">WELCOME!</p>
	        <div class="form-holder center">
	          <form>
	            <div class="form-group form-field-holder">
	              <div class="form-icon-holder col-xs-2" id="username-icon-holder"></div>
	              <div class="col-xs-10 text-field" id="username-field">
	                <input type="text" placeholder="Enter Your Username" name="username">
	              </div>
	            </div>
	            <div class="form-group form-field-holder">
	              <div class="form-icon-holder col-xs-2" id="password-icon-holder"></div>
	              <div class="col-xs-10 text-field" id="password-field">
	                <input type="password" placeholder="Enter Your Password" name="password">
	              </div>
	            </div>
	            <span><a href="#">Forgot password?</a></span>
	            <div class="form-group submit-button-holder">
	              <button type="submit">LOGIN</button>
	            </div>
	          </form>
	          <a class="register-here-link" href="{{ route('register')}}"><p>Don't have an account? Register Here!</p></a>
	        </div>
	      </div>
	    </div>
	</section>
@endsection
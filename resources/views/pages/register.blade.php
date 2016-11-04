
@extends('master')

@section('title', 'Register')

@section('content')
	<div class="main-container register-main-container col-lg-12">
      <header>
        <div id="logo-icon-holder">
         <a href="{{ route('product-page')}}"> <img class="img-responsive center" src="{{ asset('assets/images/logo_white.png') }}" /></a>
        </div>
        <div id="help-icon-holder">
          <span class="help-txt">HELP</span>
          <div class="icon-holder"><img src="{{ asset('assets/images/help_icon.png') }}" class="img-responsive center"></div>
        </div>
      </header>
      <div class="register-form-container center">
        <p class="welcome-text">REGISTER HERE!</p>
        <div class="two-forms-holder">
          <div class="select-image col-lg-6">
            <p>Select a profile picture</p>
            <div class="upload-button-holder">
              <span>+</span>
              <input type="file" name="profile_picture" value="" class="upload-button">
            </div>
          </div>
          <div class="form-holder col-lg-6" id="register-form-holder">
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

              <div class="form-group form-field-holder">
                <div class="form-icon-holder col-xs-2" id="password-icon-holder"></div>
                <div class="col-xs-10 text-field" id="password-field">
                  <input type="password" placeholder="Confirm Password" name="password">
                </div>
              </div>
              <div class="col-lg-6" id="gender-select-holder">
                <p>Select Gender</p>
                <div class="form-group form-field-holder">
                <div class="form-icon-holder col-xs-4" id="gender-icon-holder"></div>
                <div class="col-xs-8 text-field" id="gender-field">
                  <select class="form-select">
                    <option>Male</option>
                  </select>
                </div>
              </div>
              </div>
              <div class="col-lg-6" id="age-select-holder">
                <p>Select Age</p>
                <div class="form-group form-field-holder">
                <div class="form-icon-holder col-xs-4" id="age-icon-holder"></div>
                <div class="col-xs-8 text-field" id="gender-field">
                  <select class="form-select">
                    <option>18</option>
                  </select>
                </div>
              </div>
              </div>
              <div class="form-group submit-button-holder">
                <button type="submit">REGISTER</button>
              </div>
            </form>
            <p>By Registering, you hereby agree with our <a class="terms-link" href="#">Terms and Conditions</a></p>
          </div>
        </div>
      </div>
    </div>
@endsection
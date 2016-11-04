@extends('master')

  @section('content')
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" id="main-navigation">
      <div class="container-fluid header-main-container">
        <div class="navbar-header">
           <a class="navbar-brand" href="index.html">
            <img class="img-responsive center" src="{{ asset('assets/images/logo_purple.png') }}" />
          </a> 
          <div id="nav-menu-holder">
              
          </div>
          <div id="login-button-holder">
            <a href="{{route('login')}}"><div class="img-holder"></div><span>LOGIN</span></a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <section class="section section-1 col-lg-12">
      <div class="trapezoid" id="section-1-content-holder">
        <div class="trapezoid-content">
          <div class="col-lg-12 top-div">
            <h2>The Payday Investor App</h2>
            <p class="center">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
            <div class="col-lg-12 icons-holder">
              <div class="col-xs-6 play-store-icon">
                <img src="{{ asset('assets/images/playstore_icon.png') }}">
              </div>
              <div class="col-xs-6 app-store-icon">
                <img src="{{ asset('assets/images/appstore_icon.png') }}">
              </div>  
            </div>
          </div>
          <div class="col-lg-12 bottom-div">
            <div class="img-holder"><img src="{{ asset('assets/images/laptop_image_2.jpg') }}" class="img-responsive"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-2 col-lg-12">
      <div class="col-lg-12">
       <h2 class="section-title">
          About The App
        </h2>
      </div>
      <div id="about-app-content">
        <div class="col-lg-7 about-app-conent-child" id="about-app-txt">
          <div class="section-txt-holder">
            <p class="section-txt">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet mi vitae vulputate facilisis. Nulla in eros massa. Integer faucibus velit nec eros commodo, sit amet semper mi viverra. Maecenas quis rutrum ligula. Nunc eget semper mi. Suspendisse libero eros, tempus vel ultricies in, sagittis at eros. Nullam velit nisl, ultrices dictum augue sed, rutrum viverra ante. Duis porta sapien justo, sit amet maximus libero lobortis et
            </p>
          </div>
        </div>
        <div class="col-lg-5 about-app-conent-child">
          <div class="about-app-img">
            <img src="{{ asset('assets/images/indicator.png') }}" class="img-responsive indicator">
            <img src="{{ asset('assets/images/iphone.png') }}" class="img-responsive">
          </div>
        </div>
      </div>
    </section>

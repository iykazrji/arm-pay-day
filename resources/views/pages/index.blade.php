
@extends('master')

@section('title', 'Dashboard')

@section('content')
<div class="container container--dashboard" id="main-dashboard-container">
  <header class="header header--dashboard">
    <nav class="navbar navbar-default navbar-fixed-top" id="header-navigation">
      <div class="container-fluid header-main-container">
        <div class="navbar-header">
	       <div class="menu-holder">
	    	<span class="menu-txt">MENU</span>
	    	<div class="hamburger-menu-holder">
	    		<img class="img img-responsive" src="{{ asset('assets/images/hamburger_icon.png') }}">
	    	</div>
	    	
           <a class="navbar-brand" href="{{ route('/') }}">
            <img class="img-responsive center" src="{{ asset('assets/images/logo_white.png') }}" />
          </a> 	
	       </div>
          <div id="nav-menu-holder">
              
          </div>
          <div class="dropdown" id="welcome-name-dropdown">
          	<span>Welcome, </span>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>

@endsection
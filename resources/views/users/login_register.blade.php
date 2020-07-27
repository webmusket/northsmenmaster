@extends('layouts.master')
@section('content')

<section id="form" style="margin-top:20px;"><!--form-->
	<div class="container">
		<div class="row">
			@if(Session::has('flash_message_success'))
	            <div style="height: 50px;" class="alert alert-success alert-block col-lg-12">
	                <button type="button" class="close" data-dismiss="alert">×</button> 
	                    <strong>{!! session('flash_message_success') !!}</strong>
	            </div>
	        @endif
	        @if(Session::has('flash_message_error'))
	            <div class="alert alert-error alert-block col-lg-12" style="background-color:#f4d2d2;height: 50px;">
	                <button type="button" class="close" data-dismiss="alert">×</button> 
	                    <strong>{!! session('flash_message_error') !!}</strong>
	            </div>
    		@endif  
			<div class="col-sm-4 col-sm-offset-1 col-lg-5 col-lg-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form id="loginForm" name="loginForm" action="{{ url('/user-login') }}" method="POST">{{ csrf_field() }}
						<input name="email" type="email" placeholder="Email Address" required="" />
						<input id="myPassword1" name="password" type="password" placeholder="Password" required="" />
						<!-- <span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span> -->
						<button type="submit" class="btn btn-default">Login</button><br>
						<a href="{{ url('forgot-password') }}">Forgot Password?</a>
					</form>
				</div><!--/login form-->
				<div class="panel-body">
                <div style="text-align:center;" class="panel-body">
                    <a class="btn btn-primary" href="{{ url('auth/facebook') }}">
                        Facebook Login
                    </a>
                    <a class="btn btn-primary" href="redirect/twitter">
                        Twitter Login
                    </a>
                    <a class="btn btn-primary" href="redirect/google">
                        G+ Login
                    </a>
                </div>
            </div>
			</div>
			<div class="col-sm-1 col-lg-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4 col-lg-5">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					<form id="registerForm" name="registerForm" action="{{ url('/user-register') }}" method="POST">{{ csrf_field() }}
					 <?php if(!empty($_COOKIE['ref'])){ ?>
					 <div class="alert alert-primary" role="alert">
                        You are invited sign up for your bonus
                    </div>
                    <input type="hidden" name="referrer_id" value="{{ $_COOKIE['ref'] }}">
                    <?php } ?>
                    
						<input id="name" name="name" type="text" placeholder="Name"/>
						<input id="email" name="email" type="email" placeholder="Email Address"/>
						<input id="myPassword" name="password" type="password" placeholder="Password"/>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div>
				<div class="panel-body">
                <div style="text-align:center;" class="panel-body">
                    <a class="btn btn-primary" href="{{ url('auth/facebook') }}">
                        Facebook Login
                    </a>
                    <a class="btn btn-primary" href="redirect/twitter">
                        Twitter Login
                    </a>
                    <a class="btn btn-primary" href="redirect/google">
                        G+ Login
                    </a>
                </div>
            </div><!--/sign up form-->
			</div>

		</div>
	</div>
</section><!--/form-->

<script>

{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}
	
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@endsection
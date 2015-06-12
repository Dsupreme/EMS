<!DOCTYPE html>
<html>
	<head>
		<title>EMS-Welcome Page</title>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="author" content="Manmeet"/>
		<meta name="description" content="A new Job Portal and Employee Management System for IIIT-Delhi"/>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}" media="screen" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}" media="screen">

		<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

	</head>

	<body>
	    <!--============================== NavBar ==============================-->
	    <nav>
   			<div class="nav-wrapper nav-color">
   		      	<a class="brand-logo logo" style="padding-left: 1.5em">E.M.S</a>
  				<!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>-->
   			    <ul class="right hide-on-med-and-down">
   			        <li class="li-no-hover">
                        <form role="form" method="POST" action="{{ url('/auth/login') }}">
			        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        		<ul>
			        			<li class="li-no-hover">
			        				<div class="row" style="padding-top:0em">
						        		<div class="col s4">
					          				<input id="username" class="login-input-box" type="text" placeholder="Enter Username" name="username" value="{{ old('username') }}">
					        			</div>
					        			<div class="col s4">
					          				<input id="password" class="login-input-box" type="password" placeholder="Enter Password" name="password">
					        			</div>
						        	    <div class="col s4">
						        	        <!--<label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>-->
                                            <input type="checkbox" id="remebercheck" class="filled-in" />
                                            <label for="remebercheck" style="color: #ffffff">Remember Me</label>
                                        </div>
						        	</div>
				        		</li>
					        	<li class="li-no-hover" style="margin-right:1em">
					    			<button class="btn-flat waves-effect waves-light login_btn" type="submit" name="action">Login</button>
							  	</li>
						  	</ul>
			        	</form>
                    </li>
			        <li><a href="{{ url('about') }}">About</a></li>
      			</ul>
      			<ul class="right hide-on-large-only">
      				<li><a>Login</a></li>
      			</ul>
      			<ul class="side-nav" id="mobile-demo">
        	        <li><a href="">About</a></li>
			        <li><a href="">Contact Us</a></li>
			        <li><a href="">Login</a></li>
      			</ul>
	    	</div>
		</nav>
	    <!--============================== Main ==============================-->
	    <main>
    		<div class="row" >
    			<!--============================== Header ==============================-->
    			<div class="col s12 m12 l7 content" style="padding-bottom:2em">
    				<section>
    					<h2 class="center-align" style="padding-top:1em;font-variant: small-caps;">Employee<br/>Management<br/>System</h2>
    					<div class="center-align quote" style="padding-top:1em">{{ Inspiring::quote() }}</div>
    				</section>
    			</div>
        		<!--============================== Signup ==============================-->
        		<div class="col s12 m12 l5">
        			<section>
       					<form class="col s12" role="form" method="POST" action="{{ url('/auth/register') }}">
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <h5 class="center-align">Sign Up</h5>
                                <div class="input-field col s12">
                                   <i class="mdi-action-account-circle prefix"></i>
                                   <input id="username" type="text" class="validate" name="username" value="{{ old('username') }}">
                                   <label for="username">Username</label>
                                </div>
                                <div class="input-field col s12">
                                   <i class="mdi-communication-email prefix"></i>
                                   <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
                                   <label for="email">Email</label>
                                </div>
                                <div class="input-field col s12">
                                   <i class="mdi-action-lock prefix"></i>
                                   <input id="pswd" type="password" class="validate" name="password">
                                   <label for="pswd">Password</label>
                                </div>
                                <div class="input-field col s12">
                                   <i class="mdi-action-lock prefix"></i>
                                   <input id="retype_pswd" type="password" class="validate" name="password_confirmation">
                                   <label for="retype_pswd">Confirm Password</label>
                                </div>
                                <p class="right"> By signing up, you accept our terms and policies.</p>
                                <div class="col s12 center">
                                    <button class="btn waves-effect waves-light center reg_btn" type="submit">Register
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
        			</section>
        		</div>
    		</div>
    	</main>
        <!--============================== Footer ==============================-->
        <footer class="footer-color page-footer " id="footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Drop us a message</h5>
                        <p class="grey-text text-lighten-4">
                            {!! Form::open(['action' => 'WelcomeController@feedback']) !!}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        {!! Form::text('feedbackname',null,['required','class' => 'white-text validate'])!!}
                                        {!! Form::label('feedbackname','Name')!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="mdi-communication-email prefix"></i>
                                        {!! Form::email('feedbackemail',null,['required','class' => 'white-text validate'])!!}
                                        {!! Form::label('feedbackname','Email')!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="mdi-editor-insert-comment prefix"></i>
                                        {!! Form::textarea('feedbackmsg',null,['required','class' => 'materialize-textarea white-text validate'])!!}
                                        {!! Form::label('feedbackmsg','Message')!!}
                                    </div>
              						<div class="col s12 center">
              						    {!! Form::button('<span class="mdi-content-send right" style="padding-left: 1em"></span> Submit', array('class'=>'btn waves-effect waves-light center', 'type'=>'submit')) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            @if(Session::has('message'))
                                 <script>Materialize.toast('{{Session::get('message')}}', 4000)</script>
                            @endif
                        </p>
                      </div>
                      <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Explore IIIT-D</h5>
                        <ul id="links">
                          <li><a class="btn waves-effect waves-light center fb-btn" href="#!">Find us on Facebook</a></li>
                          <li><a class="btn waves-effect waves-light center tw-btn" href="#!">Follow us on Twitter</a></li>
                          <li><a class="btn waves-effect waves-light center y-btn" href="#!">Subscribe to us on Youtube</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <div class="footer-copyright">
                <div class="container">
                    © 2015 Copyright IIIT-D
                    <a class="grey-text text-lighten-4 right" href="http://www.iiitd.ac.in/">www.iiitd.ac.in</a>
                </div>
            </div>
        </footer>



		<!--<div class="container">
			<div class="content">






                						<div class="form-group">
                							<div class="col-md-6 col-md-offset-4">
                								<button type="submit" class="btn btn-primary">Login</button>

                								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                							</div>
                						</div>
                					</form>

			</div>
		</div>-->
	</body>
</html>

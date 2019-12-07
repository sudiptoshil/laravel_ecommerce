@extends('frontend.master')
@section('home_content')

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<h2 style="color: red">{{Session::get('message')}}</h2>
						<form action="{{route('new-login')}}" method="post">
							@csrf
							<input type="text"  name ="email"  placeholder="email" />
							<input type="text"  name="password" placeholder="password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						
						<form action="{{route('new-signup')}}" method="post">
							@csrf
							<input type="text"  name="name" placeholder="Name"/>
							<input type="text"  name="email" placeholder="Email Address"/>
							<input type="text"  name="password" placeholder="Password"/>
							<input type="text"  name="phone" placeholder="phone"/>
							<input type="text"  name="address" placeholder="address"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	@endsection
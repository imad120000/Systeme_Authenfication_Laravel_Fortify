


@section('title')
Register  
@endsection

@extends('auth_layout/layout')

@section('contenu')
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" >
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST"  action="{{ route('register') }}" >
								@csrf
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="name" required autofocus>
									@error('name')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
									
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" >
									@error('email')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
									
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  data-eye>
									@error('password')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
									
								</div>

								<div class="form-group">
									<label for="password">Password Confirmation</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  data-eye>
									
								</div>

								
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="{{ url('login') }}">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; Amjid imad 
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
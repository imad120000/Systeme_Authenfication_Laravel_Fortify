
@section('title')
Reset Password 
@endsection
@extends('auth_layout/layout')
@section('contenu')

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand"
					
					style="
						
						
						width: 90px;
						height: 90px;
						overflow: hidden;
						border-radius: 50%;
						margin: 40px auto;
						box-shadow: 0 4px 8px rgba(0,0,0,.05);
						position: relative;
						z-index: 1;
						">
						<img src="../img/logo.jpg" alt="logo" style="width: 100%" >
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Reset Password</h4>
							
							<form method="POST" class="my-login-validation" action="{{ route('password.update') }}">
								@csrf
								<input type="hidden" name="token" value="{{ $request->route('token') }}">
								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $request->email }}" required autofocus data-eye>
									@error('email')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
								</div>
								<div class="form-group">
									<label for="new-password">New Password</label>
									<input id="new-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus data-eye>
									<div class="form-text text-muted">
										Make sure your password is strong and easy to remember
									</div>
									@error('password')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
								</div>

								<div class="form-group">
									<label for="password_confirmation">Password Confirmation</label>
									<input id="password_confirmation" type="password" class="form-control " name="password_confirmation" required autofocus data-eye>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Update Password
									</button>
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

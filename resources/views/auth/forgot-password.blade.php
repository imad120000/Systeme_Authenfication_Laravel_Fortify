

	@section('title')
	Forget Password  
	@endsection

@extends('auth_layout/layout')

@section('contenu')
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" >
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Forgot Password</h4>
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif
							<form method="POST" class="my-login-validation" novalidate="" action="{{ route('password.request') }}">
								@csrf
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autofocus>
									@error('email')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
									<div class="form-text text-muted">
										By clicking "Reset Password" we will send a password reset link
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
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
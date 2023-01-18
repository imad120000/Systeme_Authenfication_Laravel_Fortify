

@section('title')
	Verify Email  
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
							<h4 class="card-title">Please verify your Email Adress  </h4>
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif
							<form method="POST" class="my-login-validation" action="{{ route('verification.send') }}">
								@csrf
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Resend Email
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
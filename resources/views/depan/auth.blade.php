@extends('layouts.blank')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-10 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4"><i class="fa fa-truck"></i> Tracking </h1>
								</div>
								<form class="user" method="POST">
									<div class="form-group">
										<input type="username" class="form-control form-control-user" placeholder="Username" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" placeholder="Password" required>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

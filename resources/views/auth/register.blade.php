@extends('master')
@section('title', 'Join')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<h5 class="text-center">Join the <b>FootySocial</b> fun!</h5>
					<form method="POST" action="/auth/join" class="form form-signup" role="form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="username" class="form-control" placeholder="Username" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="email" name="email" class="form-control" placeholder="Email Address" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" class="form-control" placeholder="Password" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" class="form-control" placeholder="Confirm Password" />
							</div>
						</div>
					</div>
					<a class="btn btn-sm btn-success btn-block" role="button">Join</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

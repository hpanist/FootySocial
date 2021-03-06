@extends('layout.master')
@section('title', 'Join')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<h5 class="text-center">Join the <b>FootySocial</b> fun!</h5>
						@if (count($errors) > 0)
	            <div class="alert alert-danger">
	                <strong>Whoops!</strong> There were some problems with your input.<br><br>
	                <ul>
	                    @foreach ($errors->all() as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                </ul>
	            </div>
	          @endif

					<form method="POST" action="/auth/register" class="form form-signup" role="form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="username" class="form-control" required="required" placeholder="Username" value="{{ old('name') }}"/>
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
								<input type="password" name="password" class="form-control" required="required" placeholder="Password" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password_confirmation" class="form-control" required="required" placeholder="Confirm Password" />
							</div>
						</div>
					</div>
					<button class="btn btn-sm btn-success btn-block" role="button" type="submit">Join</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

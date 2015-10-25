@extends('layout.master')
@section('title', 'Enter e-mail')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<h5 class="text-center garamondize"><b>Enter your email to reset password</b></h5>

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

						@if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

						<form method="POST" action="/password/email" class="form form-signup" role="form">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="email" class="form-control" name="email" placeholder="Email" />
									</div>
								</div>
							<button type="submit" class="btn btn-sm btn-success btn-block" role="button">Reset password</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

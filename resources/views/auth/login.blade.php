@extends('layout.master')
@section('title', 'Enter')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <h5 class="text-center garamondize"><b>Enter!</b></h5>

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
            <form method="POST" action="/auth/login" class="form form-signup" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="email" class="form-control" name="email" placeholder="Email" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                  </div>
                </div>
            	<button type="submit" class="btn btn-sm btn-success btn-block" role="button">Submit</button>
              <div align="center" class="">
		              <a class="garamondize" href="/password/email">Forgot your password?</a>
		          </div>
          </form>
        </div>
      </div>
  	</div>
	</div>
</div>
@endsection

@extends('master')
@section('title', 'Enter')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <h5 class="text-center"><b>Enter!</b></h5>
            <form class="form form-signup" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" placeholder="Username" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" class="form-control" placeholder="Password" />
                  </div>
                </div>
            <button type="submit" class="btn btn-sm btn-success btn-block" role="button">Submit</button>
          </form>
        </div>
      </div>
  	</div>
	</div>
</div>
@endsection

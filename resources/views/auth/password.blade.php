@extends('layout.master')
@section('title', 'Reset password')

@section('content')
	<h4 align="center" class="garamondize">Provide your e-mail address to reset your password.</h4>
	<div class="container">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong><br>
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
			<form method="POST" action="/password/email" class="form-inline" style="text-align: center">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
				  <label class="garamondize" for="exampleInputEmail2">Email</label>
				  <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="">
				</div>
				<button type="submit" class="btn btn-success">Reset </button>
			</form>

			<!-- <form method="POST" action="/password/email">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="">
				  <input class="" placeholder="E-mail address" name="email" type="email" required>
				</div>

				<div align="center" class="mui-form-group">
				  <button class="" name="reset" type="submit">Reset</button>
				</div>
			</form> -->
	</div>
@endsection

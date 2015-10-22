@extends('layout.master')
@section('title', 'Home')

@section('content')
	<div class="container">
	  <div class="content">
	    <div class="title garamondize">Home </div>
	    <div style="width: 50%; display: block; margin: 0 auto;">
	    @if (Auth::check() )
		    <span class="garamondize" style="text-align: center;">Update your status</span>
		    <textarea class="form-control" rows="3"></textarea>
		  @endif
	    </div>
	  </div>
	</div>
@endsection

<nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand garamondize" href="/">FootySocial</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active garamondize"><a href="#">Top Stories <span class="sr-only">(current)</span></a></li>
      </ul>
      <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      @if (! Auth::check() )
      <ul class="nav navbar-nav navbar-right">
				<li><a href="/login" class="garamondize">Enter</a></li>
				<li><a href="/auth/register" class="garamondize">Join</a></li>
				<!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle garamondize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
      @else
      	<ul class="nav navbar-nav navbar-right">
      		<li><a class="garamondize" href="/profile"> Logged in as <span style="color: white">*{{ Auth::user()->username }}*<span></a></li>
      		<li><a href="/auth/logout" class="garamondize">Logout</a></li>
      	</ul>
      @endif

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

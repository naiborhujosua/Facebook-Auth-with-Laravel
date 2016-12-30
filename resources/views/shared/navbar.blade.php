<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			 </button>
			 <a class="nabar-brand" href="#">Learning Laravel</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/Contact">Contact</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="botton">
					Member
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
   					 <!-- Authentication Links -->
    					@if (Auth::guest())
        					<li><a href="{{ url('/login') }}">Login</a></li>
        					<li><a href="{{ url('/register') }}">Register</a></<li>					</li>>
   					 	@else
       					 <li class="dropdown">
               					 <li><a href="{{ url('/logout') }}"><i class="					fa fa-btn fa-sign-out"></i>Logout</a></li>
      					  </li>
    					@endif
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
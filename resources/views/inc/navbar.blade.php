<style>
  #main {
    font-size: 1.2em;
    border: none;
    border-radius: 0;
    background: #eee;
    color: #636b6f;
    box-shadow: 1px 5px 4px rgba(0, 0, 0, 0.2);
  }

  #navbar a {
    color: #636b6f;
  }
  #navbar a:hover, a:active {
    font-size: 1.1em; border-radius: 4px;
    box-shadow: 1px 5px 4px rgba(0, 0, 0, 0.2);
  }
</style>


<nav class="navbar navbar-default" id='main'>
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a style="font-size: 1.2em" class="navbar-brand" href="{{ url('/') }}">
                <!--{{ config('app.name', 'Laravel') }}-->
				<img src='/storage/logo.png' style='width: 50px; height: 38px; margin-top: -8px'>
            </a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
        			<li><a href="/">Home</a></li>
        			<li><a href="/about">About</a></li>
        			<li><a href="/services">Services</a></li>
              <li><a href="/posts">Blog</a></li>
      		  </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

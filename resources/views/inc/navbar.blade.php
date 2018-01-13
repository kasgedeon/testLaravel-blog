<style>
  #main {
    font-family: Verdana;
    font-size: 1.1em;
    border: none;
    border-radius: 0;
    background: #eee;
    color: #636b6f;
    box-shadow: 1px 5px 4px rgba(0, 0, 0, 0.2);
  }

  #navbar {
    float: right;
  }
  #navbar a {
    color: #636b6f;
  }
  #navbar a:hover, a:active {
    font-size: 1.1em; border-radius: 4px;
    box-shadow: 1px 5px 4px rgba(0, 0, 0, 0.2);
  }
</style>

<nav class="navbar navbar-inverse" id='main'>
  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  			<span class="sr-only">Toggle navigation</span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/">{{config('app.name', 'Test Laravel')}}</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
  			<li><a href="/">Home</a></li>
  			<li><a href="/about">About</a></li>
  			<li><a href="/services">Services</a></li>
        <li><a href="/posts">Blog</a></li>
		  </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

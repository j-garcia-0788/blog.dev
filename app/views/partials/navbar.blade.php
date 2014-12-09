<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">James!</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="resume"><a href="{{ action('HomeController@showResume') }}">Resumé</a></li>
        <li><a href="{{ action('HomeController@showPortfolio') }}">Portfolio</a></li>
        <li><a href="{{ action('PostsController@index') }}">Blog</a></li>
        @if (Auth::check())
          <li><a href="{{ action('PostsController@create') }}">New Blog Post</a></li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{{action('HomeController@showLogin') }}}">Login</a></li>
        @else
          <li>Welcome {{{Auth::user()->email}}}</li>
          <li><a href="{{ action('HomeController@doLogout') }}">Logout</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<style>
  @media (max-width: 950px) {
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin: 7.5px -15px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
}
</style>

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
        <li class="resume"><a href="https://docs.google.com/file/d/0B4_3BXvJT0LmSkxWalZ0T0RieHM" target="_blank">Resumé</a></li>
        <li><a href="{{ action('HomeController@showPortfolio') }}">Portfolio</a></li>
        <li><a href="{{ action('PostsController@index') }}">Blog</a></li>
        @if (Auth::check())
          <li><a href="{{ action('PostsController@create') }}">New Blog Post</a></li>
        @endif
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Contact <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="mailto:james.m.garcia7@gmail.com">Email</a></li>
            <li><a href="https://github.com/j-garcia-0788">GitHub</a></li>
            <li><a href="www.linkedin.com/in/jmichaelg88/">LinkedIn</a></li>
            <li><a href="www.twitter.com/jmichaelgar">Twitter</a></li>
          </ul>
        </li>
      </ul>
      {{ Form::open(array('action'=> array('PostsController@index'), 'class'=>'nav navbar-form navbar-right', 'method'=> 'GET')) }}
      {{ Form::text('search', null, array('placeholder'=> 'Search Blog Posts', 'class'=>'form-control')) }}

      {{ Form::submit('Search', array('class'=>'btn btn-default')) }}

      {{ Form::close() }}
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
        @else
          <li><p class="navbar-text navbar-right">Welcome {{{ Auth::user()->email }}} &nbsp;</p></li>
          <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
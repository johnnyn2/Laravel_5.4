{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">{{config('app.name', 'Laravel Demo App')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/LaravelProjectDemo/public/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LaravelProjectDemo/public/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LaravelProjectDemo/public/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LaravelProjectDemo/public/posts">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-right">
          <li>
            <a class="nav-link" href="/LaravelProjectDemo/public/posts/create">Create Post</a>
          </li>
      </ul>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container">
      <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
          </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
              &nbsp;
          </ul>

          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/LaravelProjectDemo/public/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/LaravelProjectDemo/public/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/LaravelProjectDemo/public/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/LaravelProjectDemo/public/posts">Blog</a>
            </li>
            <ul class="navbar-nav navbar-right">
              <li>
                <a class="nav-link" href="/LaravelProjectDemo/public/posts/create">Create Post</a>
              </li>
            </ul>
          </ul>
          
          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a href="/LaravelProjectDemo/public/login">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/LaravelProjectDemo/public/dashboard">Dashboard</a></li>  
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
              @endif
          </ul>
      </div>
  </div>
</nav>
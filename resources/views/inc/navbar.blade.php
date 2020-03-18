<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
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
</nav>
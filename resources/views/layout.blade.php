<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Todos @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
  <style>
    
    .nav { color: white; }
    .nav * { color: inherit; }
    .minw-4 { min-width: 400px; }

  </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <span class="navbar-brand font-weight-bold">Todos!</span>
      <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/todos/new">New</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/app"><strong class="ml-1">Try the App</strong></a></li>
      </ul>
    </div>
  </nav>
  <div class="container pt-4 fill">
    @yield('content')
  </div>
</body>
</html>
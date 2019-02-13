<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Todos @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    
    .nav { color: white; }
    .nav * { color: inherit; }

  </style>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <h1 class="text-white">Todos!</h1>
      <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/manage">Manage</a></li>
        <li class="nav-item"><a class="nav-link" href="/new">New</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/app">App</a></li>
        <li class="nav-item"><a class="nav-link" href="/sample">Sample</a></li>
      </ul>
    </div>
  </nav>
  <div class="container pt-4">
    @yield('content')
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Todos @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Todos!</h1>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/manage">Manage</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/app">App</a></li>
  </ul>
  @yield('content')
</body>
</html>
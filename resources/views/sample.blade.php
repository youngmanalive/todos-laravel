@extends('layout')

@section('title', '- Sample Form')

@section('content')
    @isset($_GET['name'])
        <h1>Your name is <?php echo $_GET['name']; ?></h1>
    @endisset
    @isset($_GET['age'])
        <h1>Your age is <?php echo $_GET['age']; ?></h1>
    @endisset
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
      <input type="text" name="name" placeholder="your name" />
      <input type="text" name="age" placeholder="your age" />
      <input type="submit" value="Go" />
    </form>
@endsection
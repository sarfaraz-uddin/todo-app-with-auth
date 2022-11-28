<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: black">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:white;font-weight: bolder;" href="{{route('dashboard')}}">Article App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item">
          <a class="nav-link"  style="color:white" href="">{{auth()->user()->name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  style="color:white" href="{{route('logout')}}">LogOut</a>
        </li>
        @endauth

        @guest
        <li class="nav-item">
          <a class="nav-link"  style="color:white" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:white" href="{{route('register')}}">Register</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
    <!-- dynamic content -->
    @yield('content')
</body>
</html>
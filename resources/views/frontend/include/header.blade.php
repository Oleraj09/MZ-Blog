<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend-assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend-assets/css/responsive.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend-assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend-assets/css/owl.theme.default.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">
            <img style="height: 40px; width:120px;" src="{{asset('frontend-assets/image/logo.png')}}" alt="MondolBlog">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup1">
            <div class="navbar-nav ms-auto">
              <a class="nav-link pe-3 active" aria-current="page" href="{{route('home')}}">Home</a>
              <a class="nav-link pe-3" href="{{route('categorys')}}">Category</a>
              <a class="nav-link pe-3" href="#">About Us</a>
              <a class="nav-link pe-3" href="#">Contact Us</a>
              @auth
                  @php
                    $role = Auth::user()->role;
                  @endphp
                  @if($role == 4)
                    <a href="{{route('dashboard')}}"><button type="button" class="btn btn-primary rounded-pill px-5">Admin Panel</button></a>
                  @elseif($role == 2)
                    <a class="nav-link ps-2" href="{{route('userdb')}}">
                      <img style="height: 30px;width:30px;border-radius:50%;border:1px solid navy;" src="{{Auth::user()->image;}}" alt="">
                    </a>
                  @else
                    <a class="nav-link ps-2" href="{{route('userdb')}}">
                      <img style="height: 30px;width:30px;border-radius:50%;border:1px solid navy;" src="{{Auth::user()->image;}}" alt="">
                    </a>
                  @endif 
                @else
                  <a class="nav-link pe-3" href="{{route('register-user')}}">Register</a>
                  <a class="nav-link pe-3" href="{{route('login-user')}}">Login</a>
                  <button type="button" class="btn btn-primary rounded-pill px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
              @endauth
            </div>
          </div>
        </div>
    </nav>
    <hr>  
    <nav class="text-center navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="mx-auto navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-caret-down fa-xl"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link pe-3" href="{{route('home')}}">Home</a>
            @foreach ($category as $c)
              <a class="nav-link pe-3" href="{{route('singlepage',$c->id)}}">{{$c->name}}</a>
            @endforeach
          </div>
        </div>
      </div>
    </nav>
    <hr>
    <div class="update-news text-danger bg-dark py-2">
        <div class="container">
            <div class="p d-flex">
                <span class="text-success pe-2" style="float: left;">Leatest&nbsp;:</span> 
                <marquee behavior="" direction="left" style="float: left;">
                  @foreach ($leatest as $update)
                    <span class="pe-5">{{$update->title}}</span>
                  @endforeach
                </marquee>
            </div>
        </div>
    </div>

    
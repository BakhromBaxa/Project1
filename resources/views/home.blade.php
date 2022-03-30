@extends('layuot.layout')
@section('title-block')
home
@endsection
@section('content')
<div>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Admin</a>
                    </div>
                </li>
                @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Log Out</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            @endif
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
  </div>
</nav>
</div>
<div class="container mt-3">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

<!-- The slideshow/carousel -->
    <div class="carousel-inner" style="height: 500px; width: 100%; border-radius: 50px;">
        <div class="carousel-item active">
            <img src="https://wallpaperaccess.com/full/193853.jpg">
    </div>
    <div class="carousel-item">
         <img src="https://i0.wp.com/knowledgeenthusiast.com/wp-content/uploads/2020/04/pexels-photo-2379653.jpeg?fit=1880%2C1253&ssl=1" width="100%" height="auto">
    </div>
  <div class="carousel-item">
    <img src="https://images.unsplash.com/photo-1566618501422-c23b8983e256?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aGlnaCUyMHF1YWxpdHl8ZW58MHx8MHx8&w=1000&q=80" width="100%" height="auto">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
<div class="content mt-5">
    
</div>
</div>

@endsection
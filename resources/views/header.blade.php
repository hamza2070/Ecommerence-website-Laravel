<?php
use App\Http\Controllers\ProductController;
$CartCount=0;
if(session()->has('user')){
$CartCount=ProductController::cartCount();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
          <form class="d-flex" role="search" action="/search">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" 
            name="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          @if (session()->has('user'))
            
          <li class="nav-item">
            <a style="margin-left:15%" aria-current="page" href="/logout">
            <button class="btn btn-outline-danger">
            Logout
            </button>
          </a>
          </li>
          @endif
        </ul>
        
          <a class="nav-link active" href="/cartlist">cart({{$CartCount}})</a>
          
         
      </div>
    </div>
  </nav>
<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN4E7getlp8g2Vk2ollb6ncfDlmgIg_9JMNA&usqp=CAU" type="image/x-icon">

     <!-- CSS link only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
     crossorigin="anonymous"/>


     <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.bundle.min.css"
       rel="stylesheet"
       integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">

  <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.2.2/font/bootstrap-icons.css">



         <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title> @yield('title')</title>
</head>
<body>

    <!--navigation-->

   <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="image/mylogo.jpg" class="brand-img" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">My Project</a>
            </li>

          </ul>
          <span class="navbar-text"  >
            <a class="nav-link" href="#">Log In</a>
          </span>
        </div>
    </nav>
-->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img style="height:50px; width:75px" src={{asset('image/images-removebg-preview.png')}} class="brand-img" alt="" style="box-shadow:1px 1px 10px blue;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto" style="text-shadow: 1px 1px 15px blue;font-weight: bolder;font-size:1.2rem">

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('products.index')}}">@yield('name1')</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('page.sort','jacket')}}">Jackets</a>
                      <a class="dropdown-item" href="{{route('page.sort','pant')}}">Pants</a>
                      <a class="dropdown-item" href="{{route('page.sort','sweater')}}">Sweaters</a>
                      <a class="dropdown-item" href="{{route('page.sort','dress')}}">Dresses</a>
                      <a class="dropdown-item" href="{{route('page.sort','skirt')}}">Skirts</a>
                      <a class="dropdown-item" href="{{route('page.sort','shoes')}}">Shoes</a>
                    </div>
                  </li>



            </ul>



            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <!-- Authentication Links -->
                    <form class="form-inline  my-lg-1 " style="display: flex;" method="GET" action="{{route('page.search')}}">
                        <input name="query" class="form-control mr-sm-2 mx-4" type="search" placeholder="Model Name, Texture, Color or Size" aria-label="Search" style="font-size: 0.7rem; width:13rem">
                        <button class="btn btn-outline-primary my-2 my-sm-0  " type="submit" style="border:2px solid ;box-shadow:1px 1px 10px blue;">Search</button>
                    </form>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                  <li class="nav-item my-1" style="display: flex">
                    <a id="shopping" style="cursor: pointer" href="{{route('carts.index')}}"><img src={{asset('image/shopping-bags.svg')}} style="height:35px ; width:50px"></a>
                  </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(Auth::id())
                             @if(Auth::user()->role_id == 1)
                               <a class="dropdown-item" href="{{url('/products/create')}}">add new product</a>
                               <a class="dropdown-item" href="{{url('/users')}}">Users</a>

                               <a class="nav-link" href="{{route('invoice.index')}}">All Invoices</a>

                               @elseif(Auth::user()->role_id == 2)
                                 <a class="nav-link" href="{{route('invoice.index')}}">Your Invoices</a>

                             @endif
                             @endif


                          <div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                          </div>

                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
    <main class="py-4 mainDiv">
        @yield('content')
  </main>
  <footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #3b5998;"
          href="#!"
          role="button"
          ><i class="fa fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          ><i class="fa fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #dd4b39;"
          href="#!"
          role="button"
          ><i class="fa fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #ac2bac;"
          href="#!"
          role="button"
          ><i class="fa fa-instagram"></i
        ></a>


      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="#">SSS.com</a>
    </div>
    <!-- Copyright -->
  </footer>







    <!--JS-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
   integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
   integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>


</body>
</html>

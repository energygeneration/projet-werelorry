<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet-soutenance</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
  </head>
  <body>

    <div class="page">
          <div class="bg-color">
               <div class="container">
                   <div class="d-flex flex-row-reverse ">
                       <div class="p-2 "> <img src="assets/img/Facebook.png" alt=""> </div>
                       <div class="p-2 "> <img src="assets/img/Linkedin.png" alt=""> </div>
                       <div class="p-2 "> <img src="assets/img/WhatsApp.png" alt=""> </div>
                   </div>
               </div>
           </div>
           <nav class=" navbar navbar-expand-lg bg-light shadow ">
               <div class="container">

                   <a class="navbar-brand logo" href="#">WÉRÉLORRY</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                       <ul class="navbar-nav mx-auto mb-2  mb-lg-0">
                           <li class="nav-item">
                           <a class="nav-link " href="{{route('ACCEUIL')}}">ACCEUIL</a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link "href="#team">FONCTIONNEMENT</a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link " href="{{route('APROPOS')}}">APROPOS</a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link " href="#contact">CONTACT</a>
                           </li>
                       </ul>
                       <form class="d-flex">
                                @if (Route::has('login'))
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                                            <button class="btn btn-outline-success boutton" type="button">  S'INSCRIRE</button>
                                        </a>
                                    @endif
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                                        <button type="button" class="btn btn-primary boutton ms-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">CONNECTER</button>
                                    </a>

                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                               @endif
                      </form>
                   </div>
               </div>
          </nav>
   </div>

   @yield('content')

      @include('footer')
       <script src="./acceuil.js"></script>
  <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>

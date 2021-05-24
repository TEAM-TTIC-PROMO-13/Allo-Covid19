<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8">
        <link rel="stylesheet" title="bootstrap" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
              integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
              crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
                crossorigin="anonymous">
        </script>

        <title>@yield('title')</title>

    </head>

    <body>

        <header class="my-2 py-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top my-2 py-2">
                <a class="navbar-brand" href="#"><img src="../../logo allô-covid/logo navbar rouge.png" width="150" height="40" class="d-inline-block align-top" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul>
                </div>
            </nav>
        </header>

        <div class="container-fluid">

            @yield('content')

        </div>


        <footer class="container-fluid my-5  py-5 bg-secondary text-light">
            <div class="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 ">
                                <!-----place du logo fait par jerome------>
                                <div class="logo-part">
                                    <img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer" >
                                    <div >
                                        <h3>{{ "Allô Covid 19" }}</h3>
                                        <span class="animate-border border-black"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 px-4">
                                <h6> {{ "A propos de ce site-web" }}</h6>
                                <a href="#" class="btn-footer"> {{ "Plus d'informations" }} </a><br>
                                <a href="#" class="btn-footer"> {{ "Contactez-Nous" }} </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 px-4">
                                <h3> Help us</h3>
                                <div class="row ">
                                    <div class="col-md-6">
                                        <ul>
                                            <li> <a href="#"> {{ "Accueil" }}</a> </li>
                                            <li> <a href="#"> {{ "A propos" }}</a> </li>
                                            <li> <a href="#"> {{ "Service" }}</a> </li>
                                            <li> <a href="#"> {{ "Aide" }}</a> </li>
                                            <li> <a href="#"> {{ "Contacts" }}</a> </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 ">

                                <div class="footer-social-link">
                                    <h3>{{ "Follow us" }}</h3>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- End Social link -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>


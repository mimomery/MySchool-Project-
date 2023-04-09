<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <!--<h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>-->
            <img class="logoimg" src="img/logo.png"></img>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link  active">Acceuil</a>
                <a href="{{url('courses')}}" class="nav-item nav-link  ">Nos Ecole</a>
                 
                <div class="nav-item dropdown">
                    <a href="{{url('about')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">service</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{url('transport')}}" class="dropdown-item">TRANSPORT SCOLAIRE</a>
                        <a href="{{url('cafe')}}" class="dropdown-item">CAFÉTÉRIA – ICAFÉ</a>
                       
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{url('about')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">EXTRA</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{URL('associationdesparent')}}" class="dropdown-item">ASSOCIATION DES PARENTS D’ÉLÈVE</a>
                        <a href="{{url('bureaux')}}" class="dropdown-item">BUREAU DES ÉTUDIANTS</a>
                        <a href="{{URL('fourniture')}}" class="dropdown-item">Fournitures Scolaires 2022 – 2023</a>
                    </div>
                </div>
             
                <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            @guest
            @if (Route::has('login'))
                <a href="{{route('register')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscrire<i class="fa fa-arrow-right ms-3"></i></a>
            @endif
            @if (Route::has('register'))
            <a href="{{route('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Connexion<i class="fa fa-user ms-3"></i></a>
            @endif
            @else
            <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">{{ Auth::user()->name }}<i class="fa fa-user ms-3"></i></a>
            <a href="{{ route('logout') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion<i class="fa fa-arrow-right ms-3"></i></a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>
    </nav>
    <main>
    @yield('content')
    </main>
    
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Accès Rapide</h4>
                    <a class="btn btn-link" href="{{url('index')}}">Acceuil</a>
                    <a class="btn btn-link" href="{{url('courses')}}">Nos ECOLES</a>
                    <a class="btn btn-link" href="">SERVICE</a>
                    <a class="btn btn-link" href="">EXTRA</a>
                    <a class="btn btn-link" href="{{url('contact')}}">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Rue 123, Marrakech, Maroc</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 512 345678</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Support@myschool.ma</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallerie</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">S'inscrire</h4>
                    <p>Recevez chaque semaine les derniers Learn. à suivre !</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Saisissez votre e-mail">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="copyright">
                <div class="row">
                    <div>
                        &copy; <a class="border-bottom" href="{{url('/')}}">{{ config('app.name') }} {{ date('Y') }}</a>, tous les droits sont réservés.
                    </div>
                <!--<div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</body>
</html>
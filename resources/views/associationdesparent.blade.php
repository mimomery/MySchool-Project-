<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MYSCHOOL.</title>
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
    <!-- Spinner End -->


   
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <!--<h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>-->
            <img class="logoimg" src="img/logo.png"></img>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('index')}}" class="nav-item nav-link  ">Acceuil</a>
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
                        <a href="{{url('fourniture')}}" class="dropdown-item">Fournitures Scolaires 2022 – 2023</a>
                    </div>
                </div>
             
                <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{url('inscription')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscrire<i class="fa fa-arrow-right ms-3"></i></a>
            <a href="{{url('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block active">Connexion<i class="fa fa-user ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
 


    <!-- Navbar End -->

    <div class="container-fluid bg-primary py-5 mb-5 page-header-association">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">ASSOCIATION DES PARENTS</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{URL('associationdesparent')}}">EXTRA</a></li>
                            <li class="breadcrumb-item text-white " aria-current="page">ASSOCIATION DES PARENTS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> 
    <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                   
                    <h1 class="mb-4" id="scientigique"> </h1>
                    <p class="mb-4">
                    L’Association de Parents d’Élèves, comme son nom l’indique regroupe les parents des élèves dans une optique de collaboration lors des interventions parascolaires.</br>

Cette association est  constituée pour la première fois durant l’année scolaire 2015/2016. </br>Elle est constituée de 9 adhérents y compris un président, un vice-président, un secrétaire général, un vice-secrétaire général, un Trésorier, un Vice-Trésorier et des conseillers.</br> Sa constitution a pour but de :</br>

*Maintenir un lien entre l’administration du lycée et les familles,</br>
*Informer les parents sur l’actualité de l’école,</br>
*Accompagner les parents pour soutenir leur enfant,</br>
*Créer un champ d’échange et de partage pour les parents.</br>
      
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Accès Rapide</h4>
                    <a class="btn btn-link" href="">Acceuil</a>
                    <a class="btn btn-link" href="">Nos Cours</a>
                    <a class="btn btn-link" href="">A Propos</a>
                    <a class="btn btn-link" href="">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Rue 123, Marrakech, Maroc</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 512 345678</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>MYSCHOOL@learn.com</p>
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
                        &copy; <a class="border-bottom" href="#">MYSCHOOL. 2023</a>, tous les droits sont réservés.
                    </div>
                <!--<div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Acceuil</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
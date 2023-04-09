<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MYSCHOOL</title>
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
                <a href="{{url('courses')}}" class="nav-item nav-link ">Nos Ecole</a>
                 
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
                        <a href="{{URL('bureaux')}}" class="dropdown-item">BUREAU DES ÉTUDIANTS</a>
                        <a href="{{URL('fourniture')}}" class="dropdown-item">Fournitures Scolaires 2022 – 2023</a>
                    </div>
                </div>
             
                <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{url('inscription')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block ACTIVE">Inscrire<i class="fa fa-arrow-right ms-3"></i></a>
            <a href="{{url('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Connexion<i class="fa fa-user ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">inscription</h6>
                <h1 class="mb-5">S'inscrire</h1>
            </div>
            <div class="row g-4" >
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form class="form-inline" method="POST" action="{{route('store')}}">
                        @csrf
                        <div class="row g-3">
                            
                        <h6>En quel niveau souhaitez-vous inscrire votre enfant ?</h6>

                            <select name="level" id="level" class="form-control">
<optgroup label="Matternelle ">
<option value="Matternelle-Petitsection" >Matternelle-Petit section</option>
<option value="Matternelle-Moyennesection">Matternelle-Moyenne section</option>
<option value="Matternelle-Grandesection">Matternelle-Grande section</option>
</optgroup>
<optgroup label="Primaire">
<option value="chine">Primaire-CE1</option>
<option value="japon">Primaire-CE2</option>
<option value="chine">Primaire-CE3</option>
<option value="japon">Primaire-CE4</option>
<option value="chine">Primaire-CE5</option>
<option value="japon">Primaire-CE6</option>
</optgroup>
<optgroup label="Collége">
<option value="chine">Collége-1ére année collége</option>
<option value="japon">Collége-2éme année collége</option>
<option value="chine">Collége-3éme année collége</option>
 
</optgroup>
<optgroup label="Lycee">
<option value="chine">Tronc commun </option>
<option value="japon">1ére année Baccalauréat- Economie</option>
<option value="japon">1ére année Baccalauréat- Science Expérimentale</option>
<option value="japon">1ére année Baccalauréat- Science Mathematique </option>
<option value="japon">2éme année Baccalauréat- Economie</option>
<option value="japon">2éme année Baccalauréat- Science Mathematique A</option>
<option value="japon">2éme année Baccalauréat- Science Mathematique B</option>
<option value="japon">2éme année Baccalauréat- Science Physique </option>
<option value="japon">2éme année Baccalauréat- Science de la vie de la terre</option>
 
 
</optgroup>
</select>
                            
                              <br>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="nomeleve" class="form-control" id="nomeleve" placeholder="Nom" name="nomeleve">
                                    <label for="nomeleve">Nom Élève
</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="prenomeleve" class="form-control" id="prenomeleve" placeholder="Prénom" name="prenomeleve">
                                    <label for="prenomeleve">Prénom Élève</label>
                                </div>
                            </div>
                        
                  
                            <div class="col-md-6 form-check ">
                                <input class="form-check-input" type="radio" name="sexe" id="fille" value="option1">
                                <label class="form-check-label" for="sexe">fille</label>
                              </div>
                              <div class="col-md-6 form-check">
                                <input class="form-check-input" type="radio" name="sexe" id="garcon" value="option2">
                                <label class="form-check-label" for="sexe">garçon</label>
                              </div>
                              <br>
                              <div class="col-12">
                                <div class="form-floating">
                                    <input  class="form-control" id="etablisement"  name="etablisement" placeholder="Gsm">
                                    <label for="etablisement">Établissement de provenance

</label>
                                </div>
                                
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="date" name="date" placeholder="date de naissance">
                                    <label for="date">date de naissance

</label>
                                </div>
                                
                            </div>
 
                              <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                                    <label for="nom">Nom Tuteur

</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="prenom" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                                    <label for="prenom">Prénom Tuteur
</label>
                                </div>
                            </div>
                               <div class="col-12">
                                <div class="form-floating">
                                    <input type="tele" class="form-control" id="tele" name="tele" placeholder="Gsm">
                                    <label for="tele">Téléphone Tuteur
</label>
                                </div>
                            </div> <div class="col-12">
                                <div class="form-floating">
                                    <input type="adresse" class="form-control" id="adresse" name="adresse" placeholder="Gsm">
                                    <label for="adresse">Adresse Tuteur
</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="profession" class="form-control" id="profession" name="profession" placeholder="Gsm">
                                    <label for="profession">Profession Tuteur
</label>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Email Tuteur
</label>
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" >inscription</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i> MYSCHOOL@learn.com</p>
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
                        &copy; <a class="border-bottom" href="#">Learn. 2022</a>, tous les droits sont réservés.
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
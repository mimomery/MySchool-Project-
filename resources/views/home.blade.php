@extends('layouts.app')

@section('content')
<section>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">MY SCHOOL</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Depuis leur création en 1986, les écoles MYSCHOOL se sont engagées à donner aux enfants le goût d’apprendre dans un environnement épanouissant de la maternelle jusqu’aux classes préparatoires.</p>
                                <a href="{{url('courses')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lire la suite ...</a>
                                <a href="{{url('inscription')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">S'Inscrire Gratuitement</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">INSCRIPTION OUVERTE 2022/2023</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Maternelle Primaire College Lycee</p>
                                <a href="{{url('courses')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lire la suite ...</a>
                                <a href="{{url('login')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Se Connecter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">+270 Enseignants</h5>
                            <p>& PERSONNEL PÉDAGOGIQUE ET ADMINISTRATIF</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">+30 Ans </h5>
                            <p>DEPUIS 1990 d'expérience dans un environnement épanouissant </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">4 ÉCOLE</h5>
                            <p>LE PLUS GRAND RÉSEAU D’ÉCOLE À MARRAKECH</p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x bi-card-checklist text-primary mb-4"></i>
                            <h5 class="mb-3">Certification délivrée</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Nos ecole</h6>
                    <h1 class="mb-4">En savoir plus sur nous ?</h1>
                    <p class="mb-4">
                        Depuis 1998, nous travaillons fort pour pousser nos élèves à devenir épanouis, curieux, autonomes, responsables, capables d’apprendre dans le respect de l’autre. Et ce, grâce à une pédagogie active et une équipe éducative dynamique et motivée.Nous accompagnons chaque enfant vers la réussite scolaire et personnelle de la petite section jusqu’à la 6ème année.Nos enseignants font preuve de beaucoup de sérieux et d’implication quant à l’éducation et la formation des citoyens de demain. Des formations ponctuelles sont établies au profit de nos instituteurs afin de garantir aux parents une éducation de qualité et qui va de pair avec le développement de l’enseignement.
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Maternelle</p>
                        </div>
                        
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Primaire</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>College</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lycee</p>
                        </div>
                        
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{url('courses')}}">Lire la suite ...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->

        <div class="container-xxl py-5 category">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                    <h1 class="mb-5">Cours Categories</h1>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 col-md-6">
                        <div class="row g-3">
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="img/matternelle.png" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">Maternelle</h5>
                                        <small class="text-primary">50 Etudiant</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="img/primaire.png" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">Primaire</h5>
                                        <small class="text-primary">90 Etudiant</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="img/college.png" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">college</h5>
                                        <small class="text-primary">78 Etudiant</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/lycee.png" alt="" style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                                <h5 class="m-0">Lycee</h5>
                                <small class="text-primary">111 Etudiant</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Start -->


        <!-- Cours Start -->
        <!--<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Cours</h6>
                    <h1 class="mb-5">Cours populaires</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/course-1.jpg" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Lire la suite</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Accéder au cours</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Etudiants</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/course-2.jpg" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Lire la suite</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Accéder au cours</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Etudiants</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/course-3.jpg" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Lire la suite</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Accéder au cours</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Etudiants</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Cours End -->


        <!-- Team Start -->
        <!--
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                    <h1 class="mb-5">Expert Instructors</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Instructor Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Instructor Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Instructor Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Instructor Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                    <h1 class="mb-5">Commentaires !</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                        <h5 class="mb-0">iman khair</h5>
                        <p>Ancienne Etudiante </p>
                        <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">A tous, un grand merci pour votre investissement et votre soutien à notre fils durant ses années passées dans votre établissement. Il y a trouvé un encadrement pédagogique professionnel qui lui a permis de se développer, d’y trouver du plaisir et de réussir. </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                        <h5 class="mb-0">RAYAN ELHILALI</h5>
                        <p>Enseignant</p>
                        <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"> 
                        Dans notre école MYSCHOOL, l’enfant est placé au centre de nos priorités, nous le motivons pour qu’il s’engage dans la démarche d’apprentissage, pour qu’il s’approprie réellement le savoir qu’on lui transmet. nous apprenons dans un cadre convivial où la relation entre enseignant et élève est au top. </div>
                    </div>
                    <!--<div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                        <h5 class="mb-0">HIBA ABDERAZAK </h5>
                        <p>Profession</p>
                        <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>-->
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/PARENT.png" style="width: 80px; height: 80px;">
                        <h5 class="mb-0">ABDELALI ZOUHAIR</h5>
                        <p> Parent </p>
                        <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Ce que je retiens de mon parcours à MYSCHOOL, c’est qu’ils m’ont donné ma chance d’apprendre avec plaisir en mettant à disposition tous les outils et moyens nécessaires pour réussir. Je ne les remercierai jamais assez pour cela et je suis fière d’y avoir étudié.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- Testimonial End -->
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>my pharmacy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="m-0"><img class="img-fluid" src="img/logos.png" alt=""></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link ">acceuil</a>
                        <a href="about" class="nav-item nav-link">à propos</a>
                        <a href="joinus" class="nav-item nav-link active">rejoignez-nous</a>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>-->
                    <a href="/login" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">se connecter</a>
                </div>
            </nav>

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">rejoignez-nous</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">acceuil</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">rejoignez-nous</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="container-xxl py-5">
                    <div class="container px-lg-5">
                        <div class="row g-4 portfolio-container"  style=" margin-left: 200px; margin-right: auto;">
                            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/user.png" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light"  onclick="switchVisible()" ><i class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>s'inscrire</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Client</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/addpharmacy.png" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light" onclick="switchVisible()"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>s'incrire</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Pharmacie</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form id="addclient" action="/joinus" method="POST" >
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"  name="name"placeholder="votre nom complet">
                                            <label for="name"> nom complet </label>
                                        </div>
                                    </div> 
                                   <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="Bdate"  name="Bdate"placeholder="entrer votre date de naissance" min="1980-01-01" max="2004-12-31">
                                            <label for="date">date de naissance</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"  name="email" placeholder="entrer votre email" >
                                            <label for="email"> email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="mdp"  name="mdp" placeholder="motdepasse">
                                            <label for="mdp">mot de passe</label>
                                        </div>
                                    </div> 
                                       <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="cin"  name="cin" placeholder="entrer votre cin">
                                            <label for="cin">CIN</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="adress"  name="adresse" placeholder="adresse">
                                            <label for="adress">Adresse</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="ville"  name="ville" placeholder="ville">
                                            <label for="ville">ville</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="num"   name="num" placeholder="code">
                                            <label for="code">numero du telephone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="quartier"  name="quartier" placeholder="quartier">
                                            <label for="name">Quartier</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="code"  name="cp"  placeholder="num">
                                            <label for="num">code postale</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">s'inscrire</button>
                                    </div>
                                </div>
                            </form>
                            <form id="addpharmacy" action="/about" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="nom ">
                                            <label for="name"> nom de la pharmacie  </label>
                                        </div>
                                    </div> 
                                   <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"  name="dr" placeholder="docteurR" >
                                            <label for="name">le docteur responsable</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"  placeholder="=email" >
                                            <label for="email"> email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="mdp" name="mdp"  placeholder="motdepasse">
                                            <label for="mdp">mot de passe</label>
                                        </div>
                                    </div> 
                                       <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="patente" name="patente"  placeholder="patente">
                                            <label for="cin">patente</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="adress"  name="adresse" placeholder="adresse">
                                            <label for="adress">Adresse</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="ville" name="ville"  placeholder="ville">
                                            <label for="ville">ville</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="num"  name="num" placeholder="num">
                                            <label for="code">numero du telephone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="quartier" name="quartier" placeholder="quartier">
                                            <label for="name">Quartier</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="code" name="cp"   placeholder="code">
                                            <label for="num">code postale</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="rc" name="rc"  placeholder="rc">
                                            <label for="ville">responsabilité civile</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">s'inscrire</button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
      <!--  Service End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Contactez-nous</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>essaouira , maroc</p>
                        <p><i class="fa fa-phone-alt me-3"></i>0637780037</p>
                        <p><i class="fa fa-envelope me-3"></i>contact@allmersolution.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="about">à propos</a>
                        <a class="btn btn-link" href="contact">Contactez-nous</a>
                        <a class="btn btn-link" href="regoin">rejoignez-nous</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <img class="img-fluid" src="img/Logo.png" alt="Image">
        
                    </div>

                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">MY pharmacy</a>, All Right Reserved to ALLMER SOLUTIONS .
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MY pharmacy</title>
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
                        <a href="/" class="nav-item nav-link active">acceuil</a>
                        <a href="about" class="nav-item nav-link">à propos</a>
                        <a href="joinus" class="nav-item nav-link">rejoignez-nous</a>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                   <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>-->
                    <a href="/login" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">se connecter</a>
                </div>
            </nav>

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Recherche d'une pharmacie à proximité</h1>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="entrer votre adresse" style="height: 48px;">
                               <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-map-marker-alt me-3"></i>
                                </button>
                                <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Map</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/" method="post">
                                                @csrf
                                                <div class="mapform" >
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
                                                        </div>
                                                        <div class="col-5">
                                                            <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
                                                        </div>
                                                    </div>
                                    
                                                    <div id="map" style="height:400px; width: auto;" class="my-3"></div>
                                    
                                                    <script>
                                                        let map;
                                                        function initMap() {
                                                            map = new google.maps.Map(document.getElementById("map"), {
                                                                center: { lat: -34.397, lng: 150.644 },
                                                                zoom: 8,
                                                                scrollwheel: true,
                                                            });
                                                            const uluru = { lat: -34.397, lng: 150.644 };
                                                            let marker = new google.maps.Marker({
                                                                position: uluru,
                                                                map: map,
                                                                draggable: true
                                                            });
                                                            google.maps.event.addListener(marker,'position_changed',
                                                                function (){
                                                                    let lat = marker.position.lat()
                                                                    let lng = marker.position.lng()
                                                                    $('#lat').val(lat)
                                                                    $('#lng').val(lng)
                                                                })
                                                            google.maps.event.addListener(map,'click',
                                                            function (event){
                                                                pos = event.latLng
                                                                marker.setPosition(pos)
                                                            })
                                                        }
                                                    </script>
                                                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
                                                            type="text/javascript"></script>
                                                </div>
                                    
                                                <div class="col-6">
                                                    <button class="btn btn-primary w-100 py-3" type="submit">confirmez l'adresse</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
                                        </div>
                                    </div>
                                </div>
                           </div>
  
                                

                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


         <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">les pharmacies à proximité</h6>
                    <h2 class="mt-2">pharmacies proches</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            
                            <a href="pharmacy"><div class="px-4 py-3 ">
                            <div class="d-flex">
                                <img class="img-fluid rounded w-100"  src="img/team-1.png" alt="">
                            </div>
                                <h5 class="fw-bold m-0">Pharmacie ashifaa</h5>
                                <small>425, tr4 lalagune essaouira maroc</small>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">

                            <a  href="pharmacy"> <div class="px-4 py-3">
                            <div class="d-flex">
                               <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                            </div>
                                <h5 class="fw-bold m-0">pharmacie AL BOUHAIRA</h5>
                                <small>400 tranche4 la lagune , essaouira, maroc</small>
                            </div>
                        </div></a> 
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">

                            <a  href="pharmacy"><div class="px-4 py-3">
                            <div class="d-flex" >
                                 <img class="img-fluid rounded " src="img/team-3.jpeg" alt="">
                            </div>
                                <h5 class="fw-bold m-0">Pharmacie ESSAQALA</h5>
                                <small>254, essegala , essaouira maroc</small>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">à propos de nous</h6>
                            <h2 class="mt-2">notre projet</h2>
                        </div>
                        <p class="mb-4">Face aux difficultés que les gens confortent lorsqu'ils ont besoin d'une pharmacie ou pour trouver les pharmacies de garde les plus proches ; et après l'émergence de la pandémie de Covid, il s'avère que parmi les professions du secteur médical qui doivent entamer la transformation digitale, et les pharmacies se situent les en première ligne.<br> 
                            Pour ces raisons, ALLMER SOLUTIONS a opté pour le développement d'une plateforme intermédiaire entre les pharmacies et les clients, qui aide ces derniers à trouver facilement et en quelques secondes les pharmacies les plus proches, en minimisant leurs efforts et le plus rapidement possible grâce à la fonction de proximité.  Et en même temps, sert à gérer le processus des demandes des intéressés.</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>accès a toutes les pharmacie proches</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>chercher/commander des medicaments</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 ouvert</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>livraison rapide</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Service Start --> 
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mt-2">rejoignez-nous</h2>
                </div>
                <div class="row g-4" style="margin-left:35% ;">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s" style="width: 45%;">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Client ou pharmacie</h5>
                            <p>créez un compte maintenant et rejoignez-nous</p>
                            <a class="btn px-3 mt-auto mx-auto" href="joinus">Inscrivez-vous</a>
                        </div>
                    </div>
                   
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
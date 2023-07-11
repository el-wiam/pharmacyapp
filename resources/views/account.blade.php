<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>My Pharmacie</title>
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
   <link rel="stylesheet" href="css/mdi/css/materialdesignicons.min.css" />
   <link href="lib/animate/animate.min.css" rel="stylesheet">
   <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

   <!-- Customized Bootstrap Stylesheet -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="css/style.css" rel="stylesheet">
</head>

<body id="commandes">
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
                     <a href="/" class="nav-item nav-link">acceuil</a>
                     <a href="/commande" class="nav-item nav-link "> mes Commandes</a>
                     <a href="/account" class="nav-item nav-link"> mon compte</a>
                     <a href="/cart" class="nav-item nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                     
                </div>
                <a href="/" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">se deconnecter</a>
            </div>
        </nav>

         <div class="container-fluid py-5 bg-primary hero-header mb-4">
            <div class="container my-5 py-5 px-lg-5">
               <div class="row g-5 py-5">
                  <div class="col-12 text-center">
                     <h1 class="text-white animated zoomIn">Gestion du compte</h1>
                     <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                  </div>
               </div>
               <div class="row g-5 p-5"></div>
               <div class="row g-5 p-5"></div>
            </div>
         </div>
      </div>
      <!-- Navbar & Hero End -->
       
            <!--MAIN START-->
      <div class="container-xxl py-5 text-dark">
        <div class="container ">
           <div class="row justify-content-center">
              <div class="col-lg-7">
                 <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="position-relative d-inline text-primary ps-4">Vos Informations</h4>
                </div>
                 <form>
                    <div class="row g-3 text-dark">
                       <div class="col-12">
                          <div class="form-floating">
                             <input type="text" class="form-control" id="nomphar" readonly style="background-color: white;" value="wiam">
                             <label for="nomphar">Nom</label>
                          </div>
                       </div>
                       <div class="col-12">
                        <div class="form-floating">
                           <input type="text" class="form-control" id="nomphar" readonly style="background-color: white;" value="12/05/2000">
                           <label for="nomphar">date de naissance</label>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-floating">
                           <input type="cin" class="form-control" id="telphar" readonly 
                           style="background-color: white;" value="n47147">
                           <label for="telphar">CIN</label>
                        </div>
                     </div>
                       <div class="col-12">
                          <div class="form-floating">
                             <input type="tel" class="form-control" id="telphar" readonly 
                             style="background-color: white;" value="01472586">
                             <label for="telphar">numero de telephone</label>
                          </div>
                       </div>
                       <div class="col-6">
                          <div class="form-floating">
                             <input type="text" class="form-control" id="telphar" readonly 
                             style="background-color: white;" value="essaouira">
                             <label for="telphar">Ville</label>
                          </div>
                       </div>
                       <div class="col-6">
                          <div class="form-floating">
                             <input type="text" class="form-control" id="telphar" readonly 
                             style="background-color: white;" value="lalagune">
                             <label for="telphar">Quartier</label>
                          </div>
                       </div>
                       <div class="col-6">
                          <div class="form-floating">
                             <input type="text" class="form-control" id="telphar" readonly 
                             style="background-color: white;" value="maroc">
                             <label for="telphar">Addresse</label>
                          </div>
                       </div>
                       <div class="col-6">
                          <div class="form-floating">
                             <input type="number" class="form-control" id="telphar" readonly 
                             style="background-color: white;" value="401111">
                             <label for="telphar">Code postale</label>
                          </div>
                       </div>
                       <div class="col-12">
                          <div class="form-floating">
                             <input type="email" class="form-control" id="emailphar" readonly  style="background-color: white;" value="test@gmail.com">
                             <label for="emailphar">Email</label>
                          </div>
                       </div>
                       <div class="col-12">
                          <div class="form-floating">
                             <input type="password" class="form-control" id="mdpphar" style="background-color: white;" value="sshfsohtljesn">
                             <label for="mdpphar">Mot de passe</label>
                          </div>
                       </div>
                       <div class="col-6">
                          <button type="submit" class="btn btn-primary w-100 py-3" data-mdb-ripple-color="dark">Modifier</button>
                       </div>
                       <div class="col-6">
                          <button type="submit" class="btn btn-primary w-100 py-3" data-mdb-ripple-color="dark">Supprimer</button>
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
     <!--MAIN END-->

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
   <script src="js/html5-qrcode.min.js"></script>
   
   <!-- Template Javascript -->
   <script src="js/main.js"></script>
</body>

</html>
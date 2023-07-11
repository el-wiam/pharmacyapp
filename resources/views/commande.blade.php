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
                     <h1 class="text-white animated zoomIn">Gestion des commandes</h1>
                     <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                  </div>
               </div>
               <div class="row g-5 p-5"></div>
               <div class="row g-5 p-5"></div>
            </div>
         </div>
      </div>
      <!-- Navbar & Hero End -->
       

      <!-- Full Screen Search Start -->
      <div class="modal fade" id="searchModal" tabindex="-1">
         <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
               <div class="modal-header border-0">
                  <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body d-flex align-items-center justify-content-center">
                  <div class="input-group" style="max-width: 600px;">
                     <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                     <button class="btn btn-light px-4">
                        <i class="bi bi-search"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Full Screen Search End -->
 <!-- Contact Start -->
 <div class="container-xxl py-5 text-dark">
   <div class="container "> 
      <div class="table-responsive m-0 ">
         <table class="table table-hover">
            <thead>
               <tr>
                  <th>Code</th>
                  <th>Nombre produits</th>
                  <th>Total</th>
                  <th>Date</th>
                  <th>Status</th>
               </tr>
            </thead>
            <tbody id="thetbody">
               <tr type="button" id="1">
                  <td>12457</td>
                  <td>2</td>
                  <td>132dh</td>
                  <td>2022/5/01</td>
                  <td>
                     <label class="badge badge-warning" style="color: green">reussite</label>
                  </td>
               </tr>
               <tr type="button"  id="2">
                  <td>1245</td>
                  <td>2</td>
                  <td>132dh</td>
                  <td>2022/01/02</td>
                  <td>
                     <label class="badge badge-warning" style="color: green">reussite</label>
                  </td>
               </tr>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- Contact End -->
<div class="modal fade" id="commandModal" tabindex="-1" aria-labelledby="commandModalLabel" aria-hidden="true" >
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title position-relative d-inline text-primary ps-4">Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form>
               <div class="row g-3 text-dark">
                  <div class="col-12">
                     <div class="form-floating">
                        <input type="text" class="form-control "  id="codecomm"
                        readonly style="background-color: white;">
                        <label for="codecomm">Code</label>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-floating">
                        <input type="number" class="form-control" id="nomprod" readonly style="background-color: white;">
                        <label for="nomprod">Nombre produits</label>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th></th>
                                 <th>Code du produit</th>
                                 <th>designation</th>
                                 <th>Prix</th>
                                 <th>Forme</th>
                                 <th>Quantité</th>
                              </tr>
                           </thead>
                           <tbody id="produits">
                           
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-floating">
                        <input type="number" class="form-control" id="total" readonly  style="background-color: white;">
                        <label for="total">Total</label>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-floating">
                        <input type="date" class="form-control" id="datecomm" readonly  style="background-color: white;">
                        <label for="datecomm">Date</label>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-floating">
                        <input type="text" class="form-control" id="status" readonly  style="background-color: white;">
                        <label for="datecomm">status</label>
                     </div>
                  </div>            
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
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
<?php
                            require '../Controller/commentsC.php';
                           

                            session_start();
                            $id=$_GET["id"];
                          $CommentsC = new commentsC();
                            $Comments = $CommentsC->afficherTcomments($id);
                        ?>

<html lang="en">
    
    
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Diversify | Design Agency Landing Page UI</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/assets/img/favicons/favicon.png">
    <link rel="manifest" href="../assets/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../css/style6.css">



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../assets/assets/css/theme.css" rel="stylesheet" />

  


</head>



    <body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="../assets/assets/img/logo.svg" height="31" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Evenement</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#validation">Sponsors</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#superhero">Reservation</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#marketing">Reclamation</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#marketing"> Profil</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="./forum.php"> Forum</a></li>

            </ul>
            <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="#!">Se Connecter</a><a class="btn btn-warning ms-3" href="#!">Deconnecter</a></div>
          </div>
        </div>
      </nav>
      
       







<br><br><br><br><br><br><br><br><br>
<h1 class="heading"> <a href="ajoutercomment.php?id=<?php echo $id; ?>">Ajouter comment </a></h1>

<div class="posts-table">
            <div class="table-head">
                <div class="status">Status</div>
                <div class="subjects">Subjects</div>

            </div> <?php 
                                $j=0;        
                                        foreach ($Comments as $Comments) {
                                $j++;
                                ?>
            <div class="table-row">
                <div class="status"><i class="fas fa-comment-alt"></i></div>
                <div class="subjects">
               
                            <?php echo $Comments['contenu'] ; ?>
                          
                </div>

            </div>
            <?php
                                        }
                                ?>
            
        </div>





  
        <br><br><br><br><br><br><br><br>

 
        <section class="pb-2 pb-lg-5">

<div class="container">
  <div class="row border-top border-top-secondary pt-7">
    <div class="col-lg-3 col-md-6 mb-4 mb-md-6 mb-lg-0 mb-sm-2 order-1 order-md-1 order-lg-1"><img class="mb-4" src="../assets/assets/img/logo.svg" width="184" alt="" /></div>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-3 order-md-3 order-lg-2">
      <p class="fs-2 mb-lg-4">Quick Links</p>
      <ul class="list-unstyled mb-0">
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">About us</a></li>
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Blog</a></li>
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Contact</a></li>
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">FAQ</a></li>
      </ul>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-4 order-md-4 order-lg-3">
      <p class="fs-2 mb-lg-4">Legal stuff</p>
      <ul class="list-unstyled mb-0">
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Disclaimer</a></li>
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Financing</a></li>
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Privacy Policy</a></li>
        <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Terms of Service</a></li>
      </ul>
    </div>
    <div class="col-lg-3 col-md-6 col-6 mb-4 mb-lg-0 order-2 order-md-2 order-lg-4">
      <p class="fs-2 mb-lg-4">
        knowing you're always on the best energy deal.</p>
      <form class="mb-3">
        <input class="form-control" type="email" placeholder="Enter your phone Number" aria-label="phone" />
      </form>
      <button class="btn btn-warning fw-medium py-1">Sign up Now</button>
    </div>
  </div>
</div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="text-center py-0">

<div class="container">
  <div class="container border-top py-3">
    <div class="row justify-content-between">
      <div class="col-12 col-md-auto mb-1 mb-md-0">
        <p class="mb-0">&copy; 2022 Your Company Inc </p>
      </div>
      <div class="col-12 col-md-auto">
        <p class="mb-0">
          Made with<span class="fas fa-heart mx-1 text-danger"> </span>by <a class="text-decoration-none ms-1" href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
      </div>
    </div>
  </div>
</div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


<div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
  <iframe class="rounded" style="width:100%;height:500px;" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</div>


<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="../assets/vendors/@popperjs/popper.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap.min.js"></script>
<script src="../assets/vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="../assets/vendors/fontawesome/all.min.js"></script>
<script src="../assets/assets/js/theme.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="icon" type="image/gif/png" href="img/favicon-32.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>What We Do | Give Blood </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="50px" width="200px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
        include 'lastpost.php';
        ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="whoWeAre.php" style="font-size: 20px">Who we are |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="whatWeDo.php" style="font-size: 20px">What we do |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="howYouCanHelp.php" style="font-size: 20px">How you can help |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donateBlood.php" style="font-size: 20px">Donate Blood |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php?last=<?php echo $lastID;?>" style="font-size: 20px">Blog |</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">What We Do :
      <small>We save and transform lives</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">What we do</li>
    </ol>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/blood_service.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Blood services</a>
            </h4>
            <p class="card-text">From safely collecting and processing donations to caring for transfusion patients, we’re here every step of the way.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/transplant.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Transplantation services</a>
            </h4>
            <p class="card-text">We support and care for organ, tissue and stem cell donors and patients, and are helping more and more people every year.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/Therapeutic.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Therapeutic apheresis</a>
            </h4>
            <p class="card-text">These specialist services remove harmful, disease-forming proteins, chemicals or cells from patients’ blood.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/Diagnostic.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Diagnostic services</a>
            </h4>
            <p class="card-text">These vital clinical services help prevent adverse transplant and transfusion reactions.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/research.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Research </a>
            </h4>
            <p class="card-text">We’re developing new, pioneering products and services to improve patient health.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/Clinical.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Clinical trials</a>
            </h4>
            <p class="card-text">We facilitate clinical trials and influence clinical practice</p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-white">
    <div class="container">
      <p class="m-0 text-center text-black">Copyright &copy; www.giveblood.lk 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

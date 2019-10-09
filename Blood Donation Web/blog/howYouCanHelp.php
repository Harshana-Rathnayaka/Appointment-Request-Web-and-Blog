<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/gif/png" href="img/favicon-32.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>How You Can Help | Give Blood</title>

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
    <h1 class="mt-4 mb-3">How You Can Help :
      <small>Simple.. Donate Blood</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">How you can help</li>
    </ol>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/donor.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Register as a donor</a>
            </h4>
            <p class="card-text">Sadly, there are still lots of patients we can’t treat because we don’t have enough blood, organs, platelets or stem cells. But you can help us save more people by signing up to become a donor. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/fund.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Black, Asian and minority ethnic funding call</a>
            </h4>
            <p class="card-text">NHS Blood and Transplant is calling for applications for funding from community and faith-based organisations to positively engage local communities and increase support for organ donation among black, Asian and minority ethnic communities.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/promote.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Promote donation</a>
            </h4>
            <p class="card-text">Local support can really help us reach communities as well as the wider population. Find out more about how you can help promote donation, and access materials and advice to help you.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/patner.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Become a Patner</a>
            </h4>
            <p class="card-text">Partnerships with other organisations help us reach more people, increase the number of blood and organ donors, and save more lives. They are a vital part of our work. We’re always looking for new partners. If you can help, please get in touch.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/yourStory.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Tell your story </a>
            </h4>
            <p class="card-text">Have you given or received blood, organs, platelets, tissue or stem cells? If you’ve got a story and are happy to share it, you could help us inspire new donors and save more lives.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/ourTeam.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Join our Team</a>
            </h4>
            <p class="card-text">Embark on a new career that really lets you make a difference to other people’s lives. Working for us is a unique experience with </p>
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

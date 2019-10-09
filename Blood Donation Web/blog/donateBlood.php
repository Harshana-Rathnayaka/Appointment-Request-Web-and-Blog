<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/gif/png" href="img/favicon-32.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Donate Blood | Give Blood</title>

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
    <h1 class="mt-4 mb-3">Donate Blood and Help Save a Life!
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Donate Blood</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=6.8211,80.0409&amp;spn=56.506174,79.013672&amp;t=m&amp;z=10&amp;output=embed"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
          NSBM Green University,
          <br>Mahenwaththa,
          <br>Homagama
          <br>
        </p>
        <p>
          <abbr title="Phone">Telephone</abbr>: 011-2652852
        </p>
        <p>
          <abbr title="Email">E-mail</abbr>:
          <a href="mailto:name@example.com">support@giveblood.com
          </a>
        </p>
        <p>
          <abbr title="Hours">Hours</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Donation Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Request</h3>
        <form name="request" id="requestForm" action="Android/v1/registerUser.php" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your full name" required="">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Age:</label>
              <input type="age" class="form-control" name="age" placeholder="Enter your age" required="">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Address:</label>
              <input type="text" class="form-control" name="location" placeholder="Enter your address" required="">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Blood Group:</label>
              <input type="text" class="form-control" name="bloodGroup" placeholder="Enter your blood group" maxlength="4" required="">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" name="contact" maxlength="10" placeholder="Enter your phone number" required="">
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendRequestButton">Request</button>
        </form>

        <span id="result"></span>
<script src="js/jquery-2.2.3.min.js"></script>
    <script>
      $("#sendRequestButton").click(function(){
          $.post( $("#requestForm").attr("action"), $("#requestForm :input").serializeArray(), function(info){ $("#result").html(info); });
          clearInput();

      });

      $("#requestForm").submit(function(){
          return false;
      });

  </script>
      </div>

    </div>

    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-white">
    <div class="container">
      <p class="m-0 text-center text-black">Copyright &copy; www.giveblood.lk 2019</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/gif/png" href="img/favicon-32.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog | Give Blood</title>

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
    <h1 class="mt-4 mb-3">Interested?
      <small>See more of our work down below..</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->


          <?php
          $get=$_REQUEST['last'];
          $first=$get;
          $last=$first-4;

          include 'login/connection.php';
          $post=$db->query("SELECT * FROM Posts WHERE posts.P_ID BETWEEN $last AND $first ORDER BY posts.P_ID DESC");
          while ($postdata=$post->fetch_assoc()){
              ?>

              <div class="card mb-4">
                  <img class="card-img-top" src="img/blog_post/<?php echo $postdata['P_Link'];?>" alt="Card image cap">
                  <div class="card-body">
                      <h2 class="card-title"><?php echo $postdata['P_Title'];?></h2>
                      <p class="card-text"><?php echo $postdata['P_SDesc'];?></p>
                      <a href="#" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                      Posted on <?php echo $postdata['P_Date'];?> by
                      <!--<a href="#">Start Bootstrap</a>-->
                  </div>
              </div>
              <?php


          }
          ?>



          <?php
          include 'lastpost.php';
          $sendid=$lastID;
          if ($get==$lastID){
              $x=$sendid-4;
              ?>
              <ul class="pagination justify-content-center mb-4">
                  <li class="page-item ">
                      <a class="page-link" href="blog.php?last=<?php echo $x;?>">Next &rarr;</a>
                  </li>
              </ul>
              <?php
          }else{
               $x=$get-4;
               $y=$get+4;
            ?>
            <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
            <a class="page-link" href="blog.php?last=<?php echo $y;?>">&larr; Older</a>
            </li>
            <li class="page-item ">
            <a class="page-link" href="blog.php?last=<?php echo $x;?>">Newer &rarr;</a>
            </li>
            </ul>
            <?php
            }
            ?>
        <!-- Pagination -->


      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header" style="color:#901403;"> <strong>Search </strong></h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="color:#901403;"> <strong>Categories</strong></h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-10">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Donation Campaigns <br></a>
                  </li>
                  <li>
                    <a href="#">Public Awareness Programs <br></a>
                  </li>
                  <li>
                    <a href="#">Our Donors</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="color:#901403;"> <strong>Every Pint Matters </strong> </h5>
          <div class="card-body" style="color:#D81E05; font-family:Comic Sans MS;"><i>
            The Blood you donate gives someone another chance at life. One day that someone may be a close relative, a friend, a loved one-- or even you. </i>
          </div>
        </div>

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

</body>

</html>

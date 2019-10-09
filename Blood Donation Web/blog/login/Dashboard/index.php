<?php
session_start();
if(!$_SESSION['id'])
{
    $msg="Session Not Started";
    $type="danger";
    echo "<script>window.top.location='../index.php?msg=$msg&&type=$type'</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <?php
    require 'headerline.php';
    ?>

    <div class="container-fluid page-body-wrapper">

        <?php
        require 'sidemenu.php';
        ?>


        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">


                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><?php
                                        if(isset($_GET['msg'])) {echo "<h5>".$msg=$_GET['msg']."</h5>";}
                                        ?></h5>
                                    <div class="fluid-container">


                                        <?php
                                        $ID=$_SESSION['id'];
                                        include '../connection.php';
                                        $getall=$db->query("SELECT * FROM posts");
                                        while ($getpost=$getall->fetch_assoc()){
                                            ?>

                                            <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">

                                                <div class="ticket-details col-md-9">
                                                    <div class="d-flex">

<img src="../../img/blog_post/<?php echo $getpost['P_Link'];?>" width="150" height="150"/>
                                                    </div>
                                                    <p><?php echo $getpost['P_Title'];?>
                                                    </p>
                                                    <div class="row text-gray d-md-flex d-none">
                                                        <div class="col-4 d-flex">
                                                            <p>Time :</p>
                                                            <p><?php echo $getpost['P_Date'];?></p>
                                                        </div>
                                                        <div class="col-4 d-flex">
                                                            <p>Short Description :</p>
                                                            <br><br>
                                                            <p><?php echo $getpost['P_SDesc'];?></p>
                                                        </div>
                                                        <br>
                                                        <div class="col-4 d-flex">
                                                            <p>Long Description :</p>
                                                            <p><?php echo $getpost['P_LDesc'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ticket-actions col-md-2">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Manage
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="Delete/DeletePost.php?del=<?php echo $getpost['P_Link'];?>&&P_ID=<?php echo $getpost['P_ID'];?>">
                                                                <i class="fa fa-history fa-fw"></i>Delete</a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <?php
                                        }

                                        ?>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <?php
    require 'footer.php';
    ?>

</body>

</html>
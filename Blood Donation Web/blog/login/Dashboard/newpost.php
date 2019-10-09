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
    <title>New Post</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="css/style.css">


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

                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">New Post</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" action="Add/AddPost.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Title</label>
                                        <input type="text" name="Title" class="form-control" id="exampleInputName1">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Image</label>
                                        <input type="file" name="image" class="form-control" id="exampleInputPassword4">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleTextarea1">Short Description</label>
                                        <textarea name="sdes" class="form-control" id="exampleTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Long Description</label>
                                        <textarea name="ldes" class="form-control" id="exampleTextarea1" rows="3"></textarea>
                                    </div>
                                    <button id="btn" type="submit" class="btn btn-success mr-2">New Post</button>

                                </form>
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
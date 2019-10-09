<?php

$U_ID=$_REQUEST['ID'];

include '../../dbConnect.php';
$getpast=$db->query("SELECT * FROM users WHERE U_ID='$U_ID'");
$geturl=$getpast->fetch_assoc();
$delimg=$geturl['Pr_Link'];


$name=$_FILES["image"] ["name"];
$type=$_FILES["image"] ["type"];
$size=$_FILES["image"] ["size"];
$temp=$_FILES["image"] ["tmp_name"];
$error=$_FILES["image"] ["error"];

$path="../";
$extension=strtolower(substr($name,strpos($name, '.') + 1));
$img_No=rand();
$img_link=$img_No.".".$extension;

if(($extension=='png') || ($extension=='jpg') || ($extension=='jpeg') ) {

    if (move_uploaded_file($temp,'../images/'.$img_link)) {

        if ($delimg=="d/defult.png"){

        }else{
            unlink('../images/'.$delimg);
        }

        include '../../dbConnect.php';
        $insert=$db->query("UPDATE users SET Pr_Link='$img_link' WHERE U_ID='$U_ID'");

        if ($insert) {
             $ms = "Successfully Updated";
            echo "<script>window.top.location='../profile.php?msg=$ms'</script>";
        } else {
             $ms = "Something was Wrong! Please Contact System Developer";
            echo "<script>window.top.location='../profile.php?msg=$ms'</script>";
        }
    }else{
          $ms = "file Not moved to folder";
       echo "<script>window.top.location='../profile.php?msg=$ms'</script>";
    }
}
?>


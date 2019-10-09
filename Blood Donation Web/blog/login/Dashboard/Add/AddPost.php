<?php

$Title=$_POST['Title'];
$sdes=$_POST['sdes'];
$ldes=$_POST['ldes'];

$name=$_FILES["image"] ["name"];
$type=$_FILES["image"] ["type"];
$size=$_FILES["image"] ["size"];
$temp=$_FILES["image"] ["tmp_name"];
$error=$_FILES["image"] ["error"];


$extension=strtolower(substr($name,strpos($name, '.') + 1));
$img_No=rand();
$img_link=$img_No.".".$extension;

if (empty($Title) || empty($sdes) || empty($ldes) || empty($name)){
    $ms = "Can not send empty Data";
    echo "<script>window.top.location='../newpost.php?msg=$ms'</script>";
}else{


    if(($extension=='png') || ($extension=='jpg') || ($extension=='jpeg') ) {

        if (move_uploaded_file($temp,'../../../img/blog_post/'.$img_link)) {

            include '../../connection.php';
            $insert=$db->query("INSERT INTO posts(P_ID, P_Link,P_Title,P_SDesc,P_LDesc) VALUES ('','$img_link','$Title','$sdes','$ldes')");

            if ($insert) {
                $ms = "Successfully Uploaded";
                echo "<script>window.top.location='../index.php?msg=$ms'</script>";
            } else {
                $ms = "Something was Wrong! Please Contact System Developer";
                echo "<script>window.top.location='../newpost.php?msg=$ms'</script>";
            }
        }else{
            $ms = "file Not moved to folder";
            echo "<script>window.top.location='../newpost.php?msg=$ms'</script>";
        }
    }

}

?>
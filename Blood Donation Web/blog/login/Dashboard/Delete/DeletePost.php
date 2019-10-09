<?php
$P_ID=$_REQUEST['P_ID'];
$delimg=$_REQUEST['del'];
unlink('../../../img/blog_post/'.$delimg);
include '../../connection.php';
$delete=$db->query("DELETE FROM posts WHERE P_ID='$P_ID'");
if ($delete){
    $ms="Successfully Removed !!!";
    echo "<script>window.top.location='../index.php?msg=$ms'</script>";
}else{
    $ms="Something was Wrong,please try again";
    echo "<script>window.top.location='../index.php?msg=$ms'</script>";
}
?>
<?php

$username=$_POST['username'];
$password=$_POST['password'];

$e_pass=md5($password);

if (empty($username) || empty($password)){

    echo "All fields are required....";
}else{

    include 'connection.php';
    $check_Active=$db->query("SELECT * FROM users WHERE User_Name='$username' && Password='$e_pass'");
    $check_user=$check_Active->num_rows;
    if ($check_user==0){
        echo "Invalid User Details";
    }else{

        $check_Active_Status=$check_Active->fetch_assoc();

         session_start();
            if($_SESSION['id'] = $check_Active_Status['U_ID']){

                echo "<script language='javascript'>window.location.href='Dashboard/index.php'</script>";
            }else{
                $msg="Sessions not Started,please try again";
                echo "<script>window.top.location='index.php?msg=$msg'</script>";

            }






    }



}

?>


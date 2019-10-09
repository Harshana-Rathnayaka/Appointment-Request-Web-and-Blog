<?php

// change username into name when connecting to amazon

require_once '../includes/DbOperations.php';

//$response = array();

$name=$_POST['name'];
$age=$_POST['age'];
$location=$_POST['location'];
$bloodGroup=$_POST['bloodGroup'];
$contact=$_POST['contact'];

if($_SERVER['REQUEST_METHOD']=='POST'){

if (empty($name) || empty($age) || empty($location) || empty($bloodGroup) || empty($contact)){
    	echo '<script language="javascript">';
		echo 'alert("Please enter your details.")';
		echo '</script>';
}else{

	// we can enter data

	$db = new DbOperations();

	$result = $db->createRequest($_POST['name'], $_POST['age'], $_POST['location'], $_POST['bloodGroup'], $_POST['contact']);

	if($result == 1){
		//$response['error'] = false;
		echo "<script>
		alert('Request sent. Thank You for your interest, we will get back to you as soon as possible.');
		window.location.href='index.php';
		</script>";
		//echo '<script language="javascript">';
		//echo 'alert("Request sent. Thank You for your interest, we will get back to you as soon as possible.")';
		//echo '</script>';
		
	}elseif($result == 2){
		echo '<script language="javascript">';
		echo 'alert("Some error occured, please try again")';
		echo '</script>';
		//$response['error'] = true;
		//$response['message'] = "Some error occured, please try again";
	}
}

}else {
	echo '<script language="javascript">';
	echo 'alert("Invalid Request")';
	echo '</script>';
	//$response['error'] = true;
	//$response['message'] = "Invalid Request";

}

//echo json_encode($response);
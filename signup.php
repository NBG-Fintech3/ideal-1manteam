<?php


if(isset($_POST['sign'])){
	include_once 'db.php';
	
	$first = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
	
	//error handlers
	//check for empty fields
	
	if(empty($first) || empty($email) || empty($pass)){
		echo '<script type="text/javascript">alert("Parakalw sumplhrwste ola ta stoixeia sas");</script>';
		exit();
		
	}else{
		

					
					$sql = "INSERT INTO user (name, email, pass) VALUES ('$first','$email','$pass');";
					
					mysqli_query($mysqli, $sql);
					header("Location: ../base_pages_login.php");
					exit();		
	}
	
}else {
		header("Location: ../base_pages_login.php");
		exit();
		
}
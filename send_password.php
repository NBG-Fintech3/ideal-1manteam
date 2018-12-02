<?php

include 'db.php';


	$email = mysqli_real_escape_string($mysqli, $_POST['reminder-email']);
	$sql = "SELECT * FROM user WHERE email = '$email'";
	$res = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		echo '<script type="text/javascript">alert("Sou stelnw mail");</script>';
		$sql1 = "SELECT pass FROM user WHERE email = '$email'";
		
		$msg = "O kodikos sou einai : \n" .$sql1;
	}else{
		echo '<script type="text/javascript">alert("To email d uparxei");</script>';

	}
	





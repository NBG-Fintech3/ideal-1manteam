<?php
session_start();
if(isset($_POST['btn-login'])) {
	include 'db.php';
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
	if(empty($email) || empty($pass)){
		echo '<script type="text/javascript">alert("Sumplhrwste ta stoixeia sas");</script>';
		exit();		
	}else{
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($mysqli, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			             
			            $sql2 = "SELECT * FROM store WHERE email='$email'";
		                $result2 = mysqli_query($mysqli, $sql2);
		                $row2 = mysqli_fetch_assoc($result2);
			            $_SESSION['s_id'] = $row2['store_id'];
						$_SESSION['s_first'] = $row2['name'];
						$_SESSION['s_email'] = $row2['email'];
						$_SESSION['s_type'] = $row2['type'];
						header("Location: profilestore.php");							
		}
		else {
			if($row = mysqli_fetch_assoc($result)) {
				if(!($pass == $row['pass'])){
						echo '<script type="text/javascript">alert("To password einai la8os");</script>';
						exit();
					}else{
					//login the user here
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['name'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_type'] = $row['type'];
						if($_SESSION['u_type'] == "user"){
							header("Location: base_pages_dashboard.php");							
							exit();
						}
					}
				}
			}
		}
}else{
	exit();	
}







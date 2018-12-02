<?php
if(isset($_POST['cash'])){
	include_once 'db.php';
    $idu = mysqli_real_escape_string($mysqli, $_POST['name']);
    $ids = mysqli_real_escape_string($mysqli, $_POST['store']);
    $cost = mysqli_real_escape_string($mysqli, $_POST['cost']);
    $disc = mysqli_real_escape_string($mysqli, $_POST['disc']);
    
    $realcost = $cost*($disc/100);


  $return = $cost/$disc;
    
    $sql = "UPDATE user SET credits=credits + $realcost WHERE user_id = '$idu'";			
    mysqli_query($mysqli, $sql);

    $sql2 = "INSERT INTO market (user_id, store_id, datet,cost,type,returns) VALUES ('$idu','$ids',now(),'$cost','0','$return');";				
   mysqli_query($mysqli, $sql2);  

   $con=mysqli_connect("localhost","root","","ideal");
    $result = mysqli_query($con,"SELECT name FROM user where user_id = '$idu'");
    $row=mysqli_fetch_row($result);
    $user_name = $row[0];
      //header('Location: listpelates.php');
    $sql3 = "UPDATE market SET user_name= '$user_name';";				
   mysqli_query($mysqli, $sql3);


   $result2 = mysqli_query($con,"SELECT name FROM store where store_id = '$ids'");
    $row2=mysqli_fetch_row($result2);
    $store_name = $row[0];
      //header('Location: listpelates.php');
    $sql4 = "UPDATE market SET store_name= '$store_name';";				
   mysqli_query($mysqli, $sql4);
}
?>
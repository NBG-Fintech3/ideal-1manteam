<?php
if(isset($_POST['credit'])){
    include_once 'db.php';
    $idu = mysqli_real_escape_string($mysqli, $_POST['name']);
    $ids = mysqli_real_escape_string($mysqli, $_POST['store']);
    $cost = mysqli_real_escape_string($mysqli, $_POST['cost']);
    
    
    $sql = "UPDATE user SET credits=credits - $cost WHERE user_id = '$idu'";            
    mysqli_query($mysqli, $sql);

    $sql2 = "INSERT INTO market (user_id, store_id, datet,cost,type) VALUES ('$idu','$ids',now(),'$cost','1');";                
   mysqli_query($mysqli, $sql2);  


      //header('Location: listpelates.php');
    
}
?>
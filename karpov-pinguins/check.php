<?php 
// $_GET//ассоциативный массив  
    $username =$_POST["username"]; 
    $userage =$_POST["userage"]; 
    // echo"Привет, $userName! Твой возраст: $userAge лет"; 
    
    // if($userAge< 18){ header("Location:child.php");} 
    
    // else{ header("Location:adult.php");} 
    
    $useravatar = $_FILES['useravatar']; 
    $destination = "images/avatars/ ".$useravatar['name']; 
    $filename = $useravatar["tmp_name"]; 
    $check_upload = move_uploaded_file($filename,$destination); 
    var_dump($check_upload); 
?>
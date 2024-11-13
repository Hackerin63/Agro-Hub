<?php
  
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $que = $_POST['question']; 
    $feed = $_POST['feed']; 
   

    $con = new mysqli("localhost","root","","agro");
    if($con->connect_error){
        die('connection failed :' .$con->connect_error);
    }
    else{
       $sql="INSERT INTO `contact`(`name`, `email id`, `questions`, `feedback`) VALUES ('$name', '$email','$que','$feed')";
       $con->query($sql);
       echo "Message successfully sent";
    }
    
?>


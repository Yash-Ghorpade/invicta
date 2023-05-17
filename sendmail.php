<?php
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
     $name = $_POST['name'];
     $email = $_POST['email']; 
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $txt = "Name : ".$name." \nEmail : ".$email."\nMessage : ".$message;
    // More headers
    $headers .= 'From: <invicta2022.online>' . "\r\n";
     mail("mavericksbodhantra@gmail.com", $subject, $txt, $headers);
     header("location:index.html");
 }
?>
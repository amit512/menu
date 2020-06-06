<?php
//variable setting
$name =$_REQUEST ['name'];
$email=$_REQUEST['Email'];
$message=$_REQUEST['Movie name you want'];


//check input filds
if (empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the field";
}
else
{
    mail("rautamit930@gmail.com", "Movies on request", $message , "From: $name <
          $email>");
    echo "<script type='text/javascript'>alert('your message sent successfully. Thanks for visiting our website.');
           window.history.log(-1);
    </script>";
}
?>
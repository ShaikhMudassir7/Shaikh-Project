<?php
// declaring variables
    $name = $_REQUEST['name'];
    $mail = $_REQUEST['mail'];
    $message = $_REQUEST['message'];

// functionality of feedback form
     mail("send2shaikh@gmail.com", "Website feedback", $message, "From: $name <$email>");   
     echo "<script>alert('Your Message Sent Successfully To Shaikh');
     window.history.log(-1);</script>";

?>
<?php

//get all form values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if(!empty($email) && !empty($message)){ //if email and message field is not empty
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if user entered email is valid
        $receiver = "serviceinfopro02@gmail.com"; //email receiver email address
        $subject = "From $name <$email>"; //subject of the email
        //merging contacting all user values inside body variable. \n is used for new line
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message";
        $sender = "From: $email"; //sender email
        if(mail($receiver, $subject, $body, $sender)){ //mail() is a inbuilt php funtion to send mail
            echo "Your message was sent!";
        }else{
            echo "Sorry, failed to send your message!";
        }
    }else{
        echo "Enter a valid email address!";
    }
}else{
    echo "Email and Message field is required!";
}
?>
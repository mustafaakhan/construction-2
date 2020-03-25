<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $subject = $POST['subject'];
    $message = $POST['message'];

    
    $email_from = 'akhanmustafa5@gmail.com';
    $email_subject = 'new form submission';
    $email_body = "User Name: $name.\n".
        "User Email: $visitor_email.\n".
        "Subejct: $subject.\n".
        "Message? $message.\n";

    $to = "akhanmustafa10@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>

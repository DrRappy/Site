<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];

    $email_from = 'apostescualin@gmail.com';

    $email_subject = "O noua idee!";

    $email_body = "User name: $name.\n".
                  "User email: $visitor_email.\n".
                  "User message: $message.\n";

    $to "apostescualin@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header ("Location: feedback.html");

 ?>

<?php
    
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $email_subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = "abhinavskalia@gmail.com";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "Message: $message.\n";

    $to = "kali0630@mylaurier.ca";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>
<?php
    $to      = 'summerbasehart@gmail.com';
    $subject = 'New Site Inquiry';
    $from = $_POST['email'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $business = $_POST['business'];
    $phone =  $_POST['phone'];
    $message = $first_name . " " . $last_name . "from" . $business . " wrote the following:" . "\n\n" . $_POST['message']. "\n\n Phone Number: " $phone. ;
    $headers = 'From: noreply@summerbasehart.com'       . "\r\n" .
                 'Reply-To: noreply@summerbasehart.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>
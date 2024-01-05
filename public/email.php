<?php
    $to      = 'summerbasehart@gmail.com';
    $subject = 'New Appointment Inquiry';
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone =  $_POST['phone'];
    $message = $_POST['message'];
    $emailbody .= $first_name." ".$last_name."\r\n".$message."\r\n"."Phone Number: ".$phone."\r\n"."Email: ".$email;
    $headers = 'From: noreply@summerbasehart.com'       . "\r\n" .
                 'Reply-To: noreply@summerbasehart.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $emailbody, $headers);
    echo "<h2 style='background-color: black; color:white; text-align:center'>Thank you {$first_name}, for contacting Summer Basehart.</h2><br>
    <h3>We will contact you at <b><u>{$email}</b></u> as soon as possible</h3>";
    $url='https://summerbasehart.com/contact';
        sleep(5);
    echo '<script>setTimeout(function(){window.location.href = 
    "'.$url.'"}, 2 * 2000);</script>';
    die;
   exit;
?>
<?php
    $to = 'demo@spondonit.com';
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $message = $_POST["message"];




    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $name . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$phone.'</td>
        </tr>
        <tr><td>Start: '.$date.'</td></tr>
        <tr><td>Departure: '.$message.'</td></tr>       
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>

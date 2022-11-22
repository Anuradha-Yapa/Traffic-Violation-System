<?php
require_once 'config.php';
include 'dbConnect.php';

session_start();

$tran = $_POST['id_trans'];
$mailto = $_POST['user_email_address'];



$selectrid =mysqli_query($db_conn, "SELECT * FROM crimes where referenceNo='$tran'");
$rowdata =mysqli_fetch_array($selectrid,MYSQLI_ASSOC);

//echo  $tran;
//echo  $mailto;
?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\POP3;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {

//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'trafficlawviolations@gmail.com';
    $mail->Password   = "4B=}Yp_w!9uz8{v9";
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('trafficlawviolations@gmail.com', 'Traffic Low Violations');
    $mail->addAddress($mailto, $rowdata['driverName']);
    $mail->addReplyTo('trafficlawviolations@gmail.com', 'Information');


    $mail->isHTML(true);
    $mail->Subject = 'Payment Invoice - refNo'.$rowdata['referenceNo'];
    $mail->Body    = '<b>Hello!</b><br><b>Reference No:</b>'.$rowdata['referenceNo'].'<br><b>Driver Name:</b>'.$rowdata['driverName'].'<br><b>Vehival No:</b>'.$rowdata['vehiclePlateNo'].'<br><b>Payment:</b>Done';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
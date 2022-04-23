<?php
//phpmailer files
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/PHPMailer.php';

$title = 'Mail topic';

$c = true;

$title = 'mail title';
forEach ( $_POST as $key => $value) {
    if (   
        $value != "" && 
        $key != "project_name" &&
        $key != "admin_email" &&
        $key != "form_subject"
        ) {
        $body .= "
        " . ( ($c = !$c) ? '<tr>': <tr style="background-color: #f8f8f8;">' ) . "
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$value</b></td>
        </tr>
        ";
    }
}

$body = "<table style='width: 100%;'>$body</table>";

// PHPMailer settings
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;

    //mail settings
    $mail->Host = 'smtp.gmail.com'
} catch (Exception $e){
    $status = "message wasnt send. Error reason: {$mail->ErrorInfo}";
}
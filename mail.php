<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-6.6.0/src/Exception.php';
    require 'PHPMailer-6.6.0/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('en', 'phpmailer/language/');
    $mail->IsHTML(true);

    //from
    $mail->setFrom('sokvitko@gmail.com', 'NameOfSender');
    //receiver
    $mail->addAddress('sokvitko@gmail.com');
    //topic
    $mail->Subject = 'Hey, this is a test';

    //Hand
    $hand = "Right";
    if($_POST['hand'] == "left") {
        $hand = "Left";
    }

    //Letter body
    $body = '<h1>This is super test letter!</h1>';

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['email']))){
        $body.='<p><strong>E-mail:</strong> '.$_POST['mail'].'</p>';
    }

    $mail->Body = $body;

    //Sending
    if (!$mail->send()) {
        $message = 'error';
    } else {
        $message = 'Data sent';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>
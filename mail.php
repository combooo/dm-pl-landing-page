<?php
    if(isset($_POST['submit'])){

        $to = "sokvitko@gmail.com";
        $from = "sokvitko@gmail.com";

        $name = $_POST['header-name'];
        $email = $_POST['header-email'];

        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
            show_error("<br />Incorrect e-mail");
        }

        $mail_to_myemail = "
            Name: $name 
            E-mail: $email
        ";

        $headers = "From: $from \r\n";
        mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
        echo "Done!";
    }
?>
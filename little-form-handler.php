<?php
/* Check if variables exist */
if (isset($_POST['client_name'])) {$name = $_POST['client_name'];}
if (isset($_POST['client_contact'])) {$contact = $_POST['client_contact'];}

/* receiver */
$myaddres  = "monika.ochal@digital-win.pl";

/* create a message */
$mes = "Imię i nazwisko: $name \nEmail/telefon: $contact";

/* function to send */
$sub='Order';
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>

<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="3; url=index.html">
    <title>Thank you we will contact you soon!</title>
    <meta name="generator">
    <script type="text/javascript">
        setTimeout('location.replace("/index.html")', 5000);
    </script>
    <style>
        body {
            background: linear-gradient(270deg, #FFF3EC 0%, #FFF5EF 99.99%, rgba(255, 237, 226, 0) 100%);
        }
        main {
            padding: 36px;
        }

        h1, h3   {
            text-align: center;
            color: #334355;
        }
    </style>
</head>
<body>

    <main>
        <h1>Dziękuję za wysłanie zapytania!</h1>
        <h3>Niedługo skontaktuję się z Tobą, aby sprecyzować potrzeby i oczekiwania, a następnie przygotować dopasowaną ofertę!</p>
    </main>
    
</body>
</html>
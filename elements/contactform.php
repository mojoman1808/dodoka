<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo     = "gue@gmx.com";

    $headers    = "From: " . $mailFrom.', Content-type: text/html; charset=utf-8';
    // "MiME-Version: 1.0\r\n" .
    // "Content-type: text/html; charset=utf-8";
    // $headers  .= "MiME-Version: 1.0\r\n";
    // $headers  .= "Content-type: text/html; charset=iso-8859-1";

    $txt = "Sie haben ein Email von {$name} erhalten\n\n" . $message;
    mail($mailTo, $subject, $txt, $headers);
    // header("Location: index.html?mailsend");
}

?>


<?php

if(isset($_POST['submit'])){
    $message = $_POST['message'];
    $subject = "";
    $mailTo = "5197098018@vmobile.ca";

    mail($mailTo, $subject, $message);
    header("Location: index.php?mailsend");
}
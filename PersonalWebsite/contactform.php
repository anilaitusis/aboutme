<?php

if (isset($_POST['submit'])) {
    $name = $POST['name'];
    $subject = $POST['subject'];
    $mailFrom = $POST['mail'];
    $message= $POST['message'];

    $mailTo = "laitusia@kean.edu";
    $headers = "from: " .$mailFrom;
    $txt = "You have recieved an email from" .$name.".\n\n".$mesage;

    mail($mailTo, $subject, $txt, $headers);
    header("Location.php?mailsend");
}
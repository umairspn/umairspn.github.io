<?php

    $recipient="ubaidahmed30@gmail.com"; //Enter your mail address
    $subject=$_POST['contactSubject']; //Subject
    $sender_Name=$_POST['contactName'];
    $senderEmail=$_POST['contactEmail'];
    $message=$_POST['contactMessage'];
    $mailBody="Name: $sender_Name\nEmail Address: $senderEmail\n\nMessage: $message\n\n Sent from Portfolio Website";
    

    mail($recipient, $subject, $mailBody);
    sleep(1);
    header("Location:#"); // Set here redirect page or destination page

?>
<?php
    if(isset($_POST['submit'])){
        $to="ubaidahmed30@gmail.com"; //Enter your mail address
        $sender_Name=$_POST['contactName'];
        $senderEmail=$_POST['contactEmail'];
        $subject=$_POST['contactSubject']; //Subject
        $message=$_POST['contactMessage'];

        $mailBody="Name: $sender_Name\nEmail Address: $senderEmail\n\nMessage: $message\n\n Sent from Portfolio Website";
        
        $headers  ="From:".$sender_Name."<".$senderEmail.">\r\n";
        $headers .="reply-To:".$senderEmail."\r\n";
        $headers .="NINE-Version: 1.0\r\n";
        $headers .="Content-type: text/html; charset=utf-8";
        

        //confirmation mail
        $user = $senderEmail;
        $usersubject = "Electronic reply";
        $userheaders = "From: ubaidahmed30@gmail.com\n";
        $usermessage = "Thank you for contacting me. Will get back to you soon.";

        $send = mail($to, $subject, $mailBody, $headers);
        $confirm=mail($user, $usersubject, $userheaders,$usermessage );
        // sleep(1);
        // header("Location:#"); // Set here redirect page or destination page

        if($send && $confirm) {
            echo "success";
        }
        else {
            echo "Failed";
        }
    }
?>
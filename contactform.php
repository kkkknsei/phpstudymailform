<?php

/*

The mail function on this script is based on Postflix Gmail relay.
It was installed on MacOs following these instructions:

https://gist.github.com/giovanigenerali/39efe8760f84ed74b44a31be1ace27e7


Run it on localhost:xxxx with "php -S localhost:xxxx" using a terminal.
Point who will receive the message on $mailTo variable.
It doesn't mind/treat errors, the main focus here was to try the mail() function
and set a template for future development.
*/

if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "";
        $headers = "From: ".$mailFrom;
        $txt = "You received an e-mail from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }

?>

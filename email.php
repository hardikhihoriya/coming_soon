<?php

//echo "<pre>";
//print_r($_REQUEST);
//die;

if (isset($_REQUEST)) {
    if ($_REQUEST['first_name'] == '' || $_REQUEST['last_name'] == '' || $_REQUEST['contact_email'] == '' || $_REQUEST['contact_subject'] == '' || $_REQUEST['message']) {
        echo "Fill All Fields..";
    } else {
        $to = "khedut.unity@gmail.com"; // this is your Email address
        $from = $_POST['contact_email']; // this is the sender's Email address
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $details = $_POST['message'];
        $subject = "Khedut Unity Contact Mail";
        $subject2 = "Copy of your form submission";
        $message = $firstName . $lastName . " wrote the following:" . "\n\n" . $details;
        $message2 = "Here is a copy of your message " . $firstName . $lastName . "\n\n" . $details;

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to, $subject, $message, $headers);
        mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $firstName . $lastName . ", we will contact you shortly.";
    }
}
?>
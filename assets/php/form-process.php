<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// Phone Number
if (empty($_POST["phone_number"])) {
    $errorMSG .= "Number is required ";
} else {
    $phone_number = $_POST["phone_number"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "maliksahab0766@gmail.com";

$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Nikesh Malik: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email:maliksahab0766@gmail.com ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject:Movify Support ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Phone Number:869305472XXXX ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "Message: Hi Thank you for your request ,Our representative will contact you soon !!!!!";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
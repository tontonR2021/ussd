<?php
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text==""){
    $response ="vous voulez verifier votre compte";
    $response ="1.mon compte No \ n";
    $responses = "2. My Phone Number";
    

} else if ($text=="1"){
    $response ="chercher au dedans";
    $response ="1. Account Number \ n";
    $response ="2. Account Balance";

    } else if ($text=="2"){
        $response ="End your phone number is".$phoneNumber;

    } else if ($text=="1*1"){
        $accountNumber ="ACC1001";
        $response ="End your account number is ".$accountNumber;
    } else if ($text =="1*2"){
        $Balance = "KES 10.000";
        $response= "End your Balance is".$Balance;
    }
     header('content-type; text/plain');
     echo $response;
?>
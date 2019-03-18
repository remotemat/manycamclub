<?php

if (isset($POST['submit'])) {
    $name = $_POST['name'];
    $lastName = $_POST['lastname'];
    $mailFrom = $_POST['email'];
    $manycamEmail = $_POST['manycamemail'];
    $addressOne = $_POST['addressone'];
    $addressTwo = $_POST['addresstwo'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $subscription = $_POST['subscription'];
    
    $mailTo = "matevans2008@hotmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "A subscription has been purchased at ManyCamCLub.com.";
        
    mail($mailTo, $name, $lastName, $emailFrom, $manycamEmail, $addressOne, $addressTwo, $city, $country, $zip, $subscription, $headers, $txt);
    header("Location: index.php?mailsend");
}

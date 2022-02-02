<?php

    $firstName = filter_var($_POST["fName"], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST["lName"], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST["country"], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); 
    
$message = "First Name: $firstName <br>"
        . "Last name: $lastName <br>"
        . "Country: $country <br>"
        . "Phone Number: $phone <br>"
        . " Email: $email";

mail("oronc1@gmail.com", "New Form Submission", $message);

echo "Thank you, " . $firstName . "! <br><br>";
echo $message;

?>
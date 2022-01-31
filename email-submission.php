<?php

        $firstName = $_POST["fName"];
        $lastName = $_POST["lName"];
        $country = $_POST["country"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

$message = "First Name: $firstName <br>"
        . "Last name: $lastName <br>"
        . "Country: $country <br>"
        . "Phone Number: $phone <br>"
        . " Email: $email";

mail("oronc1@gmail.com", "New Form Submission", $message);

echo "Thank you, " . $firstName . "! <br><br>";
echo $message;
?>
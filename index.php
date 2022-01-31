<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Contact Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <h1>Contact Form</h1>
            <form method="post" action="email-submission.php">
                <label for="fName">First Name:</label>
                <br>
                <input type="text" id="fName" name="fName" 
                       minlength="4"
                       required>
                <br><br>
                <label for="lName">Last Name:</label>
                <br>
                <input type="text" id="lName" name="lName" 
                       minlength="4"
                       required>
                <br><br>
                <label for="country">Country:</label>
                <br>
                <input type="text" id="country" name="country" 
                       minlength="4"
                       required>
                <br><br>
                <label for="phone">Phone Number:</label>
                <br>
                <input type="text" id="phone" name="phone" maxlength="10"
                       pattern="[0-9]{9}|[0-9]{10}" title="Please provide a valid phone number" 
                       required>
                <br><br>
                <label for="email">Email:</label>
                <br>
                <input type="email" id="email" name="email" required>
                <br><br>
                <button>Submit</button>
                <input type="reset" value="Reset">
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>

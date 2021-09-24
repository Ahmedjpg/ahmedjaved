<?php
    // $emailFrom = "info@lingoqueen.ca";
    // $emailTo = "11am@lingoqueen.ca";
    $emailFrom = "info@ahmedjaved.com";
    $emailTo = "ahmedjaved3377@gmail.com";

    // POST variables
    $subject = Trim(stripslashes($_POST['subject']));
    $name = Trim(stripslashes($_POST['contact_name']));
    $email = Trim(stripslashes($_POST['email_info']));
    $message = Trim(stripslashes($_POST['message']));

    // Set up email body content
    $emailBody = "Name: " . $name;
    $emailBody .= "\n:";
    $emailBody .= "Email: " . $email;
    $emailBody .= "\n:";
    $emailBody .= "Message: " . wordwrap($message, 70, "\n");

    $headers = "From: " . $emailFrom . "\r\n";
    $headers .= "Reply-To: " . $emailTo . "\r\n";

    $success = mail($emailTo, $subject, $emailBody, $headers);

    if ($success === true) {
        // Display a successful message
        echo ' <link rel="stylesheet" href="style.css" type="text/css" /> ';
        echo (
            '<section class="successSection">

                <!-- TITLE -->
                <h2>Success !</h2>

                <!-- SUCCESS MESSAGE -->
                <p>Your email has been sent.</p>

                <a href="./index.html">
                    <button type="submit">Done</button>
                </a>

            </section>'
        );
    }
    else {
        // Display an error message
    }

?>

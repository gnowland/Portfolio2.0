<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        $captcha = strip_tags(trim($_POST['captcha']));

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR ($captcha != 22) ) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.

        $recipient = "Gifford Nowland <gnowland@gmail.com>";

            // Set the email subject.
            $subject = "New inquiry from $name on " . preg_replace('/^www\./','',$_SERVER['SERVER_NAME']);

            // Build the email content.
            $email_content = "<html>
                              <head>
                              <title>$subject</title>
                              </head>
                              <body>" . "\r\n";
            $email_content .= "<p><em>Via: contact form on " . preg_replace('/^www\./','',$_SERVER['SERVER_NAME']) . "</em><br />" . "\r\n";
            $email_content .= "Name: $name<br />" . "\r\n";
            $email_content .= "Email: $email<br /></p>" . "\r\n";
            $email_content .= "<p>Message:<br />$message<br /></p>" . "\r\n";
            $email_content .= "</body>
                               </html>";

            // Build the email headers.
            // Always set content-type when sending HTML email
            $email_headers = "MIME-Version: 1.0" . "\r\n";
            $email_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $email_headers .= "From: Gifford Nowland Digital <contact@giffordnowland.com>" . "\r\n";
            $email_headers .= "Reply-To: $name <$email>" . "\r\n";
            $email_headers .= "X-Mailer: PHP/" . phpversion();

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo 'PHP: My apologies, a processing error occured and your message could not be sent. Please send your request directly to <a href="mailto:hi@giffordnowland.com">hi@giffordnowland.com</a>. Thank you!';
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>

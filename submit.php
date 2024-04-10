<?php
$recipient = "dhruv@gareai.com"; // Make sure this is your correct email address
$subject = "Static Test Email";
$message = "This is a test email content sent from submit.php.";
$headers = "From: test@example.com"; // Use a sender email address that makes sense for your testing

if (mail($recipient, $subject, $message, $headers)) {
    echo "Test email sent successfully.";
} else {
    echo "Failed to send test email.";
}
?>

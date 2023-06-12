<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Create email body
    $message = "First Name: " . $fname . "\n";
    $message .= "Last Name: " . $lname . "\n";
    $message .= "Phone: " . $phone . "\n";
    $message .= "Email: " . $email . "\n";

    // Set up email headers
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>

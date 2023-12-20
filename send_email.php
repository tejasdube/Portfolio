<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "tejasdube2370@gmail.com"; // Replace with your email
    $subject = "Message from your website";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
        // You can redirect users to a thank-you page or show a success message here
    } else {
        echo "Failed to send the message. Please try again later.";
        // You can redirect users to an error page or show an error message here
    }
}
?>

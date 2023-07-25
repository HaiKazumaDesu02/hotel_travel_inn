<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["newsletter-name"];
    $email = $_POST["newsletter-email"];

    // Send email to the desired email address
    $to = "amir.rai.pokhara@gmail.com";
    $subject = "New Newsletter Subscription";
    $message = "Name: " . $name . "\r\nEmail: " . $email;
    $headers = "From: your-email@example.com"; // Replace with your email address or leave it as is

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        $response = array(
            "result" => "success",
            "msg" => "Thank you for subscribing to our newsletter!"
        );
    } else {
        // Error sending email
        $response = array(
            "result" => "error",
            "msg" => "Sorry, an error occurred while processing your request."
        );
    }

    header("Content-Type: application/json");
    echo json_encode($response);
}
?>

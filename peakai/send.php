<?php
// Get form data
$email = $_POST['email'];

// Set email parameters
$to = "alichamma1005@gmail.com";
$subject = "New PeakAI Waitlist Signup";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Create email content
$email_content = "
<html>
<head>
    <title>New PeakAI Waitlist Signup</title>
</head>
<body>
    <h2>New Waitlist Signup</h2>
    <p><strong>Email:</strong> $email</p>
</body>
</html>
";

// Send email
$mail_sent = mail($to, $subject, $email_content, $headers);

// Redirect based on result
if ($mail_sent) {
    header("Location: index.html?success=true");
    exit;
} else {
    header("Location: index.html?error=true");
    exit;
}
?> 
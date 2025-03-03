<<<<<<< HEAD
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library
require __DIR__ . '/includes/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/includes/PHPMailer/src/SMTP.php';
require __DIR__ . '/includes/PHPMailer/src/Exception.php';

// Retrieve form data
$first_name = $_POST['first_name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($first_name) || empty($email) || empty($subject) || empty($message)) {
    die('Please fill all required fields.');
}

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Use your SMTP server when hosted
    $mail->SMTPAuth = true;
    $mail->Username = 'zbagabo@gmail.com'; // Replace with your email
    $mail->Password = 'emjj lppb qtik ylcb'; // Use App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Email details
    $mail->setFrom($email, $first_name);
    $mail->addAddress('zbagabo@gmail.com'); // Replace with your email
    $mail->Subject = $subject;

    // Construct the email body
    $mailBody = "Name: $first_name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Phone: $phone\n";
    $mailBody .= "Message:\n$message\n";

    $mail->Body = $mailBody;

    // Send the email
    if ($mail->send()) {
        echo 'Thank you! Your message has been sent.';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again.';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
=======
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library
require __DIR__ . '/includes/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/includes/PHPMailer/src/SMTP.php';
require __DIR__ . '/includes/PHPMailer/src/Exception.php';

// Retrieve form data
$first_name = $_POST['first_name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($first_name) || empty($email) || empty($subject) || empty($message)) {
    die('Please fill all required fields.');
}

try {
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Use your SMTP server when hosted
    $mail->SMTPAuth = TRUE;
    $mail->Username = 'zbagabo@gmail.com'; // Replace with your email
    $mail->Password = 'emjj lppb qtik ylcb'; // Use App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    

    // Email details
    $mail->setFrom($email, $first_name);
    $mail->addAddress('zbagabo@gmail.com'); // Replace with your email
    $mail->Subject = $subject;

    // Construct the email body
    $mailBody = "Name: $first_name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Phone: $phone\n";
    $mailBody .= "Message:\n$message\n";

    $mail->Body = $mailBody;

    // Send the email
    if ($mail->send()) {
        echo 'Thank you! Your message has been sent.';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again.';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
>>>>>>> 179f3b0 (new version of GREECO)

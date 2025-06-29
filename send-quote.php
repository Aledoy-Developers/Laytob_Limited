<?php
require 'vendor/autoload.php'; // PHPMailer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Collect form data safely
$full_name = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$pickup = isset($_POST['pickup']) ? trim($_POST['pickup']) : '';

$service = isset($_POST['service']) ? implode(", ", $_POST['service']) : '';
$dropoff = isset($_POST['dropoff']) ? trim($_POST['dropoff']) : '';

$weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
$length = isset($_POST['length']) ? trim($_POST['length']) : '';

$width = isset($_POST['width']) ? implode(", ", $_POST['width']) : '';
$pickup_date = isset($_POST['pickup_date']) ? trim($_POST['pickup_date']) : '';


// Prepare email
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'server227.web-hosting.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hello@foyglobalinvestments.com';
    $mail->Password = 'FoyGlobal123@!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('hello@foyglobalinvestments.com', 'FOY Global');
    $mail->addAddress('adewoyeademuyiwa@gmail.com');

    foreach ($uploaded_files as $file) {
        $mail->addAttachment($file);
    }

    $mail->isHTML(true);
    $mail->Subject = "Quote Request from $full_name";


    $mail->Body = "
    <html>
    <head>
        <title>Complaint Form Submission</title>
    </head>
    <body style='font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px;'>
        <div style='max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 8px;'>
            <img src='https://merchantminds.ng/sample/haut-logistics/dist/images/logo.png' alt='FOY Global Investments' style='width: 150px; margin-bottom: 20px;'>
            <h2 style='color: #333;'>Complaint Form Submission</h2>
            <p><strong>Full Name:</strong>  $full_name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email Address:</strong> $email</p>
        <p><strong>Pickup Location:</strong> $pickup</p>
        <p><strong>Service Required:</strong> $service</p>
        <p><strong>Dropoff Location:</strong> $dropoff</p>
        <p><strong>Weight:</strong> $weight</p>
        <p><strong>Length:</strong> $length</p>
        <p><strong>Width:</strong> $width</p>
        <p><strong>Pickup Date:</strong><br>$pickup_date</p>
    </div>
    </body>
    </html>
    ";

    $mail->send();
    $msg = 'Your form has been successfully submitted. One of our representatives would send you a quote.';
} catch (Exception $e) {
    $error = 'Error sending email: ' . $mail->ErrorInfo;
}

include('get-a-quote.php');
exit;
?>

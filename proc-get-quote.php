<?php

error_reporting(E_ALL);
 ini_set("display_errors", 0);

 require_once('apps/fns.php');

require_once('apps/PHPMailer/PHPMailerAutoload.php');

$source = isset($_POST['source_page']) ? $_POST['source_page'] : 'index.php';



$fullname = $_POST['fullname'];
$email = $_POST['email'];
$number = $_POST['number'];
$service_types = $_POST['service_types'];
$pick_up = $_POST['pick_up'];
$drop_off = $_POST['drop_off'];
// $freight_class = $_POST['freight_class'];
$width = $_POST['width'];
$weight = $_POST['weight'];
$date = $_POST['date'];
$notes = $_POST['notes'];



if (!$fullname || !$email || !$number || !$pick_up || !$drop_off || !$service_types)

{
  $info = "error";
  $correction = "fill the required inputs";
  include($source);
  exit;
}




if (!filter_var($email, FILTER_VALIDATE_EMAIL))   {
    $info = 'error';
    $correction = 'Enter a valid email address.';
    include($source);
    exit;
      
}

if (strlen($number) != 11) {

    $info = 'error';
    $correction = 'Phone number must be 11 characters.';
    include($source);
    exit;
}



 

$subject = 'Your HAUT LOGISTICS Shipment Confirmation';
{
 send_quote('oladimejig16@gmail.com', $email, 'Haut Logistics', $subject, '', '', $fullname, $number,$email, $pick_up, $service_types,  $drop_off,  $weight, $width, $freight_class, $length, $notes, $date);
}




if ($info = 'accepted')
{

  include($source);
exit;
} else {
  $info = 'error';
  $correction = 'Could not send mail.';
  include($source);
}


?>
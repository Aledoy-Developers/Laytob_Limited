<?php
include('connection/connect.php');
require_once('fns.php');


require_once('PHPMailer/PHPMailerAutoload.php');


$token = mysqli_real_escape_string($db, $_POST['token']);
$tracking_no = mysqli_real_escape_string($db, $_POST['tracking_no']);
$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$current_location = mysqli_real_escape_string($db, $_POST['current_location']);
$description = mysqli_real_escape_string($db, $_POST['description']);
$status = mysqli_real_escape_string($db, $_POST['status']);
$delivery_date = mysqli_real_escape_string($db, $_POST['delivery_date']);
$id = $_POST['token'];
$email_add = explode(',',$email);


 $query = "update `order` set `status` = '$status' where token =  '$token' ";

$result = mysqli_query($db, $query);
if ($result) {

    $token = md5($tracking_no.$status.date('U'));
   
$query2 = "insert `tracking_details` set token= '$token', order_token = '$id', description = '$description', location = '$current_location', `status` = '$status',delivery_date='$delivery_date'";
    $result2 = mysqli_query($db, $query2);

   
    $subject = 'Your HAUT LOGISTICS Shipment Information';
foreach ($email_add as $row => $emails) {
    update_order($emails, $emails,'Haut Logistics', $subject, '', '', $tracking_no, $status, $current_location, $emails, $description);
}



   $status = '';
    $success = 'order updated successfully !!!';
    include('order.php');
    exit;
} else {
    $error = 'An error occured';
    include('order.php');
    exit;
}
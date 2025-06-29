<?php
include('connection/connect.php');
require_once('fns.php');

require_once('PHPMailer/PHPMailerAutoload.php');


$date = date('Y-m-d h:i:s');
$tracking_no = mysqli_real_escape_string($db, $_POST['tracking_no']);
$fullname = mysqli_real_escape_string($db, $_POST['email']);
// $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$freight = mysqli_real_escape_string($db, $_POST['freight']);
$weight = mysqli_real_escape_string($db, $_POST['weight']);
$description = mysqli_real_escape_string($db, $_POST['description']);
$length = mysqli_real_escape_string($db, $_POST['length']);
$weight = mysqli_real_escape_string($db, $_POST['weight']);
$pick_up_location = mysqli_real_escape_string($db, $_POST['pick_up_location']);
$drop_off_location = mysqli_real_escape_string($db, $_POST['drop_off_location']);
$status = mysqli_real_escape_string($db, $_POST['status']);
$delivery_date = mysqli_real_escape_string($db, $_POST['delivery_date']);
$token = token();
$email_add = explode(',',$email);



// $userfile = $_FILES['userfile']['tmp_name'];
// $userfile_name = $_FILES['userfile']['name'];

// $ext = pathinfo($userfile_name, PATHINFO_EXTENSION);
// $folder = '../dist/uploads/';

if ($tracking_no == '' || $delivery_date == '') {
    $error = 'All information are required !!!';
    include('add-new-order.php');
    exit;
}


// if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
//     $newfile = $token . '.' . $ext;
//     move_uploaded_file($userfile, $folder . $newfile);
// } else {
//     $error = 'The uploaded image format is not supported';
//     include('add_blog.php');
//     exit;
// }



 $query = "insert into `order` (token, date_created, tracking_no, r_fullname, r_email, freight_class, length, pick_up_location, drop_off_location, status, delivery_date) 
    values ('$token', '$date', '$tracking_no', '$fullname','$email', '$freight',  '$length', '$pick_up_location', '$drop_off_location', '$status', '$delivery_date')";

    
    
    $result = mysqli_query($db, $query);
    if ($result) {
        
        $query2 = "INSERT INTO `tracking_details`(`token`, `order_token`, `description`, `status`, `location`, `delivery_date`) VALUES ('$token', '$token', '$description', '$status', '$pick_up_location', '$delivery_date')"; 
           $result2 = mysqli_query($db, $query2);

    
           $subject = 'Your HAUT LOGISTICS Shipment Confirmation';
          foreach ($email_add as $row => $emails) {
            send_order($emails,$emails,'Haut Logistics',$subject,'','',$tracking_no,$drop_off_location,$freight,$emails);
          }
          

    $tracking_no = '';
    $fullname = '';
    $email = '';
    $freight = '';
    $length = '';
    $description ='';
    $pick_up_location = '';
    $drop_off_location = '';
    $status = '';
    $delivery_date = '';
    $success = 'New Order has been added successfully !!!';


    include('add-new-order.php');
    exit;
} else {
    $error = 'An error occured';
    include('add-new-order.php');
    exit;
}
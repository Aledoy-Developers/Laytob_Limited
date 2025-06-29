<?php

include('connection/connect.php');

$id = $_GET['token'];

$query = "delete from `order` where token = '$id' ";
$result = mysqli_query($db, $query);

if ($result) {
    $success = "Order has been deleted";
    include('order.php');
    exit;
} else {
    $error = "Cannot run query";
    include('order.php');
    exit;
}

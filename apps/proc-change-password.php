<?php

session_start();
include('connection/connect.php');

$valid_user = $_SESSION['acms_valid_user'];

// $password = $_POST['password'];
$old_password = mysqli_real_escape_string($db, $_POST['old_password']);
$new_password = mysqli_real_escape_string($db, $_POST['new_password']);
$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

if ($old_password == '' || $new_password == '' || $confirm_password == '') {
    $error = "All fields are required";
    include('change-password.php');
    exit;
}

if ($new_password != $confirm_password) {
    $error = 'Password do not match';
    include('change-password.php');
    exit;
}

$sql = "SELECT * from login  WHERE user = '$valid_user' and pass = '$old_password'";
$result = mysqli_query($db, $sql);
$num = mysqli_num_rows($result);
if ($num > 0) {
    $sql_2 = "UPDATE login  SET pass ='$new_password' WHERE user ='$valid_user'";
    mysqli_query($db, $sql_2);
    $success = "Password Changed Sucessfully";
    include('change-password.php');
    exit;
} else {
    $error = "Old Password is not correct";
    include('change-password.php');
    exit;
}

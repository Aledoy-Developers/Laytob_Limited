<?php
session_start();
include('connection/connect.php');

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$password_length = strlen($password);

if (!$username) {
  $username_err = 'yes';
  include('index.php');
  exit;
}

if (!$password) {
  $password_err = 'yes';
  include('index.php');
  exit;
}

if ($password_length < 8) {
  $passwordlength_err = 'yes';
  include('index.php');
  exit;
}

$query = "select * from login where user = '$username' and pass = '$password'";
$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
  $_SESSION['acms_valid_user'] = $username;
  include('dashboard.php');
  exit;
} else {
  $error = 'yes';
  include('index.php');
  exit;
}

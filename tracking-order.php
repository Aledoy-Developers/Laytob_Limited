<?php
session_start();

include('apps/connection/connect.php');
require_once('apps/fns.php');

$tracking_no = mysqli_real_escape_string($db, $_POST['tracking_no']);
$email = mysqli_real_escape_string($db, $_POST['email']);

if(!$email)
{
    $email = 'N/A';
}

$password_length = strlen($password);

$query = "select * from `order` where tracking_no = '$tracking_no'";

$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);
if ($num == 0) {
  $error = 'The tracking no entered is incorrect';
  include('track-shipment.php');
  exit;
} 
else{

    $row = mysqli_fetch_array($result);
}

// $query2 = "select * from `tracking_details` where tracking_no = '$tracking_no'";

// $result2 = mysqli_query($db, $query2);
// $num2 = mysqli_num_rows($result2);
// $row2 = mysqli_fetch_array($result2);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Tracking Order | Haut Logistics</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dist/css/bootstrap.css">

    <link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="./dist/images/pref_logo-removebg.png" />

    <link href="dist/css/animate.css" rel="stylesheet">

    <link href="dist/css/owl.carousel.css" rel="stylesheet">

    <link href="dist/css/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="dist/js/jquery.3.4.1.min.js"></script>

    <script src="dist/js/popper.js" type="text/javascript"></script>

    <script src="dist/js/bootstrap.js" type="text/javascript"></script>

    <script src="dist/js/owl.carousel.js"></script>

    <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>



    <!-- Main Stylesheet -->

    <link href="dist/style.css" rel="stylesheet" type="text/css" media="all">

    <script src="dist/js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>

</head>

<body>

    <style>
    #navbar {
        font-size: 14px;
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        top: 0;
        width: 100%;
        border-bottom: none;
        background-color: #013D5FB2;
    }
    </style>

    <?php include 'inc/header.php'; ?>

    <div class="about-banner">
        <div class="container">
            <div class="about-banner-head">Tracking Order</div>
        </div>
    </div>

    <div class="container">
        <div class="tab" style="border-bottom: 5px solid #013D5F;">
            <button><span><img src="./dist/images/track-icon.png" class="img-fluid"></span> Tracking Order</button>
        </div>
    </div>

    <div class="container" style=" margin-bottom: 100px;">
        <div class="row">
            <div class="col-md-6">
                <div class="accordion">
                    <!-- Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="accordion-title">
                                <div class="accordion-titleRow">
                                    <div class="accordion-titleRow-icon">
                                        <iconify-icon icon="mdi-light:truck" width="34" height="34"></iconify-icon>
                                    </div>
                                    <div class="accordion-titleRow-ID">Tracking Order ID From <span>:
                                            #<?php echo $tracking_no; ?></span>
                                    </div>
                                    <div class="accordion-titleRow-btn"><?php echo $row['status']; ?></div>
                                </div>
                            </div>
                            <div class="accordion-arrow"></div>
                        </div>
                        <div class="accordion-content">
                            <div class="accordion-content-inner">
                                <div class="accordion-content-inner-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <!-- <tr>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Full Name <br>
                                                            <span><?php echo $email; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Email <br> <span><?php echo $email; ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Freight class <br>
                                                            <span><?php echo $row['freight_class']; ?></span>
                                                        </div>
                                                    </td>
                                                     <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Pick-up location <br>
                                                            <span><?php echo $row['pick_up_location']; ?></span>
                                                        </div>
                                                    </td>
                                                </tr> -->
                                                <tr style="border-bottom: 1px solid #00000033;">
                                                    <!-- <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Pick-up location <br>
                                                            <span><?php echo $row['pick_up_location']; ?></span>
                                                        </div>
                                                    </td> -->
                                                   
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Drop-off Location <br>
                                                            <span><?php echo $row['drop_off_location']; ?></span>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Lenght(cm) <br> <span><?php echo $row['length']; ?></span>
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="accordion-content-inner-table-info">
                                                            Expected Arrival Date <br>
                                                            <span><?php echo date('d-M-y',strtotime($row['delivery_date'])); ?></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tracking-container">

                                    <?php
                                $order_token = $row['token'];

                                $query2 = "select * from tracking_details where order_token = '$order_token'";
                                $result2 = mysqli_query($db,$query2);
                                $num2 = mysqli_num_rows($result2);
                                for ($i = 0; $i < $num2; $i++) {

                                    $row2 = mysqli_fetch_array($result2);
                                ?>
                                    <div class="tracking-event">
                                        <div class="event-details">
                                            <div class="event-time">
                                                <?php echo date('d M Y : h:i:a',strtotime($row2['date_created'])); ?>
                                            </div>
                                            <div class="event-status"><?php echo $row2['description']; ?></div>
                                            <div class="event-location"><?php echo $row2['location']; ?></div>
                                        </div>
                                    </div>

                                    <?php } ?>
                                </div>
                                <div class="tracking-carrier">
                                    <!-- <div class="tracking-carrierLeft">
                                        <div class="tracking-carrierLeft_details">
                                            <div class="tracking-carrierLeft-img">
                                                <img src="./dist/images/tracking.png" class="img-fluid">
                                            </div>
                                            <div class="tracking-carrierLeft-info">
                                                <div class="tracking-carrierLeft-info-sub">Admin</div>
                                                <div class="tracking-carrierLeft-info-head">Haut Logistics</div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="tracking-carrierRight">
                                        <div class="tracking-carrierRight-icon">
                                            <a href="contact">
                                                <iconify-icon icon="mingcute:phone-fill" width="30" height="30">
                                                </iconify-icon>
                                            </a>
                                        </div>
                                        <div class="tracking-carrierRight-icon">
                                            <a href="contact">
                                                <iconify-icon icon="mdi:message" width="30" height="30"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item -->

                </div>
            </div>
            <div class="col-md-6">
                <div class="tracking_map">
                    <div class="tracking_map-img">
                    <?php
$current_address = $row2['location']; 
$encoded_address = urlencode($current_address);
$map_url = "https://www.google.com/maps?q={$encoded_address}&output=embed";
?>
<iframe src="<?php echo $map_url; ?>" width="540" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="tracking_map-box">
                        <div class="live_track">
                            <div class="live_track-icon">
                                <iconify-icon icon="lucide:ferris-wheel" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="live_track-head">Live Land Tracking</div>
                        </div>
                        <div class="tracking_stats">
                            <div class="tracking_statsL">Tracking ID : <b><?php echo $tracking_no; ?></b></div>
                            <div class="tracking_statsR">Status : <span><?php echo $row['status']; ?></span>
                            </div>
                        </div>
                        <div class="tracking_stats">
                            <div class="tracking_stats22">Departure :
                                <span><?php echo $row['pick_up_location']; ?></span>
                            </div>
                            <div class="tracking_stats22">Destination :
                                <span><?php echo $row['drop_off_location']; ?></span>
                            </div>
                        </div>

                        <div class="progress-container">
                            <div class="progress-container-icon">
                                <img src="./dist/images/progress-icon.png" class="img-fluid">
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" id="progressFill"></div>
                                <div class="cursor" id="cursor"
                                    style="margin-left:<?php echo get_progress($order_token); ?>%;">
                                    <div class="cursor-icon">
                                        <iconify-icon icon="mdi-light:truck" width="30" height="30">
                                        </iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="package-dep-rec">
                            <div class="package-dep-received">
                                <div class="package-dep-received-details">Package Depart</div>
                                <div class="package-dep-received-date">
                                    <b> <?php echo date('d M Y : h:i:a',strtotime($row['date_created'])); ?></b>
                                </div>
                            </div>
                            <div class="package-dep-received">
                                <div class="package-dep-received-details">Package Arrived</div>
                                <div class="package-dep-received-date">
                                    <b> <?php echo get_delivery_time($order_token); ?></b>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script src="./accord-script.js"></script>

    <script src="./tracking-script.js"></script>





    <?php include 'inc/footer.php'; ?>

</body>

</html>
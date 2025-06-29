<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Get A Quote | Haut Logistics</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="dist/css/bootstrap.css">

<link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

<link rel="icon" href="./dist/images/pref_logo-removebg.png" />

<link href="dist/css/animate.css" rel="stylesheet">

<link href="dist/css/owl.carousel.css" rel="stylesheet">

<link href="dist/css/owl.theme.default.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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

<div class="about-banner" >
    <div class="container">
        <div class="about-banner-head">Get A Quote</div>
    </div>
</div>

<div class="container">
    <div class="tab">
        <!-- <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><span><img src="./dist/images/req1.png" class="img-fluid"></span> Request A Quote</button> -->
        <!-- <button class="tablinks" onclick="openCity(event, 'Paris')"><span><img src="./dist/images/req2.png" class="img-fluid"></span> Packages Tracking</button> -->
        <button><span><img src="./dist/images/req1.png" class="img-fluid"></span> Request A Quote</button>
    </div>
</div>

<div class="container">
    <div class="contact_form" style="margin-bottom: 100px;">        

        <div id="London" class="tabcontent">
            <div class="row">
                <div class="col-md-9">
                    <div class="contact_form-left">
                        <!-- <div class="contact_form-left-head">Request A Quote</div> -->

                        <form action="proc-get-quote" method="POST" >

                        <input type="hidden" name="source_page" value="get-a-quote.php">
                        <div>
                        <?php if ($info == 'accepted') { ?>
                          <div class='alert alert-success'>Application submitted successfully
                        </div>
                        <?php } ?>
                        <br>
                        
                        <?php if ($info == 'error') { ?>
                        <div class='alert alert-danger'><?php echo $correction ?>
                        </div>
                        <?php } ?>
                        </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Full Name</p>
                                        <input type="text" placeholder="Enter your name" name="fullname" value="<?php echo $fullname ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Phone Number</p>
                                        <input type="number" placeholder="Enter your number" name="number" value="<?php echo $number ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Email</p>
                                        <input type="email" placeholder="Enter your email" name="email" value="<?php echo $email ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Pick-up Location</p>
                                        <input type="text" placeholder="Enter city/country or zip" name="pick_up" value="<?php echo $pick_up ?>">
                                    </div>
                                </div>                     
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Service Type</p>
                                        <select class="form-select" name="service_types">
                                            <option selected>Choose one</option>
                                            <option value="Air Freight">Air Freight</option>
                                            <option value="Sea Freight">Sea Freight</option>
                                            <option value="Land Freight">Land Freight</option>
                                            <option value="Warehousing">Warehousing</option>
                                            <option value="Freight Forwarding">Freight Forwarding</option>
                                            <option value="Transloading / Transshipment">Transloading / Transshipment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Drop-off Location</p>
                                        <input type="text" placeholder="Enter city/country or zip" name="drop_off" value="<?php echo $drop_off ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Weight(kg)</p>
                                        <input type="text" placeholder="Enter approx weight" name="weight" value="<?php echo $weight ?>">
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Length(cm)</p>
                                        <input type="text" placeholder="Enter approx length" name="length" value="<?php echo $length ?>">
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Width(cm)</p>
                                        <input type="text" name="width" placeholder="Enter approx. width">
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="contact_form-row">
                                        <p>Pickup Date</p>
                                        <input type="date" name="date" value="<?php echo $date ?>">
                                    </div>
                                </div> 

                                <div class="col-md-12">
                                    <div class="btn-sec" >
                                        <button type="submit" style="width: 100%;">Get My Quote</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact_form-right">
                        <img src="./dist/images/quote1.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="Paris" class="tabcontent">
            <div class="row">
                <div class="col-md-9">
                    <div class="contact_form-left">
                        <div class="contact_form-left-head">Packages Tracking</div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact_form-row">
                                    <p>Tracking ID</p>
                                    <input type="text" placeholder="Enter tracking ID number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact_form-row">
                                    <p>Email Address</p>
                                    <input type="email" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-sec">
                                    <button style="width: 100%;">Track & Trace</button>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 30px;">
                                <img src="./dist/images/w-map.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact_form-right">
                        <img src="./dist/images/quote2.png" class="img-fluid">
                    </div>
                </div>
            </div> 
        </div> -->
        
    </div>
</div>

<!-- <script src="./quote-script.js"></script> -->





<?php include 'inc/footer.php'; ?>

</body>
</html>
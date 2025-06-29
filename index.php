<?php

error_reporting(E_ALL);
ini_set("display_errors", 0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Haut Logistics | Home</title>

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

    <?php include 'inc/header.php'; ?>

    <div class="home-banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner row w-100 mx-auto">
                <div class="carousel-item col-md-12 active">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="home-banner-sub">EFFORTLESS SHIPPING</div>
                                    <div class="home-banner-head">Modern Logistics Transportation</div>
                                    <a href="about.php">
                                        <button>Explore Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-12">
                    <div class="card" style="background-image: url(./dist/images/banner-img2.jpg);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="home-banner-sub">INNOVATIVE LOGISTICS</div>
                                    <div class="home-banner-head">Trusted Global Freight Solution</div>
                                    <a href="about.php">
                                        <button>Explore Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-12">
                    <div class="card" style="background-image: url(./dist/images/banner-img3.jpg);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="home-banner-sub">DELIVERING EXCELLENCE</div>
                                    <div class="home-banner-head">Efficient Cargo Delivering Services</div>
                                    <a href="about.php">
                                        <button>Explore Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="home-about">
            <div class="row">
                <div class="col-md-6">
                    <div class="home-about-left">
                        <div class="home-about-box">
                            <div class="home-about-box-card" id="home-about-box-card1">
                                <div class="home-about-box-content">
                                    <div class="home-about-box-content-img">
                                        <img src="./dist/images/ha-icon1.png" class="img-fluid">
                                    </div>
                                    <div class="home-about-box-content-head">Air Frieght</div>
                                    <p>Fast and reliable air freight solutions delivering urgent cargo worldwide with precision, speed, and care.</p>
                                    <a href="air-frieight.php">Learn more>></a>
                                </div>
                            </div>

                            <div class="home-about-box-card" id="home-about-box-card2"
                                style="background-image: url(./dist/images/home-about-img2.jpg);">
                                <div class="home-about-box-content">
                                    <div class="home-about-box-content-img">
                                        <img src="./dist/images/ha-icon2.png" class="img-fluid">
                                    </div>
                                    <div class="home-about-box-content-head">Sea Freight</div>
                                    <p>Secure and cost-effective sea freight services connecting global ports with seamless, dependable cargo delivery solutions.</p>
                                    <a href="sea-freight.php">Learn more>></a>
                                </div>
                            </div>

                            <div class="home-about-box-card" id="home-about-box-card3"
                                style="background-image: url(./dist/images/home-about-img3.jpg);">
                                <div class="home-about-box-content">
                                    <div class="home-about-box-content-img">
                                        <img src="./dist/images/ha-icon3.png" class="img-fluid">
                                    </div>
                                    <div class="home-about-box-content-head">Land Frieght</div>
                                    <p>Reliable and efficient land freight solutions ensuring safe, timely delivery across cities and borders.</p>
                                    <a href="land-freight.php">Learn more>></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home-about-right">
                        <div class="sub-Heading">
                            <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> SERVICES WE OFFER
                            <span><img src="./dist/images/ar-r.png" class="img-fluid"></span>
                        </div>
                        <div class="home-about-right-head">World’s Leading Contract Logistics Provider</div>
                        <a href="air-frieight.php">
                            <div class="home-about-right-row">
                                <div class="home-about-right-row-L"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="home-about-right-row-R">Air Freight </div>
                            </div>
                        </a>
                        <a href="sea-freight.php">
                            <div class="home-about-right-row">
                                <div class="home-about-right-row-L"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="home-about-right-row-R">Sea Freight</div>
                            </div>
                        </a>
                        <a href="warehousing.php">
                            <div class="home-about-right-row">
                                <div class="home-about-right-row-L"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="home-about-right-row-R">Warehousing</div>
                            </div>
                        </a>
                        <a href="land-freight.php">
                            <div class="home-about-right-row">
                                <div class="home-about-right-row-L"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="home-about-right-row-R">Land Frieght</div>
                            </div>
                        </a>
                        <a href="freight-forwarding.php">
                            <div class="home-about-right-row">
                                <div class="home-about-right-row-L"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="home-about-right-row-R">Freight Forwarding</div>
                            </div>
                        </a>
                        <a href="transloading-transshipment.php">
                            <div class="home-about-right-row">
                                <div class="home-about-right-row-L"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="home-about-right-row-R">Transloading/Transshipment</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./home-about-script.js"></script>


    <div class="container">
        <div class="home-how">
            <div class="sub-Heading" style="text-align: center;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> OUR PROCESS <span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>
            <div class="home-how-head">From Pickup To Delivery, We Keep It Simple.</div>
            <div class="row">
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <iconify-icon icon="grommet-icons:schedule-play" width="40" height="40"></iconify-icon>
                        </div>
                        <div class="home-how-row-head">Book</div>
                        <p>Request a quote online or speak with our team to schedule your shipment.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <iconify-icon icon="mdi:truck-outline" width="40" height="40"></iconify-icon>
                        </div>
                        <div class="home-how-row-head">Ship</div>
                        <p>We pick up your goods from your door or warehouse - no stress.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <iconify-icon icon="carbon:storm-tracker" width="40" height="40"></iconify-icon>
                        </div>
                        <div class="home-how-row-head">Track</div>
                        <p>Monitor your shipment in real time from dispatch to delivery.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-how-row">
                        <div class="home-how-row-icon">
                            <iconify-icon icon="icon-park-solid:delivery" width="40" height="40"></iconify-icon>
                        </div>
                        <div class="home-how-row-head">Pickup</div>
                        <p>We ensure on-time, secure delivery-locally and globally.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="track-shipments">
        <div class="container">
            <form action="tracking-order" method="post">
                <div class="track-shipments-head">Track Your Order</div>
                <input type="text" name="tracking_no" placeholder="Enter Tracking Number" style="margin-bottom: 20px;"
                    required>
                <input type="mail" name="email" placeholder="Enter Email Address (optional)">
                <div class="btn-pry" style="margin-top: 20px;">
                    <button type="submit">Track Order</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="why_choose">
            <div class="row">
                <div class="col-md-5">
                    <div class="why_choose_left">
                        <div class="sub-Heading" style="text-align: left;">
                            <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> WHY CHOOSE US <span><img
                                    src="./dist/images/ar-r.png" class="img-fluid"></span>
                        </div>
                        <div class="why_choose_left-head">Today’s Fast Paced World, Efficient Logistics </div>
                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Successful Deliveries</div>
                                <div class="why_choose_left-progress-detailsss">98%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100" style="width:98%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Customer Satisfaction</div>
                                <div class="why_choose_left-progress-detailsss">95%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100" style="width:95%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Nationwide Reach</div>
                                <div class="why_choose_left-progress-detailsss">98%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100" style="width:98%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why_choose_left-progress">
                            <div class="why_choose_left-progress-details">
                                <div class="why_choose_left-progress-detailsss">Transparent & Flexible Pricing</div>
                                <div class="why_choose_left-progress-detailsss">95%</div>
                            </div>
                            <div class="why_choose_left-progress-file">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100" style="width:95%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="why_choose_right">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <iconify-icon icon="mdi:location" width="24" height="24"></iconify-icon>
                                    </div>
                                    <div class="why_choose_right-row-head">Nationwide Strategic Coverage</div>
                                    <p>Our hubs are strategically placed for quicker routes and more efficient delivery times — connecting local and national destinations with ease.</p>
                                    <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch1.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <iconify-icon icon="ri:team-fill" width="24" height="24"></iconify-icon>
                                    </div>
                                    <div class="why_choose_right-row-head">Experienced Delivery Experts</div>
                                    <p>Our trained team has years of real-world experience in handling logistics operations with speed, safety, and accuracy.</p>
                                    <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch2.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <iconify-icon icon="ri:customer-service-2-line" width="24" height="24">
                                        </iconify-icon>
                                    </div>
                                    <div class="why_choose_right-row-head">24/7 Customer Support</div>
                                    <p>Got a question? Our friendly support staff is always available to assist you — anytime, anywhere.</p>
                                    <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch3.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="why_choose_right-row">
                                    <div class="why_choose_right-row-icon">
                                        <iconify-icon icon="fa-solid:warehouse" width="24" height="24"></iconify-icon>
                                    </div>
                                    <div class="why_choose_right-row-head">Secure Storage & Warehousing</div>
                                    <p>With modern, secured storage solutions, your items are kept safe and ready for timely delivery or pickup.</p>
                                    <div class="why_choose_right-row-bg">
                                        <img src="./dist/images/ch4.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home_request">
        <div class="container">
            <div class="sub-Heading" style="text-align: center;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> OUR QUOTE <span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>
            <div class="home_request-head">Request A Quote</div>

            <form action="proc-get-quote" method="Post">

                <input type="hidden" name="source_page" value="index.php">

                <div class="row">
                    <div class="col-md-7">
                        <div class="home_request-right">
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

                                <div class="col-md-6">
                                    <p>Full Name</p>
                                    <input type="text" placeholder="Enter your name" name="fullname" value="<?php echo $fullname ?>">
                                </div>
                                <div class="col-md-6">
                                    <p>Email</p>
                                    <input type="email" placeholder="Enter your email" name="email" value="<?php echo $email ?>">
                                </div>
                                <div class="col-md-6">

                                    <p>Service Type</p>
                                    <select class="form-select" name="service_types">
                                        <option selected disabled>Choose one</option>
                                        <option value="Air Freight">Air Freight</option>
                                        <option value="Sea Freight">Sea Freight</option>
                                        <option value="Land Freight">Land Freight</option>
                                        <option value="Warehousing">Warehousing</option>
                                        <option value="Freight Forwarding">Freight Forwarding</option>
                                        <option value="Transloading / Transshipment">Transloading / Transshipment</option>
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <p>Phone Number</p>
                                    <input type="number" placeholder="Enter your number" name="number" value="<?php echo $number ?>">
                                </div>
                                <div class="col-md-6">
                                    <p>Pickup Location</p>
                                    <input type="text" placeholder="Enter city/country or zip" name="pick_up" value="<?php echo $pick_up ?>">
                                </div>
                                <div class="col-md-6">
                                    <p>Drop-off Location</p>
                                    <input type="text" placeholder="Enter city/country or zip" name="drop_off" value="<?php echo $drop_off ?>">
                                </div>
                                <div class="col-md-6">
                                    <p>Estimated Shipment Weight (Kg)</p>
                                    <input type="text" placeholder="Enter approx weight" name="weight" value="<?php echo $weight ?>">
                                </div>
                                <div class="col-md-6">
                                    <p>Length(cm)</p>
                                    <input type="text" placeholder="Enter approx length" name="length" value="<?php echo $length ?>">
                                </div>
                                <div class="col-md-6">
                                    <p>Width(cm)</p>
                                    <input type="text" name="width" placeholder="Enter approx. width" value="<?php echo $length ?>">
                                </div>
                                <!-- <div class="col-md-6">
                                <p>Freight Class</p>
                                <select class="form-select" name="freight_class">
                                    <option selected>Select Class</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div> -->
                                <div class="col-md-6">
                                    <p>Ready Date</p>
                                    <input type="date" name="date" value="<?php echo $date ?>">
                                </div>
                                <div class="col-md-12">
                                    <p>Additional Note</p>
                                    <textarea name="" id="" rows="4" placeholder="Type message" name="notes"></textarea>
                                </div>
                                <div type="submit" class="col-md-12">
                                    <button type="submit">Get My Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="home_request-left">
                            <div class="home_request-left-head">How Can We Help You?</div>
                            <p>We understand the importance approaching each work integrally and believe in the power of
                                simple and easy communication.</p>
                            <div class="btn-sec">
                                <a href="contact.php"><button>Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="about_company">
            <div class="row">
                <div class="col-md-7">
                    <div class="about_company-left">
                        <div class="sub-Heading" style="text-align: left;">
                            <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> ABOUT THE COMPANY
                            <span><img src="./dist/images/ar-r.png" class="img-fluid"></span>
                        </div>
                        <div class="about_company-left-head">Trusted & Technology-Driven Transport Logistics</div>
                        <p>At Laytob LIMITED, we combine years of logistics expertise with cutting-edge technology to deliver fast, reliable, and secure transportation services across the country. Our tailored logistics solutions are designed to simplify your supply chain, improve efficiency, and ensure your goods get where they need to be—on time, every time.</p>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="about_company-left-row">
                                    <div class="about_company-left-row-nav">
                                        <div class="about_company-left-row-navL">
                                            <iconify-icon icon="carbon:storm-tracker" width="25" height="25">
                                            </iconify-icon>
                                        </div>
                                        <div class="about_company-left-row-navR">
                                            <div class="about_company-left-row-navR-head">Online Trace</div>
                                            <p>Stay informed every step of the way with our real-time online tracking
                                                system</p>
                                        </div>
                                    </div>
                                    <div class="btn-sec">
                                        <a href="about.php"><button>Read more</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="about_company-right-row">
                                    <ul>
                                        <li>On-Time Delivery Rate Improvement</li>
                                        <li>Fleet Expansion And Modernization</li>
                                        <li>Advanced Technology Integration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_company-right carder">
                        <img src="./dist/images/about-company.png" class="img-fluid img_carder">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="home-industries">
            <div class="sub-Heading" style="text-align: center;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> INDUSTRIES WE SERVE <span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>
            <div class="home-how-head">Tailored shipping solutions for every industry.</div>

            <div class="row">
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <a href="industiries.php#automotive">
                            <div class="home-industries-row-img carder2">
                                <img src="./dist/images/ind1.png" class="img-fluid img_carder2">
                            </div>
                        </a>
                        <div class="home-industries-row-head">Automotive & vehicular Export</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <a href="industiries.php#ecommerce">
                            <div class="home-industries-row-img carder2">
                                <img src="./dist/images/ind2.png" class="img-fluid img_carder2">
                            </div>
                        </a>
                        <div class="home-industries-row-head">E-Commerce & Distribution Companies</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <a href="industiries.php#food">
                            <div class="home-industries-row-img carder2">
                                <img src="./dist/images/ind3.png" class="img-fluid img_carder2">
                            </div>
                        </a>
                        <div class="home-industries-row-head">Food & perishables(non-temp sensitive)</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <a href="industiries.php#consumer">
                            <div class="home-industries-row-img carder2">
                                <img src="./dist/images/ind4.png" class="img-fluid img_carder2">
                            </div>
                        </a>
                        <div class="home-industries-row-head">Consumer Goods & Retail</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <a href="industiries.php#electronics">
                            <div class="home-industries-row-img carder2">
                                <img src="./dist/images/ind5.png" class="img-fluid img_carder2">
                            </div>
                        </a>
                        <div class="home-industries-row-head">Electronics & Technology</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-industries-row">
                        <a href="industiries.php#industrial">
                            <div class="home-industries-row-img carder2">
                                <img src="./dist/images/ind6.png" class="img-fluid img_carder2">
                            </div>
                        </a>
                        <div class="home-industries-row-head">Manufacture & Industrial Equipment
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'inc/process.php'; ?>

    <!-- <div class="home_testimonial1">
        <div class="container">
            <div class="sub-Heading" style="text-align: left;">
                <span><img src="./dist/images/ar-l.png" class="img-fluid"></span> TESTIMONIALS<span><img
                        src="./dist/images/ar-r.png" class="img-fluid"></span>
            </div>
            <div class="home-process-left-head">What Our Clients Say</div>
        </div>
    </div> -->

    <!-- <div class="home_testimonial2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="home_testimonial-left-img">
                        <img src="./dist/images/feedback.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="home_testimonial-right">
                        <div class="home_testimonial-right-iconL">
                            <img src="./dist/images/ts1.png" class="img-fluid">
                        </div>
                        <div class="home_testimonial-right-iconR">
                            <img src="./dist/images/ts2.png" class="img-fluid">
                        </div>
                        <div class="home_testimonial-right-content">
                            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                                    <li data-target="#myCarousel2" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner row w-100 mx-auto">
                                    <div class="carousel-item col-md-12 active">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>Haut Logistics consistently delivers on time. Their professionalism and attention to detail are truly impressive.</p>
                                                    <div class="home_testimonial-right-content-body-head">Chinwe Okafor
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">Supply Chain Manager</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>Their customer service is excellent. I always feel informed and confident when my shipments are in transit.</p>
                                                    <div class="home_testimonial-right-content-body-head">Tunde Adebayo
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">Operations Director</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>Reliable logistics partner! From customs to delivery, they handle everything smoothly and efficiently.</p>
                                                    <div class="home_testimonial-right-content-body-head">Ngozi Ezeani
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub"> Import/Export Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="home_testimonial-right-content-body">
                                                    <p>I highly recommend Haut Logistics. Their land and sea freight services helped scale our distribution seamlessly.</p>
                                                    <div class="home_testimonial-right-content-body-head">Emeka Nwosu
                                                    </div>
                                                    <div class="home_testimonial-right-content-body-sub">Logistics Coordinator</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <?php include 'inc/footer.php'; ?>

</body>

</html>
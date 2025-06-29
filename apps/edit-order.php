<?php

session_start();

if (!isset($_SESSION['acms_valid_user'])) {
    include('index.php');
    exit;
}


include('connection/connect.php');
require_once('fns.php');

$query_ed = "select * from `order` where token = '" . $_GET['token'] . "'";
$result_ed = mysqli_query($db, $query_ed);
$row_ed = mysqli_fetch_array($result_ed);
$tracking_no = $row_ed['tracking_no'];
$fullname = $row_ed['r_fullname'];
$email = $row_ed['r_email'];
$current_location = $row_ed['pick_up_location'];
$description = get_val('tracking_details','order_token',$_GET['token'],'description');
$status = $row_ed['status'];
$delivery_date = $row_ed['delivery_date'];


?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">
    <title>Add Category</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/icon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="images/logo.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="" alt="" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Update Tracking Info</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"></a></li>
                            </ol>
                            <!-- <a href="proc-add-question" target=""
                                    class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Save
                                    </a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col-lg-12 -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- <div class="container-fluid">
                <div class="container">
                    <textarea name="message" placeholder="Enter Question">
                </div>
            </div> -->
            <div class="container-fluid">
                <?php if ($error) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
                <?php if ($success) echo '<div class="alert alert-success">' . $success . '</div>'; ?>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <form action="proc-edit-order" method="post" enctype="multipart/form-data">


                                                <!-- <div class="img-text">
                              <label>Title</label>
                             <select name="title" class="form-control">
                                <option value="N/A">Choose one</option>
                                <option>Mr</option>
                                <option>Miss</option>
                                <option>Mrs</option>
                                <option>Chief</option>
                                <option>Dr</option>
                                <option>Other</option>
                             </select>
                            <br>
                                </div> -->

                                                <!-- <div class="img-text">
                              <label>Category</label>
                              <input type="text" name="category" class="form-control"  value="<?php echo $category_name; ?>" required>
                              <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
                            <br>
                                </div> -->

                                                <!-- <div class="img-text">
                              <label>Name</label>
                              <input type="text" name="name" class="form-control"  value="<?php echo $name; ?>" required>
                              <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
                            <br>
                                </div> -->
                                                <div class="img-text">
                                                    <label>Tracking Number</label>
                                                    <input type="text" name="tracking_no" class="form-control"
                                                        value="<?php echo $tracking_no; ?>" required readonly>
                                                    <input type="hidden" value="<?php echo $_GET['token']; ?>"
                                                        name="token">
                                                    <br>
                                                </div>
                                                <!-- <div class="img-text">
                                                    <label>Fullname</label>
                                                    <input type="text" name="fullname" class="form-control"
                                                        value="<?php echo $fullname; ?>" required readonly>
                                                    <br>

                                                </div> -->
                                                <div class="img-text">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        value="<?php echo $email; ?>" required>
                                                    <br>

                                                </div>
                                                <div class="img-text">
                                                    <label>Current Location</label>
                                                    <input type="text" name="current_location" class="form-control"
                                                        value="" required>
                                                    <br>

                                                </div>
                                                <div class="img-text">
                                                    <label>Description (any comment on package)</label>
                                                    <input type="text" name="description" class="form-control" value=""
                                                        required>
                                                    <br>

                                                </div>
                                                <div class="img-text">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control" required>
                                                        <option value="" disabled
                                                            <?php echo empty($status) ? 'selected' : ''; ?>>Product
                                                            Status</option>
                                                        <option value="Pending"
                                                            <?php echo ($status == 'Pending') ? 'selected' : ''; ?>>
                                                            Pending</option>
                                                        <option value="In Transit"
                                                            <?php echo ($status == 'In Transit') ? 'selected' : ''; ?>>
                                                            In Transit</option>
                                                        <option value="On Hold"
                                                            <?php echo ($status == 'On Hold') ? 'selected' : ''; ?>>On
                                                            Hold</option>
                                                        <option value="Destination"
                                                            <?php echo ($status == 'Destination') ? 'selected' : ''; ?>>
                                                            Destination</option>
                                                        <option value="Ready for Pickup"
                                                            <?php echo ($status == 'Ready for Pickup') ? 'selected' : ''; ?>>
                                                            Ready for Pickup</option>
                                                    </select>
                                                    <br>
                                                </div>

                                                <div class="img-text">
                                                    <label>Delivery date</label>
                                                    <input type="datetime" name="delivery_date" class="form-control"
                                                        value="<?php echo $delivery_date?>" required>
                                                    <br>

                                                </div>

                                                <div class="img-text" style="margin-top: 40px;">
                                                    <input class="btn btn-success" style=" margin-bottom: 10px;"
                                                        type="submit" value="Save">
                                                </div><br>
                                            </form>

                                        </div>

                                    </div>
                            </div>

                            <!-- <thead>
                                   
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                        </tr> -->
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>




        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center"> Copyright © <?php echo date('Y') ?> - All Rights Reserved Silvershell
            Integrated Consulting. </a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
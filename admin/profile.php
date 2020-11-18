<?php include("php/connection.php");
    if(!isset($_SESSION['admin'])){
//        var_dump($_SESSION['admin']);
        ?>
            <script type="text/javascript">
                window.location.href = "admin_login.php";
            </script>
        <?php
    }
    else{
//        var_dump($_SESSION['admin']);
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/my-ride-logo-small.png">
    <title>My Ride | Admin Profile</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <![endif]-->

    <style>
        .btn-grad {background-image: linear-gradient(to right, #e25f08 0%, #ffcc33  51%, #60c3f1 100%)}
        .btn-grad {
            margin: 20px;
            padding: 15px 45px;
            text-align: center;
            font-size: xx-large;
            font-weight: bolder;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: #ffffff;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
        }

        .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #e54545;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
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
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="../index.php">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="assets/images/my-ride-logo.png" alt="homepage" class="light-logo" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/my-ride-admin.png" alt="homepage" class="light-logo" />

                        </span>
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block"> New Ride Request <i class="fa fa-angle-down"></i></span>
                            <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pending.php">Pending</a>
                            <a class="dropdown-item" href="approved.php">Approved</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="rejected.php">Rejected</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
<!--                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>-->
<!--                        <form class="app-search position-absolute">-->
<!--                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>-->
<!--                        </form>-->
<!--                    </li>-->
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <!--                        <li class="nav-item dropdown">-->
                    <!--                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>-->
                    <!--                            </a>-->
                    <!--                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                    <!--                                <a class="dropdown-item" href="#">Action</a>-->
                    <!--                                <a class="dropdown-item" href="#">Another action</a>-->
                    <!--                                <div class="dropdown-divider"></div>-->
                    <!--                                <a class="dropdown-item" href="#">Something else here</a>-->
                    <!--                            </div>-->
                    <!--                        </li>-->
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
<!--                                            <li class="nav-item dropdown">-->
<!--                                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>-->
<!--                                                </a>-->
<!--                                                <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">-->
<!--                                                    <ul class="list-style-none">-->
<!--                                                        <li>-->
<!--                                                            <div class="">-->
<!--                                                                 &lt;!&ndash; Message &ndash;&gt;-->
<!--                                                                <a href="javascript:void(0)" class="link border-top">-->
<!--                                                                    <div class="d-flex no-block align-items-center p-10">-->
<!--                                                                        <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>-->
<!--                                                                        <div class="m-l-10">-->
<!--                                                                            <h5 class="m-b-0">Event today</h5> -->
<!--                                                                            <span class="mail-desc">Just a reminder that event</span> -->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </a>-->
<!--                                                                &lt;!&ndash; Message &ndash;&gt;-->
<!--                                                                <a href="javascript:void(0)" class="link border-top">-->
<!--                                                                    <div class="d-flex no-block align-items-center p-10">-->
<!--                                                                        <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>-->
<!--                                                                        <div class="m-l-10">-->
<!--                                                                            <h5 class="m-b-0">Settings</h5> -->
<!--                                                                            <span class="mail-desc">You can customize this template</span> -->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </a>-->
<!--                                                                &lt;!&ndash; Message &ndash;&gt;-->
<!--                                                                <a href="javascript:void(0)" class="link border-top">-->
<!--                                                                    <div class="d-flex no-block align-items-center p-10">-->
<!--                                                                        <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>-->
<!--                                                                        <div class="m-l-10">-->
<!--                                                                            <h5 class="m-b-0">Pavan kumar</h5> -->
<!--                                                                            <span class="mail-desc">Just see the my admin!</span> -->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </a>-->
<!--                                                                &lt;!&ndash; Message &ndash;&gt;-->
<!--                                                                <a href="javascript:void(0)" class="link border-top">-->
<!--                                                                    <div class="d-flex no-block align-items-center p-10">-->
<!--                                                                        <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>-->
<!--                                                                        <div class="m-l-10">-->
<!--                                                                            <h5 class="m-b-0">Luanch Admin</h5> -->
<!--                                                                            <span class="mail-desc">Just see the my new admin!</span> -->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </a>-->
<!--                                                            </div>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </li>-->
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="profile.php"><i class="fas fa-user-circle m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="history.php"><i class="fas fa-history t m-r-5 m-l-5"></i> History </a>
                            <a class="dropdown-item" href="add_admin.php"><i class="fas fa-user-plus m-r-5 m-l-5"></i> Add Admin </a>
<!--                            <div class="dropdown-divider"></div>-->
                            <a class="dropdown-item" href="overview.php"><i class="fas fa-code m-r-5 m-l-5"></i> Overview </a>
<!--                            <div class="dropdown-divider"></div>-->
                            <a class="dropdown-item" href="php/admin-logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                        </div>
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
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="fas fa-list-alt"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-car"></i><span class="hide-menu">Cars</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="cars.php" class="sidebar-link"><i class="fas fa-car"></i><span class="hide-menu"> Show & Edit Cars </span></a></li>
                            <li class="sidebar-item"><a href="add_cars.php" class="sidebar-link"><i class="fas fa-plus"></i><span class="hide-menu"> Add Cars </span></a></li>
                            <li class="sidebar-item"><a href="remove_cars.php" class="sidebar-link"><i class="fas fa-trash-alt"></i><span class="hide-menu"> Remove Cars </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Drivers </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="drivers.php" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu"> Show & Edit Drivers </span></a></li>
                            <li class="sidebar-item"><a href="add_drivers.php" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Add Drivers </span></a></li>
                            <li class="sidebar-item"><a href="remove_drivers.php" class="sidebar-link"><i class="fas fa-user-times"></i><span class="hide-menu"> Remove Drivers </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-road"></i><span class="hide-menu"> Routes </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="routes.php" class="sidebar-link"><i class="fas fa-road"></i><span class="hide-menu"> Show & Edit Routes </span></a></li>
                            <li class="sidebar-item"><a href="add_routes.php" class="sidebar-link"><i class="fas fa-plus"></i><span class="hide-menu"> Add Routes </span></a></li>
                            <li class="sidebar-item"><a href="remove_routes.php" class="sidebar-link"><i class="fas fa-trash-alt"></i><span class="hide-menu"> Remove Routes </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-check-square"></i><span class="hide-menu"> Approve Ride </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="pending.php" class="sidebar-link"><i class="fas fa-exclamation-triangle"></i><span class="hide-menu"> Pending </span></a></li>
                            <li class="sidebar-item"><a href="approved.php" class="sidebar-link"><i class="fas fa-thumbs-up"></i><span class="hide-menu"> Approved </span></a></li>
                            <li class="sidebar-item"><a href="rejected.php" class="sidebar-link"><i class="fas fa-ban"></i><span class="hide-menu"> Rejected </span></a></li>
                        </ul>
                    </li>
<!--                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>-->
<!--                        <ul aria-expanded="false" class="collapse  first-level">-->
<!--                            <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i class="fas fa-sign-in-alt"></i><span class="hide-menu"> Login </span></a></li>-->
<!--                            <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i class="fas fa-sign-out-alt"></i><span class="hide-menu"> Register </span></a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>-->
<!--                        <ul aria-expanded="false" class="collapse  first-level">-->
<!--                            <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a></li>-->
<!--                            <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a></li>-->
<!--                            <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a></li>-->
<!--                            <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
            </nav>
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
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Profile</h4>
                    <!--                        <div class="ml-auto text-right">-->
                    <!--                            <nav aria-label="breadcrumb">-->
                    <!--                                <ol class="breadcrumb">-->
                    <!--                                    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
                    <!--                                    <li class="breadcrumb-item active" aria-current="page">Library</li>-->
                    <!--                                </ol>-->
                    <!--                            </nav>-->
                    <!--                        </div>-->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Floating buttons start  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='index.php';">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-format-list-bulleted-type"></i></h1>
                            <h6 class="text-white">Dashboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='cars.php';">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-car"></i></h1>
                            <h6 class="text-white">Cars</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='add_cars.php';">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-plus-circle"></i></h1>
                            <h6 class="text-white">Add Cars</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='remove_cars.php';">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-delete-circle"></i></h1>
                            <h6 class="text-white">Remove Cars</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='drivers.php';">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account"></i></h1>
                            <h6 class="text-white">Drivers</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='add_drivers.php';">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-plus"></i></h1>
                            <h6 class="text-white">Add Drivers</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='remove_drivers.php';">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-off"></i></h1>
                            <h6 class="text-white">Remove Drivers</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='routes.php';">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-road-variant"></i></h1>
                            <h6 class="text-white">Routes</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='add_routes.php';">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-plus-circle"></i></h1>
                            <h6 class="text-white">Add Routes</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover" onclick="window.location='remove_routes.php';">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-delete-circle"></i></h1>
                            <h6 class="text-white">Remove Routes</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <style>
                .card-hover{cursor: pointer}
            </style>
            <!--                Floating buttons End-->
            <!-- ============================================================== -->
            <div>
                <?php
                    extract($_SESSION['admin']);
                    $admin_details=mysqli_query($conn,"select * from admin where id=$id");
                    $admin=mysqli_fetch_array($admin_details);
                    extract($admin);
//                    var_dump($admin);
                ?>
                <center>
                <div style="align-self: center;width: 50%;margin-top: 50px;">
                    <table class="table table-borderless table-striped table-dark" style="text-align: center;font-size: x-large;color: #ccac4b;border-bottom-right-radius: 50px;border-top-left-radius: 50px;">
                        <tbody>
                        <tr>
                            <th scope="col">Name</th>
                            <td><?php echo $name?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo $email?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                </center>
                <center>
                    <form method="post" action="functionalities/edit-profile.php">
                        <input type="hidden" name="ID" value="<?php echo $id;?>">
                        <button class="btn-grad" type="submit" name="edit-btn" value="Edit" style="margin-top: 40px;">Edit Profile</button>
                    </form>
                </center>
            </div>
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="assets/libs/flot/excanvas.js"></script>
<script src="assets/libs/flot/jquery.flot.js"></script>
<script src="assets/libs/flot/jquery.flot.pie.js"></script>
<script src="assets/libs/flot/jquery.flot.time.js"></script>
<script src="assets/libs/flot/jquery.flot.stack.js"></script>
<script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>


</html>
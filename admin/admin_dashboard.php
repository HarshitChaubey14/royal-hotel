<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../image/favicon.png" type="image/png">
    <title>Royal Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <style type="text/css">
        .btn {
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="../index.html"><img src="../image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area Finish=================-->
    <br><br><br><br>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-2">
            <form action="" method="post">
                <a class="btn btn-primary" href="rooms.php">Book Room for guests</a>
                <!-- <a class="btn btn-success" href="rooms.php">Check Room Status</a>
                    <a class="btn btn-warning" href="#">View Users Detail</a>
                    <a class="btn btn-info" href="#">Recently Check Outs</a> -->
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <br><br>
    <!--================Banner Area END =================-->
    <div class="row">
        <div class="col-md-12">
            <center>
                <h3 style="color:blue;">Checked In Users Details</h3>
            </center>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>User Name</th>
                        <th>User ID</th>
                        <th>User Mobile</th>
                        <th>Room No</th>
                        <th>User Address</th>
                        <th>Child</th>
                        <th>Adult</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                    </tr>
                </thead>
                <?php
                $user_count = 0;
                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, "royal_hotel");
                $query = "select * from single_non_ac where status = 1;";
                $query_run = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    $user_count = $user_count + 1;
                ?>
                    <tr>
                        <td><?php echo $user_count; ?></td>
                        <td><?php echo $row['holder_name']; ?></td>
                        <td><?php echo $row['holder_id']; ?></td>
                        <td><?php echo $row['holder_mobile']; ?></td>
                        <td><?php echo $row['room_no']; ?></td>
                        <td><?php echo $row['holder_address']; ?></td>
                        <td><?php echo $row['child']; ?></td>
                        <td><?php echo $row['adult']; ?></td>
                        <td><?php echo $row['in_date']; ?></td>
                        <td><?php echo $row['out_date']; ?></td>
                    </tr>
                <?php
                }

                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, "royal_hotel");
                $query = "select * from single_ac where status = 1;";
                $query_run = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    $user_count = $user_count + 1;
                ?>
                    <tr>
                        <td><?php echo $user_count; ?></td>
                        <td><?php echo $row['holder_name']; ?></td>
                        <td><?php echo $row['holder_id']; ?></td>
                        <td><?php echo $row['holder_mobile']; ?></td>
                        <td><?php echo $row['room_no']; ?></td>
                        <td><?php echo $row['holder_address']; ?></td>
                        <td><?php echo $row['child']; ?></td>
                        <td><?php echo $row['adult']; ?></td>
                        <td><?php echo $row['in_date']; ?></td>
                        <td><?php echo $row['out_date']; ?></td>
                    </tr>
                <?php
                }

                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, "royal_hotel");
                $query = "select * from double_non_ac where status = 1;";
                $query_run = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    $user_count = $user_count + 1;
                ?>
                    <tr>
                        <td><?php echo $user_count; ?></td>
                        <td><?php echo $row['holder_name']; ?></td>
                        <td><?php echo $row['holder_id']; ?></td>
                        <td><?php echo $row['holder_mobile']; ?></td>
                        <td><?php echo $row['room_no']; ?></td>
                        <td><?php echo $row['holder_address']; ?></td>
                        <td><?php echo $row['child']; ?></td>
                        <td><?php echo $row['adult']; ?></td>
                        <td><?php echo $row['in_date']; ?></td>
                        <td><?php echo $row['out_date']; ?></td>
                    </tr>
                <?php
                }

                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, "royal_hotel");
                $query = "select * from double_ac where status = 1;";
                $query_run = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    $user_count = $user_count + 1;
                ?>
                    <tr>
                        <td><?php echo $user_count; ?></td>
                        <td><?php echo $row['holder_name']; ?></td>
                        <td><?php echo $row['holder_id']; ?></td>
                        <td><?php echo $row['holder_mobile']; ?></td>
                        <td><?php echo $row['room_no']; ?></td>
                        <td><?php echo $row['holder_address']; ?></td>
                        <td><?php echo $row['child']; ?></td>
                        <td><?php echo $row['adult']; ?></td>
                        <td><?php echo $row['in_date']; ?></td>
                        <td><?php echo $row['out_date']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <br><br><br><br><br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
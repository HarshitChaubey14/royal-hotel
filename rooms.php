<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Royal Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
        .btn {
            margin-right: 15px;
        }

        body {
            background-color: rgb(255, 251, 234);
        }
    </style>
</head>

<body">
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area Finish=================-->
    <br><br><br><br>

    <!--================Banner Area END =================-->
    <div class="text-center">
        <h2 class="title_color" style="color:blue;">You are Special for us!</h2>
        <p style="color:darkblue;">So we have Special rooms, just for you:)</p>
    </div>

    <center>
        <h4 class="sec_h4">Single non AC Room</h4>
    </center>
    <center>
        <h5>₹1000<small>/night</small></h5>
    </center>

    <div class="row">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "royal_hotel");
        $query = "select * from single_non_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room2.jpg" alt="">
                        <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=a"; ?>" class="btn theme_btn button_hover <?php if ($row["status"] == 0) {
                                                                                                                                        echo "active";
                                                                                                                                    } else {
                                                                                                                                        echo "disabled";
                                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                            echo "false";
                                                                                                                                                                        } else {
                                                                                                                                                                            echo "true";
                                                                                                                                                                        } ?>">Book Now</a>
                    </div>
                    <div>Room No: <?php echo $row["room_no"] ?></div>
                    <div>
                        <p class="card-text">Status: <?php if ($row["status"] == 0) {
                                                            echo '<b style="color:green;">Available</b>';
                                                        } else {
                                                            echo "<b>Already Booked</b>";
                                                        } ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div><br>

    <center>
        <h4 class="sec_h4">Single AC Room</h4>
    </center>
    <center>
        <h5>₹1500<small>/night</small></h5>
    </center>

    <div class="row">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "royal_hotel");
        $query = "select * from single_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room2.jpg" alt="">
                        <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=b"; ?>" class="btn theme_btn button_hover <?php if ($row["status"] == 0) {
                                                                                                                                        echo "active";
                                                                                                                                    } else {
                                                                                                                                        echo "disabled";
                                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                            echo "false";
                                                                                                                                                                        } else {
                                                                                                                                                                            echo "true";
                                                                                                                                                                        } ?>">Book Now</a>
                    </div>
                    <div>Room No: <?php echo $row["room_no"] ?></div>
                    <div>
                        <p class="card-text">Status: <?php if ($row["status"] == 0) {
                                                            echo '<b style="color:green;">Available</b>';
                                                        } else {
                                                            echo "<b>Already Booked</b>";
                                                        } ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div><br>

    <center>
        <h4 class="sec_h4">Double non AC Room</h4>
    </center>
    <center>
        <h5>₹2500<small>/night</small></h5>
    </center>

    <div class="row">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "royal_hotel");
        $query = "select * from double_non_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room4.jpg" alt="">
                        <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=c"; ?>" class="btn theme_btn button_hover <?php if ($row["status"] == 0) {
                                                                                                                                        echo "active";
                                                                                                                                    } else {
                                                                                                                                        echo "disabled";
                                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                            echo "false";
                                                                                                                                                                        } else {
                                                                                                                                                                            echo "true";
                                                                                                                                                                        } ?>">Book Now</a>
                    </div>
                    <div>Room No: <?php echo $row["room_no"] ?></div>
                    <div>
                        <p class="card-text">Status: <?php if ($row["status"] == 0) {
                                                            echo '<b style="color:green;">Available</b>';
                                                        } else {
                                                            echo "<b>Already Booked</b>";
                                                        } ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div><br>

    <center>
        <h4 class="sec_h4">Double AC Room</h4>
    </center>
    <center>
        <h5>₹3000<small>/night</small></h5>
    </center>

    <div class="row">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "royal_hotel");
        $query = "select * from double_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>

            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room4.jpg" alt="">
                        <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=d"; ?>" class="btn theme_btn button_hover <?php if ($row["status"] == 0) {
                                                                                                                                        echo "active";
                                                                                                                                    } else {
                                                                                                                                        echo "disabled";
                                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                            echo "false";
                                                                                                                                                                        } else {
                                                                                                                                                                            echo "true";
                                                                                                                                                                        } ?>">Book Now</a>
                    </div>
                    <div>Room No: <?php echo $row["room_no"] ?></div>
                    <div>
                        <p class="card-text">Status: <?php if ($row["status"] == 0) {
                                                            echo '<b style="color:green;">Available</b>';
                                                        } else {
                                                            echo "<b>Already Booked</b>";
                                                        } ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div><br>

    <br><br>
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
<?php 
    session_start();
   if(isset($_POST['book_room'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"royal_hotel");
        if($_POST['room_type'] == 'Single Non-AC'){
            $query = "update single_non_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Single AC'){
            $query = "update single_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Double Non-AC'){
           $query = "update double_non_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Double AC'){
            $query = "update double_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        $query_run = mysqli_query($connection,$query);
        if($_SESSION[name] == 'admin'){
            header("location:redirect_page.php");   
        }
        else{
            header("location:redirect_user.php");   
        }
   } 
?>
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
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
            body {
            background: url(../about_banner.jpg);
            background-size: cover;
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
                            <li class="nav-item active"><a class="nav-link" href="../home.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="../about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="../gallery.html">Gallery</a></li>
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
       <div class="row">
       	<div class="col-md-12">
       		<center><h3 style="color:blue;">Room Booking Page</h3></center>
       	</div>
       </div>
        <div class="row">
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        	<form action="" method="post">
			<div class="form-group">
		    	<label for="name">Room No:</label>
		    	<input type="text" class="form-control" name="room_no" value="<?php echo $_GET['rn'];?>" disabled>
		  	</div>
			<div class="form-group">
		    	<label for="email">Room Type:</label>
		    	<input type="text" class="form-control" name="room_type" value="<?php if($_GET['rt'] == 'a'){echo 'Single Non-AC';}if($_GET['rt'] == 'b'){echo 'Single AC';}if($_GET['rt'] == 'c'){echo 'Double Non-AC';}if($_GET['rt'] == 'd'){echo 'Double AC';}?>">
		  	</div>
            <div class="form-group">
                <label for="email">Holder Name:</label>
                <input type="text" class="form-control" name="holder_name" required="">
            </div>
            <div class="form-group">
                <label for="email">Holder ID:</label>
                <input type="text" class="form-control" name="holder_id" required="">
            </div>
            <div class="form-group">
                <label for="email">Holder Mobile:</label>
                <input type="text" class="form-control" name="holder_mobile" required="">
            </div>
            <div class="form-group">
                <label for="email">Holder Address:</label>
                <textarea rows="3" cols="40" class="form-control" name="holder_address" required=""></textarea>
            </div>
            <div class="form-group">
                <label>No of Child:</label>
                <input type="number" class="form-control" name="child_no">
            </div>
            <div class="form-group">
                <label for="select_adult">No of Adult:</label>
                <input type="number" class="form-control" id="select_adult" name="adult_no">
            </div>
            <div class="form-group">
                <label for="email">Check-In Date:</label>
                <input type="date" class="form-control" name="check_in_date" required="">
            </div>
            <div class="form-group">
                <label for="email">Check-Out Date:</label>
                <input type="date" class="form-control" name="check_out_date" required="">
            </div>
			<button type="submit" name="book_room" class="btn btn-warning">Book Now</button>
		</form>
        	</div>
        	<div class="col-md-4"></div>
        </div>
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


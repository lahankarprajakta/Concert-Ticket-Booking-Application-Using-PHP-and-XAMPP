<?php
/**
 * Created by PhpStorm.
 * User: praja_m3gddx7
 * Date: 5/13/2019
 * Time: 1:59 PM
 */


	require_once("config.php");
	require_once("header.php");

	$thisArtist = $_GET["search"];
	$thisconcert = fetchThisconcert($thisArtist);
?>

<body>
	<!--<div id="wrapper">
		<div id="content">
			<h2>Free Concert Events!!!</h2>
           <li><a href='index.php'>Home</a></li>
        </div>
    </div>-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <div id="wrapper">
        <!--<h2>Login</h2>-->
        <div id="left-nav">
            <?php include("left-nav.php"); ?>
        </div>
        <div id="main">
				<pre>
					<?php //print_r($errors); ?>
				</pre>

            < <div class="col-12 col-lg-6">
                <div class="contact_from_area mb-100 clearfix">



            <!-- The form -->
           <!-- <form class="example" action="SearchResult.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>-->
			<div id="main">
				<br><br><br>
				<h1 style="color: red;"><?php print $thisconcert["ConcertName"]; ?></h1>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="C:\Users\praja_m3gddx7\Downloads\AG.jpg" alt="">
                        </div>






                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Evelyn Stone</h5>
                            <p>Photographer</p>
                        </div>
                    </div>
                </div>

				<h3 style="color:blue;"><?php print $thisconcert["Description"]; ?></h3>


                <form action="BookNow.php" method="get">


                   <!-- <button type="submit" formaction="BookNow.php"> Book Now</button>-->

                    <form class="example" action="BookNow.php">


                        <button type="Book" class="btn confer-btn"> Book Now<i class="zmdi zmdi-long-arrow-right"></i></button>
            </div>
                    </form>

                </form>



            </div>
			</div>
		</div>
</body>
</html>




<html>
<footer>
    <!-- Copywrite Area -->
    <div class="container">
        <div class="copywrite-content">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="col-12 col-md-6">
                    <div class="footer-menu">
                        <ul class="nav">
                            <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                            <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="js/confer.bundle.js"></script>
<!-- Active -->
<script src="js/default-assets/active.js"></script>

</body>

</html>


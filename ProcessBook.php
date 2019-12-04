



<?php


 require_once("config.php");
 require_once("header.php");
/**
 * Created by PhpStorm.
 * User: praja_m3gddx7
 * Date: 5/14/2019
 * Time: 6:26 PM
 */

print_r($_POST);




echo "<pre>";
print_r($_POST);
echo "</pre>";





// Assigning $_POST values to individual variables for reuse.
$UserName = $_GET['UserName'];


//$username = $_POST['username'];
//$password = $_POST['password'];
//$fname = $_POST['firstname'];
//$lname = $_POST['lastname'];




echo "<pre>";
echo "You are booked for this event", $UserName;
echo "</pre>";



//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

//$newuser = BookNow($UserName);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
echo $newuser;
?>

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

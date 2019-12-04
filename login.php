<?php

    require_once("config.php");


//Prevent the user visiting the logged in page if he/she is already logged in
    if (isUserLoggedIn()) {
        header("Location: myaccount.php");
        die();
    }

//Forms posted
    if (!empty($_POST)) {
        $errors = array();
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        //Perform some validation

        if ($username == "") {
            $errors[] = "enter username";
        }
        if ($password == "") {
            $errors[] = "enter password";
        }

        if (count($errors) == 0) {
            //retrieve the records of the user who is trying to login
            $userdetails = fetchUserDetails($username);

            print_r($userdetails);

            //See if the user's account is activated
            if ($userdetails["Active"] == 0) {
                $errors[] = "account inactive";
            } else {
                //Hash the password and use the salt from the database to compare the password.
                $entered_pass = generateHash($password, $userdetails["Password"]);
                echo "entered password : " . $entered_pass . "<br><br>";
               echo "database password : " . $userdetails['Password'];

                if ($entered_pass != $userdetails["Password"]) {
                    $errors[] = "invalid password";
                } else {
                    //Passwords match! we're good to go'
                    //Transfer some db data to the session object
                    $loggedInUser = new loggedInUser();
                    $loggedInUser->Email = $userdetails["Email"];
                    $loggedInUser->UserID = $userdetails["UserID"];
                    $loggedInUser->hash_pw = $userdetails["Password"];
                    $loggedInUser->FirstName = $userdetails["FirstName"];
                    $loggedInUser->LastName = $userdetails["LastName"];
                    $loggedInUser->UserName = $userdetails["UserName"];
                    $loggedInUser->MemberSince = $userdetails["MemberSince"];


                    //pass the values of $loggedInUser into the session -
                    // you can directly pass the values into the array as well.

                    $_SESSION["ThisUser"] = $loggedInUser;

                    //now that a session for this user is created
                    //Redirect to this users account page
                    header("Location: myaccount.php");
                    die();
                }
            }

        }
    }

require_once("header.php"); ?>

<body>
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
                <!-- Contact Heading -->
                <div class="contact-heading">
                    <h4>LOGIN</h4>
                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae</p>
                </div>
                <div class="contact_form">
                    <form name="login" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="contact_input_area">
                            <div class="row">
                                <!-- Form Group -->
                                <div class="col-12 col-lg-6">




                                    <p>
                                        <label for="username">Username:</label>
                                        <input id="username" type="text" name="username"/>
                                    </p>
                                    <p>
                                        <label for="password">Password:</label>  <br>
                                        <input id="password" type="password" name="password"/>
                                    </p>
                                    <div class="col-12">
                                        <button type="submit" class="btn confer-btn"> LOGIN <i class="zmdi zmdi-long-arrow-right"></i></button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



                <?php require_once("footer.php"); ?>
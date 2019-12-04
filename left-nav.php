<!-- Header Area Start -->
<header class="header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">

                <!-- Logo -->
                <a class="nav-brand" href="./index.php">EVENTGO</a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <?php
                            // Links for logged in user
                            if (isUserLoggedIn()) { ?>

                                <ul>
                                    <li><a href='myaccount.php'>Account Home</a></li>
                                    <li><a href='logout.php'>Logout</a></li>
                                    <li><a href='admin_users.php'>Admin Users</a></li>



                                </ul>

                            <?php } else { ?>

                                <ul>
                                    <li><a href='index.php'>Home</a></li>
                                    <li><a href='login.php'>Login</a></li>
                                    <li><a href='register.php'>Register</a></li>


                                </ul>
                            <?php } ?>

                        </ul>

                        <!-- Get Tickets Button -->
                        <form class="example" action="SearchResult.php">
                            <input type="text" placeholder="Search.." name="search">

                                <button type="Search" class="btn confer-btn"> Search<i class="zmdi zmdi-long-arrow-right"></i></button>
                            </div>
                        </form>


                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Header Area End -->






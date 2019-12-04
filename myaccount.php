<?php
    require_once("config.php");
    require_once("header.php");
?>


<body>
<div id="wrapper">
    <div id="content">
        <h2>My Account</h2>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- The form -->
        <form class="example" action="SearchResult.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div id="left-nav">
            <?php include("left-nav.php"); ?>
        </div>

        <div id="main">
            <br><br><br>
            Hey, <?php echo "$loggedInUser->FirstName" . "$loggedInUser->LastName"; ?>.
            This is an example page designed to demonstrate user authentication examples.
            Just so you know, you registered this account on <?php print date("M d, Y", $loggedInUser->MemberSince); ?>

            <?php print $loggedInUser->EmailAddress; ?>



            <?php require_once("footer.php"); ?>
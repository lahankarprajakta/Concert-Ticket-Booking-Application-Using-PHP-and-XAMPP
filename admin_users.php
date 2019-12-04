<?php
/**
 * Created by PhpStorm.
 * User: praja_m3gddx7
 * Date: 5/14/2019
 * Time: 4:19 PM
 */

/* This is the admin file. this file will always  be loaded only upon login
I have included the config.php in here that contains the call to functions.php
 */
    require_once("config.php");
    require_once("header.php");
?>

<!-- this is simple HTML code -- it has calls to the respective files that we are calling at each click -->
    <body>
        <table>
            <tr>
                <th>Perform Operations:</th>
            </tr>
            <tr>
                <td><a href="display.php">(R)ead Display All Users </a></td>
                <td><a href="Displayconcerts.php">View All Concerts</a></td>
            </tr>
            <?php if (isUserLoggedIn()) { ?>

                <tr>
                    <td><a href="Edit.php"> Update/Delete User Record</a></td>
                </tr>

            <?php } ?>
        </table>
    </body>
</html>
<?php require_once("footer.php"); ?>
<?php
/**
 * Created by PhpStorm.
 * User: praja_m3gddx7
 * Date: 5/14/2019
 * Time: 4:14 PM
 */


    require_once("config.php");
    require_once("header.php");
    // call to function fetchAllUsers() from functions.php
     $allconcerts = fetchAllconcerts();
?>
    <body>
        <div id='left-nav'>
            <?php include("left-nav.php"); ?>
        </div>

        <pre>
            <?php //print_r($allusers); ?>
        </pre>

        <table>
            <tr>
                <td>ConcertID</td>
                <td>Artist</td>
                <td>City</td>

                <?php //NOTICE THE USE OF PHP IN BETWEEN HTML
                foreach ($allconcerts as $concerts) {
                ?>
            <tr>
                <td>
                    <a href="updateThisUser.php?ConcertID=<?php print $concert['ConcertID']; ?>"><?php print $concert['ConcertID']; ?></a>
                </td>
                <td><?php print $concert['Artist']; ?></td>
                <td><?php print $concert['City']; ?></td>
            </tr>

            <?php } ?>
        </table>
    </body>
</html>


<?php require_once("footer.php"); ?>
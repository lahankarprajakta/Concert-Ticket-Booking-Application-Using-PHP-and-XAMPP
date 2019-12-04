<?php
/**
 * Created by PhpStorm.
 * User: Prajakta
 * Date: 5/16/2019
 * Time: 1:52 PM
 */

/**
 * PraviinM
 */

require_once("config.php");



$UserName= $_POST['UserName'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$MemberSince = $_POST['MemberSince'];
 $Active = $_POST['Active'];
$thisUserID = $_POST['UserID'];


if ($_POST['0']) {
    $updatedRecord = updateThisRecord($UserName, $FirstName, $LastName, $Email, $Password, $MemberSince, $Active, $thisUserID);
    echo "<br> Record successfully updated</br>";
} else {
    if ($_POST['1']) {
        $deletedrecord = Deletethisrecord($thisUserID);
        if ($deletedrecord == 1)
        {
            echo "The UserID = ' ", $thisUserID, " ' Deleted successfully";

        }
    } else {
        if ($_POST['2']) {
            $deactivateuser = DeActivationStatus($thisUserID);
            if ($deactivateuser == 1)
            {
                echo "The UserID = '", $thisUserID, "'  Deactivated Record";
            }
        }
    }
}



?>
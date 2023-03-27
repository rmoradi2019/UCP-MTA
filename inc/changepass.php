<?php

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);


    $te2 = $conn -> query("UPDATE $usertbname SET $userppass = '$userpassnew' WHERE $userpname = '$user'");
    header("Location: logout");

?>
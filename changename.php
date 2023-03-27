<?php 

include 'config.php';
include 'setting.php';

?>


<?php
session_start();

if($_SESSION["loggedIn"] != true){
    header("Location: login");
    exit;
  }

$user = $_SESSION["useresh"];

$usernamenew = $_POST['username'];


include 'inc/changename.php';

?>


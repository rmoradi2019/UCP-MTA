<?php
include 'config.php';
include 'setting.php';
session_start();

$user = $_SESSION["useresh"];

if($_SESSION["loggedIn"] != true){
  header("Location: login");
  exit;
}
?>
<?php

include 'inc/erroruser.php';


$url = $gsu; 
$content = file_get_contents($url); 
$player = getInbetweenStrings( "<td class=\"value\" id=\"players\">" , "</td>" , $content );

function getInbetweenStrings ( $start, $end , $string) {
  $string = ' ' . $string;
  $ini = strpos($string, $start);
  if ($ini == 0) return '';
  $ini += strlen($start);
  $len = strpos($string, $end, $ini) - $ini;
  return substr($string, $ini, $len);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/style.css">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php echo $iu ?>">
    <title><?php echo $snf ?></title>
</head>
<body>
    
<div class="main-menu" id="main-menu">

<div class="topnav">


  <a href="logout" style="float : left">خروج از حساب</a>
</div>

<div class="rightnav">
    <img src="<?php echo $iu ?>" alt="logo">
</div>

<div class="leftmenu">

<h3 style="text-align: center; font-size: 20px"><?php echo "نام کاربری وارد شده از قبل وجود دارد"; ?></h3>

<a href="edit" class="btn">بازگشت</a>

</div>

<div class="rightmenu">
<img class="rounded" src="<?php echo "skins-images/".$pskinesh.".png" ?>" alt="Icon">
    <h1 class="mt-3"><?php echo $user ?></h1>
    <p class="mb-0">
    <?php
    if ($admin == "0")
    {
      echo "بازیکن";
    }
    else
    {
      echo "ادمین";
    }
    ?>
    </p>

    <ul>
        <li>
            <span><?php if($psexesh == "1")
{
  echo "مرد";
}
else
{
  echo "زن";
}
?>
</span>
            <p>جنسیت</p>
        </li>
        <li>
            
            <span><?php echo $plevelshesh ?></span>
            <p>سطح</p>
        </li>
        <li>
            <span><?php echo $pgoldesh ?></span>
            <p>طلا</p>
        </li>
    </ul>

    <?php include 'items/menus.php'; ?>

</div>


</div>

</body>
</html>
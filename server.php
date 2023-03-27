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

include 'inc/server.php';


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $snf ?></title>
</head>
<body>
    
<div class="main-menu" id="main-menu">

<?php include 'items/navbar.php'; ?>

<script>
function myFunction() {
   var element = document.getElementById("rr");
   element.classList.toggle("dark-mode");
   var element1 = document.getElementById("rrr");
   element1.classList.toggle("dark-mode");
}
</script>

<div class="rightnav">
    <img src="<?php echo $iu ?>" alt="logo">
</div>

<div class="leftmenu" id="rr">

<div class="row3" id="ggs">
  <div class="column3">
    <div class="card3 boxing">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 icon-bg"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg><br>
    <br>
    ایپی عددی سرور
    <br>
    <br>
    <br>
 
    <?php echo $server_ip ?>

    
</div>
  </div>
  <div class="column3">
    <div class="card3 boxing">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 icon-bg"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg><br>
    <br>
    ایپی حروفی سرور
    <br><br>
    <br>
 
    <?php echo $server_ipp ?>
    
    
</div>
  </div>
  
</div> 


<br>



</div>

<div class="rightmenu" id="rrr">
<img class="rounded" src="<?php echo "skins-images/".$pskinesh.".png" ?>" alt="Icon">
    <h1 class="mt-3"><?php echo $user ?></h1>
    <p class="mb-0">
    <?php
    if ($admin == "0")
    {
      echo "بازیکن";
    }
    elseif ($admin > 0)
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
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


include 'inc/index.php';





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
   var element1 = document.getElementById("scrollermenu");
   element1.classList.toggle("dark-mode");
}
</script>

<div class="rightnav">
    <img src="<?php echo $iu ?>" alt="logo">
</div>

<div class="leftmenu" id="scrollermenu">

<div class="headermenu">

    <h3 class="font-light">به کنترل پنل <?php echo $snf ?> ام تی ای خوش آمدید</h3>

</div>

<br>

<div class="row">
  <div class="column">
    <div class="card" style="background-color: #7951aa !important;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><br>
    بازیکنان آنلاین
    <br>
<?php echo file_get_contents($gsu); echo " / "; echo file_get_contents($gsi); ?>
</div>
  </div>
  <div class="column">
    <div class="card" style="background-color: #1b4c43 !important;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 icon-bg"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg><br>
    کل بازیکنان
    <br>
<?php echo $pid ?>
</div>
  </div>
  <div class="column">
    <div class="card" style="background-color: #717171 !important">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><br>
    تعداد کارکنان
<br>
<?php echo $admins ?>
</div>
  </div>
  
</div> 


</div>

<div class="rightmenu" id="rr">
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
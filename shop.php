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


include 'inc/shop.php';




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


<br>

<div class="row1" id="ggs">
  <div class="column1">
    <div class="card1" style="background-color: #7951aa !important;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" id="mainIconPathAttribute" fill="yellow"></path> </svg><br>
    <?php echo $g1 ?> طلا
    <br>
    <?php echo $p1 ?> ریال
    <br>
    <br>
    <br>
    <a href="/pay/request?gold=<?php echo $p1 ?>&gold1=<?php echo $g1 ?>"><button class="btn1">خرید</button></a>
</div>
  </div>
  <div class="column1">
    <div class="card1" style="background-color: #1b4c43 !important;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" id="mainIconPathAttribute" fill="yellow"></path> </svg><br>
    <?php echo $g2 ?> طلا
    <br>
    <?php echo $p2 ?> ریال
    <br>
    <br>
    <br>
    <a href="/pay/request?gold=<?php echo $p2 ?>&gold1=<?php echo $g2 ?>"><button class="btn1">خرید</button></a>
</div>
  </div>
  <div class="column1">
    <div class="card1" style="background-color: #717171 !important">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" id="mainIconPathAttribute" fill="yellow"></path> </svg><br>
    <?php echo $g3 ?> طلا
<br>
<?php echo $p3 ?> ریال
<br>
    <br>
    <br>
    <a href="/pay/request?gold=<?php echo $p3 ?>&gold1=<?php echo $g3 ?>"><button class="btn1">خرید</button></a>
</div>
  </div>
</div> 


<div class="row1">
  <div class="column1">
    <div class="card1" style="background-color: #7951aa !important;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" id="mainIconPathAttribute" fill="yellow"></path> </svg><br>
    <?php echo $g4 ?> طلا
    <br>
    <?php echo $p4 ?> ریال
    <br>
    <br>
    <br>
    <a href="/pay/request?gold=<?php echo $p4 ?>&gold1=<?php echo $g4 ?>"><button class="btn1">خرید</button></a>
</div>
  </div>
  <div class="column1">
    <div class="card1" style="background-color: #1b4c43 !important;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" id="mainIconPathAttribute" fill="yellow"></path> </svg><br>
    <?php echo $g5 ?> طلا
    <br>
    <?php echo $p5 ?> ریال
    <br>
    <br>
    <br>
    <a href="/pay/request?gold=<?php echo $p5 ?>&gold1=<?php echo $g5 ?>"><button class="btn1">خرید</button></a>
</div>
  </div>
  <div class="column1">
    <div class="card1" style="background-color: #717171 !important">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" id="mainIconPathAttribute" fill="yellow"></path> </svg><br>
    <?php echo $g6 ?> طلا
<br>
<?php echo $p6 ?> ریال
<br>
    <br>
    <br>
    <a href="/pay/request?gold=<?php echo $p6 ?>&gold1=<?php echo $g6 ?>"><button class="btn1">خرید</button></a>
</div>
  </div>
</div>

</div>

<div class="rightmenu" id="rrr">
<img class="rounded" src="<?php echo "skins-images/".$pskinesh.".png" ?>" alt="Icon">
    <h1 class="mt-3"><?php echo $user ?></h1>
    <p class="mb-0">
    <?php
    if ($admins == "0")
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
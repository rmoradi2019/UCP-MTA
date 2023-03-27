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

include 'inc/edit.php';


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

<form class="formclass" method="post" action="changename">
<div class="form-group">
                <label>نام کاربری جدید: ( هزینه : <?php echo $change_name_price ?> طلا )</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o" style="color:white;"></i></span>
                  <input class="form-control" type="text" name="username" required="" placeholder="Username" data-validate="required" required>
                </div>
            </div>
<button class="btn" type="submit" value="submit" name="submit">تغییر نام</button>
</form>
<br>
<form class="formclass" method="post" action="changepass">
<div class="form-group">
                <label>رمز عبور جدید: ( رایگان )</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-500px" style="color:white;"></i></span>
                  <input class="form-control" type="text" name="password" required="" placeholder="password" data-validate="required" required>
                </div>
            </div>
<button class="btn" type="submit" value="submit" name="submit">تغییر رمز</button>
</form>
<br>




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
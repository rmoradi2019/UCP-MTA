<?php
include 'config.php';
include 'setting.php';
session_start();

if($_SESSION["loggedIn"] == true){
  header("Location: index");
  exit;
}

?>
<?php



if(isset($_POST['submit'])) 
{
  //Get User And Pass From Form
  $user = $_POST['username'];
  $pass = $_POST['password'];
  include 'inc/login.php';
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
<body class="loginbody">

<div class="main-menu1" id="main-menu1">

<form class="formclass" method="post">

<h4 class="htitle">ورود به پنل کاربری</h4>
<br>
<h6 class="h6title">خوش آمدید ، برای ورود از حساب خود در سرور استفاده کنید</h6>

            <div class="form-group">
                <label>نام کاربری</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o" style="color:white;"></i></span>
                  <input class="form-control" type="text" name="username" required="" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <label>کلمه عبور</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-500px" style="color:white;"></i></span>
                  <input class="form-control" type="password" name="password" required="" placeholder="*********">
                </div>
            </div>
<label><?php 
if($eshtebahe == "1" || $eshtebahe2 == "1")
{ 
  echo "نام کاربری یا رمز عبور صحیح نیست";
} 
?>
</label>
<button class="btn" type="submit" value="submit" name="submit">ورود</button>
</form>

</div>



</body>
</html>
<?php
include '../config.php';
include '../setting.php';
session_start();

$user = $_SESSION["useresh"];

if($_SESSION["loggedIn"] != true){
  header("Location: login");
  exit;
}

$amount = $_GET['gold'];
$goldesh = $_GET['gold1'];
$_SESSION["mablagh"] = $amount;
$_SESSION["goldesh"] = $goldesh;

?>

<?php

$data = array("merchant_id" => "$merchent_id",
    "amount" => "$amount",
    "callback_url" => "$url_fix/pay/verification",
    "description" => "خرید از UCP",
    "metadata" => [ "email" => "$paymeny_email","mobile"=>"$paymeny_number"],
    );
$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));

$result = curl_exec($ch);
$err = curl_error($ch);
$result = json_decode($result, true, JSON_PRETTY_PRINT);
curl_close($ch);



if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if (empty($result['errors'])) {
        if ($result['data']['code'] == 100) {
            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
        }
    } else {
         echo'Error Code: ' . $result['errors']['code'];
         echo'message: ' .  $result['errors']['message'];

    }
}
?>

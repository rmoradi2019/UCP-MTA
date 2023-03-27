<?php
include '../config.php';
include '../setting.php';
session_start();

$user = $_SESSION["useresh"];
$mablagh = $_SESSION["mablagh"];
$goldesh = $_SESSION["goldesh"];

if($_SESSION["loggedIn"] != true){
  header("Location: login");
  exit;
}
?>

<?php
$Authority = $_GET['Authority'];
$data = array("merchant_id" => "$merchent_id", "authority" => $Authority, "amount" => "$mablagh");
$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/verify.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v4');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));

$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if ($result['data']['code'] == 100) {
        
        $conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

        $sql = "SELECT $userpgold FROM $usertbname WHERE $userpname= '$user' ";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $kolegold = $row["$userpgold"];
          }

          $jamekol = $kolegold + $goldesh;

          $te2 = $conn -> query("UPDATE $usertbname SET $userpgold = $jamekol WHERE $userpname= '$user' ");

          header("location: ../index.php");

        

    } else {
        echo'code: ' . $result['errors']['code'];
        echo'message: ' .  $result['errors']['message'];
    }
}
?>

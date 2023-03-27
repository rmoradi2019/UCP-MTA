<?php

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$sql2 = "SELECT $userpgold FROM $usertbname WHERE $userpname= '$user' ";
$result2 = $conn->query($sql2);

while($row2 = $result2->fetch_assoc()) {
  $pgoldesh = $row2["$userpgold"];
}

if ($pgoldesh >= $change_name_price)
{

  $sql = "SELECT * FROM $usertbname WHERE $userpname= '$usernamenew' ";
  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()) {
    $useresh = $row["$userpname"];
  }

  if ($useresh == "")
  {
    $kamshe = $pgoldesh - $change_name_price;
    $te3 = $conn -> query("UPDATE $usertbname SET $userpgold = $kamshe WHERE $userpname = '$user'");
    $te2 = $conn -> query("UPDATE $usertbname SET $userpname = '$usernamenew' WHERE $userpname = '$user'");
    header("Location: logout");
  }
  else
  {
    header("Location: erroruser");
  }

}
else
{
  header("Location: errorgold");
}

?>
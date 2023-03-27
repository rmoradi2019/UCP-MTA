<?php

//Connect To DB
$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT $userpmale FROM $usertbname WHERE $userpname= '$user' ";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $psexesh = $row["$userpmale"];
}

$sql1 = "SELECT $userplevel FROM $usertbname WHERE $userpname= '$user' ";
$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc()) {
  $plevelshesh = $row1["$userplevel"];
}

$sql2 = "SELECT $userpgold FROM $usertbname WHERE $userpname= '$user' ";
$result2 = $conn->query($sql2);

while($row2 = $result2->fetch_assoc()) {
  $pgoldesh = $row2["$userpgold"];
}

$sql100 = "SELECT $userpskin FROM $usertbname WHERE $userpname= '$user' ";
$result100 = $conn->query($sql100);

while($row100 = $result100->fetch_assoc()) {
  $pskinesh = $row100["$userpskin"];
}
?>
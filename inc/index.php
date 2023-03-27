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

$sql3 = "SELECT * FROM $usertbname";
$result3 = $conn->query($sql3);

$pid = mysqli_num_rows( $result3 );

$sql4 = "SELECT * FROM $usertbname WHERE $userpadmin BETWEEN 1 AND 12";
$result4 = $conn->query($sql4);

$admins = mysqli_num_rows( $result4 );

$sql9 = "SELECT $userpadmin FROM $usertbname WHERE $userpname= '$user'";
$result9 = $conn->query($sql9);

while($row9 = $result9->fetch_assoc()) {
  $admin = $row9["$userpadmin"];
}

$sql100 = "SELECT $userpskin FROM $usertbname WHERE $userpname= '$user' ";
$result100 = $conn->query($sql100);

while($row100 = $result100->fetch_assoc()) {
  $pskinesh = $row100["$userpskin"];
}

?>

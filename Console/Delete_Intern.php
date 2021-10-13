<?php
$conn = new mysqli("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$num = $_GET["num"];

$sql_insert = "DELETE FROM CURRENT_INTERNS WHERE NUMBER = '".$num."'";
if (!$conn->query($sql_insert) === TRUE) {
  echo "Error: " . $sql_insert . "<br>" . $conn->error;
}


$conn->close();
?>

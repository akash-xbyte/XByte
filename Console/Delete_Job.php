<?php
$conn = new mysqli("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$role = $_GET["role"];


$sql = "DELETE FROM CURRENT_JOBS WHERE JOB = '".$role."'";
if (!$conn->query($sql) === TRUE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

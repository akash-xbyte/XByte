<?php
$conn = new mysqli("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$old_role = $_GET["old_role"];
$role = $_GET["role"];


$sql = "UPDATE CURRENT_JOBS SET JOB = '".$role."' WHERE JOB = '".$old_role."'";
if (!$conn->query($sql) === TRUE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

<?php
$conn = new mysqli("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$number = $_GET["num"];
$aptitude = $_GET["aptitude"];
$punctuality = $_GET["punctuality"];
$standards = $_GET["standards"];
$knowledge = $_GET["knowledge"];
$interest = $_GET["interest"];
$coordination = $_GET["coordination"];


$sql = "UPDATE PERFORMANCE SET APTITUDE = '".$aptitude."', PUNCTUALITY = '".$punctuality."', STANDARDS = '".$standards."', KNOWLEDGE = '".$knowledge."', INTEREST = '".$interest."', COORDINATION = '".$coordination."'  WHERE NUMBER = '".$number."'";
if (!$conn->query($sql) === TRUE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

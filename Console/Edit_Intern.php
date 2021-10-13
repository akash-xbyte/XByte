<?php
$conn = new mysqli("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$old_num = $_GET["old_num"];
$num = $_GET["num"];
$role = $_GET["role"];
$name = $_GET["name"];
$email = $_GET["email"];
$password = $_GET["password"];
$gender = $_GET["gender"];
$date = $_GET["date"];

$sql_insert = "UPDATE CURRENT_INTERNS SET NUMBER = '".$num."', NAME = '".$name."', GENDER = '".$gender."', EMAIL = '".$email."', ROLE = '".$role."', PASSWORD = '".$password."', START_DATE = '".$date."' WHERE NUMBER = '".$old_num."'";
if (!$conn->query($sql_insert) === TRUE) {
  echo "Error: " . $sql_insert . "<br>" . $conn->error;
}


$conn->close();
?>

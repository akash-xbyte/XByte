<?php
$conn = new mysqli("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$message = $_GET["message"];
$number = $_GET["number"];
$day = $_GET["day"];
$sender = $_GET["sender"];


$sql = "INSERT INTO MESSAGES_".$number." (DAY, MESSAGE, SENDER, TIME) VALUES ('".(int)$day."', '".$message."', '".$sender."', '".strval(time())."')";
if (!$conn->query($sql) === TRUE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
            
$conn->close();
?>

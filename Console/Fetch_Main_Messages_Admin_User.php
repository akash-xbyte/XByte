
<?php
$conn=mysqli_connect("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$role = $_GET["role"];
$chat = $_GET["chat"];

$sql = "SELECT * FROM MESSAGES WHERE MESSAGE_USER = 'Director' ORDER BY ID DESC LIMIT 1";

$query_result = mysqli_query($conn, $sql);
$rows = array();
while($r = mysqli_fetch_assoc($query_result)) {
    $rows[] = $r;
}

print json_encode($rows);

$conn->close();
?>

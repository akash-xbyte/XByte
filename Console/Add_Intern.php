<?php
$conn = new mysqli("xbyte.cb8vgyafyysa.ap-south-1.rds.amazonaws.com", "akash", "XByte$123", "CONSOLE");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$num = $_GET["num"];
$role = $_GET["role"];
$name = $_GET["name"];
$email = $_GET["email"];
$password = $_GET["password"];
$gender = $_GET["gender"];
$date = $_GET["date"];

$sql_interns = "INSERT INTO CURRENT_INTERNS VALUES ('".$num."', '".$name."', '".$gender."', '".$email."', '".$role."', '".$password."', '".$date."')";
if (!$conn->query($sql_interns) === TRUE) {
  echo "Error: " . $sql_interns . "<br>" . $conn->error;
}

$sql_performance = "INSERT INTO PERFORMANCE VALUES ('".$num."',0,0,0,0,0,0)";
if (!$conn->query($sql_performance) === TRUE) {
  echo "Error: " . $sql_performance . "<br>" . $conn->error;
}

$message_director = "Hello " . $name . ", Welcome to the HMG Groups.";
$temp = $num . "|" . $name;
$sql_message = "INSERT INTO MESSAGES (MESSAGE, MESSAGE_USER, MESSAGE_TO, MESSAGE_FROM, MESSAGE_TIME, MESSAGE_SEEN) VALUES ('".$message_director."', 'Director', '".$temp."', 'Director', '".strval(time())."', 0)";
if (!$conn->query($sql_message) === TRUE) {
  echo "Error: " . $sql_message . "<br>" . $conn->error;
}

$progress_table = "PROGRESS_" . $num;
$sql_progress = "CREATE TABLE IF NOT EXISTS ".$progress_table." (DAY INT PRIMARY KEY, TASK mediumtext, APPROVAL varchar(100));";
if (!$conn->query($sql_progress) === TRUE) {
  echo "Error: " . $sql_progress . "<br>" . $conn->error;
}

$messages_table = "MESSAGES_" . $num;
$sql_messages = "CREATE TABLE IF NOT EXISTS ".$messages_table." (ID INT PRIMARY KEY AUTO_INCREMENT, DAY INT, MESSAGE mediumtext, SENDER varchar(1), TIME varchar(12));";
if (!$conn->query($sql_messages) === TRUE) {
  echo "Error: " . $sql_messages . "<br>" . $conn->error;
}


$conn->query("INSERT INTO ".$progress_table." VALUES (1, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (2, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (3, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (4, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (5, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (6, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (7, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (8, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (9, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (10, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (11, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (12, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (13, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (14, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (15, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (16, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (17, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (18, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (19, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (20, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (21, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (22, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (23, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (24, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (25, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (26, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (27, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (28, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (29, '', 'False|')");
$conn->query("INSERT INTO ".$progress_table." VALUES (30, '', 'False|')");


$conn->close();
?>

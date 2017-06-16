<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fusion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_POST["id"];

echo $id;


$sql = "DELETE FROM extra_time where id=$id;";
$result = $conn->query($sql);
if($result)
{
	echo "result deleted";
    header('location:extratime.php');
}
else
{
	header('location:extratime.php?$message="cannot delete"');
}
$conn->close();
?>



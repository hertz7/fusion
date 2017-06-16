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




$sql = "Insert into grievence(subject,message,status) values(".$_POST['subject'].",".$_POST['message'].","."pending);";
$result = $conn->query($sql);

echo "Your Suggestion has been Submitted Succesfully";

$conn->close();
?> 

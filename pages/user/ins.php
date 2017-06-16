<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fusion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
/*if(isset($_POST['subject'])){
$subject=$_POST["subject"];
}
else
{
	$subject="no post subject";
}
if(isset($_POST['message'])){
$message=$_POST["message"];
}
else
{
	$message="no message subject";
}*/
$subject=$_GET['age'];
$message=$_GET['wpm'];

//header('location:test.html?subject=$subject&message=$message');
$sql="INSERT into grievence(userdetails_id,subject,message,status) VALUES(12,'$subject','$message','pending');";
	$result = $conn->query($sql);
	if($result)
	{
		echo 'grievence submitted';
	}
	else
	{
		echo "fail";
	}
	


?>
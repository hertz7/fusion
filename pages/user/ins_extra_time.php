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
$datepick=$_GET['age'];
$hrs=$_GET['wpm'];
$curr = date('Y-m-d');
$datebegin = $curr;
// echo $datebegin;
// echo "</br>";
// echo $datepick;
// echo "</br>";
//$dateend = date('Y-m-d', strtotime("+30 day",$curr);

//echo $dateend;
$thirty_days_ahead =  date('Y-m-d', strtotime("+30 days") );
// echo $thirty_days_ahead;
// echo "</br>";

if(($datepick>=$datebegin) && ($datepick<=$thirty_days_ahead) && $datepick!="0000-00-00")
{
	echo 'extra time requested';
	$sql="INSERT into extra_time(userdetails_id,req_date,time_duration,status) VALUES(8,'$datepick','$hrs','pending');";
	$result = $conn->query($sql);
	//echo $datepick.'  and  '.$hrs;
	
}
else
{
	echo 'failure';
}

//header('location:test.html?subject=$subject&message=$message');

	


?>
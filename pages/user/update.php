<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fusion";


$conn = new mysqli($servername, $username, $password, $dbname);

$invoice_no=$_GET['invoice_no'];



if($invoice_no=='')
{
  echo 'invoice no. empty';
  header('location:invoice.php?$message="cannot update"');
}
else
{
  
  $sql="UPDATE invoicetable SET invoice_status='Approved', button_color='#000099' WHERE invoice_no=$invoice_no;";
  $result = $conn->query($sql);
  echo 'invoice approved';
   header('location:invoice.php');
  //echo $datepick.'  and  '.$hrs;
}
  

//header('location:test.html?subject=$subject&message=$message');

  


?>
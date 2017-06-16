<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fusion";

include('mail.php');
$subject=$_GET['age'];
$message=$_GET['wpm'];
$invoice_no=$_GET['invoice_no'];
$split_invoice=explode(":", $invoice_no);
echo $subject ."\n";
echo $message ."\n";
echo $split_invoice[1] ."\n";




?>





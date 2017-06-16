
<?php
include('config.php');

$name=$_POST['cname'];
$address=$_POST['address'];
$pan=$_POST['pan'];
$gst=$_POST['gst'];
$doj=date('Y-m-d',strtotime($_POST['doj']));
$file=$_FILES['fileInput'];
$pname=$_POST['pname'];
$pnumber=$_POST['pnumber'];
$pemail=$_POST['pemail'];
$dob=date('Y-m-d',strtotime($_POST['dob']));
function random_key()
{
    $length = 10;
    $otp = "";
    while ($length > 0) {
        $length--;
        $alphaNum = mt_rand(100, 900);
        if ($alphaNum > 500) {
            $app = mt_rand(65, 90);
            $otp .= chr($app);
        } else {
            $app = mt_rand(0, 9);
            $otp .= $app;
        }
    }
    return $otp;
}

if ( isset( $_FILES['fileInput'] ) ) {
	if ($_FILES['fileInput']['type'] == "application/pdf") {
        $source_file = $_FILES['fileInput']['tmp_name'];
        $dest_file = "agreement/$name/" . $_FILES['fileInput']['name'];
$dir="agreement/$name";
        if (is_dir($dir) === false) {
            mkdir($dir, 0777, true);}
             else {
                $message = "Supporting Docs Folder Creation Failed";
            }

        if (file_exists($dest_file)) {
            print "The file name already exists!!";
        } else {


            if (move_uploaded_file($source_file, $dest_file)) {

                $query = "insert into userdetails (name,address,pan,gst_st,agreement_path,doj,dob,pName,pNumber,pEmail) values ('$name','$address','$pan','$gst','$dest_file','$doj','$dob','$pname','$pnumber','$pemail');";
                require ('mail.php');
                $mail->addAddress($pemail,$pname);
                $mail->addAttachment($dest_file);
                $mail->isHTML(true);

                $result = mysqli_query($db_var, $query) or die(mysql_error());
                if($result){
                    $query="select * from userdetails where name = '$name';";
                    $result = mysqli_query($db_var, $query) or die(mysql_error());
                    $no_rows=mysqli_num_rows($result);
                    if($no_rows==1){
                        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $id=$row['id'];
                        $username=$row['name'].'_'.$row['pName'];
                        $pass=random_key();
                        try{
$mail->Body='Welcome to Fusion Business center. Below are the login credentials to our website www.google.com: 
 Username:'.$username.' and password :'.$pass.' .Please don\'t share this with anyone.
   Thanks.';
                            if ($mail->send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                echo "Message sent!";
                            }
                            $passd=password_hash($pass,PASSWORD_BCRYPT,['cost' => 12]);
                            $query="insert into users(username,password,type,userdetails_id) values ('$username','$passd','user','$id');";
                            $result = mysqli_query($db_var, $query) or die(mysql_error());
                            if($result) {
                                header("location:successful.html");
                            }
                            else{
                                header("location:ajaxjs.php");
                            }

                        }
                        catch (Exception $e){
                            $message=$e->getMessage();
                        }

                    }

                }


            }
        }
    }
		if ( $_FILES['fileInput']['type'] != "application/pdf") {
			print "Error occured while uploading file : ".$_FILES['fileInput']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['fileInput']['error']."<br/>";
		}

}













?>
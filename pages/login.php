<?php
include("config.php");
if(isset($_POST["username"])&&isset($_POST["password"]))
{
	$username=$_POST["username"];
	$pass=$_POST["password"];
	$query="select * from users where username='".$username."';";


	
	$result=mysqli_query($db_var,$query) or die(mysql_error());

    $no_rows=mysqli_num_rows($result);

	if($no_rows==1)
	{
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$passd=$row["password"];
		if($pass==$passd)	//if(password_verify($pass, $passd)

        {
			//$_SESSION["username"]=$row["username"];
			if ($row['type']=='admin')
			{
                header("Location:index.html");
                exit();
			}
			else
			{
				header("Location:student_home.php");
                exit();
			}
		}
		else
		{
            echo "hello";
			$_SESSION["Error"]="Incorrect Details";
			$_SESSION["Revert"]="index.php";
			header("Location:index.php");
			exit();
		}
	}
	else
	{
        echo "hello2";
		$_SESSION["Error"]="Incorrect Details Or Not Registered";
          	$_SESSION["Revert"]="index.php";
		header("Location:index.php");
		exit();
	}
}
?>

<?php
include('config.php');




if(isset($_POST['id']) && isset($_POST['invoice_amt']) && isset($_POST['invoice_no']) && isset($_POST['month'])) {
    $invoice_amt=$_POST['invoice_amt'];
    $invoice_month=$_POST['month'];
    $invoice_no=$_POST['invoice_no'];
    $id=$_POST['id'];
    $query="select * from userdetails where id='.$id.'";
    $result = mysqli_query($db_var, $query);
    if($result){
        $row=$result->fetch_assoc();
    $name=$row['name'];}
    $year=date("Y");
    if (isset($_FILES['fileInput1']) && isset($_FILES['fileInput2'])) {
        if ($_FILES['fileInput1']['type'] == "application/pdf" && $_FILES['fileInput2']['type'] == "application/x-zip-compressed") {
            $query = "select * from invoicetable where id='.$id.' and invoice_month='.$invoice_month.';";

            $result = mysqli_query($db_var, $query);

            $no_rows = mysqli_num_rows($result);
            if ($no_rows == 0) {
                $source_file = $_FILES['fileInput1']['tmp_name'];
                $source_file1 = $_FILES['fileInput2']['tmp_name'];
                $invoice_dir = "invoice/$year/$invoice_month/$name";
                $support_dir = "supporting_docs/$year/$invoice_month/$name";
                if (is_dir($invoice_dir) === false) {
                    mkdir($invoice_dir, 0777, true);
                    if (is_dir($support_dir) === false) {
                        mkdir($support_dir, 0777, true);
                    } else {
                        $message = "Supporting Docs Folder Creation Failed";
                    }
                } else {
                    $message = "Invoice Docs Folder Creation Failed";
                }


                $dest_file = "$invoice_dir/" . $_FILES['fileInput1']['name'];
                $dest_file1 = "$support_dir/" . $_FILES['fileInput2']['name'];


                if (file_exists($dest_file) || file_exists($dest_file1)) {
                    print "The file name already exists!!";
                } else {


                    if (move_uploaded_file($source_file, $dest_file) && move_uploaded_file($source_file1, $dest_file1)) {

                        $query = "insert into invoicetable (userdetails_id,invoice_month,invoice_no,invoice_amount,invoice_path,supporting_documents_path,notes) values ('$id','$invoice_month','$invoice_no','$invoice_amt','$dest_file','$dest_file1','pending');";
                        echo
                            $result = mysqli_query($db_var, $query) or die(mysql_error());

                        if ($result) {
                            header("location:successful.html");
                        } else {
                            header("location:ajaxjs.php");
                        }


                    }
                }

            } else {
                $message = "Invoice Already created for the month $invoice_month for the company";
            }
        }

        if ($_FILES['fileInput1']['type'] != "application/pdf" && $_FILES['fileInput2']['type'] != ("application/x-zip-compressed")) {
            print "Error occured while uploading file : " . $_FILES['fileInput']['name'] . "<br/>";
            print "Invalid  file extension, Ivoice should be pdf oand supporting docs should be zip!!" . "<br/>";
            print "Error Code : " . $_FILES['fileInput1']['error'] . "<br/>";


        }
    }
}
else
{
    $message="Server Error";
}












?>
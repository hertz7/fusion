<?php
include ('config.php');

if(isset($_GET['invoice_no'])) {
    $invoice_no = $_GET['invoice_no'];


    if ($invoice_no == '') {
        echo 'invoice no. empty';
        //header('location:invoice.php?$message="cannot update"');
    } else {

        $sql = "UPDATE invoicetable SET invoice_status='Paid', button_color='GREEN' WHERE invoice_no=$invoice_no;";
        $result = $db_var->query($sql);
        echo 'invoice approved';
        //header('location:invoice.php');
        //echo $datepick.'  and  '.$hrs;
    }
}

//header('location:test.html?subject=$subject&message=$message');

if(isset($_GET['id'])) {
    $invoice_no = $_GET['id'];


    if ($invoice_no == '') {
        echo 'invoice no. empty';
        header('location:extratime.php?$message="cannot update"');
    } else {

        $sql = "UPDATE extra_time SET status='Approved', button_color='GREEN' WHERE userdetails_id=$invoice_no;";
        $result = $db_var->query($sql);
        echo 'extratime approved';
        header('location:tables.php');
        //echo $datepick.'  and  '.$hrs;
    }
}

if(isset($_GET['g_id'])) {
    $g_id = $_GET['g_id'];


    if ($g_id == '') {
        echo 'invoice no. empty';
        header('location:tables.php?$message="cannot update"');
    } else {
$date=date('Y-m-d H:i:s');
        $sql = "UPDATE grievence SET status='Approved', button_color='GREEN',resolved_at=$date WHERE grievence_id=$g_id;";
        $result = $db_var->query($sql);
        echo 'extratime approved';
       header('location:extratime.php');
        //echo $datepick.'  and  '.$hrs;
    }
}
if(isset($_GET['cancel_id'])) {
    $invoice_no = $_GET['cancel_id'];


    if ($invoice_no == '') {
        echo 'invoice no. empty';
        header('location:extratime.php?$message="cannot update"');
    } else {

        $sql = "UPDATE extra_time SET status='Declined', button_color='RED' WHERE userdetails_id=$invoice_no;";
        $result = $db_var->query($sql);
        echo 'extratime approved';
        header('location:extratime.php');
        //echo $datepick.'  and  '.$hrs;
    }
}


?>
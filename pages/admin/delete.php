<?php
include ('config.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "delete * from userdetails where id=$id";
    $result = mysqli_query($db_var, $query);
    if ($result) {
        $message = "Row Deleted Sucessfully";
    } else {
        $message = "Error Deleting Row";
    }
}
<?php

require_once('../../conn.php');

if(isset($_POST['submit']))
{
    $upd = "update expense set id = '$_POST[exp_id]', name = '$_POST[exp_name]', amount = '$_POST[exp_amount]', type = '$_POST[exp_type]', date = '$_POST[exp_date]' where id = '$_GET[id]'";

    $qry = mysqli_query($conn, $upd);

    if($qry){
        echo "<script>alert('Hurray!!!! Data Updated Successfully!'); window.location = '../expens_management.php';</script>";
    }
    else{
        echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../expens_management.php';</script>";
    }
}
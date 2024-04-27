<?php

require_once('../../conn.php');

if(isset($_POST['submit']))
{
    $upd = "update supplier set phone = '$_POST[supplier_phone]', name = '$_POST[supplier_name]', email = '$_POST[supplier_email]', address = '$_POST[supplier_address]', products = '$_POST[supplier_product]' where phone = '$_GET[id]'";

    $qry = mysqli_query($conn, $upd);

    if($qry){
        echo "<script>alert('Hurray!!!! Data Updated Successfully!'); window.location = '../supplier_management.php';</script>";
    }
    else{
        echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../supplier_management.php';</script>";
    }
}
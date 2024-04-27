<?php

require_once('../../conn.php');

$del = "delete from expense_category where id = '$_GET[id]'";

$qry = mysqli_query($conn, $del);

if($qry){
    echo "<script>alert('Hurray!!!! Deleted Successfully!'); window.location = '../expens_management.php';</script>";
}
else{
    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../expens_management.php';</script>";
}
<?php

require_once('../../conn.php');

$del = "delete from supplier where phone = $_GET[id]";

$qry = mysqli_query($conn, $del);

if($qry){
    echo "<script>alert('Hurray!!!! Deleted Successfully!'); window.location = '../supplier_management.php';</script>";
}
else{
    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../supplier_management.php';</script>";
}
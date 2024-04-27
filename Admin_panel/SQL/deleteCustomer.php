<?php

require_once('../../conn.php');

$del = "delete from customer where phone = $_GET[phone]";

$qry = mysqli_query($conn, $del);

if($qry){
    echo "<script>alert('Hurray!!!! Deleted Successfully!'); window.location = '../customer_management.php';</script>";
}
else{
    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../customer_management.php';</script>";
}
<?php

require_once("../../conn.php");

$created_at = date("Y-m-d");

$insrt = "insert into supplier (phone, name, email, address, products, created_at) values ('$_POST[supplier_phone]','$_POST[supplier_name]','$_POST[supplier_email]','$_POST[supplier_address]','$_POST[supplier_product]','$created_at')";

$qry = mysqli_query($conn, $insrt);

if($qry){
    echo "<script>alert('Hurray!!!! New Supplier Added Successfully!'); window.location = '../supplier_management.php';</script>";
}
else{
    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../supplier_management.php';</script>";
}
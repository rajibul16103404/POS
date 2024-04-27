<?php

require_once('../../conn.php');

$del = "delete from employee where id = '$_GET[id]'";

$qry = mysqli_query($conn, $del);

if($qry){
    echo "<script>alert('Hurray!!!! Deleted Successfully!'); window.location = '../sales_staff.php';</script>";
}
else{
    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../sales_staff.php';</script>";
}
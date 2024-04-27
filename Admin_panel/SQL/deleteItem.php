<?php

require_once('../../conn.php');

$del = "delete from postable where barcode = '$_GET[id]'";

$qry = mysqli_query($conn, $del);

if($qry){
    echo "<script>alert('Hurray!!!! Deleted Successfully!'); window.location = '../pos.php';</script>";
}
else{
    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../pos.php';</script>";
}
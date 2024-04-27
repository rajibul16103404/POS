<?php

require_once('../../conn.php');

$del = "delete from demo_order where id = $_GET[id]";

$qry = mysqli_query($conn, $del);

if($qry){
    echo "<script>alert('Hurray!!!! Deleted Successfully!'); window.location = '../orderSupplier.php?id=".$_GET['sup_id']."';</script>";
}
else{
    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../orderSupplier.php?id=".$_GET['sup_id']."';</script>";
}
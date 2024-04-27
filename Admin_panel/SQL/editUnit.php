<?php

require_once('../../conn.php');

if(isset($_POST['submit']))
{
    $upd = "update selling_unit set unit = '$_POST[unit]', status = '$_POST[status]' where id = '$_GET[id]'";

    $qry = mysqli_query($conn, $upd);

    if($qry){
        echo "<script>alert('Hurray!!!! Data Updated Successfully!'); window.location = '../unit.php';</script>";
    }
    else{
        echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../unit.php';</script>";
    }
}
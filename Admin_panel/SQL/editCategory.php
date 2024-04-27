<?php

require_once('../../conn.php');

if(isset($_POST['submit']))
{
    $upd = "update category set name = '$_POST[category]', status = '$_POST[status]' where id = '$_GET[id]'";

    $qry = mysqli_query($conn, $upd);

    if($qry){
        echo "<script>alert('Hurray!!!! Data Updated Successfully!'); window.location = '../category.php';</script>";
    }
    else{
        echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../category.php';</script>";
    }
}
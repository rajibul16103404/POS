<?php

require_once('../../conn.php');

if(isset($_POST['submit']))
{
    $upd = "update subcategory set category = '$_POST[category]', sub_category = '$_POST[sub_category]', status = '$_POST[status]' where id = '$_GET[id]'";

    $qry = mysqli_query($conn, $upd);

    if($qry){
        echo "<script>alert('Hurray!!!! Data Updated Successfully!'); window.location = '../subCategory.php';</script>";
    }
    else{
        echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../subCategory.php';</script>";
    }
}
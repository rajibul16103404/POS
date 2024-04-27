<?php

require_once('../../conn.php');

if(isset($_POST['qty']) && isset($_POST['barcode']))
{
    $src = "select qty from posTable where barcode='$_POST[barcode]'";
    $qry = mysqli_query($conn, $src);
    if(mysqli_num_rows($qry)>0){
        $row = mysqli_fetch_assoc($qry);
        $upd = "update posTable set qty = '$_POST[qty]', total_price = '$_POST[qty]*$row[unit_price]'";
        $qry1 = mysqli_query($conn, $upd);
        if($qry1)
        {
            echo "<script>alert('Quantity Updated Successfully'); window.location = '../pos.php';</script>";
        }

    }
}
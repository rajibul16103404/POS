<?php
if(isset($_POST['submit']))
{
    require_once("../../conn.php");
    if($conn)
    {
        $insrt = "update product set barcode='$_POST[barcode]', name='$_POST[product_name]', cat='$_POST[category]', subcat='$_POST[sub_category]', unit='$_POST[selling_unit]', stock='$_POST[stock]', purchase_price='$_POST[purchase_price]', selling_price='$_POST[selling_price]', availability='$_POST[avail]', expire_at='$_POST[expire]'";

        $qry = mysqli_query($conn, $insrt);

        if($qry){
            echo "<script>alert('Hurray!!!! Product Updated Successfully!'); window.location = '../inventory.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../product_management.php';</script>";
        }
    }
}
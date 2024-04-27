<?php
if(isset($_POST['submit']))
{
    $avail = "yes";
    $created_at = date("Y-m-d");
    require_once("../../conn.php");
    if($conn)
    {
        $insrt = "insert into product (barcode, name, cat, subcat, unit, stock, purchase_price, selling_price, availability, created_at, expire_at) values ('$_POST[barcode]', '$_POST[product_name]', '$_POST[category]', '$_POST[sub_category]', '$_POST[selling_unit]', '$_POST[stock]', '$_POST[purchase_price]', '$_POST[selling_price]', '$avail', '$created_at', '$_POST[expire]')";

        $qry = mysqli_query($conn, $insrt);

        if($qry){
            echo "<script>alert('Hurray!!!! Product Added Successfully!'); window.location = '../product_management.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../product_management.php';</script>";
        }
    }
}
    
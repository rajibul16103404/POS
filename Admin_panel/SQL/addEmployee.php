<?php

if(isset($_POST['submit'])){
    require_once('../../conn.php');

    $created_at = date("Y-m-d");

    $insrt = "insert into employee (id, name, address, phone, password, created_at) values ('$_POST[sales_user_id]', '$_POST[sales_name]', '$_POST[sales_address]', '$_POST[sales_phone]', '$_POST[sales_user_pass]', '$created_at')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            echo "<script>alert('Hurray!!!! Employee <b>".$_POST['sales_name']."</b> Added Successfully!'); window.location = '../sales_staff.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../sales_staff.php';</script>";
        }
}
<?php

if(isset($_POST['submit'])){
    require_once('../../conn.php');

    $created_at = date("Y-m-d");

    $insrt = "insert into subcategory (category, sub_category, status, created_at) values ('$_POST[category]', '$_POST[subcategory]', 'enable', '$created_at')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            echo "<script>alert('Hurray!!!! Sub Category Added Successfully!'); window.location = '../subCategory.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../subCategory.php';</script>";
        }
}
<?php

if(isset($_POST['submit'])){
    require_once('../../conn.php');

    $created_at = date("Y-m-d");

    $insrt = "insert into expense_category (name, created_at) values ('$_POST[category]', '$created_at')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            echo "<script>alert('Hurray!!!! Category ".$_POST['category']." Added Successfully!'); window.location = '../expens_management.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../expens_management.php';</script>";
        }
}
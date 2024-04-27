<?php

if(isset($_POST['submit'])){
    require_once('../../conn.php');

    $created_at = date("Y-m-d");

    $id="MD".rand(100,999);;

    $insrt = "insert into expense (id, name, amount, type, date) values ('$id','$_POST[exp_name]', '$_POST[exp_amount]', '$_POST[exp_type]', '$_POST[exp_date]')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            header("Location: ../expens_management.php");
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../expens_management.php';</script>";
        }
}
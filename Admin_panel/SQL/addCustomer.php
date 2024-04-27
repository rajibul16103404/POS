<?php

if(isset($_POST['submit'])){
    require_once('../../conn.php');

    $created_at = date("Y-m-d");

    $insrt = "insert into customer (phone, name, address, created_at) values ('$_POST[phone]', '$_POST[name]', '$_POST[address]', '$created_at')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            header("Location: ../pos.php");
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../category.php';</script>";
        }
}
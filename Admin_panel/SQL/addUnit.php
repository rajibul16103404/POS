<?php

if(isset($_POST['submit'])){
    require_once('../../conn.php');

    $created_at = date("Y-m-d");

    $insrt = "insert into selling_unit (unit, status, created_at) values ('$_POST[unit]', 'enable', '$created_at')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            echo "<script>alert('Hurray!!!! Selling Unit Added Successfully!'); window.location = '../unit.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../unit.php';</script>";
        }
}
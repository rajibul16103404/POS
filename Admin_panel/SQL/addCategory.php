<?php

if(isset($_POST['submit'])){
    require_once('../../conn.php');

    $created_at = date("Y-m-d");

    $insrt = "insert into category (name, status, created_at) values ('$_POST[category]', 'enable', '$created_at')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            echo "<script>alert('Hurray!!!! Category ".$_POST['category']." Added Successfully!'); window.location = '../category.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../category.php';</script>";
        }
}
<?php
    require_once('../../conn.php');

    $id = $_GET['id'];

    $created_at = date("Y-m-d");

    $insrt = "insert into supplier_order (supplier_id, category, name, quantity, price, order_at) values ('$id', '$_POST[category]', '$_POST[name]', '$_POST[qty]', '$_POST[price]', '$created_at')";

    $qry = mysqli_query($conn, $insrt);

        if($qry){
            header("Location: ../orderSupplier.php?id=".$_GET['id']."");
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../orderSupplier.php?id=".$_GET['id']."';</script>";
        }
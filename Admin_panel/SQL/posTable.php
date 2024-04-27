<?php

require_once('../../conn.php');

if(isset($_POST['submit']))
{
    if($conn)
    {
        $sql = "select * from product where barcode='$_POST[barcode]'";
        $query= mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) == 1)
        {
            $row=mysqli_fetch_assoc($query);

            $total=1 * $row['selling_price'];

            $sql1 = "select * from postable where barcode='$_POST[barcode]'";
            $qry1 = mysqli_query($conn, $sql1);

            if(mysqli_num_rows($qry1) > 0){
                $row1 = mysqli_fetch_assoc($qry1);
                if($_POST['barcode'] == $row1['barcode']){

                    $updQty=(int)$row1['qty']+1;
                    $newTotal=(int)$updQty*(int)$row['selling_price'];
                    echo $updQty, $newTotal;

                    $upd = "update postable set qty='$updQty', total_price='$newTotal' where barcode='$_POST[barcode]'";
                    $qry2 = mysqli_query($conn, $upd);

                    if($qry2){
                        header("Location: ../pos.php");
                    }
                    else{
                        echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../pos.php';</script>";
                    }
                }
                else
                {
                    echo "<script>alert('in else block!!!! Please Try Again....'); window.location = '../pos.php';</script>";
                    $insrt = "insert into postable (barcode, name, qty, stock, unit_price, total_price) values ('$row[barcode]', '$row[name]', '1', '$row[stock]', '$row[selling_price]', '$total')";
                    $qry = mysqli_query($conn, $insrt);

                    if($qry){
                        header("Location: ../pos.php");
                    }
                    else{
                        echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../pos.php';</script>";
                    }
                }
            }
            else
            {
                $insrt = "insert into postable (barcode, name, qty, stock, unit_price, total_price) values ('$row[barcode]', '$row[name]', '1', '$row[stock]', '$row[selling_price]', '$total')";
                $qry = mysqli_query($conn, $insrt);

                if($qry){
                    header("Location: ../pos.php");
                }
                else{
                    echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../pos.php';</script>";
                }
            }

            
        }
        else{
            echo "<script>alert('OOps!!!! Product not found in Inventory'); window.location = '../pos.php';</script>";
        }
    }
}
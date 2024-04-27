<?php

require_once("../../conn.php");

$del = "truncate table demo_order";
$result = mysqli_query($conn, $del);
if($result)
{
    header("Location: ../orderSupplier.php?id=".$_GET['id']."");
}
else{
    echo "Something went wrong!";
}
<?php 

require_once("../../conn.php");

$sql = "select password from login where id = 1";
$qry = mysqli_query($conn, $sql);
if(mysqli_num_rows($qry)==1){
    $row = mysqli_fetch_assoc($qry);
    if($_POST['old_pass'] == $row['password'] && $_POST['new_pass']==$_POST['retype_pass'])
    {
        $upd = "update login set password='$_POST[new_pass]' where id=1";
        $result = mysqli_query($conn, $upd);
        if($result)
        {
            echo "<script>alert('Password Changed Cuccessfully'); window.location = '../profile.php';</script>";
        }
        else{
            echo "<script>alert('OOps!!!! Please Try Again....'); window.location = '../profile.php';</script>";
        }
    }
    else{
        echo "<script>alert('Attention required at your credentials...'); window.location = '../profile.php';</script>";
    }
}

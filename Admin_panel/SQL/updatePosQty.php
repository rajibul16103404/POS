<?php
require_once("../../conn.php");

if(isset($_GET['barcode']) && isset($_GET['qty'])) {
    $barcode = mysqli_real_escape_string($conn, $_GET['barcode']);
    $qty = (int)$_GET['qty'];
    
    $sql = "SELECT * FROM postable WHERE barcode = '$barcode'";
    $qry = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($qry) > 0) {
        $row = mysqli_fetch_assoc($qry);
    }
    
    if(isset($_POST['submit'])){
        $newQty = (int)$_POST['qty'];
        $total = $newQty * (int)$row['unit_price'];
        
        $upd = "UPDATE posTable SET qty = '$newQty', total_price = '$total' WHERE barcode = '$barcode'";
        $qry1 = mysqli_query($conn, $upd);
        
        if($qry1) {
            header("Location: ../pos.php");
            exit();
        } else {
            echo "<script>alert('Oops!!!! Please Try Again....'); window.location = '../pos.php';</script>";
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Update Quantity</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Quantity</h5>
                <a href="../pos.php"><button type="button" class="close">&times;</button></a>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="text-center">
                    <div class="form-group">
                        <input type="number" class="form-control" name="qty" value="<?php if(isset($qty)) echo $qty; ?>">
                    </div>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>




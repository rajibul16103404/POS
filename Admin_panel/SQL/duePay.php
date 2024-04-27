<?php
require_once("../../conn.php");

if(isset($_GET['order_id'])) {
    $order_id = mysqli_real_escape_string($conn, $_GET['order_id']);
    
    $sql = "SELECT * FROM customer_order WHERE order_id = '$order_id'";
    $qry = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($qry) > 0) {
        $row = mysqli_fetch_assoc($qry);
    }
    
    if(isset($_POST['submit'])){

        $due = (int)$row['due'] - $_POST['pay'];
        $paid = (int)$row['paid'] + $_POST['pay'];
        
        $upd = "UPDATE customer_order SET due = '$due', paid = '$paid' WHERE order_id = '$order_id'";
        $qry1 = mysqli_query($conn, $upd);
        
        if($qry1) {
            header("Location: ../customer-due.php");
            exit();
        } else {
            echo "<script>alert('Oops!!!! Please Try Again....'); window.location = '../customer-due.php';</script>";
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

<style>
    label{
        width: 85% !important;
        text-align: left !important;
        font-weight: 700 !important;
        font-size: 16px !important;
        margin-left: 5% !important;
    }
    input{
        text-align: center !important;
        width: 80% !important;
        font-weight: 700 !important;
    }
    .input-group{
        width: 80% !important;
        flex-wrap: nowrap !important;   
        margin: auto;
    }
    form{
        text-align: center !important;
    }
</style>

</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pay Due</h5>
                <a href="../customer-due.php"><button type="button" class="close">&times;</button></a>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="text-center">
                    <label for="total">Total Amount</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img style="width:20px; height:20px;" src="../../assets/img/taka.png" alt="Taka"></span>
                        </div>
                        <input type="text" class="form-control" id="total" value="<?php echo $row['total']; ?>" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <label for="paid">Already Paid</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img style="width:20px; height:20px;" src="../../assets/img/taka.png" alt="Taka"></span>
                        </div>
                        <input type="text" class="form-control" id="paid" value="<?php echo $row['paid']; ?>"  readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <label for="due">Due</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img style="width:20px; height:20px;" src="../../assets/img/taka.png" alt="Taka"></span>
                        </div>
                        <input type="text" class="form-control" id="due" value="<?php echo $row['due']; ?>"  readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <label for="pay">Want to Pay</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img style="width:20px; height:20px;" src="../../assets/img/taka.png" alt="Taka"></span>
                        </div>
                        <input type="text" class="form-control" id="pay" name="pay" required>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary w-40" name="submit" value="Pay" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>




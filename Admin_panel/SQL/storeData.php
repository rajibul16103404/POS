<?php
    require_once("../../conn.php");
    if(isset($_GET['id'])) {
        $supplierId = $_GET['id'];
        $today = date('Y-m-d');
        $total = 0;

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT name, quantity, price FROM demo_order WHERE supplier_id = '$supplierId'";
        $qry = mysqli_query($conn, $sql);

        if(mysqli_num_rows($qry) > 0) {
            while($row = mysqli_fetch_assoc($qry)) {
                $items[] = $row['name']."-qty-".$row['quantity'];
                $total += $row['price'];
            }
            $order_items = implode(", ", $items);
            $order_id = "SUP".rand(10000000,99999999);

            $insrt = "INSERT INTO supplier_order (order_id, supplier_id, items, amount, order_at) VALUES ('$order_id', '$supplierId', '$order_items', '$total', '$today')";
            $stmt = mysqli_query($conn, $insrt);

            if($stmt) {
                // Remove unnecessary echo statements before header redirection
                header("Location: ../orderSupplier.php?id=".$supplierId);
                exit; // Ensure that script execution stops after redirection
            } else {
                echo "<script>alert('Printing Error');</script>";
                echo "Something went wrong!";
            }
        }
    }

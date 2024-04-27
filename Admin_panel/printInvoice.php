<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

            
            <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/MD logo.svg">
  <title>
    POS_Admin
  </title>
  <link href="../assets/css/print.css" rel="stylesheet" />
</head>
<body onload="divPrint()">
    <div id="contentToPrint">
    <div class="print-head ">
      <div class="header justify-content-between align-items-center">
        <div class="head text-justify">
          <img src="../assets/img/MD logo.svg" alt="">
          <h5 class="h6 text-justify">MD Infotech<br/>Bangabandhu Sheikh Mujib Hi-Tech Park<br/>Rajshahi, Bangladesh</h5>
        </div>
        <div class="invoice w-15">
          <h4 class="h6 d-flex justify-content-between text-justify align-items-center">
            <span class="h6">Purchase_ID: </span>
            <span class="h6"><?php echo "ORD_".rand(10000,99999); ?></span>
          </h4>
          <h4 class="h6 d-flex justify-content-between text-justify align-items-center">
            <span class="h6">DATE: </span>
            <span class="h6"><?php echo date('dM,Y'); ?></span>
          </h4>
        </div>
      </div>
      <div class="sup_details">
        <?php
        require_once("../conn.php");
        $sql3 = "select * from supplier where phone='$_GET[id]'";
        $qry3 = mysqli_query($conn, $sql3);
        if(mysqli_num_rows($qry3) == 1){
        $row3 = mysqli_fetch_assoc($qry3);
        }
        
        ?>
        <table>
          <tr>
            <td>Supplier Name</td>
            <td><?php echo $row3["name"]; ?></td>
          </tr>
          <tr>
            <td>Supplier Phone</td>
            <td><?php echo $row3["phone"]; ?></td>
          </tr>
          <tr>
            <td>Supplier Address</td>
            <td><?php echo $row3["address"]; ?></td>
          </tr>
        </table>
      </div>
    </div>

    <form action="SQL/orderSupplier.php?id=<?php echo $_GET['id']; ?>" method="post" class="form m-auto w-80">
        <select name="category" id="category" onchange="show();">
          <option selected>Select One</option>
          <?php
            $sql = "select products from supplier where phone='$_GET[id]'";
            $qry = mysqli_query($conn, $sql);
            if(mysqli_num_rows($qry) == 1){
            $row = mysqli_fetch_assoc($qry);

            $values = explode(',',$row["products"]);
                foreach($values as $x){
                  echo "<option style='padding: 5px 15px; margin: 5px; background: #348DED; color: white; border-radius: 5px;' value='".$x."'>".$x."</option>";
                }
              }
            
            ?>
        </select>
        <input style="visibility: hidden;" type="text" name="name" id="name" placeholder="Product Name...">
        <input style="visibility: hidden;" type="number" name="price" id="price" min="1" max="100000" placeholder="price">
        <input style="visibility: hidden;" type="number" name="qty" id="qty" min="1" max="100000" placeholder="Quantity">
        <button class="btn bg-gradient-primary" type="submit" name="submit">Add</button>
    </form>
    <table class="table table-striped text-center w-80 m-auto">
      <thead class="bg-gradient-primary text-white">
        <th>Category</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
        $total_qty = 0;
        $total_price = 0;
          $sql1 = "select * from demo_order where supplier_id = '$_GET[id]'";
          $qry1 = mysqli_query($conn, $sql1);
          if(mysqli_num_rows($qry1) > 0){
            while($row1 = mysqli_fetch_assoc($qry1))
            {
              $total_qty += $row1['quantity'];
              $total_price += $row1['price'];
        ?>
        <tr>
          <td><?php echo $row1["category"]; ?></td>
          <td><?php echo $row1["name"]; ?></td>
          <td><?php echo $row1["quantity"]; ?></td>
          <td><?php echo $row1["price"]; ?></td>
          <td><a href="SQL/deleteSuplierOrder.php?id=<?php echo $row1['id']; ?> && sup_id=<?php echo $row1['supplier_id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php
        
            }
          }
        ?>
        <tr class="bg-gradient-primary text-white total">
          <td class="text-white"><strong>Total</strong></td>
          <td></td>
          <td class="text-white"><?php echo $total_qty; ?></td>
          <td class="text-white"><?php echo $total_price; ?></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    </div>
      

    <script>
      function divPrint() {
    // Register event listener for beforeprint event
    window.addEventListener('beforeprint', function() {
        console.log('Print dialog opened');
        // You can perform any actions needed before printing here
    });

    // Register event listener for afterprint event
    window.addEventListener('afterprint', function() {
        console.log('Print dialog closed');
        // Check if user printed or canceled
        var printConfirmed = confirm('Did you print the document?');
        if (printConfirmed) 
        {
          storeDataToDatabase();
        } else {
            // If user canceled printing, do nothing
            console.log('Printing canceled, data not saved to database.');
        }
    });

    // Trigger the print dialog
    window.print();

    function storeDataToDatabase() {
          // Send an AJAX request to a PHP script to store data in the database
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  // Handle the response from the server if needed
                  console.log('Response from server:', this.responseText);
                  // Redirect if needed
                  // window.location.href = 'orderSupplier.php?id=<?php echo $_GET['id']; ?>';
              }
          };
          xmlhttp.open("GET", "SQL/storeData.php?id=<?php echo $_GET['id']; ?>", true);
          xmlhttp.send();
      }
      }
    </script>



      </body>
            
            
            






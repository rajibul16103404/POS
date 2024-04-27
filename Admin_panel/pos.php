<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/MD logo.svg">
    <title>
        POS_Admin
    </title>

    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/pos.css">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <link href="../assets/css/user_dashboard.css" rel="stylesheet" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</head>
<body>
    <div class="continer">
        <div class="header position-relative" style="background:#5199E5;">
            <div class="row w-100 head">
                <div class="col-xl-1 col-lg-2">
                    <a href="dashboard.php">
                        <button style="margin-top: 0px !important;"  class="btn btn-primary w-100">Dashboard</button>
                    </a>
                </div>
                <div class="col-lg-11">
                    <div class="row d-flex justify-content-between holder">
                        <div class="col-lg-5">
                            <form action="SQL/posTable.php" method="post" >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input class="w-100 form-control" type="number" name="barcode" id="barcode" placeholder="Scan BarCode" autofocus onkeyup="Details(this.value)" value="">
                                    </div>
                                    <!-- <div class="col-lg-2">
                                        <input class="w-100 form-control text-center" type="number" name="qty" id="qty" placeholder="Qty" value="">
                                    </div> -->
                                    <!-- <div class="col-lg-2">
                                        <input class="w-100 form-control text-center" type="number" name="stock" id="stock" placeholder="Stock" value="" readonly>
                                        <button class="btn btn-primary w-100" type="submit" name="submit">Add</button>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button style="display:none;" class="btn btn-primary w-100" type="submit" name="submit">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3">
                            <div class="row d-flex justify-content-center holder">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <form action="SQL/cashPay.php" method="post">
                                            <input class="form-control" type="number" name="cphone" id="cphone" placeholder="Customer Phone" maxlength="11" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center" >
                                            <div class="show" id="show"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="../assets/img/userbg.png" class="w-100 justify-content-center" alt="">
                                    <h5 class="h5 text-white text-center">Admin</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="body overflow-hidden">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-10 left">
                    <table class="table w-100 table-striped align-item-center text-center">
                        <thead class="bg-gradient-primary text-white">
                            <th>Barcode</th>
                            <th>Product Name</th>
                            <th>Product Quantity</th>
                            <th>Available Stock</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="pro">
                            <?php
                                $net = 0;
                                require_once('../conn.php');
                                $sql = "select * from postable";
                                $qry = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($qry) > 0)
                                {
                                  while($row = mysqli_fetch_assoc($qry))
                                  {
                                    $net +=(int)$row['total_price'];
                            ?>
                            <tr>
                                <td><?php echo $row['barcode']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td class="d-flex justify-content-center"><a class="w-50 bg-gradient-primary" href="SQL/updatePosQty.php?barcode=<?php echo $row['barcode'] ?>&&qty=<?php echo $row['qty'] ?>"><button class="w-100 border-0 text-white p-1" type="button" name="" id="qty"><?php echo $row['qty']; ?></button></a></td>
                                <td><?php echo $row['stock']; ?></td>
                                <td><?php echo $row['unit_price']; ?></td>
                                <td id="total"><?php echo $row['total_price']; ?></td>
                                <td>
                                    <a href="SQL/deleteItem.php?id=<?php echo $row['barcode']; ?>"><i style= "color:red;font-size:20px;" class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>

                            <?php
                                  }
                                }
                            ?>
                            

                        </tbody>
                    </table>
                </div>
                <div class="col-lg-2">
                    <div class="right bg-gradient-primary position-relative">
                        <div class="bottom p-3 position-absolute  top-2 w-90 text-white">
                            <h3 class="h3 text-white">Total</h3>
                            <table class="w-100 table-hover text-justify align-item-center">
                                <tbody class="">
                                    <tr >
                                        <td class="">Total Amount</td>
                                        <td class=""><h5 class="h5"><?php echo $net; ?></h5></td>
                                    </tr>
                                    <tr style="border-bottom:3px solid white;">
                                        <td class="">Total VAT</td>
                                        <td class=""><h6 class="h6"><?php echo 0.05*$net; ?></h6></td>
                                    </tr>
                                    <tr >
                                        <td class="">Net Total</td>
                                        <td class=""><h5 class="h5"><?php echo $net+(0.05*$net); ?></h5></td>
                                    </tr>
                                    <tr style="border-bottom:3px solid white;">
                                        <td class="">Discount</td>
                                        <td class=""><h6 class="h6"><?php  $num=($net+(0.05*$net)); $frac=$num-floor($num); $decimal=number_format($frac,2,'.',''); echo $decimal;?></h6></td>
                                    </tr>
                                    <tr>
                                        <td class=""><strong>Grand Total</strong></td>
                                        <td class=""><h3 class="h3" id="gtotal" style="color:white;"><?php $grand=$num-$decimal; echo $grand; ?></h3></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="top p-3 position-absolute bottom-0 w-100 p-3">
                            <a href="SQL/returnProduct.php">
                                <button class="btn btn-primary w-100" type="button">Return Product</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        








        <div class="footer position-absolute bottom-1 w-100 bg-gradient-primary text-white d-flex justify-content-evenly">
            <div class="position-1 col-lg-2 d-flex text-center justify-content-center">
                <h6 class="h6">Grand Total</h6>
                <h1 id="net" class="h1"></h1>
            </div>
            <div class="position-2 col-lg-2 d-flex text-center justify-content-center">
                <h5 class="h6">Return</h5>
                <h1 id="return" class="h1"></h1>
            </div>
            <div class="position-3 col-lg-2 d-flex text-center justify-content-center">
                <h5 class="h6">Paid Amount</h5>


                
                <input class="" type="number" id="paid" name="paid" onkeyup="autoCalc(this.value);" min="1" max="9999999999" required>
            </div>
            <div class="position-4 col-lg-2 d-flex text-center justify-content-center">
                <h5 class="h6">Due Amount</h5>
                <h1 id="due" class="h1"></h1>
            </div>
            <div class="position-5 col-lg-4 d-flex text-center justify-content-center">
                <button class="btn btn-success" type="submit" name="cash" onclick="setRequired(true)">Cash Payment</button>
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter" onclick="setRequired(false)">Full Paid</button>
                <button class="btn btn-danger" type="submit" name="card" onclick="setRequired(true)">Card Payment</button>
                <button class="btn btn-dark" type="submit" name="ibanking" onclick="setRequired(true)">i-Banking Payment</button>
                
            </div>
        </div>
    </div>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choose Payment Option</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label class="container"><b>Cash</b>
            <input type="radio" name="radio" value="Cash">
            <span class="checkmark"></span>
        </label>
        <label class="container"><b>Card</b>
            <input type="radio" name="radio" value="Card">
            <span class="checkmark"></span>
        </label>
        <label class="container"><b>i-Banking</b>
            <input type="radio" name="radio" value="iBanking">
            <span class="checkmark"></span>
        </label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" name="full_paid">Pay</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- modal 2 -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="w-100" action="SQL/addCustomer.php" method="post">
          <div class="form-group">
            <label for="phone" class="col-form-label">Phone Number:</label>
            <input type="text" class="form-control" name="phone" id="phone">
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Full Name:</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="address" class="col-form-label">Address:</label>
            <textarea class="form-control" name="address" id="address"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Add Member</button>
        </form>
      </div>
    </div>
  </div>
</div>











</body>
</html>

<script>
      function togglePopupRet(){
        document.getElementById("popup_return").classList.toggle("active");
      }
      
    </script>

<!-- auto calculate due and return -->
<script>
    var t=0;
      t = document.getElementById('gtotal').innerHTML;
        document.getElementById('net').innerHTML = t;
        document.getElementById('due').innerHTML = t;
        document.getElementById('return').innerHTML = 0;

    function autoCalc(value) {
        var paidAmount = parseInt(value);
        var totalAmount = parseInt(t);

        if (!isNaN(paidAmount) && !isNaN(totalAmount)) {
            if (paidAmount >= totalAmount) {
                document.getElementById('return').innerHTML = (paidAmount - totalAmount);
                document.getElementById('due').innerHTML = 0;
            } else {
                document.getElementById('return').innerHTML = 0;
                document.getElementById('due').innerHTML = (totalAmount - paidAmount);
            }
        } else {
            document.getElementById('return').innerHTML = 0;
            document.getElementById('due').innerHTML = totalAmount;
        }
    }
</script>


<script>
$(document).ready(function(){
    $('#cphone').blur(function(){
        var phoneNumber = $(this).val();
        $.ajax({
            url: 'SQL/searchCustomer.php',
            method: 'POST',
            data: {phone_number: phoneNumber},
            success: function(response){
                $('#show').html(response);
            }
        });
    });
});


function setRequired(isRequired) {
        var inputField = document.getElementById('paid');
        inputField.required = isRequired;
    }
</script>






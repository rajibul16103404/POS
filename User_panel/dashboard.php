<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
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



</head>
<body>
    <div class="continer">
        <div class="header bg-gradient-secondary position-relative">
            <div class="row w-100 head">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <input class="w-100 form-control" type="text" placeholder="Scan BarCode" autofocus>
                                </div>
                                <div class="col-lg-2">
                                    <input class="w-100 form-control" type="text" placeholder="Qty">
                                </div>
                                <div class="col-lg-2">
                                    <input class="w-100 form-control" type="text" placeholder="Stock">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary w-100">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 m-2">
                                            <input class="form-control" type="int" placeholder="Customer Phone" maxlength="11">
                                        </div>
                                        <div class="col-lg-12 m-2">
                                            <input class="form-control" type="text" placeholder="Customer Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="../assets/img/userbg.png" class="w-100 justify-content-center" alt="">
                                    <h5 class="h5 text-white text-center">Name</h5>
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
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Available Stock</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th>Discounts</th>
                            <th>Discounted Price</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="pro">
                            <tr>
                                <td>dfjhjj</td>
                                <td>fdhcvfjkcvfjkd</td>
                                <td>fjbvfjkdbvs</td>
                                <td>fuhvnc</td>
                                <td>fdbcfjbc</td>
                                <td>100</td>
                                <td>10%</td>
                                <td>90</td>
                                <td>
                                    <button><i class="fas fa-trash-alt" style="color:red;font-size:20px;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>dfjhjj</td>
                                <td>fdhcvfjkcvfjkd</td>
                                <td>fjbvfjkdbvs</td>
                                <td>fuhvnc</td>
                                <td>fdbcfjbc</td>
                                <td>100</td>
                                <td>10%</td>
                                <td>90</td>
                                <td>
                                    <button><i class="fas fa-trash-alt" style="color:red;font-size:20px;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>dfjhjj</td>
                                <td>fdhcvfjkcvfjkd</td>
                                <td>fjbvfjkdbvs</td>
                                <td>fuhvnc</td>
                                <td>fdbcfjbc</td>
                                <td>100</td>
                                <td>10%</td>
                                <td>90</td>
                                <td>
                                    <button><i class="fas fa-trash-alt" style="color:red;font-size:20px;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>dfjhjj</td>
                                <td>fdhcvfjkcvfjkd</td>
                                <td>fjbvfjkdbvs</td>
                                <td>fuhvnc</td>
                                <td>fdbcfjbc</td>
                                <td>100</td>
                                <td>10%</td>
                                <td>90</td>
                                <td>
                                    <button><i class="fas fa-trash-alt" style="color:red;font-size:20px;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>dfjhjj</td>
                                <td>fdhcvfjkcvfjkd</td>
                                <td>fjbvfjkdbvs</td>
                                <td>fuhvnc</td>
                                <td>fdbcfjbc</td>
                                <td>100</td>
                                <td>10%</td>
                                <td>90</td>
                                <td>
                                    <button><i class="fas fa-trash-alt" style="color:red;font-size:20px;"></i></button>
                                </td>
                            </tr>

                            

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
                                        <td class=""><h4 class="h5">1234.09</h4></td>
                                    </tr>
                                    <tr style="border-bottom:3px solid white;">
                                        <td class="">Total VAT</td>
                                        <td class=""><h6 class="h6">1234.09</h6></td>
                                    </tr>
                                    <tr >
                                        <td class="">Net Total</td>
                                        <td class=""><h5 class="h5">1234.09</h5></td>
                                    </tr>
                                    <tr style="border-bottom:3px solid white;">
                                        <td class="">Discount</td>
                                        <td class=""><h6 class="h6">-&nbsp;1234.09</h6></td>
                                    </tr>
                                    <tr>
                                        <td class=""><strong>Grand Total</strong></td>
                                        <td class=""><h4 class="h3" id="total" style="color:white;">120</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="top p-3 position-absolute bottom-0 w-100 p-3">
                            <button class="btn btn-primary w-100" onclick="togglePopupRet()">Return Product</button>
                            <div class="popup" id="popup_return">
                                <div class="overlay"></div>
                                <div class="content">
                                    <div class="close_btn" onclick="togglePopupRet()">&times;</div>
                                    <div class="input">
                                        <form action="#" method="post">
                                            <h4>Return</h4>
                                            <label for="retId"><span>Return ID</span>
                                                <input type="text" name="retId" id="retId" >
                                            </label>
                                            <label for="retInvoice"><span>Return Invoice</span>
                                                <input type="text" name="retInvoive" id="retInvoice" >
                                            </label>
                                            <label for="retAmount"><span>Return Amount</span>
                                                <input type="text" name="retAmount" id="retAmount" >
                                            </label>
                                            <input class="btn_add_new_product bg-gradient-primary text-white w-100" type="submit" name="submit" id="submit" value="Proceed">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        








        <div class="footer position-absolute bottom-1 w-100 bg-gradient-primary text-white d-flex justify-content-evenly">
            <div class="position-1 col-lg-2 d-flex text-center justify-content-center">
                <h5 class="h6">Net Total</h5>
                <h1 id="net" class="h1"></h1>
            </div>
            <div class="position-2 col-lg-2 d-flex text-center justify-content-center">
                <h5 class="h6">Return</h5>
                <h1 id="return" class="h1"></h1>
            </div>
            <div class="position-3 col-lg-2 d-flex text-center justify-content-center">
                <h5 class="h6">Paid Amount</h5>
                <input class="" type="number" onkeyup="autoCalc(this.value);">
            </div>
            <div class="position-4 col-lg-2 d-flex text-center justify-content-center">
                <h5 class="h6">Due Amount</h5>
                <h1 id="due" class="h1"></h1>
            </div>
            <div class="position-5 col-lg-4 d-flex text-center justify-content-center">
                <button class="btn btn-success">Cash Payment</button>
                <button class="btn btn-danger">Card Payment</button>
                <button class="btn btn-dark">i-Banking Payment</button>
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
      t = document.getElementById('total').innerHTML;

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
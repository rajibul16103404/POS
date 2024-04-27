<?php
  session_start();
  if ($_SESSION['user_info'])
  {
    require_once("../conn.php");
    //Pie Chart
    $sql = "select name, amount from expense";
    $qry = mysqli_query($conn, $sql);
    $expense = array();
    if(mysqli_num_rows($qry)>0)
    {
      while($row = mysqli_fetch_assoc($qry))
      {
        $expense[] =  "['".$row['name']."',".$row['amount']."],";
      }
    }

    //Line chart
    $sql = "select name, amount from expense";
    $qry = mysqli_query($conn, $sql);
    $expense = array();
    if(mysqli_num_rows($qry)>0)
    {
      while($row = mysqli_fetch_assoc($qry))
      {
        $expense[] =  "['".$row['name']."',".$row['amount']."],";
      }
    }
?>
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
  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/MD logo.svg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">POS_Admin</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white bg-gradient-primary" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pos.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">point_of_sale</i>
            </div>
            <span class="nav-link-text ms-1">POS</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="product_management.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">build</i>
            </div>
            <span class="nav-link-text ms-1">Product Management</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="barcode_printing.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10" style="transform:rotate(90deg);">line_weight</i>
            </div>
            <span class="nav-link-text ms-1">Barcode Printing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="supplier_management.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">group</i>
            </div>
            <span class="nav-link-text ms-1">Supplier Management</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="sales_staff.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person_outline</i>
            </div>
            <span class="nav-link-text ms-1">Employee Management</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="customer_management.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-users opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Customer Management</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="expens_management.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="bi bi-cash-coin opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Expense Management</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="inventory.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">store</i>
            </div>
            <span class="nav-link-text ms-1">Inventory</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="quotation.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Quotation</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="sms.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">sms</i>
            </div>
            <span class="nav-link-text ms-1">SMS</span>
          </a>
        </li>
        <li class="nav-item sub_menu">
          <div class="nav-link text-white dropdown_menu" href="sales_report.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">addchart</i>
            </div>
            <span class="nav-link-text ms-1">Report</span>
          </div>
          <ul class="sub_nav">
            <li class="nav-item">
              <a class="nav-link text-white " href="sales_report.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">insert_chart</i>
                </div>
                <span class="nav-link-text ms-1">Sales Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="purchase_report.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">local_mall</i>
                </div>
                <span class="nav-link-text ms-1">Purchase Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="expense_report.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">price_check</i>
                </div>
                <span class="nav-link-text ms-1">Expense Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="stock_report.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">inventory</i>
                </div>
                <span class="nav-link-text ms-1">Stock Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="profit_report.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">show_chart</i>
                </div>
                <span class="nav-link-text ms-1">Profit Report</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-white " href="sign_out.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-1">
      <div class="mx-3">
        <a class="btn bg-gradient-primary w-100 " href="support.php" style="letter-spacing:2px;border-radius:10px !important;padding:10px !important;"><i class="fas fa-headset position-absolute  text-white" style="font-size:25px;width: 100%; left:-30%; top: 7px;"></i><span class="text-white">Help</span></a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
            </li>
            <li class="mt-2">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="../index.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-chart-line"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Sales</p>
                <h4 class="mb-0">
                <?php
                    $currentDate = new DateTime();
                    $total = 0;
                    $startDate = $currentDate->format('Y-m-d');
                    $sql = "SELECT paid FROM customer_order WHERE order_date = '$startDate'";
                    $qry = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($qry)>0)
                    {
                      while($result = mysqli_fetch_assoc($qry))
                      {
                        $total += $result['paid'];
                      }
                      if($total>=1000){
                        echo ($total/1000)."K";
                      }
                      else{
                        echo $total;
                      }
                    }
                    else{
                      echo "0";
                    }
                  ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-receipt"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Todays Expense</p>
                <h4 class="mb-0">
                <?php
                    $currentDate = new DateTime();
                    $total = 0;
                    $startDate = $currentDate->format('Y-m-d');
                    $sql = "SELECT amount FROM expense WHERE date = '$startDate'";
                    $qry = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($qry)>0)
                    {
                      while($result = mysqli_fetch_assoc($qry))
                      {
                        $total += $result['amount'];
                      }
                      if($total>=1000){
                        echo ($total/1000)."K";
                      }
                      else{
                        echo $total;
                      }
                    }
                    else{
                      echo "0";
                    }
                  ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-cart-arrow-down"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Todays Purchase</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-users"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Supplier Due</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-money-bill-wave"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Cash</p>
                <h4 class="mb-0">
                <?php
                    $currentDate = new DateTime();
                    $total = 0;
                    $startDate = $currentDate->format('Y-m-d');
                    $sql = "SELECT paid FROM customer_order WHERE paid_by = 'Cash'";
                    $qry = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($qry)>0)
                    {
                      while($result = mysqli_fetch_assoc($qry))
                      {
                        $total += $result['paid'];
                      }
                      if($total>=1000){
                        echo ($total/1000)."K";
                      }
                      else{
                        echo $total;
                      }
                    }
                    else{
                      echo "0";
                    }
                  ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-credit-card"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Bank</p>
                <h4 class="mb-0">
                <?php
                    $currentDate = new DateTime();
                    $total = 0;
                    $startDate = $currentDate->format('Y-m-d');
                    $sql = "SELECT paid FROM customer_order WHERE paid_by = 'Card'";
                    $qry = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($qry)>0)
                    {
                      while($result = mysqli_fetch_assoc($qry))
                      {
                        $total += $result['paid'];
                      }
                      if($total>=1000){
                        echo ($total/1000)."K";
                      }
                      else{
                        echo $total;
                      }
                    }
                    else{
                      echo "0";
                    }
                  ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0">i-Banking</p>
                <h4 class="mb-0">
                  <?php
                    $currentDate = new DateTime();
                    $total = 0;
                    $startDate = $currentDate->format('Y-m-d');
                    $sql = "SELECT paid FROM customer_order WHERE paid_by = 'iBanking'";
                    $qry = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($qry)>0)
                    {
                      while($result = mysqli_fetch_assoc($qry))
                      {
                        $total += $result['paid'];
                      }
                      if($total>=1000){
                        echo ($total/1000)."K";
                      }
                      else{
                        echo $total;
                      }
                    }
                    else{
                      echo "0";
                    }
                  ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="fas fa-hand-holding-usd"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Customer Due</p>
                <h4 class="mb-0">
                <?php
                    $currentDate = new DateTime();
                    $total = 0;
                    $startDate = $currentDate->format('Y-m-d');
                    $sql = "SELECT due FROM customer_order";
                    $qry = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($qry)>0)
                    {
                      while($result = mysqli_fetch_assoc($qry))
                      {
                        $total += $result['due'];
                      }
                      if($total>=1000){
                        echo ($total/1000)."K";
                      }
                      else{
                        echo $total;
                      }
                    }
                    else{
                      echo "0";
                    }
                  ?>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
          </div>
        </div>
      </div>
      <div class="row mt-3 d-flex justify-content-evenly">
        <div class="col-xl-7 col-lg-5 col-md-6 mt-4 mb-4" style="border-radius: 10px; background-color: white;">
          <div id="chart_div" style="width: 100%; height: 500px;"></div>
        </div>
        <div class="col-lg-5 col-lg-4 col-md-4 mt-4 mb-4" style="border-radius: 10px; width: 40%; background-color: white;">
          <div id="piechart"></div>
        </div>
        <!-- <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7 d-flex justify-content-between w-100">
                  <h6>Date Expire Alert</h6>
                  <a class="redirect" href="inventory.php"><i class="fas fa-external-link-alt redirect-icon"></i></a>
                  <!-- <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                  </p> -->
                </div>
                <!-- <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expiry Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      require_once("../conn.php");
                      $today = date('Y-m-d');
                      $sql = "SELECT name, expire_at FROM product";
                      $qry = mysqli_query($conn, $sql);

                      // Counter variable to limit the number of records displayed
                      $count = 0;

                      if(mysqli_num_rows($qry) > 0) {
                          while($row = mysqli_fetch_assoc($qry)) {
                              $diff_seconds = strtotime($row['expire_at']) - strtotime($today);
                              $diff_days = floor($diff_seconds / (60 * 60 * 24));

                              if($diff_days <= 7 && $diff_days > 0) {
                                  ?>
                                  <tr>
                                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $row['name']; ?></td>
                                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $diff_days . " Days"; ?></td>
                                  </tr>
                                  <?php
                                  // Increment the counter after displaying a record
                                  $count++;

                                  // Break out of the loop if 5 records have been displayed
                                  if($count >= 5) {
                                      break;
                                  }
                              }
                          }
                      }

                      // Display "No Data" if no records are found
                      if($count == 0) {
                          ?>
                          <tr>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Data</td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Data</td>
                          </tr>
                          <?php
                      }
                      ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7 d-flex justify-content-between w-100">
                  <h6>Stock Out Alert</h6>
                  <a class="redirect" href="inventory.php"><i class="fas fa-external-link-alt redirect-icon"></i></a>
                  <!-- <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                  </p> -->
                </div>
                <!-- <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remaining Stock</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      require_once("../conn.php");
                      $sql = "SELECT name, stock FROM product";
                      $qry = mysqli_query($conn, $sql);

                      // Counter variable to limit the number of records displayed
                      $count = 0;

                      if(mysqli_num_rows($qry) > 0) {
                          while($row = mysqli_fetch_assoc($qry)) {
                              if($row['stock']<=10) {
                                  ?>
                                  <tr>
                                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $row['name']; ?></td>
                                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo $row['stock']; ?></td>
                                  </tr>
                                  <?php
                                  // Increment the counter after displaying a record
                                  $count++;

                                  // Break out of the loop if 5 records have been displayed
                                  if($count >= 5) {
                                      break;
                                  }
                              }
                          }
                      }

                      // Display "No Data" if no records are found
                      if($count == 0) {
                          ?>
                          <tr>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Data</td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Data</td>
                          </tr>
                          <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Most Selling Item</h6>
                  <!-- <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                  </p> -->
                <!-- </div> -->
                <!-- <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div> -->
              <!-- </div>
            </div> -->
            <!-- <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sell Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div> -->
          <!-- </div>
        </div> -->
        <!-- <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Orders overview</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold">24%</span> this month
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-success text-gradient">notifications</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-danger text-gradient">code</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient">shopping_cart</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-warning text-gradient">credit_card</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-primary text-gradient">key</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="material-icons text-dark text-gradient">payments</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <!-- <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->
    </div>
  </main>
  <!-- <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        End Toggle Button --><!--
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        Sidebar Backgrounds --><!--
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        Sidenav Type --><!--
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
         Navbar Fixed --><!--
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div> -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          label: "Todays Sale",
          tension: 0,
          borderWidth: 0,
          pointRadius: 8,
          pointBackgroundColor: "rgb(42, 131, 236)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [0, 40, 300, 320, 800, 350, 2],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 30,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [15, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>

  <!-- Pie Chart JS -->


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
            foreach($expense as $e){
              echo $e;
            }
          ?>
          // ['Work',     11],
          // ['Eat',      2],
          // ['Commute',  2],
          // ['Watch TV', 2],
          // ['Sleep',    7],
          // ['Gaming', 12],
        ]);

        var options = {
          title: 'Expense Preview',
          width: 600,
          height: 500,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
    
    <?php
// Get the current date
$currentDate = new DateTime();

// Get the day of the week (0 for Sunday, 1 for Monday, ..., 6 for Saturday)
$dayOfWeek = $currentDate->format('w');

// Calculate the date of the Monday of the current week
$currentDate->modify('-' . $dayOfWeek . ' days');
$startDate = $currentDate->format('Y-m-d');

// Calculate the date of the Sunday of the current week
$currentDate->modify('+6 days');
$endDate = $currentDate->format('Y-m-d');

// Generate the data array for the current week
$weekData = array();
$weekData[] = array('Day', 'Sales', 'Expenses');

// Loop through each day of the week and generate data
for ($i = 0; $i < 7; $i++) {
    $sales = 0; // Initialize sales for each day
    $expenses = 0; // Initialize expenses for each day
    
    // Query for sales
    $earningQuery = "SELECT SUM(paid) AS total_paid FROM customer_order WHERE DATE(order_date) = DATE_ADD('$startDate', INTERVAL $i DAY)";
    $earningResult = mysqli_query($conn, $earningQuery);
    $earningRow = mysqli_fetch_assoc($earningResult);
    $sales = $earningRow['total_paid'];

    // Query for expenses
    $expenseQuery = "SELECT SUM(amount) AS total_amount FROM expense WHERE DATE(date) = DATE_ADD('$startDate', INTERVAL $i DAY)";
    $expenseResult = mysqli_query($conn, $expenseQuery);
    $expenseRow = mysqli_fetch_assoc($expenseResult);
    $expenses = $expenseRow['total_amount'];

    $day = date('l', strtotime($startDate . ' +' . $i . ' days'));
    $weekData[] = array($day, (float)$sales, (float)$expenses); // Convert to float for accurate chart rendering
}

// Convert the data array to JSON format
$weekDataJson = json_encode($weekData);
?>

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $weekDataJson; ?>);

        var options = {
            title: 'This Week Cashflow',
            vAxis: {minValue: 0, maxValue:5000},
            hAxis: {title: 'Day of this Week'}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>





</body>

</html>

<?php
  }
  else{
    session_destroy();
    echo "<script>alert('OOPS! Session Expired. Please Log In Again'); window.location = '../index.php';</script>";
  }
?>



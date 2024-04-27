<?php

session_start();
if ($_SESSION['user_info'])
  {
$user = $_SESSION['user_info']['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
@import url(https://fonts.googleapis.com/css?family=Raleway:100,200,300);

body, html {
  padding: 0;
  margin: 0;
  height: 100%;
  font-family: 'Raleway';
  overflow: hidden;
}

.progress-bar {
  position: absolute;
  top: 50%;
  height: 20px;
  background: #328CED;
}

.done {
  top: 0;
  height: 100%;
  width: 100%;
  transition: all .1s ease;
}
.count1{
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  font-weight: 800;
  font-size: 3em;
  margin-top: -1.33em;
  color: #328CED;
}
.h1{
    position: absolute;
  top: 15%;
  width: 100%;
  text-align: center;
  font-weight: 500;
  font-size: 4em;
  color: #328CED;
}

.count {
  position: absolute;
  top: 60%;
  width: 100%;
  text-align: center;
  font-weight: 500;
  font-size: 3em;
  margin-top: -1.33em;
  color: #328CED;
}
  </style>
</head>
<body>
<div class="progress-bar"></div>
<h1 class="count"></h1>
<h1 class="count1">Printing Invoice...</h1>

<script>
    var body = document.querySelector('body'),
    bar = document.querySelector('.progress-bar'),
    counter = document.querySelector('.count'),
    i = 0,
    throttle = 0.7; // 0-1

(function draw() {
  if(i <= 100) {
    var r = Math.random();
    
    requestAnimationFrame(draw);  
    bar.style.width = i + '%';
    counter.innerHTML = Math.round(i) + '%';
    
    if(r < throttle) { // Simulate d/l speed and uneven bitrate
      i = i + r;
    }
  } else {;
    bar.className += " done";
    window.location.href = "../pos.php";
  }
})();
</script>



</body>
</html>


<?php

require_once("../../conn.php");

$today = date('Y-m-d');

$order_id = "MD".rand(10000000,99999999);

$items = array();

    $sql = "select barcode, qty from postable";
    $qry = mysqli_query($conn, $sql);
    if(mysqli_num_rows($qry)>0){
       while( $row = mysqli_fetch_assoc($qry)){
        $items[] = $row['barcode']."-qty-".$row['qty'];
       }
    }

    $order_items = implode(", ", $items);

    $due = (int)$_POST['total']-(int)$_POST['paid'];


if(isset($_POST['cash']))
{

    $insrt = "insert into customer_order(order_id, customer_phone, order_date, order_item,total, paid, due, paid_by, sale_by) values ('$order_id','$_POST[cphone]', '$today', '$order_items', '$_POST[total]', '$_POST[paid]','$due', 'Cash', '$user')";

    $query = mysqli_query($conn, $insrt);

    if($query){
      $del = "truncate table postable";
      $result = mysqli_query($conn, $del);
      echo "<h1 class='h1'>Order ID : <strong>".$order_id."</strong> Created Successfully.</h1>";
    }
    else{
        echo "Denied";
    }
}
else if(isset($_POST['card']))
{
    $insrt = "insert into customer_order(order_id, customer_phone, order_date, order_item,total, paid, due, paid_by, sale_by) values ('$order_id','$_POST[cphone]', '$today', '$order_items', '$_POST[total]', '$_POST[paid]','$due', 'Card', '$user')";

    $query = mysqli_query($conn, $insrt);

    if($query){
      $del = "truncate table postable";
      $result = mysqli_query($conn, $del);
      echo "<h1 class='h1'>Order ID : <strong>".$order_id."</strong> Created Successfully.</h1>";
    }
    else{
        echo "Denied";
    }
}
else if(isset($_POST['ibanking']))
{
    $insrt = "insert into customer_order(order_id, customer_phone, order_date, order_item,total, paid, due, paid_by, sale_by) values ('$order_id','$_POST[cphone]', '$today', '$order_items', '$_POST[total]', '$_POST[paid]','$due', 'iBanking', '$user')";

    $query = mysqli_query($conn, $insrt);

    if($query){
      $del = "truncate table postable";
      $result = mysqli_query($conn, $del);
      echo "<h1 class='h1'>Order ID : <strong>".$order_id."</strong> Created Successfully.</h1>";
    }
    else{
        echo "Denied";
    }
}
else if(isset($_POST['full_paid']))
{
    $insrt = "insert into customer_order(order_id, customer_phone, order_date, order_item,total, paid, due, paid_by, sale_by) values ('$order_id','$_POST[cphone]', '$today', '$order_items', '$_POST[total]', '$_POST[total]','0', '$_POST[radio]', '$user')";

    $query = mysqli_query($conn, $insrt);

    if($query){
        $del = "truncate table postable";
        $result = mysqli_query($conn, $del);
        echo "<h1 class='h1'>Order ID : <strong>".$order_id."</strong> Created Successfully.</h1>";
    }
    else{
        echo "Denied";
    }
}

  }
  else{
    session_destroy();
    echo "<script>alert('OOPS! Session Expired. Please Log In Again'); window.location = '../index.php';</script>";
  }

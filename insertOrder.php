<?php session_start();
  $x = $_REQUEST["amnt"];
  $usr = $_SESSION["uname"];
  include("databseconnect.php");

  mysqli_query($con , "insert into order_master (user_name,order_date,total_amt , order_status , last_update_date) values 
  ('$usr',now(),'$x','Transit', now())");

  $rsmax = mysqli_query($con ,"select max(order_masterid) From order_master");
  $row = mysqli_fetch_array($rsmax);

  $refid = $row[0];

  $rscart = mysqli_query($con ,"select * from cart_info where user_name = '$usr'");
  while($row=mysqli_fetch_array($rscart)){
    $itm_id = $row["item_id"];
    $qty = $row["item_quantity"];
    $rate = $row["item_rate"];
    mysqli_query($con , "insert into order_detail (item_id,item_quantity,item_rate,order_ref_id) Values 
    ('$itm_id','$qty','$rate', '$refid')");
  }

  mysqli_query($con , "delete from cart_info where user_name='$usr'");

  header("location:displayOrderInfo.php?orid=$refid");
?>
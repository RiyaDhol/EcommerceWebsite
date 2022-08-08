<?php
  include('header.php');
?>

<div id="content">
  &nbsp;
<?php @session_start();
$a =$_REQUEST["Quantity"];
$b = $_SESSION["productid"];
$c = $_SESSION["price"];
$d = $_SESSION["uname"];

   include("databseconnect.php");
   mysqli_query($con , "insert into cart_info (item_id, item_quantity, item_rate, user_name, reg_date) VALUES ('$b','$a','$c','$d', now())") 
   or die("Query Error");
   echo("<h3> &nbsp; &nbsp; Item has been added into your cart  </h3>");
   echo("<h3> &nbsp; &nbsp; Do You Want to Add More Items Into Your Cart ? </h3>");
   echo("<h3> &nbsp; &nbsp;<a href='index.php'> Yes </a> ");
   echo("&nbsp; &nbsp; <a href='displayCartForOrder.php'> No </a></h3>");
?>

</div>

<?php
  include('footer.php');
?>
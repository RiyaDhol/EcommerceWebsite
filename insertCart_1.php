<?php session_start();
$a =$_REQUEST["Quantity"];
$b = $_SESSION["productid"];
$c = $_SESSION["price"];
$d = $_SESSION["uname"];

include("databseconnect.php");
mysqli_query($con , "insert into cart_info (item_id, item_quantity, item_rate, user_name, reg_date) VALUES ('$b','$a','$c','$d', now())") 
or die("Query Error");
echo("item has been added");
?>
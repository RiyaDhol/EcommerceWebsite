<?php
$a = $_REQUEST["item_name"];
$b = $_REQUEST["item_desc"];
$c = $_FILES["ImgFiles_item"];
$img = $c["name"];
$d = $_REQUEST["cmbParCat"];
$e = $_REQUEST["item_rate"];
$f = $_REQUEST["item_discount"];
include("databseconnect.php"); 
move_uploaded_file($c["tmp_name"],".\\collections\\$img");
$sql ="insert into item_info(item_name,item_desc,item_path,parent_cat,item_rate , item_disc ,reg_date) values ('$a', '$b','$img','$d','$e', '$f', now())";
mysqli_query($con , "$sql") or die("Query Error");
header("location:adminChoice.php?resadmsz=1");
?>
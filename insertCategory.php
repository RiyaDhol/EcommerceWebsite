<?php
$a = $_REQUEST["cat_name"];
$b = $_REQUEST["cat_displayname"];
$c = $_FILES["ImgFiles"];
$img = $c["name"];
$d = $_REQUEST["cmbCatType"];
if ($d=="Primary"){
    $e=0;
}
else 
  $e = $_REQUEST["cmbParCat"];
include("databseconnect.php"); 
move_uploaded_file($c["tmp_name"],".\\collections\\$img");
$sql ="insert into category_info(cat_name,cat_dname,image_path,cat_type,cat_parent_id,reg_date) values ('$a', '$b','$img','$d','$e', now())";
mysqli_query($con , "$sql") or die("Query Error");
header("location:adminChoice.php?resadmsz=1");
?>
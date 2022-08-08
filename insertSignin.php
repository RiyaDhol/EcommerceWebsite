<?php
//Day - 1 Work
 $a = $_REQUEST['txt_name'];
 $b = $_REQUEST['txt_email'];
 $c = $_REQUEST['txt_phone'];
 $d = $_REQUEST['txt_address'];
 $e = $_REQUEST['txt_usrname'];
 $f = $_REQUEST['txt_pass'];

 include("databseconnect.php"); 

  $sql ="insert into customerinfo(custName,custEmail,custPhone, custAddress,custUserName,custPass, custType,reg_date) values ('$a','$b','$c','$d','$e','$f','user',now())";

  mysqli_query($con , "$sql")  or die("Query Error");

  header("location:SigninForm.php?resmsz=1");

?>
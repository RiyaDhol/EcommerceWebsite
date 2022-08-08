<?php
$a = $_REQUEST["txt_name"];
$b = $_REQUEST["txt_email"];
$c = $_REQUEST["txt_phone"];
$d = $_REQUEST["txt_address"];
$e = $_REQUEST["txt_pass"];
$f = $_REQUEST["txt_usrname"];

include("databseconnect.php");

mysqli_query($con , "update customerinfo set custName='$a', custEmail='$b',custPhone='$c',custAddress='$d',custPass='$e' where custUserName ='$f' ") or die("query Error");

header("location:editProfile.php?resmsz=1");

?>
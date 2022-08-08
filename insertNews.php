<?php
$a = $_REQUEST["news_heading"];
$b = $_REQUEST["txtDetails"];

include("databseconnect.php");

mysqli_query($con , "insert into news_info (news_name, news_detail, reg_date, delete_status) values 
('$a', '$b', now(), 0)") or die("query Error");

header("location:CreateNews.php?st=1");



?>
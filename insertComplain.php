<?php session_start();
$a = $_REQUEST["complain_heading"];
$b = $_REQUEST["ComplainDetails"];
$rec = $_REQUEST["complain_reciever"];

$usr = $_SESSION["uname"];

include("databseconnect.php");
mysqli_query($con , "insert into message_info (msz_heading, msz_detail, sender_name, reciever_name,sent_date) VALUES ('$a','$b','$usr','$rec', now())")
or die("Query Error");
if($_SESSION["utype"]=="user")
  header("location:complainForm.php?st=1");
else
  header("location:displayAdminInbox.php");
?>
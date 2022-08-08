<?php session_start();

 $_SESSION["productid"] = $_REQUEST["productid"];
 $_SESSION["price"] = $_REQUEST["price"];


 if(isset($_SESSION["uname"])){
    header("location:chooseProductBuy.php");
 }
 else 
 {
    header("location:newloginForm.php");
 }

 ?>
 <!-- Day 5 Work -->
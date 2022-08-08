<?php @session_start(); ?> <!--Day--5 work -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./CSS/style.css"  type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="main"> <!--Day--1 Work-->
    <header>
    <div id="leftLogo">
       <a href="index.php"> <img src="./Img/logo.png"> </a> 
    </div>
    <div id="title">
        <h1> Online Mart </h1>
        <h4> Your choice in one button away </h4>
    </div>
    <div id="rightLogo">
        <a href="SigninForm.php"> Sign in</a> | <a href="loginForm.php"> Login</a>
        <!--Day--5 work -->
        <?php 
          if(isset($_SESSION["uname"])){
            echo("<div id='logoutstyle'>");
            $usr = $_SESSION["uname"];
            echo($_SESSION["uname"]." | ");
            echo("<a href='logout.php'> Logout </a>");
               if($_SESSION["utype"]=="user"){
                   echo("&nbsp; <a href='displayCartForOrder.php'> <img src='./Img/cart.png' width='10px'>");
                   include("databseconnect.php");
                      $cartcount = mysqli_query($con , "select count(*) From cart_info where user_name ='$usr'");
                      $row = mysqli_fetch_array($cartcount);
                      $cnt = $row[0];
                      echo("($cnt)");
                      echo("</a>");
               }
            echo("</div>");
          }
        ?>
        <!--Day--5 work ends -->
    </div> <!--Day--1 Work -->
    </header> <!--end of header-->
    <div id="searchbar">
      <form method="get" action="searchResult.php" >
       <label> &nbsp; Search Here </label> <br>
       <input type="text" name="txtSearch"> <input type="submit" value="ok">
      </form>
    </div>
  
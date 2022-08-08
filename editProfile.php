<?php
   @session_start();
   if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user")
   {
   include('header.php');
?>

<div id="content"> <!--Day 3 work-->
   <div id="adminHeader">
        <h1> <u>  WELCOME USER </u></h1>
   </div> <!--end of adminHeader-->
    <br>
    <div id="adminMain">
        <div id="LeftSide"> 
          <!-- Day 4 work -->
         <?php  include('userMenu.php');  ?>
        </div> <!--end of LeftSide-->
        <div id="RightSide">       
        <div> &nbsp; </div>
  <?php
  if (isset($_REQUEST["resmsz"]))
  {
    echo("<div class='resmsz'>");
    if($_REQUEST["resmsz"]==1)
    {
       echo("Your profile has been Updated");
    }
    echo("</div>");
  }
?>
  <?php
    include("databseconnect.php");
    $usr = $_SESSION["uname"];
    $rsuser=mysqli_query($con,"select * from customerinfo where custUserName ='$usr'") or die("query Error");

    $row= mysqli_fetch_array($rsuser);
    $a =$row["custName"];
    $b =$row["custEmail"];
    $c =$row["custPhone"];
    $d =$row["custAddress"];
    $e =$row["custUserName"];
    $f =$row["custPass"];
  ?>
  <div id="formdesign">
    <form   method="post" action="updateProfile.php">
    <label > Enter Your Name </label>
    <input type="text" name="txt_name" value='<?=$a?>' /> 
    <label > Enter Your Email </label>
    <input type="email" name="txt_email" value='<?=$b?>'/> 
    <label > Enter Your PhoneNo </label>
    <input type="number" name="txt_phone" value='<?=$c?>'/> 
    <label > Enter Your Address </label>
    <textarea name="txt_address"> <?=$d?> </textarea>
    <label > Enter Your User Name </label>
    <input type="text" name="txt_usrname" value='<?=$e?>' readonly/>
    <label > Enter Your Password </label>
    <input type="password" name="txt_pass" value='<?=$f?>'/> 
    <input type="submit" value="submit">
    <input type="reset" value="clear">
    </form>
    </div>
    <div> &nbsp </div>
</div>
        </div><!--end of RightSide-->
    </div><!--end of adminMain-->
</div><!--end of content-->

<?php
  include('footer.php');
}
else
{
  header("location:loginForm.php");
}
?>
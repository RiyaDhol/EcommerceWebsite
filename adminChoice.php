<?php 
  @session_start();
  if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin")
  {

  include('header.php');

?>
<div id="content"> <!--Day 3 work-->
   <div id="adminHeader">
        <h1> <u> ADMIN DASHBOARD </u></h1>
   </div> <!--end of adminHeader-->
    <br>
    <div id="adminMain">
        <div id="LeftSide"> 
          <!-- Day 4 work -->
         <?php  include('leftMenu.php');  ?>
        </div> <!--end of LeftSide-->
        <div id="RightSide">       
           <?php  if (isset($_REQUEST["resadmsz"]))
           {
             echo("<div class='resadmsz'>");
             if($_REQUEST["resadmsz"]==1)
                {
                  echo("Your data has been recorded!");
                 }
                 echo("</div>");
            } ?> 
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
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
        <?php
        require_once("library.php");
        displayTable("Select * from customerinfo");
        ?>
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
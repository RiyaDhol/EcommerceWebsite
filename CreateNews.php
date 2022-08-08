<?php
  @session_start();
  if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin")
  {
  include('header.php');
?>

<div id="content"> <!--Day 3 work-->
   <div id="adminHeader">
        <h1> <u> ADMIN DASHBOARD </u></h1>
   </div><!--end of adminHeader-->
    <br>
    <div id="adminMain">
        <div id="LeftSide"> 
          <!-- Day 4 work -->
         <?php  include('leftMenu.php');  ?>
        </div> <!--end of Leftside-->
        <div id="RightSide">       
          <?php  if (isset($_REQUEST["st"]))
           {
           echo("<div class='resadmsz'>");
             if($_REQUEST["st"]==1)
                {
                  echo("Your News has been recorded!");
                 }
                 echo("</div>");
            } ?> 
            <div id="formdesign">
              <form method="post" action="insertNews.php" >
                <label > Enter News Heading </label>
                <input type="text" name="news_heading"> 
                <label > Enter News Detail </label>
                <textarea name="txtDetails" rows="10" cols="10"> </textarea>  
                <input type="submit" value="submit">
                <input type="reset" value="clear">
              </form>
            </div><!--end of FormDesign-->
        </div> <!--end of RightSide-->
    </div><!--end of adminMain-->
</div><!--end of Content-->

<?php
   include('footer.php');
  }
  else
  {
    header("location:loginForm.php");
  }
?>
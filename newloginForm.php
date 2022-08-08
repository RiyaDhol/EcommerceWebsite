<?php
  include('header.php');
?>

<?php
//Day - 1 Work
if(isset($_REQUEST["resmsz"]))
   {
       echo("<div class='resmsz'>");
        if($_REQUEST["resmsz"]==1)
        {
           echo("Wrong User Name");
        }
        else if($_REQUEST["resmsz"]==2)
        {
          echo("Wrong Password");
        }
       echo("</div>");
   }
?>
<div id="content">
  <div> &nbsp; </div>
  <div id="formdesign">
    <h4> <u> Login </u> </h4>
    <form   method="post" action="newcheckLogin.php">
    <label > Enter Your User Name </label>
    <input type="text" name="txt_usrname">
    <label > Enter Your Password </label>
    <input type="text" name="txt_pass"> 
    <input type="submit" value="submit">
    <input type="reset" value="clear">
    </form>
    </div>
    <div> &nbsp </div>
</div>

<?php
  include('footer.php');
?>
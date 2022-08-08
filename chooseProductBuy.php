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
    <form   method="post" action="insertCart_2.php">
    <label > Enter Product Quantity </label>
    <input type="text" name="Quantity"> 
    <input type="submit" value="submit">
    <input type="reset" value="clear">
    </form>
    </div>
    <div> &nbsp </div>
</div>

<?php
  include('footer.php');
?>
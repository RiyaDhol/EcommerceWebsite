<?php
  include('header.php');
?>

<div id="content">
<!--Day - 1 Work-->
  <div> &nbsp; </div>
  <?php
  if (isset($_REQUEST["resmsz"]))
  {
    echo("<div class='resmsz'>");
    if($_REQUEST["resmsz"]==1)
    {
       echo("Your data has been recorded!");
    }
    echo("</div>");
  }
?>
  <div id="formdesign">
    <h4> <u> Sign in </u> </h4>
    <form   method="post" action="insertSignin.php">
    <label > Enter Your Name </label>
    <input type="text" name="txt_name"> 
    <label > Enter Your Email </label>
    <input type="email" name="txt_email"> 
    <label > Enter Your PhoneNo </label>
    <input type="number" name="txt_phone"> 
    <label > Enter Your Address </label>
    <textarea name="txt_address"> </textarea>
    <label > Enter Your User Name </label>
    <input type="text" name="txt_usrname">
    <label > Enter Your Password </label>
    <input type="password" name="txt_pass"> 
    <input type="submit" value="submit">
    <input type="reset" value="clear">
    </form>
    </div>
    <div> &nbsp </div>
</div>

<?php
  include('footer.php');
?>
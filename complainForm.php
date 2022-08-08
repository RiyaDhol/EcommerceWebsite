<?php
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
           <?php  if (isset($_REQUEST["st"]))
           {
             echo("<div class='resadmsz'>");
             if($_REQUEST["st"]==1)
                {
                  echo("Your Complaint has been recorded! Kindly Wait for Resposne");
                 }
                 echo("</div>");
            } ?> 

             <div id="formdesign">
              <form method="post" action="insertComplain.php" >
                <?php
                $rec ="admin";
                ?>
                <label > Complain To</label>
                <input type="text" name="complain_reciever" readonly="readonly" value='<?php echo("$rec") ?>'> 
                <label > Complain Heading </label>
                <input type="text" name="complain_heading"> 
                <label > Complain Details </label>
                <textarea name="ComplainDetails" rows="10" cols="10"> </textarea>  
                <input type="submit" value="submit">
                <input type="reset" value="clear">
              </form>
            </div><!--end of FormDesign-->
        </div><!--end of RightSide-->
    </div><!--end of adminMain-->
</div><!--end of content-->

<?php
  include('footer.php');
?>
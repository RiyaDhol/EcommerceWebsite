<?php
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
                  echo("Offer Created !");
                 }
                 echo("</div>");
            } ?> 
            <div id="formdesign">
              <form method="post" action="insertOffer.php" enctype="multipart/form-data">
                <label > Enter Offer Name </label>
                <input type="text" name="offer_name"> 
                <label > Starting Date </label>
                <input type="date" name="offer_start_date"> 
                <label > Ending Date </label> 
                <input type="date" name="offer_end_date">  <br>
                <label > Choose Category</label>
                <select name="cmbCat">
                <option value='0'>Choose Category Name</option>
                  <?php 
                     include("databseconnect.php"); 
                     $rs = mysqli_query($con ,"select cat_id,cat_name from category_info order by cat_name");
                     while($row=mysqli_fetch_array($rs))
                      {
                      $id = $row["cat_id"];
                      echo("<option value='$id'>");
                      echo($row["cat_name"]);
                      echo("</option>");
                      }
                  ?>
                </select>
                <label > Enter Offer Discount in % </label>
                <input type="number" name="offer_discount"> 
                <input type="submit" value="submit">
                <input type="reset" value="clear">
              </form>
            </div><!--end of FormDesign-->
        </div> <!--end of RightSide-->
    </div><!--end of adminMain-->
</div><!--end of Content-->

<?php
  include('footer.php');
?>
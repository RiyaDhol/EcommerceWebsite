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
          <?php  if (isset($_REQUEST["resadmsz"]))
           {
           echo("<div class='resadmsz'>");
             if($_REQUEST["resadmsz"]==1)
                {
                  echo("Your data has been recorded!");
                 }
                 echo("</div>");
            } ?> 
            <div id="formdesign">
              <form method="post" action="insertItem.php" enctype="multipart/form-data">
                <label > Enter Item Name </label>
                <input type="text" name="item_name"> 
                <label > Enter Item Description </label>
                <input type="text" name="item_desc"> 
                <label class="imgupload" > Upload Item Image  </label>
                <input type="file" name="ImgFiles_item" class="imgupload" > 
                <label > Parent Category</label>
                <select name="cmbParCat">
                <option value='0'>Parent Category</option>
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
                <label > Enter Item Rate </label>
                <input type="number" name="item_rate"> 
                <label > Enter Item Discount in % </label>
                <input type="number" name="item_discount"> 
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
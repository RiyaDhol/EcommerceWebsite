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
           <?php 
           $id = $_REQUEST["id"];
           include("databseconnect.php");

           $rsOrder = mysqli_query($con,"select * from order_detail,item_info where order_detail.item_id = item_info.item_id and order_ref_id='$id'");
           echo("<div id ='myList'>");
            echo("<table border ='1'>");
             echo("<tr>");
             echo("<th> SNo. </th>");
             echo("<th> Item Name </th>");
             echo("<th> Quantity </th>");
             echo("<th> Rate </th>");
             echo("</tr>"); 
             $cnt =0;
             while($row=mysqli_fetch_array($rsOrder))
             {
               $cnt++;
               $id = $row["order_detail_id"];
               echo("<tr>");
               echo("<td>");
               echo($cnt);
               echo("</td>");
               echo("<td>");
               echo($row["item_name"]);
               echo("</td>");
               echo("<td>");
               echo($row["item_quantity"]);
               echo("</td>");
               echo("<td>");
               echo($row["item_rate"]);
               echo("</td>");
               echo("</tr>");
             }
             echo("</table>");
             echo("</div>");
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
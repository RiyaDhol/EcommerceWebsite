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
           include("databseconnect.php");
           $usr = $_SESSION["uname"];
           $rsOrder = mysqli_query($con,"select * from order_master where user_name = '$usr'  order by order_masterid desc");
           echo("<div id ='myList'>");
            echo("<table border ='1'>");
             echo("<tr>");
             echo("<th> SNo. </th>");
             echo("<th> Customer Name </th>");
             echo("<th> Order Date </th>");
             echo("<th> Total Amount </th>");
             echo("<th> Current Status </th>");
             echo("<th> Status </th>");
             echo("</tr>"); 
             $cnt =0;
             while($row=mysqli_fetch_array($rsOrder))
             {
               $cnt++;
               $id = $row["order_masterid"];
               echo("<tr>");
               echo("<td>");
               echo($cnt);
               echo("</td>");
               echo("<td>");
               echo($row["user_name"]);
               echo("</td>");
               echo("<td>");
               echo($row["order_date"]);
               echo("</td>");
               echo("<td>");
               echo($row["total_amt"]);
               echo("</td>");
               echo("<td>");
               echo($row["order_status"]);
               echo("</td>");
               echo("<td>");
               echo("<a href='displayOrderDetailForUserHistory.php?id=$id'> Detail </a>");
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
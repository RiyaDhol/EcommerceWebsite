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
        <div id="style">   
             <?php
             $id = $_REQUEST["nid"];
               include("databseconnect.php");
               $rsNews = mysqli_query($con , "select *  from message_info where msz_id ='$id' order by sent_date desc");
               $row=mysqli_fetch_array($rsNews);
                 $id = $row["msz_id"];
                 $hd = $row["msz_heading"];
                 $sn = $row["sender_name"];
                 $dt = $row["sent_date"];
                 $dtl = $row["msz_detail"];
                 echo("Heading :" . $hd);
                 echo("<hr>");
                 echo("Rec Date :". $dt);
                 echo("<hr>");
                 echo("Sender Name :". $sn);
                 echo("<hr>");
                 echo("Detail :". $dtl);
                 echo("<hr>");
             ?>
            </div>
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
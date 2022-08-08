<?php @session_start();
$a = $_REQUEST["txt_id"];
$b = $_REQUEST["statusbar"];

include("databseconnect.php");

mysqli_query($con , "update order_master set order_status='$b' , last_update_date =now() where order_masterid = '$a' ");
if($_SESSION["utype"]=='user')
{
    header("location:displayOrderMasterforCancelUser.php");
}
else {
    header("location:displayOrderDetailForAdmin.php?id=$a");
}

?>
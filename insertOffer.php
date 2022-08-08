<?php
  $cats ="";
  function recursionGetChildCat($parent)
  { 
    $GLOBALS["cats"]=$GLOBALS["cats"].$parent."-";
    include("databseconnect.php");
    $rscat = mysqli_query($con , "select cat_id from category_info where cat_parent_id = '$parent'");
    if(mysqli_num_rows($rscat)==0){
      return ;
    }
    else {
      while($row=mysqli_fetch_array($rscat))
      {
        recursionGetChildCat($row["cat_id"]);
      }
    }
         
  }

$a = $_REQUEST["offer_name"];
$b = $_REQUEST["offer_start_date"];
$c = $_REQUEST["offer_end_date"];
$d = $_REQUEST["cmbCat"];
$e = $_REQUEST["offer_discount"];

$tmpdt = strtotime("1day", strtotime($c));

$str = substr($cats, 0 , strlen($cats)-1);

$newdate = date('y-m-d' , $tmpdt);
echo($newdate);
recursionGetChildCat($d);

include("databseconnect.php");
mysqli_query($con ,"insert into offer_info(offer_name, offer_st_date, offer_ed_date, cat_type, offer_discount, reg_date) values ('$a', '$b', '$newdate', '$str', '$e', now() )") or die ("Query Error");

header("location:CreateOffer.php?st=1");
?>
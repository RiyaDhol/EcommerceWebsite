<?php session_start();
 $a = $_REQUEST['txt_usrname'];
 $b = $_REQUEST['txt_pass'];

 include("databseconnect.php");
 $sql="select * from customerinfo where custUserName='$a'";
 $rowUser=mysqli_query($con,"$sql");
//Day -2 Work
 if(mysqli_num_rows($rowUser)>0)
    {
        $row=mysqli_fetch_array($rowUser);
        if($row["custPass"]==$b)
        {
            header("location:chooseProductBuy.php");   
        }
    }
    else
    {
        header("location:newloginForm.php?resmsz=1");
    }

?>
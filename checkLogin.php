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
            if($row["custType"]=="user")
            {
                // Day 5 -- Logout --work
                $_SESSION["uname"] = $a;
                $_SESSION["utype"] = "user";
                 // end
                header("location:userChoice.php");
            }
            else 
            {
                // Day 5 -- Logout --work
                $_SESSION["uname"] = $a;
                $_SESSION["utype"] = "admin";
                // end
                header("location:adminChoice.php");
            }
        }
        else 
        {
            header("location:loginForm.php?resmsz=2");    
        }
    }
    else
    {
        header("location:loginForm.php?resmsz=1");
    }

?>
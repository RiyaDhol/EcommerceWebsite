<table border='1' width="80%" align='center'>
          <tr> <th width="100px"> S1. No </th> <th> Message Heading </th> <th>Recieved Date </th> <th> Sender Name</th></tr>
             <?php
               include("databseconnect.php");
               $usr = $_SESSION["uname"];
               $rsNews = mysqli_query($con , "select msz_id, msz_heading,sent_date,sender_name from message_info where reciever_name ='$usr' order by sent_date desc");
               $cnt =0;
               while($row=mysqli_fetch_array($rsNews)){
                 $cnt++;
                 $id = $row["msz_id"];
                 $hd = $row["msz_heading"];
                 $sn = $row["sender_name"];
                 $dt = $row["sent_date"];
                 echo("<tr>");
                 echo("<td>");
                 echo("$cnt");
                 echo("</td>");
                 echo("<td>");
                 if($_SESSION["utype"]=="admin")
                 {
                 echo("<a href='displayAdminMessagedetail.php?nid=$id'>");
                 }
                 else 
                 {
                    echo("<a href='displayUserMessagedetail.php?nid=$id'>");
                 }

                 echo("$hd");
                 echo("</a>");
                 echo("</td>");
                 echo("<td>");
                 echo("$dt");
                 echo("</td>");
                 echo("<td>");
                 echo("$sn");
                 echo("</td>");
                 echo("</tr>");

               }
             ?>
        </table>
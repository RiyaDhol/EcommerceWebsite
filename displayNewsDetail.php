<?php
  include('header.php');
?>

<div id="content">
   <table border='1' width="80%" align='center'>
    <tr> <th width="100px"> S1. No </th> <th> News Details </th></tr>

  <?php
  $x = $_REQUEST["nid"];
    include("databseconnect.php");
    $rsNews = mysqli_query($con , "select news_detail from news_info where news_id ='$x'");
    $cnt =0;
    while($row=mysqli_fetch_array($rsNews)){
      $cnt++;
      $hd = $row["news_detail"];
      echo("<tr>");
      echo("<td>");
      echo("$cnt");
      echo("</td>");
      echo("<td>");
      echo("$hd");
      echo("</td>");
      echo("</tr>");

    }
  
  ?>
  </table>
</div>

<?php
  include('footer.php');
?>
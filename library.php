<?php
  require_once("databseconnect.php");
  function displayTable($sql)
  {
    $con = $GLOBALS["con"];
    $rs = mysqli_query($con , $sql);
    $rc = mysqli_num_rows($rs);
    $cc = mysqli_num_fields($rs);
    echo("<div id ='myList' > ");
    echo("<table border ='1'>");
      echo("<tr>");
      echo("<th> S1. No</th>");
       for($i=1 ; $i <= $cc-1 ; $i++){
        echo("<th>");
        echo(mysqli_fetch_field_direct($rs , $i)->name);
        echo("</th>");
       }

      echo("</tr>");
      $cnt = 0;
      for($i=0; $i <= $rc-1 ; $i++){ 
        mysqli_data_seek($rs , $i);
        $cnt++;
        $row = mysqli_fetch_array($rs);
        $id = $row[0];
        echo("<tr>");
        echo("<td> $cnt </td>");
          for($j=1; $j <= $cc-1 ; $j++){ 
            echo("<td>");
            echo($row[$j]);
            echo("</td>");
            }
      }
    echo("</table>");
    echo("</div>");
  }

?>
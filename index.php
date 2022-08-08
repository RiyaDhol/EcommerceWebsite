<?php
  include('header.php');
?>
  <div id="content"> <!--Day 1 work-->
     <!--Day 5 work-->

     <div id="register">
      <br>
      <marquee> <a href="displayNews.php" id="newStyle"> News </a> </marquee>
     </div>
      <div id ="categoryDisplayArea"> 
        <?php
         if(isset($_REQUEST["cid"])){
          $parentid = $_REQUEST["cid"];
         }

         else 
         {
          $parentid =  0;
         }
         include('databseconnect.php');
         $rs= mysqli_query($con , "select * from Category_info where cat_parent_id = $parentid order by cat_dname");
             while($row=mysqli_fetch_array($rs)){
               echo("<div class='display'>");
               $img=$row["image_path"];
               $id = $row["cat_id"];
               echo("<a href='index.php?cid=$id'>");
               echo("<img src='.\\collections\\$img' class='displayimg' >");
               echo("<br> <br>");
               echo($row["cat_dname"]);
               echo("</a>");
               echo("</div>");
             }
             ?>
      </div> <!--End of CategoryDisplayArea-->
       <hr> 
      <div id ="itemDisplayArea"> 
      <?php
        if(isset($_REQUEST["cid"])){
         $parentid = $_REQUEST["cid"];
        }

        else 
        {
         $parentid =  0;
        }
        include('databseconnect.php');
        $rs= mysqli_query($con , "select * from item_info where parent_cat = $parentid order by item_name");
         while($row=mysqli_fetch_array($rs)){
          echo("<div class='itemdisplay'>");
          $img=$row["item_path"];
          $id = $row["item_id"];
          echo("<img src='.\\collections\\$img' class='displayimg'>");
          echo("<br> <br>");
          echo($row["item_name"]);
          echo("<br>");
          echo("<div class='itemdesc'>"."Description : ".$row["item_desc"]);
          echo("<br>");
          echo("Price : <s>".$row["item_rate"]."</s>");
          $dis = $row["item_disc"];

          $offerdis = 0;
          $rsOffer = mysqli_query($con , "select * from offer_info where now()>= offer_st_date and now()<=offer_ed_date ");

          while($rowOffer= mysqli_fetch_array($rsOffer)){
            $cats = $rowOffer["cat_type"];
            $catsarr = explode("-",$cats);

            if(in_array($parentid,$catsarr)){
              $offerdis =  $offerdis + $rowOffer["offer_discount"];
            }
          }

          $dis = $dis +  $offerdis ;

          $final = $row["item_rate"] - ($row["item_rate"] * $dis/100);
          echo("<br>");
          echo("Discounted Price : ".$final);
          echo("</div>");
          echo("<div class='buybtn'>");
          echo("<a href='checkAlreadyLoginBuy.php?productid=$id&price=$final'> Buy Now </a>");
          echo("</div>");
          echo("</div>");
         }
        ?>
      </div> <!--End of itemDisplayArea-->
  </div><!--End of content-->

<?php
  include('footer.php');
?>
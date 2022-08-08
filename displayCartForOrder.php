<?php
  include('header.php');
?>

<div id="content">
<br>
<table border='1' align='center' id='tabledesign'>
  <tr> <th> S1. No.</th> <th>Product Name </th> <th>Image </th> <th> Quantity </th> 
  <th>Rate </th> <th>Amount</th> <th> Status</th>
</tr>
  <?php
    include("databseconnect.php");
    $usr = $_SESSION['uname'];
    $cartdisplay = mysqli_query($con , "select * from cart_info , item_info where  item_info.item_id = cart_info.item_id and user_name = '$usr'");
    $count =0;
    $totalamt =0;
    while($row=mysqli_fetch_array($cartdisplay)){
      $count++;
      echo("<tr>");
      echo("<td>");
      echo($count);
      echo("</td>");
      echo("<td>");
      echo($row["item_name"]);
      echo("</td>");
      echo("<td>");
      $img = $row["item_path"];
      echo("<img src='.\\collections\\$img' width='100' height='100' border='1'");
      echo("</td>");
      echo("<td>");
      echo($row["item_quantity"]);
      echo("</td>");
      echo("<td>");
      echo($row["item_rate"]);
      echo("</td>");
      echo("<td>");
      $amt = $row["item_quantity"]*$row["item_rate"];
      echo($amt);
      $totalamt = $totalamt + $amt;
      echo("</td>");
      echo("<td>");
      $id = $row["cart_id"];
      echo("<a href='deleteItemFromCart.php?pid=$id'> Delete </a>");
      echo("</td>");
      echo("</tr>");
    }
    echo("<tr> <td colspan ='5' align='right'> <b>Total Amount : </b> </td> <td colspan ='2'> <b> $totalamt </b> </td> </tr>")
  ?>
</table>


<div id="placeOrder" >
  <a href="insertOrder.php?amnt=<?=$totalamt;?>"> Confirm Order</a>
</div>

</div>
<?php
  include('footer.php');
?>
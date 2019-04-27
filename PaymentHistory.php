<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
<style>

  table{
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #dddddd
    }
    tr{
      text-align: left;
    }
    td,th{
      border: 1px solid #dddddd;
      padding: 8px
    }
   tr:nth-child(even){
      background-color: lightgrey;
    }

  }
</style>
<div class="help">
<br>
<br>

<table>
  <tr>
    <th>Order ID</th>
    <th>Customer ID</th>
    <th>Order Total</th>
  </tr>

<?php
    $conn = mysqli_connect("localhost", "root","","datatech");
    if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }

    $sql = "SELECT * FROM customerorder";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["Order_ID"]."</td><td>".$row["Customer_ID"]."</td><td>".$row["Order_Total"]."</td></tr>";
      }
      echo "</table>";
    }
    else {
      echo "0 result";
    }

    $conn-> close();
?>
</table>

</div>
  </body>
</html>

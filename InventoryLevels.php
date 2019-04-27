<?php
  include_once 'includes/includes.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="">
    <meta charset="utf-8">
      <link rel="stylesheet" href="Stylesheet.css">
    <title></title>
  </head>

  <body>
<?php
$conn = mysqli_connect("localhost", "root","","datatech");
$sql = "SELECT * FROM inventory;";
$result = mysqli_query($conn, $sql);
$resutlCheck = mysqli_num_rows($result);

if ($resutlCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['Inventory_ID']."<br>";
  }
}
?>
  </body>
</html>

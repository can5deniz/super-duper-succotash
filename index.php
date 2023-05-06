<?php
include("config.php");
$query = $connect->query("SELECT * FROM fruits ");
?>

<table border="1">
  <tr>
    <td>Not</td>
    <td>Fruit Name</td>
    <td>Publisher Name</td>
  </tr>
  <?php
  $no = 1;
  while($row = $query->fetch_assoc()){
    echo "<tr>
      <td>$no</td>
      <td>{$row['name']}</td>
      <td>{$row['publisher']}</td>
    </tr>";
    $no++;
  }
  ?>
</table>

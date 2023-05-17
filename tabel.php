<?php

$file = fopen("date.csv", "r");
$data = array();

while (!feof($file)) {
    $data[] = explode(";", fgets($file));
}

fclose($file);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <a href="index.html" style="text-decoration: none;">
    <h1>Descubriendo Gran Canaria</h1>
  </a>
  <div style="display: flex; justify-content: center;">
    <a href="formula.html"><button>Nuevo Lugar que visitar</button></a>
    <a href="tabel.php"><button>Lugares que no me puedo perder</button></a>
  </div>
  <div class="container2">
    <h1 class="text3">Lugares que no me puedo perder</h1>
    <table>
      <thead>
        <tr>
          
          <th>Nombre del lugar</th>
          <th>Description</th>
          <th>Municipio</th>
          <th>Url con mas informacion</th>
          <th>URL de Google Maps</th>
          <th>Imagen</th>
        </tr>
      </thead>
      
      <tbody>
        <?php
        foreach ($data as $place) {
          
          echo "<tr>";
          echo "<td>$place[0]</td>";
          echo "<td>$place[1]</td>";
          echo "<td>$place[2]</td>";
          echo "<td><a href='$place[3]'>$place[3]</a></td>";
          echo "<td><a href='$place[4]'>$place[4]</a></td>";
          echo "<td><a href='imagini/".$place[5]."'target='_blank'><img src='imagini/".$place[5]."'width='200px'></a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>

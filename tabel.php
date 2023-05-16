<?php
$file = fopen("date.csv", "r"); // deschidem fisierul data.csv in modul de citire

// initializam array-ul de date
$data = array();

while(!feof($file)) {
  $data[] = explode(";",fgets($file));
}

/*
// citim fiecare linie din fisier pana ajungem la sfarsitul lui
while (($row = fgetcsv($file)) !== FALSE) {
    $data[] = $row; // adaugam linia curenta (sub forma unui array) la array-ul de date
}
*/

fclose($file); // inchidem fisierul

?>
<!DOCTYPE html>
<html>
<head>
	<title>Informacion</title>
	<link rel="icon" type="image/x-icon" href="./1683022998.ico">
  <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
    <style>
		body {
			background-color: white;
			margin: 0;
			padding: 0;
			padding-top: 50px;
			padding-bottom: 50px;
		}
		h1 {
			font-family: "Times New Roman", Times, serif;
			color: rgb(0, 0, 0);
			background-color: rgb(255, 255, 255);
			text-align: center;
			padding: 20px;
			margin: 0;
		}
		button {
			font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			color: black;
			background-color: transparent;
			border: none;
			cursor: pointer;
			margin: 10px;
			padding: 10px 20px;
			transition: color 0.2s, background-color 0.2s;
		}
		button:hover {
			color: white;
			background-color: black;
		}
        .image-container {
           display: flex;
           justify-content: center;
   }
       a{
		color: black;
		text-decoration: none;
		margin-top: 20px;
		font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			color: black;
			background-color: transparent;
			border: none;
			cursor: pointer;
			margin: 10px;
			padding: 10px 20px;
			transition: color 0.2s, background-color 0.2s;
      
	   }

	   a.linkplace:hover{
		width: 240px;
		height: 30px;
		background-color: black;
		color: white;
	   }
       
  table thead th {
    background-color: #000000;
    color: white;
    font-size: 18px;
    padding: 10px;
    text-align: center;
  }
  
  
  table tbody td {
    background-color: #ffffff;
    color: #444444;
    font-size: 16px;
    padding: 10px;
    text-align: center;
  }
  
 
  table tbody td img {
    
    max-width: 80px;
  }
  
 
  table tbody tr:nth-child(even) {
    background-color: #f8f8f8;
  }
  table{
    margin: auto;
  }
  .okb{
           font-size: 35px;
           font-family: 'Times New Roman', Times, serif;
           text-align: center;
           color:black;
        }
		body {
			background-color: white;
			margin: 0;
			padding: 0;
			padding-top: 50px;
			padding-bottom: 50px;
		}
		h1 {
			font-family: "Times New Roman", Times, serif;
			color: white;
			background-color: black;
			text-align: center;
			padding: 20px;
			margin: 0;
		}
		button {
			font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			color: black;
			background-color: transparent;
			border: none;
			cursor: pointer;
			margin: 10px;
			padding: 10px 20px;
			transition: color 0.2s, background-color 0.2s;
		}
		button:hover {
			color: white;
			background-color: black;
		}
        .image-container {
           display: flex;
           justify-content: center;
        }
        .caption {
  display: flex;
  justify-content: center;
  margin-top: 10px;
  font-size: 14px;
  font-family: 'Times New Roman', serif;
  color: black;
}

	</style>
</head>
<body>
  <h1>Descubriendo Gran Canaria</h1>
	<div style="display: flex; justify-content: center;">
        <div class="button-container">
            <button onclick="location.href='formula.html'">Nuevo Lugar que visitar</button>
			 <button onclick="location.href='tabel.php'">Lugares que no me puedo perder</button>
          </div>
	</div>
   <h1>Places I can't miss</h1>
      <table>
        <thead>
          <tr>
            <th>Visitado</th>
            <th>Municipio</th>
            <th>Description</th>
            <th>Name</th>
            <th>Url</th>
            <th>Location maps</th>
            <th>Photo</th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $row) {
          
            //echo "<td><input type='checkbox' id='" . $row[1] . "' name='" . $row[1] . "' value='" . $row[1] . "'></td>";
            echo "<td><input type='checkbox' id='visitado' name='visitado' value='0'></td>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td><a href='" . $row[3] . "'>Página Oficial de " . $row[3] . "</a></td>";
            
            if(isset($row[5])) {
              echo "<td><a href='" . $row[4] . "'><i class='fa-duotone fa-map-location-dot fa-bounce' style=' --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; ' ></i></a></td>";
            } else {
              echo "<td></td>";
            }
            
            if (isset($row[6])) {
              echo "<td><img class='pozica' src='uploads/" . $row[6] . "' alt='" . $row[6] . "'></td>";
          } else {
              echo "<td></td>";
          }

          echo "</tr>";
        }
        ?>

          </tbody>
        </tbody>
      </table>
      <div class="okb">
      <input type="submit" value="Submit" class="noo"></div>
      <footer>
        <p>&copy; Mocanu Lorena</p>
      </footer>
</body>
</html>
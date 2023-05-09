<html><
<body>
  
<h1>Receiving data from the form</h1>
<?php
$arrayErrors = array();
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $namePlace = $_POST["number"];
  $descriptionPlace = $_POST["descriere"];
  $municipioText = $_POST["municipio"];
  $informationUrl = $_POST["url"];
  $infoGoogle = $_POST["gurl"];
  
  //echo "<br>The name of place is $namePlace" ;
  //echo "<br>About this place we know $descriptionPlace";
  //echo "<br>The selected city is $municipioText";
  //echo "<br>Information about the location $informationUrl";
  //echo "<br>Here you can find the location $infoGoogle";
  
  
  if (strlen($informationUrl) > 100) {
    $errors[] = "El campo 'URL con más información' no debe tener más de 100 caracteres.";
  }

  if (strlen($infoGoogle) > 100) {
    $errors[] = "El campo 'URL con enlace a Google Maps' no debe tener más de 100 caracteres.";
  }

  // afisarea erorilor, daca exista
  if (!empty($errors)) {
    echo "<p>No se han podido registrar los datos enviados. Se han detectado los siguientes errores:</p>";
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul>";
    echo "<p>Por favor, vuelva a intentarlo.</p>";
  } else {
    // afisarea datelor primite din formular, daca nu exista erori
    echo "<p>Los siguientes datos se van a registrar:</p>";
    echo "<ul>";
    echo "<li>Nombre del lugar: $namePlace</li>";
    echo "<li>Descripción: $descriptionPlace</li>";
    echo "<li>Ciudad: $municipioText</li>";
    echo "<li>URL con más información: $informationUrl</li>";
    echo "<li>URL con enlace a Google Maps: $infoGoogle</li>";
    echo "</ul>";
    echo "<p>Gracias por enviar sus datos.</p>";
  }
}
?>

<a href="formula.html">Volver al formulario</a>

</body>
</html>
 
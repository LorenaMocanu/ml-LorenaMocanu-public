<html>

<body>


<h1>Receiving data from the form</h1>


<?php
$arrayErrors = array();

// Recibimos los datos enviados a través del formulario
$namePlace = $_POST["number"];
$descriptionPlace = $_POST["descriere"];
$municipioText = $_POST["municipio"];
$informationUrl = $_POST["url"];
$infoGoogle = $_POST["gurl"];
$image = $_POST["input-file"];

// Validamos los datos
if ($namePlace == "") {
    $arrayErrors[] = "<li>ERROR: The name field is empty";
}
if ($descriptionPlace == "") {
    $arrayErrors[] = "<li>ERROR: The description field is empty";
}
if ($municipioText == "") {
    $arrayErrors[] = "<li>ERROR: The town field is empty";
}
if ($informationUrl == "") {
    $arrayErrors[] = "<li>ERROR: The URL (info) field is empty";
}
if ($infoGoogle == "") {
    $arrayErrors[] = "<li>ERROR: The URL (Google Maps) field is empty";
}
if ($image == "") {
    $arrayErrors[] = "<li>ERROR: The image field is empty";
}

if (strlen($namePlace) > 20) {
    $arrayErrors[] = "<li>ERROR: The size of the name field greater than 20 characters";
}
if (strlen($descriptionPlace) > 100) {
    $arrayErrors[] = "<li>ERROR: The size of the description field greater than 100 characters";
}
if (strlen($informationUrl) > 100) {
    $arrayErrors[] = "<li>ERROR: The size of the URL (info) field greater than 100 characters";
}
if (strlen($infoGoogle) > 100) {
    $arrayErrors[] = "<li>ERROR: The size of the URL (Google Maps) field greater than 100 characters";
}
if (strlen($image) > 100) {
  $arrayErrors[] = "<li>ERROR: The size of the URL (Google Maps) field greater than 100 characters";
}



// Mostramos los diferentes campos
if (sizeof($arrayErrors) > 0)
{
    echo "<H2>Detected some errors</H2>";    
    echo "<ul>";
    foreach($arrayErrors as $errorMessage)
    {
        echo $errorMessage;
    }
    echo "</ul>";
}
else
{
    echo "<H2>The data is OK. We are goint to insert into the database</H2>";
    echo "<ul>";
    echo "<li>The name of the place is...$namePlace";
    echo "<li>The description of the place is...$descriptionPlace";
    echo "<li>The URL with info of the place is...$informationUrl";
    echo "<li>The URL with the map of the place is...$infoGoogle";
    echo "<li>The image name is...$image";
    echo "</ul>";
}

?>
<a href="formula.html">Volver al formulario</a>
</body>

</html>
 
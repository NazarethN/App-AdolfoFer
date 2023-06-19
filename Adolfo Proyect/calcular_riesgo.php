<?php
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$paisNacimiento = $_POST['pais_nacimiento'];
$paisResidencia = $_POST['pais_residencia'];
$profesion = $_POST['profesion'];
$edad = $_POST['edad'];
$ingresos = $_POST['ingresos'];
$pep = $_POST['pep'];

$puntosPaisNacimiento = ($paisNacimiento === 'Panamá') ? 100 : 200;
$puntosPaisResidencia = ($paisResidencia === 'Panamá') ? 100 : 200;

if ($profesion === 'Abogado') {
  $puntosProfesion = 100;
} elseif ($profesion === 'Ingeniero') {
  $puntosProfesion = 200;
} elseif ($profesion === 'Médico') {
  $puntosProfesion = 300;
} elseif ($profesion === 'Contador') {
  $puntosProfesion = 400;
} else {
  $puntosProfesion = 500;
}

if ($edad < 25) {
  $puntosEdad = 100;
} elseif ($edad >= 25 && $edad <= 55) {
  $puntosEdad = 200;
} else {
  $puntosEdad = 300;
}

if ($ingresos < 20000) {
  $puntosIngresos = 100;
} elseif ($ingresos >= 20000 && $ingresos <= 75000) {
  $puntosIngresos = 200;
} else {
  $puntosIngresos = 300;
}

$puntosPep = ($pep === 'Sí') ? 200 : 100;

$pesoPaisNacimiento = 0.1;
$pesoPaisResidencia = 0.1;
$pesoProfesion = 0.2;
$pesoEdad = 0.1;
$pesoIngresos = 0.2;
$pesoPep = 0.2;

$riesgo = ($puntosPaisNacimiento * $pesoPaisNacimiento) +
          ($puntosPaisResidencia * $pesoPaisResidencia) +
          ($puntosProfesion * $pesoProfesion) +
          ($puntosEdad * $pesoEdad) +
          ($puntosIngresos * $pesoIngresos) +
          ($puntosPep * $pesoPep);

if ($pep === 'Sí') {
  $nivelRiesgo = 'Alto';
} elseif ($riesgo < 1200) {
  $nivelRiesgo = 'Bajo';
} elseif ($riesgo >= 1201 && $riesgo <= 1400) {
  $nivelRiesgo = 'Medio';
} else {
  $nivelRiesgo = 'Alto';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Resultado del Perfil de Riesgo</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Resultado del Perfil de Riesgo</h1>
  <p>Nombre: <?php echo $nombre; ?></p>
  <p>Género: <?php echo $genero; ?></p>
  <p>País de Nacimiento: <?php echo $paisNacimiento; ?></p>
  <p>País de Residencia: <?php echo $paisResidencia; ?></p>
  <p>Profesión: <?php echo $profesion; ?></p>
  <p>Edad: <?php echo $edad; ?></p>
  <p>Nivel de Ingresos: <?php echo $ingresos; ?></p>
  <p>PEP: <?php echo $pep; ?></p>
  <p>Puntaje de Riesgo: <?php echo $riesgo; ?></p>
  <p>Nivel de Riesgo: <?php echo $nivelRiesgo; ?></p>
</body>
</html>

<?php
/*====================================================================+
|| # Formulario PHP - Desarrollo Web 2016 - Universidad de Valparaíso
|+====================================================================+
|| # Copyright © 2016 Miguel González Aravena. All rights reserved.
|| # https://github.com/MiguelGonzalezAravena/FormularioPHP
|+====================================================================*/

// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

// Variables
$enviado = isset($_POST['enviado']) ? (int) $_POST['enviado'] : 0;
$contenido = isset($_POST['contenido']) ? (int) $_POST['contenido'] : 0;
$region = isset($_POST['region']) ? (int) $_POST['region'] : 0;
$area1 = isset($_POST['Ciencia']) ? (int) $_POST['Ciencia'] : 0;
$area2 = isset($_POST['Deportes']) ? (int) $_POST['Deportes'] : 0;
$area3 = isset($_POST['Pintura']) ? (int) $_POST['Pintura'] : 0;
$area4 = isset($_POST['Videos']) ? (int) $_POST['Videos'] : 0;
$fecha = isset($_POST['fecha']) ? Filtro($_POST['fecha']) : '';
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$apellido = isset($_POST['apellido']) ? Filtro($_POST['apellido']) : '';
$correo = isset($_POST['email']) ? Filtro($_POST['email']) : '';
$pagina = isset($_POST['direccionweb']) ? Filtro($_POST['direccionweb']) : '';
$color = isset($_POST['color']) ? Filtro($_POST['color']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$error = '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Formulario en PHP">
  <meta name="keywords" content="html, bootstrap, php, formulario, desarrollo, web">
  <meta name="author" content="Sebastian Rubio">
  <title>Formulario enviado</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
  <span style="padding-top: 10px;"></span>
<?php
// Mostrar contenido
if($enviado == 1 && $contenido == 1) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  exit;
} else if(empty($nombre)) {
  $error = 'Por favor, ingrese su nombre.';
} else if(empty($apellido)) {
  $error = 'Por favor, ingrese su apellido.';
} else if(empty($fecha)) {
  $error = 'Por favor, ingrese su fecha nacimiento.';
} else if(empty($sexo)) {
  $error = 'Por favor, seleccione su foto de perfil.';
} 

// Vista de error
if(!empty($error)) {
?>
<div class="alert alert-info">
  <i class="glyphicon glyphicon-info-sign"></i>
  <?php echo $error; ?>
</div>
<a href="./" class="btn btn-warning">
  <i class="glyphicon glyphicon-chevron-left"></i>
  Volver
</a>
<?php
// Vista de éxito
} else {
?>
  <h3>¡Formulario enviado satisfactoriamente!</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      <p>Muchas Gracias <b><?php echo $nombre; ?>,<?php echo $apellido; ?></b>,</p>
      <p>La siguiente informacion ha sido registrada <b>
      </p>
      <p>
        Tu fecha de nacimiento es  es: <b><?php echo $fecha; ?></b>
      </p>
      <p>
        Tu sexo es: <b><?php echo ($sexo == 'm' ? 'Masculino' : 'Femenino'); ?></b>
      </p>
      <p>
        Tu region es: <b><?php echo $region; ?></b>
      </p>
      <p>
        Tu area de interes es: <b><?php echo $region; ?></b>
      </p>
      <p>
        Tu Pagina personal es: <br />
          <?php echo $pagina; ?>
      </p>
      <p>
        Tu correo es: <br />
          <?php echo $correo; ?>
      </p>
      <p>
        Tu Color favorito es: <br />
          <?php echo $color; ?>
      </p>
      <?php
// Mostrar contenido
if($area1 == 1){ echo $area1?> }
      <p>
       </p>
      <?php
// Mostrar contenido
if($area2 == 1){ echo $area2?> }
      <p>
       </p>
      <?php
// Mostrar contenido
if($area3 == 1){ echo $area3?> }
      <p>
       </p>
      <?php
// Mostrar contenido
if($area4 == 1){ echo $area4?> }
      <p>

        
    </div>
    <div class="panel-footer">
      <div class="text-right">
        <a href="./" class="btn btn-primary">
          <i class="glyphicon glyphicon-chevron-left"></i>
          Volver
        </a>
      </div>
    </div>
  </div>
<?php } ?>
  <!-- Pie de página -->
  <footer>
    <div class="text-center">
      <i class="glyphicon glyphicon-leaf"></i>
      Desarrollado por <a href="https://github.com/MiguelGonzalezAravena" target="_blank">Miguel González Aravena</a>
    </div>
  </footer>
</div>
</body>
</html>
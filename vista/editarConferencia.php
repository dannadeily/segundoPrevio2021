<?php
require_once '../controlador/Conferencias.php';
$conferencia=new Conferencias();
$listar=$conferencia->listar($_GET['id']);
$count=count($listar);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vista/css/listarConferencia.css">
    <title>listar conferencia</title>
  </head>
  <body>
    <?php include "../vista/header.php" ?>
    <br>
<table>


    <tr>  <th colspan="11"> <h1>editar conferencias</h1> </th> </tr>
    <form class="" action="../controlador/?con=Conferencias&fun=update" method="post">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Abreviaturas</th>
      <th>Descripcion</th>
      <th>Objetivo</th>
      <th>fecha de inicio</th>
      <th>fecha fin</th>
    </tr>
    <tr>
      <td>
        <input type="hidden" name="id" value="<?php echo $listar[0]->id?>">
      </td>
      <td>
        <input type="text" name="nombre" value="<?php echo $listar[0]->nombre?>">
      </td>
      <td>
        <input type="text" name="abreviatura" value="<?php echo $listar[0]->abreviatura?>">
      </td>
      <td>
        <input type="text" name="descripcion" value="<?php echo $listar[0]->descripcion?>">
      </td>
      <td>
        <input type="text" name="objetivo" value="<?php echo $listar[0]->objetivo?>">
      </td>
      <td>
        <input type="date" name="fechaInicio" value="<?php echo $listar[0]->fechaInicio?>">
      </td>
      <td>
        <input type="date" name="fechaFin" value="<?php echo $listar[0]->fechaFin?>">
      </td>
    </tr>



      <tr>
        <th>fecha de pago</th>
        <th>fecha de enviar articulo</th>
        <th>fecha respuesta</th>
        <th>valor inscripcion</th>
      </tr>
      <td>
        <input type="date" name="fechaPago" value="<?php echo $listar[0]->fechaPago?>">
      </td>
      <td>
        <input type="date" name="fechaEnviar" value="<?php echo $listar[0]->fechaEnvioArticulos?>">
      </td>
      <td>
        <input type="date" name="fechaRespuesta" value="<?php echo $listar[0]->fechaRespuesta?>">
      </td>
      <td>
        <input type="text" name="valorInscripcion" value="<?php echo $listar[0]->valorInscripcion?>">
      </td>
      </tr>
</table>
        <input type="submit" name="guardar" value="guardar">


  </form>



  </body>
</html>

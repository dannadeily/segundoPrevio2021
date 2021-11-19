<?php
require_once '../controlador/Conferencias.php';
$conferencia=new Conferencias();
$listar=$conferencia->listar();
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


    <tr>  <th colspan="11"> <h1>listado de conferencias</h1> </th> </tr>

    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Abreviaturas</th>
      <th>Descripcion</th>
      <th>Objetivo</th>
      <th>fecha de inicio</th>
      <th>fecha fin</th>
      <th>fecha de pago</th>
      <th>fecha de enviar articulo</th>
      <th>fecha respuesta</th>
      <th>valor inscripcion</th>
    </tr>

<?php for ($i=0; $i <$count ; $i++) { ?>
     <tr>
       <td><?php echo $listar[$i]->id?></td>
       <td><?php echo $listar[$i]->nombre ?></td>
       <td><?php echo $listar[$i]->abreviatura ?></td>
       <td><?php echo $listar[$i]->descripcion ?></td>
       <td><?php echo $listar[$i]->objetivo?></td>
       <td><?php echo $listar[$i]->fechaInicio ?></td>
       <td><?php echo $listar[$i]->fechaFin?></td>
       <td><?php echo $listar[$i]->fechaPago ?></td>
       <td><?php echo $listar[$i]->fechaEnvioArticulos ?></td>
       <td><?php echo $listar[$i]->fechaRespuesta ?></td>
       <td><?php echo $listar[$i]->valorInscripcion ?></td>
       <td><a href="../controlador/?con=Conferencias&fun=delete&id=<?php echo  $listar[$i]->id ?>"><button type="button" name="button">borrar</button>           </a>  </td>
       <td>   <a href="editarConferencia.php?id=<?php echo  $listar[$i]->id ?>">      <button type="button" name="button"> editar</button>  </a>     </td>    
    </tr>

<?php } ?>
     </table>
  </body>
</html>

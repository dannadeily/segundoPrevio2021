<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vista/css/listarConferencia.css">
    <title>listar conferencia</title>
  </head>
  <body>
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


    <?php

    $conn=new mysqli("localhost","root","","gestionconferencia");

    if($conn->connect_errno){

      echo "no hay conexion: (". $conn->connect_errno .")".$conn->connect_error;
    }

      $sql="select * from conferencia";
      $resultado=mysqli_query($conn,$sql);

      while ($mostrar=mysqli_fetch_array($resultado))
      {
     ?>
     <tr>
       <td><?php echo $mostrar['id'] ?></td>
       <td><?php echo $mostrar['nombre'] ?></td>
       <td><?php echo $mostrar['abreviatura'] ?></td>
       <td><?php echo $mostrar['descripcion'] ?></td>
       <td><?php echo $mostrar['objetivo'] ?></td>
       <td><?php echo $mostrar['fechaInicio'] ?></td>
       <td><?php echo $mostrar['fechaFin'] ?></td>
       <td><?php echo $mostrar['fechaPago'] ?></td>
       <td><?php echo $mostrar['fechaEnvioArticulos'] ?></td>
       <td><?php echo $mostrar['fechaRespuesta'] ?></td>
       <td><?php echo $mostrar['valorInscripcion'] ?></td>

     <?php } ?>

     </table>
  </body>
</html>

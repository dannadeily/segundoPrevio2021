<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vista/css/registrarConferencia.css">
    <title>Registrar Producto</title>
  </head>
  <body>

    <?php include "../vista/header.php" ?>
    <br>

    <section id="container">

      <div class="box2">
      <link rel="stylesheet" href="../vista/css/registrarProducto.css">
        <h1>Registrar conferencia</h1>

      </div>

        <form class="formulario" action="../controlador/?con=productoControlador&fun=registrar" method="POST">

          <label for="nombre">Nombre</label>
          <input type="text" name="nombre"  id="nombre" placeholder="ingrese el nombre">
<br>
          <label for="abreviaturas">Abreviatura</label>
          <input type="text" name="abreviatura"  id="abreviaturas"  placeholder="ingrese abreviaturas">
<br>
          <label for="descripcion">Descripcion</label>
          <input type="text" name="descripcion"  id="descripcion"  placeholder="descripcion">
<br>
          <label for="objetivo">Objetivo</label>
          <input type="text" name="objetivo"  id="objetivo" placeholder="objetivo">
<br>
          <label for="fechaInicio">fecha de incio</label>
          <input type="date" name="fechaInicio"  id="fechaInicio"  placeholder="ingrese la fecha de inicio">
<br>
          <label for="fechaFin">fecha de fin</label>
          <input type="date" name="fechaFin"  id="fechaFin"  placeholder="ingrese la fecha de fin">
          <br>
          <label for="fechaPago">fecha de pago</label>
          <input type="date" name="fechaPago"  id="fechaPago"  placeholder="ingrese la fecha de pago">
          <br>
          <label for="fechaEnviar">fecha de enviar articulos</label>
          <input type="date" name="fechaEnviar"  id="fechaEnviar"  placeholder="ingrese la fecha de enviar articulos">
          <br>
          <label for="fechaRespuesta">fecha respuesta</label>
          <input type="date" name="fechaRespuesta"  id="fechaRespuesta"  placeholder="ingrese la fecha de respuesta">
          <br>
          <label for="valorInscripcion">Valor inscripcion</label>
          <input type="text" name="valorInscripcion"  id="valorInscripcion"  placeholder="ingrese el valor de inscripcion">
<br>
<br>
          <input type="submit" name="enviar" value="enviar">
        </form>

    </section>

  </body>
</html>

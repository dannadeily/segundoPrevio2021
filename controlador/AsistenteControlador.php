<?php
require '../modelo/ConferenciasModelo.php';

/**
 *
 */

class AsistenteControlador
{

  private $model;

  function __construct()
  {
    $this->model=new AsistenteModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregarAsistente()
  {
    if (isset($_POST)) {
    $asistente=array('tipoDocumento' =>$_POST['tipoDocumento'] ,
    'numeroDocumento' =>$_POST['numeroDocumento'] ,
    'apellido' =>$_POST['apellido'] ,
    'nombre' =>$_POST['nombre'] ,
    'email' =>$_POST['email'] ,
    'institucion' =>$_POST['institucion'] ,
    'pais' =>$_POST['pais'] ,
    'ciudad' =>$_POST['ciudad'] ,
    'password' =>$_POST['password']
    );

  $this->model->agregarAsistente($asistente);
  header("location:../vista/listarConferencia.php");
}else {

  header("location:../vista/listarConferencia.php");
}
}

public function eliminarAsistente($id='')
{
  if ($_GET) {
    $id=$_GET['id'];
      $this->model->eliminarAsistente($id);
        header("location:../vista/listarConferencia.php");
  }else {
      header("location:../vista/listarConferencia.php");
  }
}

  public function update($asistente=array()){
    if (isset($_POST)) {
    $asistente=array(
      'tipoDocumento' =>$_POST['tipoDocumento'] ,
      'numeroDocumento' =>$_POST['numeroDocumento'] ,
      'apellido' =>$_POST['apellido'] ,
      'nombre' =>$_POST['nombre'] ,
      'email' =>$_POST['email'] ,
      'institucion' =>$_POST['institucion'] ,
      'pais' =>$_POST['pais'] ,
      'ciudad' =>$_POST['ciudad'] ,
      'password' =>$_POST['password']
  );
    $this->model->update($asistente);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}










?>

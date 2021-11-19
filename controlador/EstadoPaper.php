<?php
require '../modelo/EstadoPaperModelo.php';

/**
 *
 */

class EstadoPaperControlador
{

  private $model;

  function __construct()
  {
    $this->model=new EstadoPaperModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregar()
  {
    if (isset($_POST)) {
    $estadoPaper=array('id' =>$_POST['id'] ,
    'nombre' =>$_POST['nombre'],
    'descripcion' =>$_POST['descripcion'],
    'idPaper' =>$_POST['idPaper'],
    'idTopicoEvento' =>$_POST['idTopicoEvento']

    );

  $this->model->agregar($estadoPaper);
  header("location:../vista/listarConferencia.php");
}else {

  header("location:../vista/listarConferencia.php");
}
}

public function eliminar($id='')
{
  if ($_GET) {
    $id=$_GET['id'];
      $this->model->eliminar($id);
        header("location:../vista/listarConferencia.php");
  }else {
      header("location:../vista/listarConferencia.php");
  }
}

  public function update($estadoPaper=array()){
    if (isset($_POST)) {
    $estadoPaper=array(
      'id' =>$_POST['id'] ,
      'nombre' =>$_POST['nombre'],
      'descripcion' =>$_POST['descripcion'],
      'idPaper' =>$_POST['idPaper'],
      'idTopicoEvento' =>$_POST['idTopicoEvento']

  );
    $this->model->update($estadoPaper);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}
?>

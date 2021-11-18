<?php
require '../modelo/ConferenciasModelo.php';

/**
 *
 */
class Conferencias
{

  private $model;

  function __construct()
  {
    $this->model=new ConferenciasModelo();
  }
  public function listar()
  {
  return   $this->model->listar();
  }
}









?>

<?php
abstract class Model{
  //atributos
  private static  $db_host='localhost';
  private static  $db_user='root';
  private static  $db_password='';
  //private static
  protected static $db_name='gestionconferencia';
  private static  $db_charset='utf8';
  protected $connection;
  protected $query;
  protected  $rows=array();
  private function db_open()
  {
    try {
      $this->connection=new PDO('mysql:host='.self:: $db_host.';dbname='.self::$db_name.'',self::$db_user,self::$db_password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->connection->exec("SET CHARACTER SET ".self::$db_charset."");
    } catch (Exception $e) {
    echo ($e->getLine());
    die($e->getMessage());

    }
  return $this->connection;
  }
  private function db_close()
  {
  $this->connection=null;
  }
  protected function set_query()
  {
    $datos=$this->db_open()->prepare($this->query);
    $datos->execute();
    $this->db_close();
  }
  protected function get_query()
  {
    $datos=$this->db_open()->prepare($this->query);
    $datos->execute(array());
    while ($filas=$datos->fetch(PDO::FETCH_OBJ)) {
      $this->rows[]=$filas;
    }
    $datos=null;
    $this->db_close();
    return $this->rows;
  }
}


 ?>

<?php
abstract class Model{
  //atributos
  private static  $db_host='localhost';
  private static  $db_user='root';
  private static  $db_password='';
  //private static
  protected $db_name;
  private static  $db_charset='utf8';
  protected $connection;
  protected $query;
  protected  $rows=array();

  //metodo para conectar a la base de datos
  private function db_open()
  {

    try {

      //revisar que funcione la conexion
      //acomodar con las varieables ya definidas
      $this->connection=new PDO('mysql:host=localhost;dbname=gestionconferencia','root','');
      $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->connection->exec("SET CHARACTER SET UTF8");

    } catch (Exception $e) {
    echo ($e->getLine());
    die($e->getMessage());

    }
  return $this->connection;
  }

  //cerrar conexion con la base de datos
  private function db_close()
  {
  $this->connection=null;
  }
//establecer un query simple(insert,update,delete)AFECTA
  protected function set_query()
  {
    $datos=$this->db_open()->prepare($this->query);
    $datos->execute();
    $this->db_close();
  }
  //OBTENER RESULTADO DE UN QUERY
  protected function get_query()
  {

    $datos=$this->db_open()->prepare($this->query);
    $datos->execute(array());
    //cuentas las filas devuletas de una consulta
    //$datos->rowCount();
    while ($filas=$datos->fetch(PDO::FETCH_OBJ)) {
      $this->rows[]=$filas;
    }
    //cierro la consulta, debo revisarla por que no crreo que cierre asi
    $datos=null;
    $this->db_close();

    return $this->rows;
  }
}


 ?>

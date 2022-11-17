<?php
class Modelo{
    private $Modelo;
    private $db;
    private $data;
    public function __construct(){
        $this->Modelo = array();
        $this->db=new mysqli("localhost","root","","desarrollo_web");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,". $data .")";
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }
    public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
        echo("<script>console.log('PHP: ".$consul."');</script>");
            $resu=$this->db->query($consul);
            while($filas = mysqli_fetch_all($resu, MYSQLI_ASSOC)) {
                $this->data[]=$filas;
            }
            return $this->data;
        } 
    public function actualizar($tabla, $data, $condicion){       
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
}
?>
<?php
   
class Config{
    
    public $configuracion =  array('direccion'=>'mysql:host=localhost','usuario'=>'root','password'=>'','baseDeDatos'=>'pawtp4');
    
    public function getConf(){
        return $this -> configuracion;
    }
}
    
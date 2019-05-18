<?php
   
class Config{
    
    public $configuracion =  array('direccion'=>'localhost','usuario'=>'root','password'=>'','baseDeDatos'=>'pawtp4');
    
    public function getConf(){
        return $this -> configuracion;
    }
}
    
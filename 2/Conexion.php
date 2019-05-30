<?php

class Conexion{
    
    public $connect;
    
    public function __construct($config){
        $this -> connect = new PDO($config['direccion'].';dbname='.$config['baseDeDatos'],$config['usuario'],$config['password']);
    }
}
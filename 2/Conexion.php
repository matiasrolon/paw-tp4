<?php

class Conexion{
    
    public $connect;
    
    public function __construct($config){
        $this -> connect = mysqli_connect($config['direccion'],$config['usuario'],$config['password'],$config['baseDeDatos']);
    }
}
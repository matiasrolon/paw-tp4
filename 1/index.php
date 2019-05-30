<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PAW TP4</title>
</head>
<body>
    <h1>Punto 1</h1>
    
    <?php
    
     
    $baseDeDatos = "pawtp4";
    $password = "";
    $usuario = "root";
    $direccion = "mysql:host=localhost";
    $conexion = new PDO($direccion.';dbname='.$baseDeDatos, $usuario, $password);
    
    if(!$conexion){
        echo "Error de conexión" ;
        
    }
    else{
    echo "la conexión a la base de datos se genero correctamente ";
    }
    
    phpinfo();
   
    
    ?>
    
    
</body>
</html>
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
    $direccion = "localhost";
    $conexion = mysqli_connect($direccion,$usuario,$password,$baseDeDatos);
    
    if(!$conexion){
        echo "Error de conexión" ;
        
    }
    else{
    echo "la conexión a la base de datos se genero correctamente " . mysqli_get_host_info($conexion) . PHP_EOL;
    }
    
    phpinfo(8);
    mysqli_close($conexion);
    
    ?>
    
    
</body>
</html>
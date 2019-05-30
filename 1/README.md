<p><b> 1) Instale  el  Sistema  Gestor  de  Bases  de  Datos  MySQL  y  las  extensiones  necesarias   para  poder 
interactuar  con  la  misma  desde  PHP.  Documente  brevemente  los  pasos  realizados  y  como 
verificó que el driver se instaló correctamente (vía phpinfo y vía un script de prueba).</b><br><br>
  
Se instalo el Sistema Gestor de Base de Datos MySQL versión 5.7.24. Para poder interactuar con la misma desde PHP se utilizo PDO. La conexión se logra mediante  new PDO($direccion.';dbname='.$baseDeDatos, $usuario, $password); y se puede observar utilizando phpinfo(), en el modulo PDO, si el driver se instalo correctamente. Debe figurar mysql entre los PDO driver.<br><br></p>
![alt phpinfo](https://github.com/MatiasRolon/paw-tp4/blob/master/1/phpinfo.png)

### Ejecución
<p>1-Se debe crear Base de Datos ejecutando el SQL que se encuentra en la carpeta SQL.<br>
  2-Se debe ejecutar el comando php -S localhost:puerto ubicado en la carpeta que contiene el archivo index.php.<br>
  3-Luego ingresar a http://localhost:puerto

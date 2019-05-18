<p><b> 1) Instale  el  Sistema  Gestor  de  Bases  de  Datos  MySQL  y  las  extensiones  necesarias   para  poder 
interactuar  con  la  misma  desde  PHP.  Documente  brevemente  los  pasos  realizados  y  como 
verificó que el driver se instaló correctamente (vía phpinfo y vía un script de prueba).<br><br>
  
Se instalo el Sistema Gestor de Base de Datos MySQL versión 5.7.24. Para poder interactuar con la misma desde PHP se utilizo la extensión MySQLi. La conexión se logra mediante  mysqli_connect($direccion,$usuario,$password,$baseDeDatos); y se puede observar utilizando phpinfo(), en el modulo mysqli, si la conexión se realizo correctamente figura al menos un 1 en active links.<br>

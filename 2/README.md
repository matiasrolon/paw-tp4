<p><b> 2) Genere  un  objeto  que  construya  y  gestione  la  conexión  a  la  base  de  datos.  El  objeto  debe 
permitir vía constructor la provisión de los datos de acceso. Los datos de acceso deben estar en 
un  archivo  de  configuración  específico  y  fuera  del  control  de  versiones.  Documentar  este 
mecanismo de forma adecuada.</b><br><br>
 
Se creo el objeto Conexion que se encargara de gestionar la conexión a la base de datos. Este objeto recibira los parametros que se encuentran en config.php para poder costruir la conexión con la base de datos. La ejecución de la misma se realiza utilizando la extensión MySQLi y se realiza dentro de index.php.
<br><br></p>


### Ejecución
<p>1-Se debe crear Base de Datos ejecutando el SQL que se encuentra en la carpeta SQL.<br> 
  2-Se debe ejecutar el comando php -S localhost:puerto ubicado en la carpeta que contiene el archivo index.php.<br>
  3-Luego ingresar a http://localhost:puerto

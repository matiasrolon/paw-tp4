# Consideraciones

## Instalación

 - Clonar el repositorio
 - Crear un schema de base de datos con algun cliente MySQL.
 - Ejecutar los scripts de la carpeta `sql/` en orden para crear la bd y sus tablas.
 - Crear un archivo `config.php` con la configuracion apropiada de su conexion con la base de datos en base al archivo `config.php.example` existente en la carpeta del ejercicio.  
 - Ejecutar `composer install`

## Configuracion

- PHP tiene limitada la subida de archivos por defecto, con lo cual para este ejercicio en particular habra que modificar en el archivo `php.ini`. En donde
  - *upload_max_filesize* es el tamaño máximo de un archivo que se puede aceptar. Utiliza el sufijo "M" para indicar el valor en MegaBytes
  - *upload_max_filesize* es la cantidad maxima de subida mediante el motodo post para nuestro formulario.

```
upload_max_filesize = 16M
post_max_size = 20M
```
- Por el lado de la base de datos, MySQL tambien restringe el maximo tamaño de un paquete que puede recibir a la hora de insertar una tupla en nuestra BD, por ende habrá que modificar la siguiente variable para que acepte nuestra imagen de hasta 10MB. (En principio no se podia persistir la imagen debido a que soportaba hasta 4MB) 

```
mysql> show variables like 'max_allowed_packet';
+--------------------+----------+
| Variable_name      |  Value   |
+--------------------+----------+
| max_allowed_packet |  4194304‬ |
+--------------------+----------+
1 row in set (0.00 sec)

mysql> set global max_allowed_packet=1024 * 1024 * 32;
Query OK, 0 rows affected (0.00 sec)

```
  
  
## Ejecución
Precondiciones: Realizar los pasos de la seccion INSTALACION y CONFIGURACION.

1. Abrir una terminal.
2. Ubicarse en el directorio donde se clono el repositorio
3. Ejecutar `php -S localhost:8888`
4. Luego ingresar a http://localhost:8888 


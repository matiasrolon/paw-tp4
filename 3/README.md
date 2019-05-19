# Consideraciones

## Consigna
3. ¿Qué cambios hubo que realizar para la generación del id?

## Respuesta
Para la generacion automatica del ID solo tenemos que ingresar el siguiente codigo a la hora de hacer la tabla TURNOS.
```


CREATE TABLE turnos_medicos.turnos( 
   id INT AUTO_INCREMENT PRIMARY KEY,
          (...)
) 
AUTO_INCREMENT = 0;
```
Donde 
- ``(...)``  representa a los demas atributos a ingresar
- ``AUTO_INCREMENT`` indica que tendra un valor de atributo autogenerado que ira aumentando en 1 apartir del numero que fue definido abajo de la definicion de la table ``turnos_medicos.turnos``.

## Instalación

 - Clonar el repositorio
 - Crear un schema de base de datos con algun cliente MySQL
 - Ejecutar script de la carpeta `sql/` para crear la bd y las tablas
 - Editar archivo `config.php` con la configuracion apropiada de su equipo.  
 - Ejecutar `composer install`

## Ejecución
Precondiciones: Realizar los pasos de la seccion INSTALACION.

1. Abrir una terminal.
2. Ubicarse en el directorio donde se clono el repositorio
3. Ejecutar `php -S localhost:8888`
4. Luego ingresar a http://localhost:8888 


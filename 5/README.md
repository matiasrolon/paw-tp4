
## Consigna

5) ¿Qué es un motor de persistencia ORM (Object-Relational Mapping; Mapeo objeto-relacional)? ¿Qué problemática resuelve? Realice una evaluación de cuánto le costaría modificar el código para implementar uno en el sistema de turnos por usted desarrollado. Si para realizar la evaluación necesita elegir un producto particular, aclárelo.

## Respuesta

### Antecedentes
Hoy en día, la práctica totalidad de los lenguajes de programación que surgen son orientados a objetos y esta tecnología se ha convertido en el estándar actual de programación. La idea es modelar los programas de una forma parecida a cómo percibimos la realidad tendiendo a pensar todo como si fuera un objeto con sus correspondientes caracteristicas y funcionalidades (personas, ideas, etc). Produce reducciones de costos y mayor calidad del código.

En cambio, las bases de datos, utilizan un modelo mas antiguo pero eficiente, llamado “relacional”.
Se ocupa solo del almacenamiento de datos en distintos atributos y no de sus funcionalidades, los cuales se guardan como registros dividiendose por tablas segun la relacion que lleve un conjunto de atributos entre si. Este modelo relacional no refleja la estructura de la realidad ya que no se puede asimilar que una tabla es igual a un objeto.

Asi, la solución mas inmediata es hacer que uno de los componentes hable el idioma del otro, en el caso mayormente adoptado de forma erronea, que el programa esté diseñado siguiendo el modelo de datos relacionales, adaptandose a el.
El problema de esta arquitectura es que se desaprovechan las grandes ventajas de flexibilidad, facilidad de mantenimiento y facilidad de gestión de sistemas complejos que da la programación orientada a objetos y se vuelve muy dependiente de la estructura de los datos.

### Solucion
Un motor de persistencia ORM es un componente de software que abstrae al programador la comunicacion entre estos esquemas de base de datos relacional y un modelo de programacion orientado a objetos, traduciendo entre los dos formatos de datos: de registros (tablas) a objetos y de objetos a registros. 

La ventaja principal de estos sistemas es que resuelve la conversion de datos entre bd y aplicacion, haciendo que ya no dependa del programador, reduciendo a su vez la cantidad de código necesario para lograr la persistencia de los objetos 
Esto permite además, lograr una integración mas facil con otros patrones como el Modelo-Vista-Controlador. 


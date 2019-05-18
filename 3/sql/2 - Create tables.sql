

CREATE TABLE turnos_medicos.turnos
   (
      
	id INT AUTO_INCREMENT PRIMARY KEY, 
      
	paciente VARCHAR(50) NOT NULL,
      
	email varchar(50) NOT NULL,
      
	telefono varchar(30) NOT NULL,
     
	edad int,
      
	talla_calzado int,
      
	altura int,
      
	fecha_nacimiento date NOT NULL,
      
	color_pelo varchar(30),
      
	fecha_turno date NOT NULL,
      
	hora_turno time
) 
AUTO_INCREMENT = 0; 
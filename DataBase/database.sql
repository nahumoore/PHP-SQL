CREATE DATABASE stonks;
USE stonks;

CREATE TABLE Encomiendas (
    ClienteID INT PRIMARY KEY AUTO_INCREMENT,
    Ciudad_origen VARCHAR(50) NOT NULL,
    Ciudad_destino VARCHAR(50) NOT NULL,
    Localidad_origen VARCHAR(50) NOT NULL,
    Localidad_destino VARCHAR(50) NOT NULL,
    Direccion_entrega VARCHAR(50) NOT NULL,
    NombreyCI_Destinatario VARCHAR(50) NOT NULL,
    NombreyCI_Remitente VARCHAR(50) NOT NULL,
    Estado_encomienda VARCHAR(50) NOT NULL,
    Tipo_encomienda VARCHAR(50) NOT NULL,
    Observaciones VARCHAR(200)
)Engine=InnoDB;

CREATE TABLE Usuarios(
    UsersID INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(30) NOT NULL,
    Apellido VARCHAR(30) NOT NULL,
    Cedula INT(8) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Clave VARCHAR(32) NOT NULL,
    Tipo_usuario VARCHAR(15) NOT NULL 
)Engine=InnoDB;

INSERT INTO Encomiendas
(Ciudad_origen, Ciudad_destino, Localidad_origen, Localidad_destino, Direccion_entrega, NombreyCI_Destinatario,
NombreyCI_Remitente, Estado_encomienda, Tipo_encomienda, Observaciones) VALUES
("Montevideo", "Montevideo", "Prado", "Malvin", "Almeria 2452", "Jorge 48756985", "Martina 56892457", "Pendiente", "Paquete", "No quitar la cinta"),
("Canelones", "Las piedras", "Canelones", "Villa foresti", "Bach 7485", "Pedro 36528475", "Jose 47852167", "Despachada", "Paquete", ""),
("Montevideo", "Montevideo", "Paso de la arena", "Aguada", "Zapican 4572", "Lucas 24589145", "Josefina 42569857", "Pendiente", "Sobre", "Envoltorio rojo"),
("Artigas", "Montevideo", "Artigas", "Cerrito", "Leon perez 4758", "Valentina 45879632", "Felipe 12548632", "Despachada", "Sobre", ""),
("Montevideo", "Montevideo", "La paz", "Carrasco", "Monoes roses 9658", "Emiliano 45872365", "Pedro 56982304", "Pendiente", "Paquete", "Doble caja"),
("Salto", "Montevideo", "Concordia", "Punta carretas", "Parva Dombus 0235", "Cristian 65230149", "Julieta 35240169", "Pendiente", "Paquete", ""),
("Durazno", "Maldonado", "Rio negro", "Punta del este", "Horacio Quiroga 8547", "Pepe 26589475", "Martina 32451685", "Pendiente", "Paquete", "No dar vuelta la caja"),
("Montevideo", "Aguas dulces", "Prado", "Las palmeras", "Almeria 2452", "Jorge 48756985", "Martina 56892457", "Pendiente", "Paquete", ""),
("Montevideo", "Colonia", "Marconi", "Los nogales", "Jose Vicio", "Martin 32568451", "Cecilia 60215032", "Despachada", "Sobre", "Fragil"),
("Montevideo", "Montevideo", "Bella vista", "Malvin Norte", "Villa teresa 7458", "Jorge 30215204", "Martina 4125624", "Despachada", "Paquete", "Quitar moño amarillo");

INSERT INTO Usuarios(Nombre, Apellido, Cedula, Email, Clave, Tipo_usuario) VALUES
("Jorge", "Pereira", "36521065", "jorpereira@gmail.com", "380a35e671ef8c49cbf60fc50b4b2723", "Admin"),
("Matias", "de Souza", "54802304", "matizousa@outlook.com", "88950668e154b1ce40769eb887331531", "Recepcionista"),
("Estefani", "Morales", "24503156", "estefamorales@hotmail.com", "bccd77b2999c5233f70b377fa851be0a", "Admin"),
("Natalia", "Gomez", "42510368", "natigomez@gmail.com", "b664b1bbe01bc8f71afda4a1d6325d7e", "Admin"),
("Micaela", "Alvarez", "32560148", "micaela1996@gmail.com", "bff68884968c7ceb0a0dc5e8a96c15e4", "Admin"),
("Agustin", "Moreira", "54102398", "agusmore@hotmail.com", "7b2640820223fb5941cb7b2ae63579fb", "Recepcionista"),
("Cristina", "Fernandez", "4503268", "fernandez01@gmail.com", "1f09c06f99ad3e29a53dcce2f4aee2a7", "Admin"),
("Cristian", "Fuccile", "56985401", "fuccicris@outlook.com", "688764a426c1bb6c96d554ab30c1570d", "Recepcionista"),
("Sebastian", "Rodriguez", "45875482", "sebaa05@hotmail.com", "5efe8638a650703f742ee5a7fb42ecf7", "Recepcionista"),
("Natalia", "Gonzales", "36574870", "nati789@hotmail.com", "6daaa05023632084818fe91afd05de28", "Recepcionista"),
("Andres", "Garcia", "56984523", "andi@gmail.com", "39278c47fb05de46bc58521c25d88f41", "Recepcionista"),
("Miguel", "Gimenez", "36589452", "miguelito@hotmail.com", "536cc568f43c59e8c2d2808d3cb18a48", "Recepcionista"),
("David", "Navarro", "45875230", "davinava@gmail.com", "049f9163c342a49d44a15d8a2d3473d4", "Recepcionista"),
("Carlos", "Diaz", "24053265", "carlito02@gmail.com", "b05b6abbd32f6f47e45237619ffa7503", "Admin"),
("Pablo", "Alfaro", "48596032", "pablin78@gmail.com", "f57689e70b45d58391c7d04f548270f6", "Recepcionista"),
("Joaquin", "Castillo", "42015603", "joaco0452@gmail.com", "b3fb3ee2f43abb5c2b2be43bdbd6a6eb", "Admin"),
("Luis", "Rubio", "48571265", "ruubio21@gmail.com", "dc3ff3c11a42679a078949fd9e891ee0", "Admin"),
("Alejandro", "Hernandez", "487593025", "alejoo12@gmail.com", "6058eb6f307f9636c131617ee83073d7", "Admin"),
("Javier", "Balero", "68594752", "javitron45@gmail.com", "4491a1ff6fdf97d6e589f0dbbbb71844", "Recepcionista"),
("Vicente", "Ortiz", "32684571", "vicenton@gmail.com", "3166cd8f71100f79d9ba462c45f7bf54", "Admin");
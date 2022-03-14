CREATE TABLE productos (
	codigo INT AUTO_INCREMENT PRIMARY KEY,
	descripcion VARCHAR(200),
	porcentajeRebaja INT,
	estaRebajado ENUM('Si','No'),
	precio DECIMAL (6,2)
	);

CREATE TABLE clientes (
	dni VARCHAR(9) PRIMARY KEY,
	nombre VARCHAR(100),
	apellidos VARCHAR(200),
	fecha_nac DATE,
	telefono INT
	);

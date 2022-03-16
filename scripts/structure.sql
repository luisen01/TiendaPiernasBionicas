USE iaw_db;
DROP table if exists productos;
CREATE TABLE productos (
        codigo INT AUTO_INCREMENT PRIMARY KEY,
        descripcion VARCHAR(200),
        rebaja INT,
        estaRebajas int NOT NULL,
        precio int NOT NULL
        );
DROP table if exists clientes;
CREATE TABLE clientes (
        nombre varchar(20) NOT NULL,
        pApellido varchar(20) NOT NULL,
        sApellido varchar(20) NOT NULL,
        DNI VARCHAR(9) PRIMARY KEY
        );

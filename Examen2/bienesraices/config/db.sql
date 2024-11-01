CREATE TABLE vendedores (
    id_vendedor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE propiedades (
    id_propiedad INT AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    id_vendedor INT,
    FOREIGN KEY (id_vendedor) REFERENCES vendedores(id_vendedor)
);

CREATE TABLE IF NOT EXISTS productos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(1024) NOT NULL,
    precio DECIMAL(9,2)
);

CREATE TABLE IF NOT EXISTS carrito_usuarios(
    id_sesion VARCHAR(255) NOT NULL,
    id_producto BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES productos(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS usuarios(
    idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);

INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Buzo','Buzo algodon.    Talle: L.   Color: Magenta.','3360');
INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Remera','Remera musculosa.    Talle: M.   Color: Lila.','1490');
INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Campera','Campera cuero.    Talle: L.    Color: Negro.','7499');
INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Zapato','Zapato de vestir.    Talle: 37.5.    Color: Marron.','1999');
INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Blusa','Blusa invernal.   Talle: M.    Color: Turquesa.','2600');
INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Jean','Jean natural.    Talle: 34.    Color: Blanco.','1800');
INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Camisa','Camisa rayada.    Talle: L.    Color: Azul.','2399');
INSERT INTO `productos`(`nombre`, `descripcion`, `precio`) VALUES ('Pollera','Pollera lisa.    Talle: M.    Color: Negro.','1999');

INSERT INTO `usuarios`(`nombre`,`correo`,`contraseña`) VALUES ('Administrador','admin','klothesadmins');
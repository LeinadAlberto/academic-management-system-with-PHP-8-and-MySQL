-- Active: 1680376776078@@127.0.0.1@3306@sisgestionescolar
CREATE TABLE usuarios (
    id_usuario          INT (11)        NOT NULL    AUTO_INCREMENT PRIMARY KEY,
    nombres             VARCHAR (255)   NOT NULL,
    cargo               VARCHAR (255)   NOT NULL,
    email               VARCHAR (255)   NOT NULL    UNIQUE,
    password            TEXT            NOT NULL,
    fyh_creacion        DATETIME        NULL,
    fyh_actualizacion   DATETIME        NULL,
    estado              VARCHAR (11)
)ENGINE=InnoDB;
INSERT INTO usuarios (nombres, cargo, email, password, fyh_creacion, estado)
VALUES ('Daniel Canaviri', 'ADMINISTRADOR', 'admin@gmail.com', '12345678', '2024-03-02 00:18:00', '1');

CREATE TABLE roles (
    id_rol              INT (11)        NOT NULL    AUTO_INCREMENT PRIMARY KEY,
    nombre_rol          VARCHAR (255)   NOT NULL    UNIQUE,
    
    fyh_creacion        DATETIME        NULL,
    fyh_actualizacion   DATETIME        NULL,
    estado              VARCHAR (11)
)ENGINE=InnoDB;

INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('ADMINISTRADOR', '2024-03-03 22:16:10', '1');
INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('DIRECTOR ACADEMICO', '2024-03-03 22:16:10', '1');
INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('DIRECTOR ADMINISTRATIVO', '2024-03-03 22:16:10', '1');
INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('CONTADOR', '2024-03-03 22:16:10', '1');
INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('SECRETARIA', '2024-03-03 22:16:10', '1');

CREATE DATABASE biotechdb;

CREATE TABLE Grupo(

  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  especialidad VARCHAR(250) NOT NULL,
  grupo VARCHAR(250) NOT NULL

);

INSERT INTO GRUPO (especialidad, grupo) VALUES
('Biotecnologia','C'),
('Produccion industrial','H'),
('Electronica','D'),
('Programacion','F');
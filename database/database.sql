create database if not exists Argonautes DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Argonautes;

-- //............... Les Argonautes .............//
DROP TABLE IF EXISTS identite; 

CREATE TABLE IF NOT EXISTS identite(
  id  INTEGER PRIMARY KEY NOT NULL auto_increment,
  nom  varchar(50) NOT NULL
) ENGINE InnoDB;

INSERT INTO identite(nom) 
VALUES('Eleftheria'),
      ('Gennadios'),
      ('Lysimachos');



### Crianção do banco de dados
CREATE DATABASE finance CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE finance;

### Crianção  da tabela entrada 
CREATE TABLE `finance`.`entradas` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `valor` FLOAT

(11) NOT NULL , `data` DATE NOT NULL , `descricao` VARCHAR(255) NOT NULL , PRIMARY KEY 

(`id`)) ENGINE = InnoDB;


### Crianção  da tabela retiradas 
CREATE TABLE `finance`.`retiradas` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `valor` FLOAT

(11) NOT NULL , `data` DATE NOT NULL , `descricao` VARCHAR(255) NOT NULL , PRIMARY KEY 

(`id`)) ENGINE = InnoDB;
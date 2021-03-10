CREATE TABLE `Pesssoa` (
`id` INT NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(45) NOT NULL,
`cpf` VARCHAR(45) NOT NULL,
`sexo` VARCHAR(45) NOT NULL,
`linkimage` VARCHAR(45) NOT NULL,
`nreservista` VARCHAR(45) NOT NULL,
`email` VARCHAR(100) NOT NULL,
`senha` VARCHAR(45) NOT NULL,
`data_cadastro` DATE NULL,
`hora_cadastro` TIME NULL,
UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC));

CREATE TABLE `Pesssoadd` (
`id` INT NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(45) NOT NULL,
`cpf` VARCHAR(45) NOT NULL,
`sexo` VARCHAR(45) NOT NULL,
`linkimage` VARCHAR(45) NOT NULL,
`nreservista` VARCHAR(45) NOT NULL,
`email` VARCHAR(100) NOT NULL,
`senha` VARCHAR(45) NOT NULL,
`data_cadastro` DATE NULL,
`hora_cadastro` TIME NULL,
UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC));
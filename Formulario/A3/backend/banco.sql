Create Database test;
Use Database test;

Create table pessoa( 
    id int NULL PRIMARY KEY AUTO_INCREMENT, 
    nome varchar
(100) not null,
    cpf varchar
(100) not null, 
    sexo varchar
(20) not null, 
    reservista varchar
(100), 
    pathimagem varchar
(200) not null,
    email varchar
(100) not null, 
    senha varchar
(100) not null
);
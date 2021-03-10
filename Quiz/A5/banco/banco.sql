create database A5;

create table gerenciador
(
	id int primary key auto_increment,
    login varchar
(45) not null unique,
    senha varchar
(45) not null
);

create table evento
(
	id int primary key auto_increment,
    nome varchar
(50) not null,
    semestre varchar
(45) 
);

create table membro
(
	matricula int primary key auto_increment,
    nome varchar
(45) not null
);

create table equipe 
(
	id int primary key auto_increment,
    nome varchar
(45) not null,
    evento_id int,
    login varchar
(45) not null unique,
    senha varchar
(45) not null,
    foreign key
(evento_id) references evento
(id)
);

create table vinculo
(
    equipe_id int,
    membro_id1 int,
    membro_id2 int,
    membro_id3 int,
    membro_id4 int,
    membro_id5 int,
    foreign key (equipe_id) references equipe (id),
    foreign key (membro_id1) references membro (matricula),
    foreign key (membro_id2) references membro (matricula),
    foreign key (membro_id3) references membro (matricula),
    foreign key (membro_id4) references membro (matricula),
    foreign key (membro_id5) references membro (matricula)
);

create table bloco
(
	id int primary key auto_increment,
    nome varchar
(45) not null,
    evento_id int,
    foreign key
(evento_id) references evento
(id)
);

create table questao
(
	id int primary key auto_increment,
    nome varchar
(45) not null,
    texto text
);

create table questao_multipla
(
    questao_id int not null,
    alternativa_a varchar(100) not null,
    alternativa_b varchar(100) not null,
    alternativa_c varchar(100) not null,
    alternativa_d varchar(100) not null,
    alternativa_e varchar(100) not null,
    alternativa_correta int,
    primary key (questao_id),
    foreign key (questao_id) references questao(id)
);

create table questao_vf
(
    questao_id int not null,
    alternativa_correta int,
    primary key (questao_id),
    foreign key (questao_id) references questao(id)
);

create table questao_aberta
(
    questao_id int not null,
    rubrica text,
    primary key (questao_id),
    foreign key (questao_id) references questao(id)

);

create table questoes_has_bloco
(
    questao_id int unique,
    bloco_id int ,
    evento_id int ,
    foreign key (questao_id) references questao (id),
    foreign key (bloco_id) references bloco (id),
    foreign key (evento_id) references evento (id)
);

create table questao_has_bloco_has_equipe
(
    questao_id int,
    bloco_id int,
    evento_id int,
    equipe_id int,
    resposta boolean,
    foreign key (questao_id) references questao (id),
    foreign key (bloco_id) references bloco (id),
    foreign key (evento_id) references evento (id),
    foreign key (equipe_id) references equipe (id)
);

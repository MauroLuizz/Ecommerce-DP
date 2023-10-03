create database simulavoto;

create table usuarios(
id_usuario int auto_increment primary key,
nome varchar(30),
telefone varchar(11),
email varchar(40),
cpf varchar(14),
senha varchar(32)
);

select * from usuarios;
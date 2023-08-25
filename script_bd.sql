create database cadastrologin_bd;
use cadastrologin_bd;

create table usuarios (
	id int primary key auto_increment,
	nome varchar(30),
    email varchar(80),
    username varchar(30),
    telefone varchar(13),
    senha varchar(60)
);
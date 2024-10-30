CREATE DATABASE ib;
USE ib;


create table usuarios 
(idusuario int primary key not null auto_increment,	 
cpf char(14) not null unique key, 
nome varchar(45) not null, 
email varchar(45) not null, 
senha varchar(45) not null, 
datadenasc date not null, 
uf varchar(2) not null,
 localidade varchar(45) not null,
 celular int(11) not null, 
 complemento varchar(45) not null, 
 numero int(5) not null, 
 endereço varchar(45) not null, 
 cidade varchar(45) not null); 

create table produto (
 idproduto int primary key not null auto_increment,
 marca varchar(45) not null, 
 quantidade int(11) not null, 
 sabor varchar(45) not null,
 preco decimal(6.2) not null, 
 ingredientes varchar(45) not null, 
 nome varchar(45) not null, 
 especificacao varchar(45) not null, 
 validade date);

create table posts
 ( idposts int primary key not null auto_increment, 
 descricao varchar(300) not null, 
 categoria varchar(45) not null,
 titulo varchar(45) not null, 
 gostei int(11) not null);



create table carrinho ( 
	idcarrinho int primary key not null auto_increment, 
	idproduto int not null, 
    qtd int (11) not null, 
    FOREIGN KEY (idproduto) REFERENCES produto (idproduto));


create table itenssalvos
 ( iditenssalvos int primary key not null auto_increment, 
 idcarrinho int not null, idproduto int not null, 
 FOREIGN KEY (idcarrinho) REFERENCES carrinho (idcarrinho), 
 FOREIGN KEY (idproduto) REFERENCES produto (idproduto));

create table fornecedor ( 
idfornecedor int primary key not null auto_increment, 
idproduto int not null, idcarrinho int not null,
 cpf char(14)  not null, nome varchar (45) not null,
 especificacao varchar(45) not null, 
 FOREIGN KEY (idproduto) REFERENCES produto (idproduto),
 FOREIGN KEY (idcarrinho) REFERENCES carrinho (idcarrinho), 
 FOREIGN KEY (cpf) REFERENCES usuarios (cpf));

create table dicas 
( iddicas int primary key not null auto_increment,
 cpf char(14) not null,
 conteudo varchar(300) not null,
 titulo varchar(45) not null,
 FOREIGN KEY (cpf) REFERENCES usuarios (cpf));

create table comunidade ( 
idcomunidade int primary key not null auto_increment, 
idpost int not null, cpf char(14) not null, 
FOREIGN KEY (idpost) REFERENCES posts (idposts),
 FOREIGN KEY (cpf) REFERENCES usuarios (cpf));


ALTER TABLE produto ADD imagem varchar(255);
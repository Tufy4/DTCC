CREATE DATABASE ironbody;
USE ironbody;
create table usuarios ( IDusuarios int primary key not null, nome varchar(45) not null, email varchar(45) not null, senha varchar(45) not null, idade int(3) not null, UF varchar(2) not null, localidade varchar(45) not null, celular int(11) not null, complemento varchar(45), numerocasa int(5) not null, endereço varchar(45)not null, cidade varchar(45) not null); 

create table produto ( IDproduto int primary key not null, marca varchar(45) not null, quantidade int(11) not null, sabor varchar(45) not null, preco decimal(2,0) not null, ingredientes varchar(45) not null, nome varchar(45) not null, especificacao varchar(45) not null, validade date);

create table posts ( IDposts int primary key not null, descricao varchar(300) not null, categoria varchar(45) not null, titulo varchar(45) not null, gostei int(11) not null);

create table itenssalvos ( IDitenssalvos int primary key not null, IDcarrinho int(11) not null, IDproduto int(11) not null, FOREIGN KEY (IDcarrinho) REFERENCES carrinho (IDcarrinho), FOREIGN KEY (IDproduto) REFERENCES produto (IDproduto));

create table fornecedor ( IDfornecedor int primary key not null, IDproduto int(11) not null, IDcarrinho int(11) not null, IDususario int (11) not null, nome varchar (45) not null, especificacao varchar(45) not null, FOREIGN KEY (IDproduto) REFERENCES produto (IDproduto), FOREIGN KEY (IDcarrinho) REFERENCES carrinho (IDcarrinho), FOREIGN KEY (IDususario) REFERENCES usuario (IDusuario));

create table dicas ( IDdicas int primary key not null, IDususario int(11) not null, conteudo varchar(300) not null, titulo varchar(45) not null, FOREIGN KEY (IDusuario) REFERENCES usuario (IDusuario));

create table comunidade ( IDcomunidade int primary key not null, IDpost int(11) not null, IDusuario int(11) not null, FOREIGN KEY (IDpost) REFERENCES post (IDpost), FOREIGN KEY (IDusuario) REFERENCES usuario (IDusuario));

create table carrinho ( IDcarrinho int primary key not null, IDproduto int(11) not null, IDusuario int(11) not null, qtd int (11) not null, FOREIGN KEY (IDproduto) REFERENCES produto (IDproduto), FOREIGN KEY (IDusuario) REFERENCES usuario (IDusuario));

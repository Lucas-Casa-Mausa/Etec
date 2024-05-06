create database bdFilme;

use bdFilme;

create table tbGeneroSerie(

codGeneroSerie int primary key auto_increment,
nomeGenero varchar (50)

);

create table tbSerie(
codSerie int primary key auto_increment,
nomeSerie varchar (50),
codGeneroSerie int,
foreign key (codGeneroSerie) references tbGeneroSerie (codGeneroSerie)

);

create database ClinicaVeterinaria;


use ClinicaVeterinaria;


create table cliente(
codCLiente int auto_increment primary key,
nomeCliente varchar (70),
telefoneCliente char(11),
EmailCliente varchar(100)
);

create table tipoAnimal(
codTipoAnimal  int auto_increment primary key,
tipoAnimal varchar(40)
);
Create table animal (
codAnimal  int auto_increment primary key,
nomeAnimal varchar(50),
codTipoAnimal int ,
codCliente int,
constraint FKcodTipoAnimal foreign key (codTipoAnimal) references tipoAnimal(codTipoAnimal),
constraint FKcodCliente foreign key (codCliente) references cliente(codCliente)

);
create table veterinario(
codVet  int auto_increment primary key,
nomeVet varchar (50)
);

create table atendimento(
codAtendimento  int auto_increment primary key,
Data_horaAtendimento timestamp default current_timestamp,
codAnimal int,
codVet int ,
Diagnostico varchar(100),
constraint FkcodAnimal foreign key (codAnimal) references animal(codAnimal),
constraint FKcodVet foreign key (codVet) references veterinario(codVet)

);

CREATE TABLE login (
    usuario varchar(50),
    senha VARCHAR(35),
    nivel INT,
    id int AUTO_INCREMENT PRIMARY KEY
);

CREATE VIEW vw_animal_atend AS
SELECT A.codAnimal, A.nomeAnimal,AT.codAtendimento, AT.Data_horaAtendimento, AT.Diagnostico 
FROM animal A
INNER JOIN atendimento AT ON A.codAnimal = AT.codAnimal;

select * from vw_animal_atend;

DROP VIEW vw_animal_atend;






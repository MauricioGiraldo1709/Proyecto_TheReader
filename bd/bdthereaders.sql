create database bdthereaders;
use bdthereaders;
-- -----------------------------------------
-- Crear tabla usertr-----------------------
-- -----------------------------------------
create table usertr(
	cod_usertr char(5) not null primary key,
    usertr varchar(40) not null,
    passw  varchar(40) not null
);

-- -----------------------------------------
-- Insertamos datos en tabla usertr---------
-- -----------------------------------------
insert into usertr values
("00001", "mgiraldo", "1234"),
("00002", "htorres", "5678"),
("00003", "emorales", "9876"),
("00004", "fvizcarra", "5432"),
("00005", "hbecerra", "2324"),
("00006", "taldoradin", "1122");

use bdthereaders;
-- -----------------------------------------
-- Crear tabla usertr---------------------
-- -----------------------------------------
create table productotr(
	cod_productotr char(5) not null primary key,
    product varchar(80) not null,
    stock int not null,
    price float not null
);

-- -----------------------------------------
-- Insertamos datos en tabla productotr-----
-- -----------------------------------------
insert into productotr values
("PR001", "La Ciudad y Los Perros", 28, 79.90),
("PR002", "Heartstopper 3", 10, 58.80),
("PR003", "Harry Potter y el Misterio del Príncipe", 45, 69.99),
("PR004", "It - Eso", 5, 89.00);

select * from usertr;
select * from productotr;

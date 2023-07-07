# Evaluacion3
Proyecto de desarrollo de sistema CRUD

A continuación encontrará el script de creación de la base de datos.
El mismo script lo podra encontrar en un archivo TXT llamado Script dentro de la carpeta del proyecto.

create database QPromotor;
use QPromotor;
create table Usuario(
rut Varchar (15) primary key not null ,
nombres Varchar (15) not null,
apellido_paterno varchar (30) not null,
apellido_materno varchar (30) not null,
direccion Varchar (40) not null,
telefono Varchar (10) not null,
clave Varchar (12) not null,
codigo int not null,
foreign key (codigo) references Perfil(codigo));

insert into Usuario
value ("15.483.200-9", "Juan Ricardo", "Barahona", "Lagos", "Marin 382", "978780260", "123456", 1);

insert into Usuario
value ("16.085.937-7", "Sujeto", "xxx", "xxx", "aaaa 222", "979797979", "123456", 2);



create table Perfil(
codigo int primary key not null,
descripcion Varchar (20) not null
); 

insert into Perfil
value ( 1, "Administrador"), ( 2, "Usuario") ;

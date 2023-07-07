![panelDminNuevoDato](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/69c561fb-d025-4b94-bc5b-f63e78d7d7f8)
![panelAdm](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/a24b162a-fa32-4e7e-8843-9806e1314d73)
![modUsuario4](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/0f9f3cc6-d7f4-4dca-b1cc-0c6330820e00)
![modUsuario3](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/56ab5abb-ed21-49fb-9cbd-010c8ef4d957)
![modUsuario2](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/0f496248-6a04-4100-83de-c7ffab84d074)
![ModifUsuario](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/28021c2a-6925-430e-a827-162342195b58)
![login](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/6c9c43b2-273e-41a4-afc9-ac557ea4417b)
![ingresoUsuario1](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/bafceab9-9663-4405-82c3-600b2ec487c7)
![elimUsuario2](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/1298e794-2d54-4ce2-9dd6-32358e30a8dd)
![Uploading elimUsuario.png…]()

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



value ( 1, "Administrador"), ( 2, "Usuario") ;
![confIngreso](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/024deacc-160c-404d-b329-66d061121054)
![Uploading BD.png…]()


![Uploading confIngreso.png…]()
![Uploading BD.png…]()
![pantallaUsuario](https://github.com/KakoBarahonaL/Evaluacion3/assets/131830985/7dde86ea-9a85-4d6b-8473-aef06d0914de)

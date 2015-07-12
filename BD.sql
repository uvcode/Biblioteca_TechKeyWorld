CREATE DATABASE BDBiblioteca1 
use BDBiblioteca1
create table TAlumno
(
 CodigoAlumno varchar(10) primary key not null,
 DNIAlumno varchar(8) not null,
 NombreAlumno varchar(100) not null,
 ApellidosAlumno varchar(100) not null,
 CelularAlumno varchar(30) not null,
 CorreoAlumno varchar(100) null,
 EstadoAlumno varchar(40) null
 
)

create table TAutor
(
 CodigoAutor varchar(20)  primary key not null,
 NombreAutor varchar(100)not null,
 ApellidosAutor varchar(100) null,
 NacionalidadAutor varchar(50) null
)

create table TCategoria
(
 CodigoCategoria varchar(20) primary key not null,
 NombreCategoria varchar(100) not null
)

create table Tlibro
(
 CodigoLibro varchar(20) primary key not null,
 CodigoAutor varchar(20) not null,
 CodigoCategoria varchar(20) not null, 
 NombreLibro varchar(100) not null,
 EdicionLibro varchar(50) null,
 EstadoLibro varchar(50) not null,
 foreign key (CodigoAutor) references TAutor(CodigoAutor),
 foreign key (CodigoCategoria) references TCategoria(CodigoCategoria)
)

create table TEmpleado 
(
 CodigoEmpleado varchar(20) primary key not null,
 DNIEmpleado varchar(8) not  null,
 NombreEmpleado varchar(100) not null,
 ApellidosEmpleado varchar(100) null,
 TelefonoEmpleado varchar(30) null,
 CorreoEmpleado varchar(100) null,
 EstadoEmpleado varchar(50) null
 
)

create table TPrestamo
(
 CodigoPrestamo varchar(20)  primary key not null, 
 CodigoAlumno varchar(10) not null,
 CodigoLibro varchar(20) not null,
 FechaDePrestamo datetime not null,
 FechaParaDevolver datetime not null,
 EstadoPrestamo varchar(30) null,
 ObservacionPrestamo varchar(250) null,
 foreign key (CodigoAlumno) references TAlumno(CodigoAlumno),
 foreign key (CodigoLibro) references TLibro(CodigoLibro)

)

create table TDevolucion
(
 CodigoDevolucion varchar(20) primary key not null,
 CodigoPrestamo varchar(20) not null,
 EstadoDevolucion varchar(30) not null,
 ObservacionDevolucion varchar(250) null,
 FechaDevolucion datetime,
 foreign key (CodigoPrestamo) references TPrestamo(CodigoPrestamo)
)
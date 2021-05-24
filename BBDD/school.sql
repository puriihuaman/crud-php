-- Creamos la base de datos
create database school;

use school;

-- Creamos tabla estudiante
create table estudiante (
   codigo int auto_increment primary key,
   nombres varchar ( 45 ) not null,
   apellidos varchar ( 50 ) not null,
   carrera varchar ( 100 ) not null,
   email varchar ( 45 ) not null,
   telefono char ( 20 ) not null
);

-- Alterando el auto incrementable
alter table estudiante auto_increment = 10001;

-- Insertando datos

-- Estudiante
insert into estudiante values (null, 'jean paul', 'martinez c', 'Desarrollo de Sistemas', 'jeanmartinez@gmail.com', '984897163');
select * from estudiante;










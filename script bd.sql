/*Se crea la base de datos */
drop schema if exists SG_SOFTWARE;
CREATE SCHEMA SG_SOFTWARE;
use SG_SOFTWARE;

create table Animal(
	id_animal int  not null auto_increment,
    nombre varchar(50) not null,
    fecha_nacimiento date not null,
    raza varchar(50) not null,
    peso float not null,
    numero_arete int unique not null ,
    colores_caracteristicas text,
<<<<<<< HEAD
<<<<<<< HEAD

    observaciones text,
	PRIMARY KEY (id_animal)
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    observaciones text,
	PRIMARY KEY (id_animal)
    /*foreign key fk_animal_vaca (id_madre) references Vaca(id_vaca),
    foreign key fk_animal_toto (id_padre) references Toro(id_toro)*/
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


create table Vaca(
	id_vaca int primary key auto_increment not null,
    reproducible boolean,
    id_animal int not null,
    foreign key fk_vaca_animal (id_animal) references Animal(id_animal)
    )
    ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
    
create table Toro(
	id_toro int auto_increment primary key not null,
    tipo_toro enum('toro_finca', 'catalogo'),
    cantidad_montas_enseminaciones int not null,
    id_animal int not null,
    foreign key fk_toro_animal (id_animal) references Animal(id_animal)
    )
    ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
    
    
    
CREATE TABLE Produccion (
    idProduccion INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE not null,
    id_vaca INT not null, 
    litros FLOAT,
    observaciones TEXT,
<<<<<<< HEAD
<<<<<<< HEAD
    foreign key fk_produccion_animal (id_vaca) references Animal(id_animal)                                                   
=======
    foreign key fk_produccion_vaca (id_Vaca) references Vaca(id_vaca)                                                   
>>>>>>> bryan
=======
    foreign key fk_produccion_vaca (id_Vaca) references Vaca(id_vaca)                                                   
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE Produccion_semanal (
    id_produccion_semanal INT AUTO_INCREMENT PRIMARY KEY not null,
    fechaSemana DATE not null,
    numero_semana INT not null,
    litros FLOAT not null,
    calidad_bacteriologica FLOAT not null,
    celulas_somaticas FLOAT not null,
    porcentaje_grasa FLOAT not null,
    porcentaje_proteina FLOAT not null,
    punto_crioscopico FLOAT not null,
    presencia_inhibidores FLOAT not null
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Enfermedad (
    id_enfermedad INT AUTO_INCREMENT PRIMARY KEY not null,
    nombre_enfermedad varchar(40) not null,
    descripcion text not null,
    sintomas text not null,
    tratamiento text not null
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE Enfermedad_Animal (
<<<<<<< HEAD
<<<<<<< HEAD
    id_enfermedad_animal INT AUTO_INCREMENT PRIMARY KEY not null,
    id_enfermedad INT not null,
    id_animal int not null,
    estado_animal enum('en curso', 'recuperada','cronica','fallecida') not null,
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    id_animal_enfermedad INT AUTO_INCREMENT PRIMARY KEY not null,
    id_enfermedad INT not null,
    id_animal int not null,
    estado_enfermedad enum('en curso', 'recuperada','cronica','fallecida') not null,
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    sintomas_animal text not null,
    fecha_diagnostico date not null,
    observaciones text not null,
    foreign key fk_animal_enfermedad_enfermedad (id_enfermedad) references Enfermedad(id_enfermedad),
    foreign key fk_animal_enfermedad_animal (id_animal) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE Vacuna (
    id_vacuna INT AUTO_INCREMENT PRIMARY KEY not null,
    nombre_vacuna varchar(50) not null,
    descripcion text not null,
	fecha_vencimiento date not null,
    lote varchar(30) not null,
    observaciones text not null,
    casa_distribuidora varchar(100)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Vacunacion (
    id_vacunacion INT AUTO_INCREMENT PRIMARY KEY not null,
	id_vacuna INT not null,
<<<<<<< HEAD
<<<<<<< HEAD
    lugar_aplicacion varchar(50)  not null,
=======
    lugar_aplicación varchar(50)  not null,
>>>>>>> bryan
=======
    lugar_aplicación varchar(50)  not null,
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    dosis_aplicada varchar(50) not null,
	fecha_vacunacion date not null,
    cantidad_animales int not null,
    foreign key fk_vacunacion_vacuna (id_vacuna) references Vacuna(id_vacuna)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Vacunacion_Animal (
    id_vacunacion_animal INT AUTO_INCREMENT PRIMARY KEY not null,
	id_vacunacion INT not null,
    id_animal INT not null,
    foreign key fk_vacunacion_animal_vacunacion (id_vacunacion) references Vacunacion(id_vacunacion),
    foreign key fk_vacunacion_animal_animal (id_animal) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE Antibiotico (
    id_antibiotico INT AUTO_INCREMENT PRIMARY KEY not null,
    nombre_antibiotico varchar(80) not null,
    tipo varchar(50) not null,
    descripcion text not null,
	fecha_vencimiento date not null,
    lote varchar(30) not null,
    dias_retiro_leche int not null
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Medicamento (
    id_medicamento INT AUTO_INCREMENT PRIMARY KEY not null,
    nombre_medicamento varchar(80) not null,
    tipo varchar(50) not null,
    descripcion text not null,
	fecha_vencimiento date not null,
    lote varchar(30) not null,
    presentacion varchar(30) not null
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

<<<<<<< HEAD
<<<<<<< HEAD
CREATE TABLE Inyeccion_Medicamento (
    id_inyeccion_medicamento INT AUTO_INCREMENT PRIMARY KEY not null,
	id_medicamento INT not null,
    id_animal INT  not null,
    lugar_aplicacion varchar(50)  not null,
    dosis_aplicada varchar(50) not null,
	fecha_inyeccion date not null,
	foreign key fk_inyeccion_medicamento_medicamento (id_medicamento) references Medicamento(id_medicamento),
    foreign key fk_inyeccion_medicamento_animal (id_animal) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Inyeccion_Antibiotico (
    id_inyeccion_antibiotico INT AUTO_INCREMENT PRIMARY KEY not null,
	id_antibiotico INT not null,
    id_animal INT  not null,
    lugar_aplicacion varchar(50)  not null,
    dosis_aplicada varchar(50) not null,
	fecha_inyeccion date not null,
    foreign key fk_inyeccion_antibiotico_antibiotico (id_antibiotico) references Antibiotico(id_antibiotico),
    foreign key fk_inyeccion_antibiotico_animal (id_animal) references Animal(id_animal)
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
/*

CREATE TABLE Tratamiento (
    id_tratamiento INT AUTO_INCREMENT PRIMARY KEY not null,
	id_medicamento_antibiotico INT not null,
    id_animal INT  not null,
    id_enfermedad int not null,
    tipo_injeccion enum('antibiotico', 'medicina'),
    tipo_tratamiento varchar(80) not null,
    dosis_aplicada varchar(50) not null,
	fecha_inicio date not null,
    fecha_fin date not null,
    foreign key fk_tratamiento_antibiotico (id_medicamento_antibiotico) references Antibiotico(id_antibiotico),
	foreign key fk_tratamiento_medicamento (id_medicamento_antibiotico) references medicamento(id_medicamento),
    foreign key fk_tratamiento_animal (id_animal) references Animal(id_animal),
    foreign key fk_tratamiento_enfermedad (id_enfermedad) references Enfermedad(id_enfermedad)
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

<<<<<<< HEAD
<<<<<<< HEAD
=======
*/
>>>>>>> bryan
=======
*/
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd



CREATE TABLE Mastitis (
    id_mastitis INT AUTO_INCREMENT PRIMARY KEY not null,
<<<<<<< HEAD
<<<<<<< HEAD
    id_animal int not null,
    tipo_tratamiento varchar(50) not null,
    cuartos_afectados varchar(50) not null,
	fecha_diagnostico date not null,
    foreign key fk_mastitis_animal (id_animal) references Animal(id_animal)
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    id_antibiotico int not null,
    id_vaca int not null,
    tipo_tratamiento varchar(50) not null,
    cuartos_afectados varchar(50) not null,
	fecha_diagnostico date not null,
    persona_encargada varchar(50) not null,
    observaciones text not null,
    foreign key fk_mastitis_vaca (id_vaca) references Vaca(id_vaca),
    foreign key fk_mastitis_antibiotico(id_antibiotico) references Antibiotico(id_antibiotico)
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Aborto (
    id_aborto INT AUTO_INCREMENT PRIMARY KEY not null,
    id_vaca int not null,
	fecha_aborto date not null,
    estado_vaca varchar(80) not null,
    observaciones text not null,
    foreign key fk_aborto_vaca (id_vaca) references Vaca(id_vaca)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Parto (
    id_parto INT AUTO_INCREMENT PRIMARY KEY not null,
    id_vaca int not null,
<<<<<<< HEAD
<<<<<<< HEAD
    numero_arete int not null,
	fecha_parto date not null,
    estado_vaca varchar(80) not null,
=======
	fecha_parto date not null,
    estado_vaca varchar(80) not null,
    estado_cria varchar(80) not null,
>>>>>>> bryan
=======
	fecha_parto date not null,
    estado_vaca varchar(80) not null,
    estado_cria varchar(80) not null,
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    tipo_parto enum ('natural','intervenido','cesarea'),
    observaciones text not null,
    foreign key fk_parto_vaca (id_vaca) references Vaca(id_vaca)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Celo (
    id_celo INT AUTO_INCREMENT PRIMARY KEY not null,
    id_animal int not null,
	fecha_celo date not null,
    detalles_celo varchar(80) not null,
    observaciones text not null,
    foreign key fk_celo_animal (id_animal) references animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Servicio (
    id_servicio INT AUTO_INCREMENT PRIMARY KEY not null,
<<<<<<< HEAD
<<<<<<< HEAD
    id_animal int not null,
	fecha_servicio date not null,
    tipo_servicio varchar (30) not null,
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    id_vaca int not null,
    id_toro int not null,
	fecha_servicio date not null,
    tipo_servicio enum ('monta','enseminacion') not null,
    id_celo int not null,
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
    observaciones text not null
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

<<<<<<< HEAD
<<<<<<< HEAD
CREATE TABLE Secado (
    id_secado INT AUTO_INCREMENT PRIMARY KEY not null,
    id_animal int not null,
    fecha_secado int not null,
    observaciones text not null,
    foreign key fk_secado_animal (id_animal) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

=======
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
CREATE TABLE Vaca_Prenada (
    id_vaca_prenada INT AUTO_INCREMENT PRIMARY KEY not null,
    detalles_gestacion varchar(80) not null,
    id_servicio int not null,
    observaciones text not null
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Intervencion (
    id_intervencion INT AUTO_INCREMENT PRIMARY KEY not null,
    id_animal int not null,
    tipo_intervencion varchar(80) not null,
	fecha_intervencion date not null,
    descripcion text not null,
    veterinario varchar(80) not null,
    foreign key fk_intervencion_animal (id_animal) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

<<<<<<< HEAD
<<<<<<< HEAD


/*foreneas de servicio*/
alter table servicio 
add foreign key (id_animal) references Animal(id_animal);
alter table servicio 
add foreign key (id_animal) references Animal(id_animal);
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
/*foreneas de animal*/
/*alter table animal 
add foreign key (id_madre) references Vaca(id_vaca);
alter table animal 
add foreign key (id_padre) references Toro(id_Toro);*/

/*foreneas de servicio*/
alter table servicio 
add foreign key (id_animal) references animal(id_animal);
alter table servicio
add foreign key (id_animal) references animal(id_animal);
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd

/*foreneas de Vaca_Prenada*/
alter table Vaca_Prenada 
add foreign key (id_servicio) references Servicio(id_servicio);


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

    observaciones text,
	PRIMARY KEY (id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
    
CREATE TABLE Produccion (
    idProduccion INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE not null,
    id_vaca INT not null, 
    litros FLOAT,
    observacionesPr TEXT,
    foreign key fk_produccion_animal (id_vaca) references Animal(id_animal)                                                   
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE Produccion_semanal (
    id_produccion_semanal INT AUTO_INCREMENT PRIMARY KEY not null,
    fechaSemana DATE not null,
    litros FLOAT not null,
    calidad_bacteriologica VARCHAR(30) not null,
    celulas_somaticas FLOAT not null,
    porcentaje_grasa FLOAT not null,
    porcentaje_proteina FLOAT not null,
    punto_crioscopico FLOAT not null,
    presencia_inhibidores VARCHAR(30) not null
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
    id_enfermedad_animal INT AUTO_INCREMENT PRIMARY KEY not null,
    id_enfermedad INT not null,
    id_animal int not null,
    estado_animal enum('en curso', 'recuperada','cronica','fallecida') not null,
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
    lugar_aplicacion varchar(50)  not null,
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
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;




CREATE TABLE Mastitis (
    id_mastitis INT AUTO_INCREMENT PRIMARY KEY not null,
    id_animal int not null,
    tipo_tratamiento varchar(50) not null,
    cuartos_afectados varchar(50) not null,
	fecha_diagnostico date not null,
    foreign key fk_mastitis_animal (id_animal) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Aborto (
    id_aborto INT AUTO_INCREMENT PRIMARY KEY not null,
    id_vaca int not null,
	fecha_aborto date not null,
    estado_vaca varchar(80) not null,
    observaciones text not null,
    foreign key fk_aborto_vaca (id_vaca) references  Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Parto (
    id_parto INT AUTO_INCREMENT PRIMARY KEY not null,
    id_vaca int not null,
	fecha_parto date not null,
    tipo_parto varchar(30),
    observaciones text not null,
    foreign key fk_parto_vaca (id_vaca) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Celo (
    id_celo INT AUTO_INCREMENT PRIMARY KEY not null,
    id_animal int not null,
	fecha_celo date not null,
    detalles_celo varchar(80) not null,
    foreign key fk_celo_animal (id_animal) references animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;



CREATE TABLE Servicio (
    id_servicio INT AUTO_INCREMENT PRIMARY KEY not null,
    id_animal int not null,
	fecha_servicio date not null,
    tipo_servicio varchar (30) not null,
    observaciones text not null
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Secado (
    id_secado INT AUTO_INCREMENT PRIMARY KEY not null,
    id_animal int not null,
    fecha_secado int not null,
    observaciones text not null,
    foreign key fk_secado_animal (id_animal) references Animal(id_animal)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE Vaca_Prenada (
    id_vaca_prenada INT AUTO_INCREMENT PRIMARY KEY not null,
    id_servicio int not null,
    foreign key fk_vaca_prenada_servicio (id_servicio) references Servicio(id_servicio)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;





/*foreneas de servicio*/
alter table servicio 
add foreign key (id_animal) references Animal(id_animal);
alter table servicio 
add foreign key (id_animal) references Animal(id_animal);

/*foreneas de Vaca_Prenada*/
alter table Vaca_Prenada 
add foreign key (id_servicio) references Servicio(id_servicio);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    temrs boolean NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Inserts para la tabla Animal
INSERT INTO Animal (nombre, fecha_nacimiento, raza, peso, numero_arete, colores_caracteristicas, observaciones) 
VALUES 
('Bella', '2019-05-15', 'Holstein', 450.5, 12345, 'Blanco y negro', 'Vaca lechera de gran tamaño y excelente producción'),
('Roja', '2020-08-20', 'Jersey', 380.2, 54321, 'Marrón claro', 'Ternero joven con gran vitalidad'),
('Luna', '2017-12-10', 'Pardo Suizo', 500.0, 98765, 'Marrón oscuro', 'Vaca madura con descendencia exitosa'),
('Perla', '2021-02-28', 'Angus', 600.7, 24680, 'Negro', 'Toro robusto para reproducción'),
('Daisy', '2020-04-02', 'Simmental', 480.9, 13579, 'Rojo y blanco', 'Vaca con excelente temperamento');

-- Inserts para la tabla Produccion
INSERT INTO Produccion (fecha, id_vaca, litros, observaciones) 
VALUES 
('2023-01-05', 1, 28.3, 'Producción promedio diaria'),
('2023-01-06', 2, 25.8, 'Ligero descenso en producción'),
('2023-01-07', 3, 30.5, 'Aumento significativo en la producción'),
('2023-01-08', 4, 32.1, 'Buena producción para la época'),
('2023-01-09', 5, 29.6, 'Estabilidad en la producción lechera');

-- Inserts para la tabla Enfermedad
INSERT INTO Enfermedad (nombre_enfermedad, descripcion, sintomas, tratamiento) 
VALUES 
('Mastitis', 'Inflamación de la ubre', 'Hinchazón, dolor, cambios en la leche', 'Antibióticos y cuidados específicos'),
('Neumonía', 'Infección respiratoria', 'Tos, dificultad para respirar, fiebre', 'Antibióticos y reposo'),
('Cetosis', 'Desequilibrio metabólico', 'Letargo, pérdida de apetito, problemas de coordinación', 'Cambios en la dieta y tratamiento veterinario'),
('Hepatitis', 'Inflamación del hígado', 'Ictericia, pérdida de apetito, letargo', 'Medicación y dieta especial'),
('Parasitosis', 'Infección por parásitos', 'Diarrea, pérdida de peso, anemia', 'Desparasitación y cuidados sanitarios');

-- Inserts para la tabla Vacuna
INSERT INTO Vacuna (nombre_vacuna, descripcion, fecha_vencimiento, lote, observaciones, casa_distribuidora) 
VALUES 
('Vacuna A', 'Protección contra enfermedades específicas', '2024-06-15', 'ABC123', 'Almacenar a temperatura controlada', 'Veterinaria X'),
('Vacuna B', 'Inmunización contra patógenos comunes', '2024-09-20', 'DEF456', 'Revisar fecha de caducidad antes de usar', 'Veterinaria Y'),
('Vacuna C', 'Prevención de enfermedades virales', '2024-04-30', 'GHI789', 'Uso exclusivo en ganado vacuno', 'Veterinaria Z'),
('Vacuna D', 'Refuerzo de inmunidad para terneros', '2024-08-10', 'JKL012', 'Administrar dosis según protocolo', 'Veterinaria W'),
('Vacuna E', 'Protección contra agentes infecciosos', '2024-11-25', 'MNO345', 'Consultar con profesional veterinario', 'Veterinaria V');

-- Inserts para la tabla Antibiotico
INSERT INTO Antibiotico (nombre_antibiotico, tipo, descripcion, fecha_vencimiento, lote, dias_retiro_leche) 
VALUES 
('Antibiótico X', 'Amoxicilina', 'Para infecciones bacterianas comunes', '2024-03-12', 'ABCD1234', 5),
('Antibiótico Y', 'Cefalexina', 'Tratamiento de infecciones respiratorias', '2024-07-18', 'EFGH5678', 3),
('Antibiótico Z', 'Enrofloxacina', 'Efectivo contra infecciones urinarias', '2024-05-30', 'IJKL9012', 7),
('Antibiótico W', 'Tetraciclina', 'Para afecciones dérmicas y oculares', '2024-09-25', 'MNOP3456', 4),
('Antibiótico V', 'Penicilina', 'Amplio espectro antibacteriano', '2024-12-10', 'QRST7890', 6);




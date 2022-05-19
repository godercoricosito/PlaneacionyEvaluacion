DROP DATABASE IF EXISTS planeacion_y_evaluacion;
CREATE DATABASE planeacion_y_evaluacion;
USE planeacion_y_evaluacion;

DROP TABLE IF EXISTS titulares;
CREATE TABLE titulares(
    id_titular INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL, 
    apellidos VARCHAR(255) NOT NULL,
    cargo ENUM('Director', 'Coordinador', 'Jefe de Departamento', 'Subdirector', 'Enlace Administrativo'),
    codigo_area VARCHAR(3)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS dependencias_generales;
CREATE TABLE dependencias_generales(
    id_dependencia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    clave_dependencia VARCHAR(15) NOT NULL,
    nombre_dependencia_general VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("A00", "PRESIDENCIA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("A01", "COMUNICACIÓN SOCIAL");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("A02", "DERECHOS HUMANOS");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("B00", "SINDICATURAS");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("B01", "SINDICATURA I");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("B02", "SINDICATURA II");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("B03", "SINDICATURA III");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C00", "REGIDURIAS");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C01", "REGIDURÍA I");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C02", "REGIDURÍA II");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C03", "REGIDURÍA III");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C04", "REGIDURÍA IV");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C05", "REGIDURÍA V");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C06", "REGIDURÍA VI");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C07", "REGIDURÍA VII");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C08", "REGIDURÍA VIII");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C09", "REGIDURÍA IX");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C10", "REGIDURÍA X");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C11", "REGIDURÍA XI");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C12", "REGIDURÍA XII");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C13", "REGIDURÍA XIII");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C14", "REGIDURÍA XIV");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C15", "REGIDURÍA XV");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C16", "REGIDURÍA XVI");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C17", "REGIDURÍA XVII");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C18", "REGIDURÍA XVIII");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("C19", "REGIDURÍA XIX");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("D00", "SECRETARÍA DEL AYUNTAMIENTO");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("E00", "ADMINISTRACIÓN");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("E01", "PLANEACIÓN");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("E02", "INFORMÁTICA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("E03", "EVENTOS ESPECIALES");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("F00", "DESARROLLO URBANO Y OBRAS PÚBLICAS");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("f00", "DESARROLLO URBANO Y OBRAS PÚBLICAS");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("F01", "DESARROLLO URBANO Y SERVICIOS PÚBLICOS");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("G00", "ECOLOGÍA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("H00", "SERVICIOS PÚBLICOS");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("H01", "AGUA POTABLE");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("I00", "PROMOCIÓN SOCIAL");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("I01", "DESARROLLO SOCIAL");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("I02", "SALUD");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("J00", "GOBIERNO MUNICIPAL");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("K00", "CONTRALORÍA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("L00", "TESORERÍA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("M00", "CONSEJERÍA JURÍDICA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("N00", "DIRECCIÓN DE DESARROLLO ECONÓMICO");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("N01", "DESARROLLO AGROPECUARIO");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("O00", "EDUCACIÓN CULTURAL Y BIENESTAR SOCIAL");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("P00", "ATENCIÓN CIUDADANA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("Q00", "SEGURIDAD PÚBLICA Y TRÁNSITO");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("R00", "CASA DE LA CULTURA");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("S00", "UNIDADDEINFORMACIÓN,PLANEACIÓN, PROGRAMACIÓN Y EVALUACIÓN");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("T00", "PROTECCIÓN CIVIL");
INSERT INTO dependencias_generales (clave_dependencia, nombre_dependencia_general) VALUES ("U00", "TURISMO");

DROP TABLE IF EXISTS dependencias_auxiliares;
CREATE TABLE dependencias_auxiliares(
    id_dependencia_auxiliar INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    clave_dependencia_auxiliar VARCHAR(15),
    nombre_dependencia_auxiliar VARCHAR(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("100","Secretaría Particular");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("101","Secretaría Técnica");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("102","Derechos Humanos");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("103","Comunicación Social");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("104","Seguridad Pública");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("105","Coordinación Municipal de Protección Civil");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("106","Cuerpo de Bomberos");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("107","Urbanismo y Vivienda");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("108","Oficialía Mediadora - Conciliadora");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("109","Registro Civil");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("110","Acción Cívica");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("111","Coordinación de Delegaciones");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("112","Participación Ciudadana");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("113","Cronista Municipal");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("114","Control Patrimonial");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("115","Ingresos");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("116","Egresos");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("117","Presupuesto");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("118","Catastro Municipal");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("119","Contabilidad");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("120","Administración y Desarrollo de Personal");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("121","Recursos Materiales");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("122","Unidad de Transparencia");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("123","Desarrollo Urbano");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("124","Obras Públicas");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("125","Servicios Públicos");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("126","Limpia");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("127","Alumbrado Público");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("128","Parques y Jardines");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("129","Antirrábico");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("130","Desarrollo Agrícola y Ganadero");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("131","Fomento Industrial");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("132","Desarrollo Comercial y de Servicios");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("133","Fomento Artesanal");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("134","Auditoría Financiera");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("135","Auditoría de Obra");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("136","Auditoría Administrativa");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("137","Simplificación Administrativa");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("138","Responsabilidad y Situación Patrimonial");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("139","Control Social");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("140","Servicio Municipal de Empleo");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("141","Educación");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("142","Deporte");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("143","Atención a la Juventud");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("144","Gobernación");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("145","Panteones");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("146","Rastro");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("147","Mercados");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("148","Servicio Militar Municipal");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("149","Fomento Turístico");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("150","Cultura");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("151","Atención a los Pueblos Indígenas");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("152","Atención a la Mujer");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("153","Atención a la Salud");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("154","Vialidad y Transporte");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("155","Área Jurídica");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("156","Suministro de Agua Potable");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("157","Drenaje y Saneamiento");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("158","Tránsito");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("159","Secretaría Técnica de Seguridad Pública");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("160","Prevención y Control Ambiental");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("161","Unidad Substanciadora y Resolutoria");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("162","Unidad Investigadora");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("163","Oficialía Mediadora");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C00","REGIDURIAS");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C01","REGIDURÍA I");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C02","REGIDURÍA II");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C03","REGIDURÍA III");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C04","REGIDURÍA IV");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C05","REGIDURÍA V");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C06","REGIDURÍA VI");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C07","REGIDURÍA VII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C08","REGIDURÍA VIII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C09","REGIDURÍA IX");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C10","REGIDURÍA X");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("164","Oficialía Calificadora");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("A00", "PRESIDENCIA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("A01", "COMUNICACIÓN SOCIAL");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("A02", "DERECHOS HUMANOS");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("B00", "SINDICATURAS");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("B01", "SINDICATURA I");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("B02", "SINDICATURA II");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("B03", "SINDICATURA III");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C00", "REGIDURIAS");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C01", "REGIDURÍA I");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C02", "REGIDURÍA II");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C03", "REGIDURÍA III");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C04", "REGIDURÍA IV");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C05", "REGIDURÍA V");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C06", "REGIDURÍA VI");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C07", "REGIDURÍA VII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C08", "REGIDURÍA VIII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C09", "REGIDURÍA IX");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C10", "REGIDURÍA X");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C11", "REGIDURÍA XI");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C12", "REGIDURÍA XII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C13", "REGIDURÍA XIII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C14", "REGIDURÍA XIV");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C15", "REGIDURÍA XV");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C16", "REGIDURÍA XVI");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C17", "REGIDURÍA XVII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C18", "REGIDURÍA XVIII");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("C19", "REGIDURÍA XIX");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("D00", "SECRETARÍA DEL AYUNTAMIENTO");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("E00", "ADMINISTRACIÓN");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("E01", "PLANEACIÓN");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("E02", "INFORMÁTICA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("E03", "EVENTOS ESPECIALES");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("F00", "DESARROLLO URBANO Y OBRAS PÚBLICAS");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("F01", "DESARROLLO URBANO Y SERVICIOS PÚBLICOS");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("G00", "ECOLOGÍA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("H00", "SERVICIOS PÚBLICOS");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("H01", "AGUA POTABLE");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("I00", "PROMOCIÓN SOCIAL");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("I01", "DESARROLLO SOCIAL");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("I02", "SALUD");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("J00", "GOBIERNO MUNICIPAL");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("K00", "CONTRALORÍA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("L00", "TESORERÍA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("M00", "CONSEJERÍA JURÍDICA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("N00", "DIRECCIÓN DE DESARROLLO ECONÓMICO");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("N01", "DESARROLLO AGROPECUARIO");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("O00", "EDUCACIÓN CULTURAL Y BIENESTAR SOCIAL");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("P00", "ATENCIÓN CIUDADANA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("Q00", "SEGURIDAD PÚBLICA Y TRÁNSITO");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("R00", "CASA DE LA CULTURA");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("S00", "UNIDADDEINFORMACIÓN,PLANEACIÓN, PROGRAMACIÓN Y EVALUACIÓN");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("T00", "PROTECCIÓN CIVIL");
INSERT INTO dependencias_auxiliares (clave_dependencia_auxiliar, nombre_dependencia_auxiliar) VALUES ("U00", "TURISMO");

DROP TABLE IF EXISTS programas_presupuestarios;
CREATE TABLE programas_presupuestarios(
    id_programa INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    objetivo_pp TEXT, -- Objetivo o resumen narrativo
    dependencia_general_gaceta VARCHAR(255), -- El que aparece en la gaceta
    pilar_o_eje VARCHAR(255), -- Transcripcion de la gaceta
    tema_desarrollo VARCHAR(255),
    codigo_programa VARCHAR(12) NOT NULL,
    nombre_programa VARCHAR(255) NOT NULL,
    descripcion TEXT
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS proyectos;
CREATE TABLE proyectos(
    id_proyecto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo_proyecto VARCHAR(12) NOT NULL,
    nombre_proyecto VARCHAR(255) NOT NULL,
    descripcion TEXT,
    id_programa INT, 
    CONSTRAINT FK_programa FOREIGN KEY (id_programa) REFERENCES programas_presupuestarios(id_programa) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS dependencias;
CREATE TABLE dependencias(
    id_dependencia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_dependencia VARCHAR(255) NOT NULL,
    id_dependencia_gen INT,
    id_director INT,
    CONSTRAINT FK_dependencia_general FOREIGN KEY (id_dependencia_gen) REFERENCES dependencias_generales(id_dependencia) ON DELETE CASCADE,
    CONSTRAINT FK_director FOREIGN KEY (id_director) REFERENCES titulares(id_titular) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS areas;
CREATE TABLE areas(
    id_area INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_area VARCHAR(255) NOT NULL,
    id_dependencia INT,
    id_dependencia_aux INT,
    id_proyecto INT,
    id_titular INT,
    CONSTRAINT FK_area_dependencia_general FOREIGN KEY (id_dependencia) REFERENCES dependencias(id_dependencia) ON DELETE CASCADE,
    CONSTRAINT FK_dependencia_auxiliar FOREIGN KEY (id_dependencia_aux) REFERENCES dependencias_auxiliares(id_dependencia_auxiliar) ON DELETE CASCADE,
    CONSTRAINT FK_proyeto FOREIGN KEY (id_proyecto) REFERENCES proyectos(id_proyecto) ON DELETE CASCADE,
    CONSTRAINT FK_area_titular FOREIGN KEY (id_titular) REFERENCES titulares(id_titular) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios(
    id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    apellidos VARCHAR(255),
    nivel INT NOT NULL,
    email VARCHAR(255),
    tel VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS actividades;
CREATE TABLE actividades(
    id_actividad INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo_actividad VARCHAR(2) NOT NULL,
    nombre_actividad VARCHAR(500) NOT NULL,
    unidad VARCHAR(255) NOT NULL, 
    programado TEXT,
    avance TEXT,  -- Modificar
    programado_anual_anterior INT,
    alcanzado_anual_anterior INT,
    id_area INT,
    id_validacion INT,
    validado INT,
    creacion DATETIME DEFAULT CURRENT_TIMESTAMP() ,
    id_creacion INT,
    modificacion DATETIME, 
    -- agregar campo de Quien modifica
    -- ruta de las evidencias
    CONSTRAINT FK_area FOREIGN KEY (id_area) REFERENCES areas(id_area) ON DELETE CASCADE,
    CONSTRAINT FK_id_validacion FOREIGN KEY (id_validacion) REFERENCES usuarios (id_usuario) ON DELETE CASCADE,
    CONSTRAINT FK_id_creacion FOREIGN KEY (id_creacion) REFERENCES usuarios (id_usuario) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS indicadores;
CREATE TABLE indicadores(
    id_indicador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    variable_a TEXT,
    variable_b TEXT,
    variable_c TEXT,
    nivel_indicador ENUM('NF', 'NP', 'NC', 'NA'),
    sub_nivel VARCHAR(3),
    resumen VARCHAR(255),
    nombre VARCHAR(255),
    formula TEXT,
    frecuencia VARCHAR(10),
    tipo VARCHAR(50),
    medios_verificacion VARCHAR(255),
    supuestos VARCHAR(255),
    prog_a_1 INT,
    prog_b_1 INT,
    prog_c_1 INT,
    prog_a_2 INT,
    prog_b_2 INT,
    prog_c_2 INT,
    prog_a_3 INT,
    prog_b_3 INT,
    prog_c_3 INT,
    prog_a_4 INT,
    prog_b_4 INT,
    prog_c_4 INT,
    id_programa_presupuestario INT,
    CONSTRAINT FK_indicador_programa FOREIGN KEY (id_programa_presupuestario) REFERENCES programas_presupuestarios(id_programa) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS reconducciones_atividades; 
CREATE TABLE reconducciones_atividades(
    id_reconduccion_actividades INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    no_oficio VARCHAR(15),
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP(),
    dep_general VARCHAR(5),
    dep_aux VARCHAR(20),
    programa_presup VARCHAR(255),   
    objetivo_programa_presup VARCHAR(255),

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS reconducciones_indicadores; 
CREATE TABLE reconducciones_indicadores(
    id_reconduccion_indicadores INT NOT NULL PRIMARY KEY AUTO_INCREMENT,

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS descripcion_programas; 
CREATE TABLE descripcion_programas(
    id_descripcion INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    foda_fortalezas TEXT,
    foda_oportunidades TEXT,
    foda_debilidades TEXT,
    foda_amenazas TEXT,
    estrategia_programa TEXT, --liz, la de la mac
    objetivo_pdm TEXT,
    estrategia_pdm TEXT,
    linea_pdm TEXT,
    objetivos_ods TEXT,
    metas_ods TEXT,
    id_area INT,
    CONSTRAINT FK_descripcion_programa_area FOREIGN KEY (id_area) REFERENCES areas(id_area) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS comments; 
CREATE TABLE comments( 
    id_comment INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    comment TEXT,
    id_actividad INT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT FK_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


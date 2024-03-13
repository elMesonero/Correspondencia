-- Estructura para la tabla 'usuarios'

CREATE TABLE IF NOT EXISTS 'usuarios' (
	'idusuario' int(11) NOT NULL AUTO_INCREMENT,
	'nombre' varchar(70) NOT NULL,
	'correo' varchar(30) NOT NULL,
	'cedula' varchar(20) NOT NULL,
	'password' varchar(60) NOT NULL,
	PRIMARY KEY ('idusuario')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;
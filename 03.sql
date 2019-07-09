-- creacion de usuario
CREATE USER 'seduzac_consultas'@'localhost' IDENTIFIED BY 'F2AE9469B26199657C279E55B1747';
CREATE USER 'seduzac_registros'@'localhost' IDENTIFIED BY '3C4F3B8B214AF57424728AEE374CD';

-- permisos de los usuarios
GRANT SELECT ON seduzac_encuestas.* TO 'seduzac_consultas'@'localhost';
GRANT SELECT ON seduzac_encuestas.* TO 'seduzac_registros'@'localhost';
GRANT INSERT ON seduzac_encuestas.* TO 'seduzac_registros'@'localhost';

-- permisos de Procedimientos almacenados
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.revisarConfiguracion TO 'seduzac_consultas'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.instalacion TO 'seduzac_registros'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.login TO 'seduzac_consultas'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.infoConfig TO 'seduzac_consultas'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.listaEmpleados TO 'seduzac_consultas'@'localhost';
FLUSH PRIVILEGES;


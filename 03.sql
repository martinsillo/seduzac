-- creacion de usuario
CREATE USER 'seduzac_con'@'localhost' IDENTIFIED BY 'F2AE9469B26199657C279E55B1747';
CREATE USER 'seduzac_reg'@'localhost' IDENTIFIED BY '3C4F3B8B214AF57424728AEE374CD';

-- permisos de los usuarios
GRANT SELECT ON seduzac_encuestas.* TO 'seduzac_con'@'localhost';
GRANT SELECT ON seduzac_encuestas.* TO 'seduzac_reg'@'localhost';
GRANT INSERT ON seduzac_encuestas.* TO 'seduzac_reg'@'localhost';

-- permisos de Procedimientos almacenados
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.revisarConfiguracion TO 'seduzac_con'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.instalacion TO 'seduzac_reg'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.login TO 'seduzac_con'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.infoConfig TO 'seduzac_con'@'localhost';
GRANT EXECUTE ON PROCEDURE seduzac_encuestas.listaEmpleados TO 'seduzac_con'@'localhost';
FLUSH PRIVILEGES;


USE `encuestas_seduzac`;
delimiter $$
CREATE PROCEDURE revisarConfiguracion()
begin
select count(*) from configuracion;
end $$
delimiter ;
DELIMITER $$
CREATE PROCEDURE `instalacion`(in t varchar(32), in u varchar(8), in c varchar(32), in n varchar(128), in e varchar(128), in p varchar(10))
begin
INSERT INTO configuracion (tablet_num,usuario,clave,nombre,email,telefono) 
VALUES
(t,u,c,n,e,p);
end$$
DELIMITER ;
delimiter $$
CREATE PROCEDURE login(in u varchar(16), in c varchar(32))
begin
SELECT COUNT(*) FROM configuracion WHERE usuario = u AND clave = c;
end $$
delimiter ; 
delimiter $$
CREATE PROCEDURE infoConfig(in u varchar(16), in c varchar(32))
begin
SELECT  tablet_num,nombre FROM configuracion WHERE usuario = u AND clave = c LIMIT 1;
end $$
delimiter ;
delimiter $$
create procedure listaEmpleados(in c int)
begin
SELECT  
e.id,
e.rfc,
e.num_empleado,
e.nombre,
p.puesto,
(select count(*) from encuestas where empleado = e.id) as encuestado,
(select fecha from encuestas where empleado = e.id) as fecha
FROM empleados e
inner join puestos p on(e.puesto = p.id)
 WHERE e.cct = c;
 end $$
delimiter ;
delimiter $$
create procedure nvoEmpleado(
	in r varchar(13),
	in ne varchar(45), 
    in nm varchar(254), 
    in p varchar(256), 
    in tc varchar(256), 
    in cat varchar(256), 
    in cf varchar(45), 
    in ct varchar(256))
BEGIN
INSERT INTO EMPLEADOS
(rfc,num_empleado,nombre,puesto,tipo_contrato,categoria,cve_fed,cct)
VALUES
(r, 
 ne,
 nm,
 (SELECT id FROM puestos WHERE puesto = p),
 (SELECT id FROM contratos WHERE tipo_contrato = tc),
 (SELECT id FROM categorias WHERE categoria = cat),
 cf,
 (SELECT id FROM centros_trabajo WHERE cct = ct)
);
end $$
delimiter ;
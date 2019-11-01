-- MySQL Workbench Forward Engineering
-- MySQL DDL document

-- Schema db_ngr_inventario
-- Esquema de la Base de Datos de los inventarios de la empresa Muebles NGR
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Categoria` (
  `id_Categoria` INT(10) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(100) NOT NULL,
  `categoriaDescripcion` VARCHAR(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Una breve descripción de las características básicas o concurrentes en los Productos de dicha clasificación.\nPuede ser omitido su registro.',
  PRIMARY KEY (`id_Categoria`)
  );


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`EstadoProducto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EstadoProducto` (
  `id_EstadoProducto` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Registro sobre el Estado de Movimiento del Producto en el Stock.',
  `estadoProducto` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Estado del Movimiento en Stock del Producto.\nIndica si la cantidad ingresada es para efecto de una Entrada en el Stock, una Salida, etc.',
  PRIMARY KEY (`id_EstadoProducto`)
  );


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`EstadoProveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EstadoProveedor` (
  `id_EstadoProveedor` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Estado de Actividad del Proveedor.',
  `estadoProveedor` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Permite que el sistema verifique si puede o no mostrar la información del Proveedor de Materiales.',
  PRIMARY KEY (`id_EstadoProveedor`)
  );


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`EstadoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EstadoUsuario` (
  `id_EstadoUsuario` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de los Estados de Actividad posibles del usuario.',
  `estadoUsuario` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Estado de Actividad del usuario.\nIndica las palabras textuales que identifican el Estado de Actividad del usuario.',
  PRIMARY KEY (`id_EstadoUsuario`)
  );

-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`UsuarioPermitido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `UsuarioPermitido` (
  `id_usuarioPermitido` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Registro de un Usuario Permitido.',
  `fk_usuarioDocumento` INT(20) NOT NULL COMMENT 'Clave Foránea del Documento del Usuario habilitado para registrarse.\nLa clave es únicamente de consulta.',
  PRIMARY KEY (`id_usuarioPermitido`)
  )
;

-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`Rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Rol` (
  `id_Rol` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de los registros de los roles.',
  `rolNombre` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de los roles que pueden poseer los usuarios.',
  PRIMARY KEY (`id_Rol`))
;


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`TipoDocumento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TipoDocumento` (
  `id_TipoDocumento` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Tipo de Documento.',
  `tipoDocumento` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Tipo de Documento del Usuario.',
  PRIMARY KEY (`id_TipoDocumento`))
;


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Usuario` (
  `usuarioDocumento` INT(20) NOT NULL COMMENT 'Documento del usuario que desea ingresar al sistema.\nSe utiliza el documento de identidad del usuario como requisito para el proceso de validación de su ingreso al sistema.',
  `fk_id_TipoDocumento` INT(10) NOT NULL COMMENT 'Clave Foránea del Tipo de Documento del usuario.',
  `usuarioNombre` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre Completo del usuario.\nEs usado para ingresar al sistema y procesos de registro.',
  `usuarioPswrd` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Contraseña del usuario.\nPermite el acceso de los usuarios autorizados para hacer uso del sistema, como parte del proceso de validación de los mismos.',
  `usuarioCorreoElectronico` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Se utiliza para el proceso de recuperación de cuenta de los usuarios.',
  `usuarioTelefono` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Telefono celular del usuario.\nSe utiliza como alternativa para recuperar la cuenta del usuario en caso de que este pierda el acceso a la misma.\nPuede ser omitido su registro.  Si el usuario omite su registro se diligencia con \"N/A\" (No Aplica).',
  `usuarioFechaRegistro` DATETIME NOT NULL COMMENT 'Se utilliza para el proceso de verificación del historial de registros de usuarios.',
  `fk_id_EstadoUsuario` INT(10) NOT NULL COMMENT 'Clave foránea del Estado de Actividad del usuario.\nLos usuarios poseerán un estado, ya que podrán ser inhabilitados por un usuario Superadministrador para procesos internos.',
  `fk_id_UsuarioPermitido` INT(10) NOT NULL COMMENT 'Clave foránea del permiso para ser registrado externamente.',
  PRIMARY KEY (`usuarioDocumento`),
    FOREIGN KEY (`fk_id_TipoDocumento`)
    REFERENCES `db_ngr_inventario`.`TipoDocumento` (`id_TipoDocumento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`fk_id_EstadoUsuario`)
    REFERENCES `db_ngr_inventario`.`EstadoUsuario` (`id_EstadoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`fk_id_UsuarioPermitido`)
    REFERENCES `db_ngr_inventario`.`UsuarioPermitido`(`id_UsuarioPermitido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`Permiso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Permiso` (
  `id_Permiso` INT(10) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Identificador de los Permisos concedidos a los usuarios.',
  `fk_id_Rol` INT(10) NOT NULL COMMENT 'Clave foránea del Rol al que pertenece el acceso concedido al usuario.',
  `fk_usuarioDocumento` INT(20) NOT NULL COMMENT 'Clave foránea del Documento del usuario al que pertenece el rol al que se le está concediendo el acceso.',
  PRIMARY KEY (`id_Permiso`),
    FOREIGN KEY (`fk_id_Rol`)
    REFERENCES `db_ngr_inventario`.`Rol` (`id_Rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`fk_usuarioDocumento`)
    REFERENCES `db_ngr_inventario`.`Usuario` (`usuarioDocumento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`ProveedorMaterial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProveedorMaterial` (
  `id_ProveedorMaterial` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Proveedor de Materiales para la fabricación del Producto.\nPermite cumplir con el requerimiento de verificación de registros.',
  `proveedorNombre` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Proveedor o Empresa Proveedora de Materiales.',
  `proveedorTelefono` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Teléfono de Contacto del Proveedor de Materiales.',
  `ProveedorDireccion` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Dirección de contacto del Proveedor o Empresa Proveedora de Materiales.\nPuede ser omitido su registro. Si el usuario omite su registro se diligencia con \"N/A\" (No Aplica).',
  `fk_id_estadoProveedor` INT(10) NOT NULL COMMENT 'Clave foránea sobre el Estado de Actividad de la información sobre el Proveedor de Materiales.\nPermite verificar si el Proveedor ya no hace parte del proceso de negocio para excluirlo de los informes del inventariado.',
  PRIMARY KEY (`id_ProveedorMaterial`),
    FOREIGN KEY (`fk_id_estadoProveedor`)
    REFERENCES `db_ngr_inventario`.`EstadoProveedor` (`id_EstadoProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Producto` (
  `id_Producto` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Producto.\nEl Identificador del Producto permite cumplir con el requerimiento de la verificación sobre la preservación de los registros, es decir, permite observar si hubo eliminación de algún Producto del Inventario de Productos.',
  `productoNombre` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto.\nPermite registrar los productos en existencia para efectos del inventariado.',
  `productoCodigo` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Código de registro del Producto.\nPermitirá verificar la unicidad del producto dentro de los registros.',
  `productoFechaRegistro` DATETIME NOT NULL COMMENT 'Fecha de Registro del Producto.',
  `fk_id_Categoria` INT(10) NOT NULL COMMENT 'Clave Foránea de la Categoría a la que pertenence el Producto.',
  `productoDescripcion` VARCHAR(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripción del producto.\nUna breve descripción del producto sobre su color, estilo, tamaño, material principal,etc.\nPuede ser omitido su registro.  Si el usuario omite su registro se diligencia con \"N/A\" (No Aplica).',
  `fk_id_ProveedorMaterial` INT(10) NOT NULL COMMENT 'Clave foránea del Identificador del Proveedor del Material para efectos de la realización de informes de Inventariado en Stock.',
  PRIMARY KEY (`id_Producto`),
    FOREIGN KEY (`fk_id_Categoria`)
    REFERENCES `db_ngr_inventario`.`Categoria` (`id_Categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`fk_id_ProveedorMaterial`)
    REFERENCES `db_ngr_inventario`.`ProveedorMaterial` (`id_ProveedorMaterial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `db_ngr_inventario`.`Stock`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Stock` (
  `id_Stock` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Registro en Stock.\nPermite verificar la eliminación de algún registro sobre la actividad de los productos en el Inventario de Stock.',
  `fk_id_Producto` INT(10) NOT NULL COMMENT 'Clave Foránea que menciona el Producto que fue objeto de cambios en su movimiento.',
  `fk_id_EstadoProducto` INT(10) NOT NULL COMMENT 'Clave Foránea del registro sobre el Estado de Movimiento del Producto en el Stock.',
  `stockFechaRegistro` DATETIME NOT NULL COMMENT 'Fecha del Registro de la Actividad en el Stock.',
  `stockCantidad` INT(10) NOT NULL COMMENT 'Cantidad de Producto en el Movimiento Realizado.',
  `fk_usuarioDocumento` INT(20) NOT NULL COMMENT 'Clave Foránea del Documento del usuario que realizó el movimiento.\nSe utiliza para el proceso de verificación de la veracidad de la información en los informes',
  `stockJustificacion` VARCHAR(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Justificación del Movimiento realizado.\nEl usuario que registre un movimiento debe justificar el porqué del mismo, en función del proceso de negocio.',
  PRIMARY KEY (`id_Stock`),
    FOREIGN KEY (`fk_id_Producto`)
    REFERENCES `db_ngr_inventario`.`Producto` (`id_Producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`fk_id_EstadoProducto`)
    REFERENCES `db_ngr_inventario`.`EstadoProducto` (`id_EstadoProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`fk_usuarioDocumento`)
    REFERENCES `db_ngr_inventario`.`Usuario` (`usuarioDocumento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

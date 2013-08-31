CREATE TABLE aplicacion (id BIGINT AUTO_INCREMENT, descripcion VARCHAR(50), codigo VARCHAR(10) UNIQUE, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE app_pais (id_aplicacion BIGINT, id_pais INT, UNIQUE INDEX app_pais_index_idx (id_aplicacion, id_pais), PRIMARY KEY(id_aplicacion, id_pais)) ENGINE = INNODB;
CREATE TABLE encuesta_cabecera_respuestas (id_enc_cab_resp INT AUTO_INCREMENT, nro_boleta VARCHAR(100), fecha_compra DATETIME, id_tienda BIGINT, rut INT, dv VARCHAR(1), nombre_completo VARCHAR(100), ciudad VARCHAR(50), telefono VARCHAR(12), celular VARCHAR(12), email VARCHAR(50), edad INT, sexo VARCHAR(1), compra_para VARCHAR(100), PRIMARY KEY(id_enc_cab_resp)) ENGINE = INNODB;
CREATE TABLE encuesta_preguntas (id_enc_preg INT AUTO_INCREMENT, id_tipo_preg INT, valor_defecto TEXT, desc_pregunta TEXT, estado VARCHAR(3) DEFAULT 'ACT', id_pais INT, INDEX id_tipo_preg_idx (id_tipo_preg), INDEX id_pais_idx (id_pais), PRIMARY KEY(id_enc_preg)) ENGINE = INNODB;
CREATE TABLE encuesta_respuestas (id_enc_resp INT AUTO_INCREMENT, id_enc_preg INT, id_enc_cab_resp INT, valor_resp TEXT, INDEX id_enc_preg_idx (id_enc_preg), INDEX id_enc_cab_resp_idx (id_enc_cab_resp), PRIMARY KEY(id_enc_resp)) ENGINE = INNODB;
CREATE TABLE endpoint (id_endpoint INT AUTO_INCREMENT, cod_endpoint VARCHAR(10), desc_endpoint VARCHAR(40), host VARCHAR(30), puerto INT, resto_url VARCHAR(200), id_pais INT, INDEX id_pais_idx (id_pais), PRIMARY KEY(id_endpoint)) ENGINE = INNODB;
CREATE TABLE funcion (id BIGINT AUTO_INCREMENT, id_aplicacion BIGINT NOT NULL, descripcion VARCHAR(50), codigo VARCHAR(10), UNIQUE INDEX funcion_index_idx (id_aplicacion, codigo), INDEX id_aplicacion_idx (id_aplicacion), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE funcion_pais (id_funcion BIGINT, id_pais INT, UNIQUE INDEX funcion_pais_index_idx (id_funcion, id_pais), PRIMARY KEY(id_funcion, id_pais)) ENGINE = INNODB;
CREATE TABLE oportunidad_cmr (id_opor_cmr INT AUTO_INCREMENT, sku VARCHAR(7), nombre_producto VARCHAR(200), precio_internet BIGINT, unidad_med_int VARCHAR(10), precio_cmr BIGINT, unidad_med_cmr VARCHAR(10), fecha_vig_des DATETIME, fecha_vig_has DATETIME, id_pais INT, INDEX id_pais_idx (id_pais), PRIMARY KEY(id_opor_cmr)) ENGINE = INNODB;
CREATE TABLE pais (id_pais INT, desc_pais VARCHAR(20), sigla VARCHAR(4), signo_moneda VARCHAR(5), con_decimal TINYINT(1) DEFAULT '0', PRIMARY KEY(id_pais)) ENGINE = INNODB;
CREATE TABLE region (id BIGINT AUTO_INCREMENT, id_region INT NOT NULL, desc_region VARCHAR(60), id_pais INT, UNIQUE INDEX region_index_idx (id_region, id_pais), INDEX id_pais_idx (id_pais), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE servicios_por_tienda (id_tienda BIGINT, id_servicio_tienda INT, UNIQUE INDEX servicios_por_tienda_index_idx (id_tienda, id_servicio_tienda), PRIMARY KEY(id_tienda, id_servicio_tienda)) ENGINE = INNODB;
CREATE TABLE servicios_tienda (id_servicio_tienda INT AUTO_INCREMENT, desc_servicio VARCHAR(100), estado VARCHAR(3), PRIMARY KEY(id_servicio_tienda)) ENGINE = INNODB;
CREATE TABLE tienda (id_tienda BIGINT UNIQUE, nombre VARCHAR(70), direccion VARCHAR(100), latitud VARCHAR(25), longitud VARCHAR(25), telefono VARCHAR(20), horario VARCHAR(100), id_region BIGINT, id_tipo_tienda INT UNSIGNED, id_pais INT, gerente VARCHAR(60), busc_producto INT, INDEX id_tipo_tienda_idx (id_tipo_tienda), INDEX id_pais_idx (id_pais), INDEX id_region_idx (id_region), PRIMARY KEY(id_tienda)) ENGINE = INNODB;
CREATE TABLE tipo_pregunta (id_tipo_preg INT AUTO_INCREMENT, desc_tipo_preg VARCHAR(30), PRIMARY KEY(id_tipo_preg)) ENGINE = INNODB;
CREATE TABLE tipo_tienda (id_tipo_tienda INT UNSIGNED AUTO_INCREMENT, desc_tipo_tienda VARCHAR(30), PRIMARY KEY(id_tipo_tienda)) ENGINE = INNODB;
ALTER TABLE app_pais ADD CONSTRAINT app_pais_id_pais_pais_id_pais FOREIGN KEY (id_pais) REFERENCES pais(id_pais) ON DELETE CASCADE;
ALTER TABLE app_pais ADD CONSTRAINT app_pais_id_aplicacion_aplicacion_id FOREIGN KEY (id_aplicacion) REFERENCES aplicacion(id) ON DELETE CASCADE;
ALTER TABLE encuesta_preguntas ADD CONSTRAINT encuesta_preguntas_id_tipo_preg_tipo_pregunta_id_tipo_preg FOREIGN KEY (id_tipo_preg) REFERENCES tipo_pregunta(id_tipo_preg) ON DELETE SET NULL;
ALTER TABLE encuesta_preguntas ADD CONSTRAINT encuesta_preguntas_id_pais_pais_id_pais FOREIGN KEY (id_pais) REFERENCES pais(id_pais) ON DELETE SET NULL;
ALTER TABLE encuesta_respuestas ADD CONSTRAINT encuesta_respuestas_id_enc_preg_encuesta_preguntas_id_enc_preg FOREIGN KEY (id_enc_preg) REFERENCES encuesta_preguntas(id_enc_preg) ON DELETE CASCADE;
ALTER TABLE encuesta_respuestas ADD CONSTRAINT eiei_1 FOREIGN KEY (id_enc_cab_resp) REFERENCES encuesta_cabecera_respuestas(id_enc_cab_resp) ON DELETE CASCADE;
ALTER TABLE endpoint ADD CONSTRAINT endpoint_id_pais_pais_id_pais FOREIGN KEY (id_pais) REFERENCES pais(id_pais) ON DELETE SET NULL;
ALTER TABLE funcion ADD CONSTRAINT funcion_id_aplicacion_aplicacion_id FOREIGN KEY (id_aplicacion) REFERENCES aplicacion(id);
ALTER TABLE funcion_pais ADD CONSTRAINT funcion_pais_id_pais_pais_id_pais FOREIGN KEY (id_pais) REFERENCES pais(id_pais) ON DELETE CASCADE;
ALTER TABLE funcion_pais ADD CONSTRAINT funcion_pais_id_funcion_funcion_id FOREIGN KEY (id_funcion) REFERENCES funcion(id) ON DELETE CASCADE;
ALTER TABLE oportunidad_cmr ADD CONSTRAINT oportunidad_cmr_id_pais_pais_id_pais FOREIGN KEY (id_pais) REFERENCES pais(id_pais);
ALTER TABLE region ADD CONSTRAINT region_id_pais_pais_id_pais FOREIGN KEY (id_pais) REFERENCES pais(id_pais) ON DELETE SET NULL;
ALTER TABLE servicios_por_tienda ADD CONSTRAINT sisi FOREIGN KEY (id_servicio_tienda) REFERENCES servicios_tienda(id_servicio_tienda) ON DELETE CASCADE;
ALTER TABLE servicios_por_tienda ADD CONSTRAINT servicios_por_tienda_id_tienda_tienda_id_tienda FOREIGN KEY (id_tienda) REFERENCES tienda(id_tienda) ON DELETE CASCADE;
ALTER TABLE tienda ADD CONSTRAINT tienda_id_tipo_tienda_tipo_tienda_id_tipo_tienda FOREIGN KEY (id_tipo_tienda) REFERENCES tipo_tienda(id_tipo_tienda);
ALTER TABLE tienda ADD CONSTRAINT tienda_id_region_region_id FOREIGN KEY (id_region) REFERENCES region(id) ON DELETE SET NULL;
ALTER TABLE tienda ADD CONSTRAINT tienda_id_pais_pais_id_pais FOREIGN KEY (id_pais) REFERENCES pais(id_pais) ON DELETE SET NULL;

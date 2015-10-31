-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.17


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema `sys-optica`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `sys-optica`;
USE `sys-optica`;

--
-- Table structure for table `sys-optica`.`citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `interrogatorio` text,
  `exploracion_conj` varchar(45) DEFAULT NULL,
  `esclerotica` varchar(45) DEFAULT NULL,
  `cornea` varchar(45) DEFAULT NULL,
  `parpados` varchar(45) DEFAULT NULL,
  `pestagna` varchar(45) DEFAULT NULL,
  `pupilas` varchar(45) DEFAULT NULL,
  `ref_pup` varchar(45) DEFAULT NULL,
  `av_sc_od` varchar(45) DEFAULT NULL,
  `av_sc_oi` varchar(45) DEFAULT NULL,
  `cap_visual_od` varchar(45) DEFAULT NULL,
  `cap_visual_oi` varchar(45) DEFAULT NULL,
  `av_cc_od` varchar(45) DEFAULT NULL,
  `av_cc_oi` varchar(45) DEFAULT NULL,
  `av_cc_od_esf` varchar(45) DEFAULT NULL,
  `av_cc_od_cil` varchar(45) DEFAULT NULL,
  `av_cc_od_add` varchar(45) DEFAULT NULL,
  `av_cc_oi_esf` varchar(45) DEFAULT NULL,
  `av_cc_oi_cil` varchar(45) DEFAULT NULL,
  `av_cc_oi_add` varchar(45) DEFAULT NULL,
  `oftalmoscopia_od` varchar(45) DEFAULT NULL,
  `oftalmoscopia_oi` varchar(45) DEFAULT NULL,
  `queratometria_od` varchar(45) CHARACTER SET dec8 DEFAULT NULL,
  `queratometria_oi` varchar(200) DEFAULT NULL,
  `motilidad_ocular_od` varchar(200) DEFAULT NULL,
  `motilidad_ocular_oi` varchar(200) DEFAULT NULL,
  `sentido_cromatico` varchar(200) DEFAULT NULL,
  `tonometria_od` varchar(200) DEFAULT NULL,
  `tonometria_oi` varchar(200) DEFAULT NULL,
  `grad_od_esf` varchar(45) DEFAULT NULL,
  `grad_od_cil` varchar(45) DEFAULT NULL,
  `grad_od_eje` varchar(45) DEFAULT NULL,
  `grad_od_av` varchar(45) DEFAULT NULL,
  `grad_oi_esf` varchar(45) DEFAULT NULL,
  `grad_oi_cil` varchar(45) DEFAULT NULL,
  `grad_oi_eje` varchar(45) DEFAULT NULL,
  `grad_oi_av` varchar(45) DEFAULT NULL,
  `grad_di` varchar(45) DEFAULT NULL,
  `grad_add_od` varchar(45) DEFAULT NULL,
  `grad_add_oi` varchar(45) DEFAULT NULL,
  `cerca_od_esf` varchar(45) DEFAULT NULL,
  `cerca_od_cil` varchar(45) DEFAULT NULL,
  `cerca_od_eje` varchar(45) DEFAULT NULL,
  `cerca_oi_esf` varchar(45) DEFAULT NULL,
  `cerca_oi_cil` varchar(45) DEFAULT NULL,
  `cerca_oi_eje` varchar(45) DEFAULT NULL,
  `instrucciones` text,
  `od_esf` varchar(45) DEFAULT NULL,
  `od_cil_eje` varchar(45) DEFAULT NULL,
  `od_add` varchar(45) DEFAULT NULL,
  `od_di` varchar(45) DEFAULT NULL,
  `od_prisma` varchar(45) DEFAULT NULL,
  `od_alt` varchar(45) DEFAULT NULL,
  `od_color` varchar(45) DEFAULT NULL,
  `oi_esf` varchar(45) DEFAULT NULL,
  `oi_cil_eje` varchar(45) DEFAULT NULL,
  `oi_add` varchar(45) DEFAULT NULL,
  `oi_di` varchar(45) DEFAULT NULL,
  `oi_prisma` varchar(45) DEFAULT NULL,
  `oi_alt` varchar(45) DEFAULT NULL,
  `oi_tipo` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `endurecido` varchar(45) DEFAULT NULL,
  `tratam_uv` varchar(45) DEFAULT NULL,
  `tratam_anti_rayas` varchar(45) DEFAULT NULL,
  `tratam_anti_reflejos` varchar(45) DEFAULT NULL,
  `hi_index` varchar(45) DEFAULT NULL,
  `hi_lite` varchar(45) DEFAULT NULL,
  `seg_bif` varchar(45) DEFAULT NULL,
  `aro` varchar(45) DEFAULT NULL,
  `costo_consulta` varchar(45) DEFAULT NULL,
  `examen_realizado` text,
  `fecha_consulta` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys-optica`.`citas`
--

/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
INSERT INTO `citas` (`id`,`id_paciente`,`interrogatorio`,`exploracion_conj`,`esclerotica`,`cornea`,`parpados`,`pestagna`,`pupilas`,`ref_pup`,`av_sc_od`,`av_sc_oi`,`cap_visual_od`,`cap_visual_oi`,`av_cc_od`,`av_cc_oi`,`av_cc_od_esf`,`av_cc_od_cil`,`av_cc_od_add`,`av_cc_oi_esf`,`av_cc_oi_cil`,`av_cc_oi_add`,`oftalmoscopia_od`,`oftalmoscopia_oi`,`queratometria_od`,`queratometria_oi`,`motilidad_ocular_od`,`motilidad_ocular_oi`,`sentido_cromatico`,`tonometria_od`,`tonometria_oi`,`grad_od_esf`,`grad_od_cil`,`grad_od_eje`,`grad_od_av`,`grad_oi_esf`,`grad_oi_cil`,`grad_oi_eje`,`grad_oi_av`,`grad_di`,`grad_add_od`,`grad_add_oi`,`cerca_od_esf`,`cerca_od_cil`,`cerca_od_eje`,`cerca_oi_esf`,`cerca_oi_cil`,`cerca_oi_eje`,`instrucciones`,`od_esf`,`od_cil_eje`,`od_add`,`od_di`,`od_prisma`,`od_alt`,`od_color`,`oi_esf`,`oi_cil_eje`,`oi_add`,`oi_di`,`oi_prisma`,`oi_alt`,`oi_tipo`,`observaciones`,`endurecido`,`tratam_uv`,`tratam_anti_rayas`,`tratam_anti_reflejos`,`hi_index`,`hi_lite`,`seg_bif`,`aro`,`costo_consulta`,`examen_realizado`,`fecha_consulta`,`created_at`,`updated_at`) VALUES 
 (1,1,'Interrogatorio','Exploracion','Esclerotica','Cornea','Parpados','Pestañas','Pupilas','Ref Pup','Ojo Derecho','Ojo Izquierdo','OJO ','OJO','3.2','3.1','11','12','13','23','11','12','Oftal D','Oftal I','Qera D','Qera I','','','','','','','','','','','','','','','','','','','','','','','Limpiar con agua limpia.','11','12','13','14','15','16','17','18','19','20','21','22','23','24','Observaciones','0','0','0','0','0','0','','','','','2015-08-20','2015-08-20 16:39:35','2015-10-31 00:31:35');
INSERT INTO `citas` (`id`,`id_paciente`,`interrogatorio`,`exploracion_conj`,`esclerotica`,`cornea`,`parpados`,`pestagna`,`pupilas`,`ref_pup`,`av_sc_od`,`av_sc_oi`,`cap_visual_od`,`cap_visual_oi`,`av_cc_od`,`av_cc_oi`,`av_cc_od_esf`,`av_cc_od_cil`,`av_cc_od_add`,`av_cc_oi_esf`,`av_cc_oi_cil`,`av_cc_oi_add`,`oftalmoscopia_od`,`oftalmoscopia_oi`,`queratometria_od`,`queratometria_oi`,`motilidad_ocular_od`,`motilidad_ocular_oi`,`sentido_cromatico`,`tonometria_od`,`tonometria_oi`,`grad_od_esf`,`grad_od_cil`,`grad_od_eje`,`grad_od_av`,`grad_oi_esf`,`grad_oi_cil`,`grad_oi_eje`,`grad_oi_av`,`grad_di`,`grad_add_od`,`grad_add_oi`,`cerca_od_esf`,`cerca_od_cil`,`cerca_od_eje`,`cerca_oi_esf`,`cerca_oi_cil`,`cerca_oi_eje`,`instrucciones`,`od_esf`,`od_cil_eje`,`od_add`,`od_di`,`od_prisma`,`od_alt`,`od_color`,`oi_esf`,`oi_cil_eje`,`oi_add`,`oi_di`,`oi_prisma`,`oi_alt`,`oi_tipo`,`observaciones`,`endurecido`,`tratam_uv`,`tratam_anti_rayas`,`tratam_anti_reflejos`,`hi_index`,`hi_lite`,`seg_bif`,`aro`,`costo_consulta`,`examen_realizado`,`fecha_consulta`,`created_at`,`updated_at`) VALUES 
 (4,2,'Interrogatorio.','Exploracion','','','','','','','Ojo Derecho','Ojo Izquierdo','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','0','0','0','0','0','','','','','2015-10-31','2015-10-31 00:33:10','2015-10-31 00:33:10');
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;


--
-- Table structure for table `sys-optica`.`lentes_contacto`
--

DROP TABLE IF EXISTS `lentes_contacto`;
CREATE TABLE `lentes_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cita` varchar(45) DEFAULT NULL,
  `kod` varchar(45) DEFAULT NULL,
  `koi` varchar(45) DEFAULT NULL,
  `diam_dhiv` varchar(45) DEFAULT NULL,
  `ap` varchar(45) DEFAULT NULL,
  `parpados` varchar(45) DEFAULT NULL,
  `esclera` varchar(45) DEFAULT NULL,
  `conjuntiva` varchar(45) DEFAULT NULL,
  `iris` varchar(45) DEFAULT NULL,
  `cornea` varchar(45) DEFAULT NULL,
  `pmma` varchar(45) DEFAULT NULL,
  `hema` varchar(45) DEFAULT NULL,
  `permeable` varchar(45) DEFAULT NULL,
  `proveedor` varchar(45) DEFAULT NULL,
  `soluciones` varchar(45) DEFAULT NULL,
  `datos_lc` text,
  `r_od` varchar(45) DEFAULT NULL,
  `r_oi` varchar(45) DEFAULT NULL,
  `r_tipo` varchar(45) DEFAULT NULL,
  `r_soluciones` text,
  `r_costo` varchar(45) DEFAULT NULL,
  `r_observaciones` text,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys-optica`.`lentes_contacto`
--

/*!40000 ALTER TABLE `lentes_contacto` DISABLE KEYS */;
INSERT INTO `lentes_contacto` (`id`,`id_cita`,`kod`,`koi`,`diam_dhiv`,`ap`,`parpados`,`esclera`,`conjuntiva`,`iris`,`cornea`,`pmma`,`hema`,`permeable`,`proveedor`,`soluciones`,`datos_lc`,`r_od`,`r_oi`,`r_tipo`,`r_soluciones`,`r_costo`,`r_observaciones`,`created_at`,`updated_at`) VALUES 
 (1,'4','Ojo Derecho','Ojo Izquierdo','','','','','','','','','','','','','','','','','','','','2015-10-31 00:33:10','2015-10-31 00:33:10');
/*!40000 ALTER TABLE `lentes_contacto` ENABLE KEYS */;


--
-- Table structure for table `sys-optica`.`pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `primer_nombre` varchar(45) DEFAULT NULL,
  `segundo_nombre` varchar(45) DEFAULT NULL,
  `primer_apellido` varchar(45) DEFAULT NULL,
  `segundo_apellido` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `id_tipo_sangre` int(11) DEFAULT NULL,
  `sexo` tinyint(4) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` varchar(45) DEFAULT NULL,
  `ocupacion` varchar(45) DEFAULT NULL,
  `direccion` text,
  `examen` varchar(45) DEFAULT NULL,
  `diabetes` tinyint(4) DEFAULT NULL,
  `referido_por` varchar(45) DEFAULT NULL,
  `observaciones` text,
  `clasificacion` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys-optica`.`pacientes`
--

/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`id`,`primer_nombre`,`segundo_nombre`,`primer_apellido`,`segundo_apellido`,`cedula`,`id_tipo_sangre`,`sexo`,`celular`,`telefono`,`email`,`fecha_nacimiento`,`ocupacion`,`direccion`,`examen`,`diabetes`,`referido_por`,`observaciones`,`clasificacion`,`created_at`,`updated_at`) VALUES 
 (1,'Edgardo','Joel','Pitti','Sanchez','4-759-372',1,1,'62510254','','','1991-10-28','Ingeniero','','EG',0,'','','PN','2015-08-20 16:39:07','2015-08-20 16:39:07'),
 (2,'Luis','Agustin','Mendoza','Pitti','4-760-768',7,1,'62223344','','','1992-01-31','Ingeniero','','LC',0,'','','PN','2015-08-20 16:43:25','2015-08-20 16:43:25'),
 (3,'Juan','Jose','Saldaña','Barrios','4-532-333',1,1,'','','','2015-10-15','Profesor','','EG',0,'','','PN','2015-10-31 00:28:44','2015-10-31 00:28:44');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;


--
-- Table structure for table `sys-optica`.`tipos_sangre`
--

DROP TABLE IF EXISTS `tipos_sangre`;
CREATE TABLE `tipos_sangre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_sangre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys-optica`.`tipos_sangre`
--

/*!40000 ALTER TABLE `tipos_sangre` DISABLE KEYS */;
INSERT INTO `tipos_sangre` (`id`,`tipo_sangre`) VALUES 
 (1,'A+'),
 (2,'A-'),
 (3,'AB+'),
 (4,'AB-'),
 (5,'B+'),
 (6,'B-'),
 (7,'O+'),
 (8,'O-');
/*!40000 ALTER TABLE `tipos_sangre` ENABLE KEYS */;


--
-- Table structure for table `sys-optica`.`usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  `password_crypt` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys-optica`.`usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`,`user`,`password`,`remember_token`,`password_crypt`,`created_at`,`updated_at`) VALUES 
 (1,'mmedina','$2y$10$eguWzXX356VveDSwDHV7u.PDC0xDog1shjwE9.h/Pwf/hnmSUtg5.','MMdyNZN0KjBlsbpkpy9IgCo5kDVp4JfgCXdTIXskcSBnp6ZpZBmGZca50K93','eyJpdiI6Ik1KZXJ1XC9DS3B1SXR5TzZKMGk5Q25nPT0iLCJ2YWx1ZSI6IjhDRWlYS241TEkzSWtmQ0dEbnZqV2c9PSIsIm1hYyI6ImIyYWIyMmFjZmNmNWQ3NjM2ZmM4NDU0NWQwZjkxMmQ1ZDlkZTBmZmM3MzM0ZjBlMzM2NjhjYmFlNzA5OTBlYjYifQ',NULL,'2015-10-31 00:33:41');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

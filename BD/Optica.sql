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
  `av_sc_od_u` varchar(45) DEFAULT NULL,
  `av_sc_od_d` varchar(45) DEFAULT NULL,
  `av_sc_oi_u` varchar(45) DEFAULT NULL,
  `av_sc_oi_d` varchar(45) DEFAULT NULL,
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
  `queratometria_od` varchar(45) DEFAULT NULL,
  `queratometria_oi` varchar(45) DEFAULT NULL,
  `motilidad_ocular_od` varchar(45) DEFAULT NULL,
  `motilidad_ocular_oi` varchar(45) DEFAULT NULL,
  `sentido_cromatico` varchar(45) DEFAULT NULL,
  `tonometria_od` varchar(45) DEFAULT NULL,
  `tonometria_oi` varchar(45) DEFAULT NULL,
  `grad_od_esf` varchar(45) DEFAULT NULL,
  `grad_od_cil` varchar(45) DEFAULT NULL,
  `grad_od_eje` varchar(45) DEFAULT NULL,
  `grad_od_av_u` varchar(45) DEFAULT NULL,
  `grad_od_av_d` varchar(45) DEFAULT NULL,
  `grad_oi_esf` varchar(45) DEFAULT NULL,
  `grad_oi_cil` varchar(45) DEFAULT NULL,
  `grad_oi_eje` varchar(45) DEFAULT NULL,
  `grad_oi_av_u` varchar(45) DEFAULT NULL,
  `grad_oi_av_d` varchar(45) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys-optica`.`citas`
--

/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys-optica`.`pacientes`
--

/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`id`,`primer_nombre`,`segundo_nombre`,`primer_apellido`,`segundo_apellido`,`cedula`,`id_tipo_sangre`,`sexo`,`celular`,`telefono`,`email`,`fecha_nacimiento`,`ocupacion`,`direccion`,`examen`,`diabetes`,`referido_por`,`observaciones`,`clasificacion`,`created_at`,`updated_at`) VALUES 
 (1,'Edgardo','Joel','Pitti','Sanchez','4-759-372',1,1,'62510254','7743095','ed_joel28@hotmail.com','','Estudiante','San Cristobal','EG',0,'Luis Mendoza','','PN','2015-01-22 16:41:51','2015-01-22 16:54:10');
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
 (3,'B+'),
 (4,'B-'),
 (5,'O+'),
 (6,'O-'),
 (7,'AB+'),
 (8,'AB-');
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
 (1,'manuel','$2y$10$dUmx1ZzSyykOOtgyn/Q0ieGmM2bL8kAzhSo9/MEk7kp69lR61eS/6','yGeuIqhyHNeVUjKW9k5Eh3aLp5zUt3AWreayqmVSajScLmMmrUVLulR2xBDr','eyJpdiI6Ik1KZXJ1XC9DS3B1SXR5TzZKMGk5Q25nPT0iLCJ2YWx1ZSI6IjhDRWlYS241TEkzSWtmQ0dEbnZqV2c9PSIsIm1hYyI6ImIyYWIyMmFjZmNmNWQ3NjM2ZmM4NDU0NWQwZjkxMmQ1ZDlkZTBmZmM3MzM0ZjBlMzM2NjhjYmFlNzA5OTBlYjYifQ',NULL,'2015-02-09 18:49:57');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

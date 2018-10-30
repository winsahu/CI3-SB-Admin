-- MySQL dump 10.16  Distrib 10.2.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: crud_db
-- ------------------------------------------------------
-- Server version	10.2.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','operator','dosen','mahasiswa') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth`
--

LOCK TABLES `auth` WRITE;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` VALUES (1,'admin','*9E2A7102FD4C85D993277B8C9250122C9F9B095C','admin'),(2,'operator','*9E2A7102FD4C85D993277B8C9250122C9F9B095C','operator'),(3,'dosen','*9E2A7102FD4C85D993277B8C9250122C9F9B095C','dosen'),(4,'mahasiswa','*9E2A7102FD4C85D993277B8C9250122C9F9B095C','mahasiswa');
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan','AF'),(2,'Ãland Islands','AX'),(3,'Albania','AL'),(4,'Algeria','DZ'),(5,'American Samoa','AS'),(6,'AndorrA','AD'),(7,'Angola','AO'),(8,'Anguilla','AI'),(9,'Antarctica','AQ'),(10,'Antigua and Barbuda','AG'),(11,'Argentina','AR'),(12,'Armenia','AM'),(13,'Aruba','AW'),(14,'Australia','AU'),(15,'Austria','AT'),(16,'Azerbaijan','AZ'),(17,'Bahamas','BS'),(18,'Bahrain','BH'),(19,'Bangladesh','BD'),(20,'Barbados','BB'),(21,'Belarus','BY'),(22,'Belgium','BE'),(23,'Belize','BZ'),(24,'Benin','BJ'),(25,'Bermuda','BM'),(26,'Bhutan','BT'),(27,'Bolivia','BO'),(28,'Bosnia and Herzegovina','BA'),(29,'Botswana','BW'),(30,'Bouvet Island','BV'),(31,'Brazil','BR'),(32,'British Indian Ocean Territory','IO'),(33,'Brunei Darussalam','BN'),(34,'Bulgaria','BG'),(35,'Burkina Faso','BF'),(36,'Burundi','BI'),(37,'Cambodia','KH'),(38,'Cameroon','CM'),(39,'Canada','CA'),(40,'Cape Verde','CV'),(41,'Cayman Islands','KY'),(42,'Central African Republic','CF'),(43,'Chad','TD'),(44,'Chile','CL'),(45,'China','CN'),(46,'Christmas Island','CX'),(47,'Cocos (Keeling) Islands','CC'),(48,'Colombia','CO'),(49,'Comoros','KM'),(50,'Congo','CG'),(51,'Congo, The Democratic Republic of the-kinshasa','CD'),(52,'Cook Islands','CK'),(53,'Costa Rica','CR'),(54,'Cote D\"Ivoire','CI'),(55,'Croatia','HR'),(56,'Cuba','CU'),(57,'Cyprus','CY'),(58,'Czech Republic','CZ'),(59,'Denmark','DK'),(60,'Djibouti','DJ'),(61,'Dominica','DM'),(62,'Dominican Republic','DO'),(63,'Ecuador','EC'),(64,'Egypt','EG'),(65,'El Salvador','SV'),(66,'Equatorial Guinea','GQ'),(67,'Eritrea','ER'),(68,'Estonia','EE'),(69,'Ethiopia','ET'),(70,'Falkland Islands (Malvinas)','FK'),(71,'Faroe Islands','FO'),(72,'Fiji','FJ'),(73,'Finland','FI'),(74,'France','FR'),(75,'French Guiana','GF'),(76,'French Polynesia','PF'),(77,'French Southern Territories','TF'),(78,'Gabon','GA'),(79,'Gambia','GM'),(80,'Georgia','GE'),(81,'Germany','DE'),(82,'Ghana','GH'),(83,'Gibraltar','GI'),(84,'Greece','GR'),(85,'Greenland','GL'),(86,'Grenada','GD'),(87,'Guadeloupe','GP'),(88,'Guam','GU'),(89,'Guatemala','GT'),(90,'Guernsey','GG'),(91,'Guinea','GN'),(92,'Guinea-Bissau','GW'),(93,'Guyana','GY'),(94,'Haiti','HT'),(95,'Heard Island and Mcdonald Islands','HM'),(96,'Holy See (Vatican City State)','VA'),(97,'Honduras','HN'),(98,'Hong Kong','HK'),(99,'Hungary','HU'),(100,'Iceland','IS'),(101,'India','IN'),(102,'Indonesia','ID'),(103,'Iran, Islamic Republic Of','IR'),(104,'Iraq','IQ'),(105,'Ireland','IE'),(106,'Isle of Man','IM'),(107,'Israel','IL'),(108,'Italy','IT'),(109,'Jamaica','JM'),(110,'Japan','JP'),(111,'Jersey','JE'),(112,'Jordan','JO'),(113,'Kazakhstan','KZ'),(114,'Kenya','KE'),(115,'Kiribati','KI'),(116,'Korea, Democratic People\"S Republic of','KP'),(117,'Korea, Republic of','KR'),(118,'Kuwait','KW'),(119,'Kyrgyzstan','KG'),(120,'Lao People\"S Democratic Republic','LA'),(121,'Latvia','LV'),(122,'Lebanon','LB'),(123,'Lesotho','LS'),(124,'Liberia','LR'),(125,'Libyan Arab Jamahiriya','LY'),(126,'Liechtenstein','LI'),(127,'Lithuania','LT'),(128,'Luxembourg','LU'),(129,'Macao','MO'),(130,'Macedonia, The Former Yugoslav Republic of','MK'),(131,'Madagascar','MG'),(132,'Malawi','MW'),(133,'Malaysia','MY'),(134,'Maldives','MV'),(135,'Mali','ML'),(136,'Malta','MT'),(137,'Marshall Islands','MH'),(138,'Martinique','MQ'),(139,'Mauritania','MR'),(140,'Mauritius','MU'),(141,'Mayotte','YT'),(142,'Mexico','MX'),(143,'Micronesia, Federated States of','FM'),(144,'Moldova, Republic of','MD'),(145,'Monaco','MC'),(146,'Mongolia','MN'),(147,'Montserrat','MS'),(148,'Morocco','MA'),(149,'Mozambique','MZ'),(150,'Myanmar','MM'),(151,'Namibia','NA'),(152,'Nauru','NR'),(153,'Nepal','NP'),(154,'Netherlands','NL'),(155,'Netherlands Antilles','AN'),(156,'New Caledonia','NC'),(157,'New Zealand','NZ'),(158,'Nicaragua','NI'),(159,'Niger','NE'),(160,'Nigeria','NG'),(161,'Niue','NU'),(162,'Norfolk Island','NF'),(163,'Northern Mariana Islands','MP'),(164,'Norway','NO'),(165,'Oman','OM'),(166,'Pakistan','PK'),(167,'Palau','PW'),(168,'Palestinian Territory, Occupied','PS'),(169,'Panama','PA'),(170,'Papua New Guinea','PG'),(171,'Paraguay','PY'),(172,'Peru','PE'),(173,'Philippines','PH'),(174,'Pitcairn','PN'),(175,'Poland','PL'),(176,'Portugal','PT'),(177,'Puerto Rico','PR'),(178,'Qatar','QA'),(179,'Reunion','RE'),(180,'Romania','RO'),(181,'Russian Federation','RU'),(182,'RWANDA','RW'),(183,'Saint Helena','SH'),(184,'Saint Kitts and Nevis','KN'),(185,'Saint Lucia','LC'),(186,'Saint Pierre and Miquelon','PM'),(187,'Saint Vincent and the Grenadines','VC'),(188,'Samoa','WS'),(189,'San Marino','SM'),(190,'Sao Tome and Principe','ST'),(191,'Saudi Arabia','SA'),(192,'Senegal','SN'),(193,'Serbia and Montenegro','CS'),(194,'Seychelles','SC'),(195,'Sierra Leone','SL'),(196,'Singapore','SG'),(197,'Slovakia','SK'),(198,'Slovenia','SI'),(199,'Solomon Islands','SB'),(200,'Somalia','SO'),(201,'South Africa','ZA'),(202,'South Georgia and the South Sandwich Islands','GS'),(203,'Spain','ES'),(204,'Sri Lanka','LK'),(205,'Sudan','SD'),(206,'Suriname','SR'),(207,'Svalbard and Jan Mayen','SJ'),(208,'Swaziland','SZ'),(209,'Sweden','SE'),(210,'Switzerland','CH'),(211,'Syrian Arab Republic','SY'),(212,'Taiwan, Province of China','TW'),(213,'Tajikistan','TJ'),(214,'Tanzania, United Republic of','TZ'),(215,'Thailand','TH'),(216,'Timor-Leste','TL'),(217,'Togo','TG'),(218,'Tokelau','TK'),(219,'Tonga','TO'),(220,'Trinidad and Tobago','TT'),(221,'Tunisia','TN'),(222,'Turkey','TR'),(223,'Turkmenistan','TM'),(224,'Turks and Caicos Islands','TC'),(225,'Tuvalu','TV'),(226,'Uganda','UG'),(227,'Ukraine','UA'),(228,'United Arab Emirates','AE'),(229,'United Kingdom','GB'),(230,'United States','US'),(231,'United States Minor Outlying Islands','UM'),(232,'Uruguay','UY'),(233,'Uzbekistan','UZ'),(234,'Vanuatu','VU'),(235,'Venezuela','VE'),(236,'Viet Nam','VN'),(237,'Virgin Islands, British','VG'),(238,'Virgin Islands, U.S.','VI'),(239,'Wallis and Futuna','WF'),(240,'Western Sahara','EH'),(241,'Yemen','YE'),(242,'Zambia','ZM'),(243,'Zimbabwe','ZW');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (1,'Airi','Satou','female','Tokyo','1964-03-04','1540014492535.jpg'),(2,'Garrett','Winters','male','Tokyo','1989-09-02',NULL),(3,'John','Doe','male','Kansas','1972-10-02',NULL),(4,'Tatyana','Fitzpatrick','male','London','1989-01-01',NULL),(5,'Quinn','Flynn','male','Edinburgh','2002-11-24',''),(6,'Winston','Sahusilawane','male','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','1958-03-14','1539856142496.png'),(7,'Nurlela','Sahusilawane','female','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','1969-06-24','1539944833831.jpg'),(8,'Yemima','Sahusilawane','female','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','2000-03-24','1539950071189.jpg'),(9,'Joshua','Sahusilawane','male','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','2002-11-06','1539958586498.jpg'),(10,'Yehezkiel','Sahusilawane','male','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','2011-02-24','1539958745130.jpg'),(11,'Prescott','Bartlett','male','London','2010-09-15',NULL),(12,'Paul','Byrd','male','New York','2010-10-15',NULL),(13,'Olivia','Liang','female','Singapore','2010-12-15',NULL),(14,'Michelle','House','female','Sidney','2010-05-15',NULL),(16,'Lael','Greer','male','London','2009-09-15',NULL);
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Winston','Sahusilawane','wins-garuda.png'),(2,'Nurlela','Sahusilawane','1539963739544.jpg'),(3,'Yemima','Sahusilawane','1539963879031.jpg'),(4,'Joshua','Sahusilawane','1539964730129.png'),(5,'Yehezkiel','Sahusilawane','1539967546430.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-30 12:18:37

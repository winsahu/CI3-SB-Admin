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
  `gender` enum('pria','wanita') DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (1,'Airi','Satou','wanita','Tokyo','1964-03-04','1541245691500.jpg'),(2,'Garrett','Winters','pria','Tokyo','1989-09-02',NULL),(3,'John','Doe','pria','Kansas','1972-10-02',NULL),(4,'Tatyana','Fitzpatrick','pria','London','1989-01-01',NULL),(5,'Quinn','Flynn','pria','Edinburgh','2002-11-24',''),(6,'Winston','Sahusilawane','pria','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','1958-03-14','1539856142496.png'),(7,'Nurlela','Sahusilawane','wanita','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','1969-06-24','1539944833831.jpg'),(8,'Yemima','Sahusilawane','wanita','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','2000-03-24','1539950071189.jpg'),(9,'Joshua','Sahusilawane','pria','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','2002-11-06','1541246506598.jpg'),(10,'Yehezkiel','Sahusilawane','pria','Jl. Kayu Utara No.25 RT/RW 08/95 Kayu Putih Pulo Gadung Jakarta Timur','2011-02-24','1539958745130.jpg'),(11,'Prescott','Bartlett','pria','London','2010-09-15',NULL),(12,'Paul','Byrd','pria','New York','2010-10-15',NULL),(13,'Olivia','Liang','wanita','Singapore','2010-12-15',NULL),(14,'Michelle','House','wanita','Sidney','2010-05-15',NULL),(15,'Lael','Greer','pria','London','2009-09-15',NULL),(16,'Nama Depan16','Nama Belakang16','pria','Alamat16','2016-02-10',NULL),(17,'Nama Depan17','Nama Belakang17','pria','Alamat17','2002-11-26',NULL),(18,'Nama Depan18','Nama Belakang18','pria','Alamat18','2015-09-26',NULL),(19,'Nama Depan19','Nama Belakang19','pria','Alamat19','2015-07-25',NULL),(20,'Nama Depan20','Nama Belakang20','pria','Alamat20','2015-04-27',''),(21,'Nama Depan21','Nama Belakang21','pria','Alamat21','2015-03-20',NULL),(22,'Nama Depan22','Nama Belakang22','pria','Alamat22','2015-01-16',NULL),(23,'Nama Depan23','Nama Belakang23','pria','Alamat23','2014-11-16',NULL),(24,'Nama Depan24','Nama Belakang24','pria','Alamat24','2014-09-14',NULL),(25,'Nama Depan25','Nama Belakang25','pria','Alamat25','2014-07-13',NULL),(26,'Nama Depan26','Nama Belakang26','pria','Alamat26','2014-05-10',NULL),(27,'Nama Depan27','Nama Belakang27','pria','Alamat27','2014-03-08',NULL),(28,'Nama Depan28','Nama Belakang28','pria','Alamat28','2014-01-04',NULL),(29,'Nama Depan29','Nama Belakang29','pria','Alamat29','2013-11-04',NULL),(30,'Nama Depan30','Nama Belakang30','pria','Alamat30','2013-09-23',NULL),(31,'Nama Depan31','Nama Belakang31','pria','Alamat31','2013-07-01',NULL),(32,'Nama Depan32','Nama Belakang32','pria','Alamat32','2013-04-28',NULL),(33,'Nama Depan33','Nama Belakang33','pria','Alamat33','2013-02-24',NULL),(34,'Nama Depan34','Nama Belakang34','pria','Alamat34','2012-12-23',NULL),(35,'Nama Depan35','Nama Belakang35','pria','Alamat35','2012-10-23',NULL),(36,'Nama Depan36','Nama Belakang36','pria','Alamat36','2012-08-21',NULL),(37,'Nama Depan37','Nama Belakang37','pria','Alamat37','2012-06-19',NULL),(38,'Nama Depan38','Nama Belakang38','pria','Alamat38','2012-04-16',NULL),(39,'Nama Depan39','Nama Belakang39','pria','Alamat39','2012-02-13',NULL),(40,'Nama Depan40','Nama Belakang40','pria','Alamat40','2011-12-12',NULL),(41,'Nama Depan41','Nama Belakang41','pria','Alamat41','2011-10-11',NULL),(42,'Nama Depan42','Nama Belakang42','pria','Alamat42','2011-08-09',NULL),(43,'Nama Depan43','Nama Belakang43','pria','Alamat43','2011-06-07',NULL),(44,'Nama Depan44','Nama Belakang44','pria','Alamat44','2011-04-04',NULL),(45,'Nama Depan45','Nama Belakang45','pria','Alamat45','2011-01-31',NULL),(46,'Nama Depan46','Nama Belakang46','pria','Alamat46','2010-11-29',NULL),(47,'Nama Depan47','Nama Belakang47','pria','Alamat47','2010-09-29',NULL),(48,'Nama Depan48','Nama Belakang48','pria','Alamat48','2010-07-28',NULL),(49,'Nama Depan49','Nama Belakang49','pria','Alamat49','2010-05-26',NULL),(50,'Nama Depan50','Nama Belakang50','pria','Alamat50','2010-03-23',NULL),(51,'Nama Depan51','Nama Belakang51','pria','Alamat51','2010-01-19',NULL),(52,'Nama Depan52','Nama Belakang52','pria','Alamat52','2009-11-17',NULL),(53,'Nama Depan53','Nama Belakang53','pria','Alamat53','2009-09-17',NULL),(54,'Nama Depan54','Nama Belakang54','pria','Alamat54','2009-07-16',NULL),(55,'Nama Depan55','Nama Belakang55','pria','Alamat55','2009-05-14',NULL),(56,'Nama Depan56','Nama Belakang56','pria','Alamat56','2009-03-11',NULL),(57,'Nama Depan57','Nama Belakang57','pria','Alamat57','2009-01-07',NULL),(58,'Nama Depan58','Nama Belakang58','pria','Alamat58','2008-11-05',NULL),(59,'Nama Depan59','Nama Belakang59','pria','Alamat59','2008-09-05',NULL),(60,'Nama Depan60','Nama Belakang60','pria','Alamat60','2008-07-04',NULL),(61,'Nama Depan61','Nama Belakang61','pria','Alamat61','2008-05-02',NULL),(62,'Nama Depan62','Nama Belakang62','pria','Alamat62','2008-02-28',NULL),(63,'Nama Depan63','Nama Belakang63','pria','Alamat63','2007-12-27',NULL),(64,'Nama Depan64','Nama Belakang64','pria','Alamat64','2007-10-25',NULL),(65,'Nama Depan65','Nama Belakang65','pria','Alamat65','2007-08-24',NULL),(66,'Nama Depan66','Nama Belakang66','pria','Alamat66','2007-06-22',NULL),(67,'Nama Depan67','Nama Belakang67','pria','Alamat67','2007-04-20',NULL),(68,'Nama Depan68','Nama Belakang68','pria','Alamat68','2007-02-15',NULL),(69,'Nama Depan69','Nama Belakang69','pria','Alamat69','2006-12-14',NULL),(70,'Nama Depan70','Nama Belakang70','pria','Alamat70','2006-10-12',NULL),(71,'Nama Depan71','Nama Belakang71','pria','Alamat71','2006-08-12',NULL),(72,'Nama Depan72','Nama Belakang72','pria','Alamat72','2006-06-10',NULL),(73,'Nama Depan73','Nama Belakang73','pria','Alamat73','2006-04-08',NULL),(74,'Nama Depan74','Nama Belakang74','pria','Alamat74','2006-02-03',NULL),(75,'Nama Depan75','Nama Belakang75','pria','Alamat75','2005-12-02',NULL),(76,'Nama Depan76','Nama Belakang76','pria','Alamat76','2005-09-30',NULL),(77,'Nama Depan77','Nama Belakang77','pria','Alamat77','2005-07-31',NULL),(78,'Nama Depan78','Nama Belakang78','pria','Alamat78','2005-05-29',NULL),(79,'Nama Depan79','Nama Belakang79','pria','Alamat79','2005-03-27',NULL),(80,'Nama Depan80','Nama Belakang80','pria','Alamat80','2005-01-22',NULL),(81,'Nama Depan81','Nama Belakang81','pria','Alamat81','2004-11-20',NULL),(82,'Nama Depan82','Nama Belakang82','pria','Alamat82','2004-09-18',NULL),(83,'Nama Depan83','Nama Belakang83','pria','Alamat83','2004-07-19',NULL),(84,'Nama Depan84','Nama Belakang84','pria','Alamat84','2004-05-17',NULL),(85,'Nama Depan85','Nama Belakang85','pria','Alamat85','2004-03-15',NULL),(86,'Nama Depan86','Nama Belakang86','pria','Alamat86','2004-01-11',NULL),(87,'Nama Depan87','Nama Belakang87','pria','Alamat87','2003-11-09',NULL),(88,'Nama Depan88','Nama Belakang88','pria','Alamat88','2003-09-07',NULL),(89,'Nama Depan89','Nama Belakang89','pria','Alamat89','2003-07-07',NULL),(90,'Nama Depan90','Nama Belakang90','pria','Alamat90','2003-05-05',NULL),(91,'Nama Depan91','Nama Belakang91','pria','Alamat91','2003-03-03',NULL),(92,'Nama Depan92','Nama Belakang92','pria','Alamat92','2002-12-29',NULL),(93,'Nama Depan93','Nama Belakang93','pria','Alamat93','2002-10-27',NULL),(94,'Nama Depan94','Nama Belakang94','pria','Alamat94','2002-08-25',NULL),(95,'Nama Depan95','Nama Belakang95','pria','Alamat95','2002-06-25',NULL),(96,'Nama Depan96','Nama Belakang96','pria','Alamat96','2002-04-23',NULL),(97,'Nama Depan97','Nama Belakang97','pria','Alamat97','2002-02-19',NULL),(98,'Nama Depan98','Nama Belakang98','pria','Alamat98','2001-12-17',NULL),(99,'Nama Depan99','Nama Belakang99','pria','Alamat99','2001-10-15',NULL),(100,'Nama Depan100','Nama Belakang100','pria','Alamat100','2001-08-13',NULL),(101,'Nama Depan101','Nama Belakang101','pria','Alamat101','2001-06-13',NULL),(102,'Nama Depan102','Nama Belakang102','pria','Alamat102','2001-04-11',NULL),(103,'Nama Depan103','Nama Belakang103','pria','Alamat103','2001-02-07',NULL),(104,'Nama Depan104','Nama Belakang104','pria','Alamat104','2000-12-05',NULL),(105,'Nama Depan105','Nama Belakang105','pria','Alamat105','2000-10-03',NULL),(106,'Nama Depan106','Nama Belakang106','pria','Alamat106','2000-08-01',NULL),(107,'Nama Depan107','Nama Belakang107','pria','Alamat107','2000-06-01',NULL),(108,'Nama Depan108','Nama Belakang108','pria','Alamat108','2000-03-30',NULL),(109,'Nama Depan109','Nama Belakang109','pria','Alamat109','2000-01-27',NULL),(110,'Nama Depan110','Nama Belakang110','pria','Alamat110','1999-11-24',NULL),(111,'Nama Depan111','Nama Belakang111','pria','Alamat111','1999-09-22',NULL),(112,'Nama Depan112','Nama Belakang112','pria','Alamat112','1999-07-21',NULL),(113,'Nama Depan113','Nama Belakang113','pria','Alamat113','1999-05-20',NULL),(114,'Nama Depan114','Nama Belakang114','pria','Alamat114','1999-03-18',NULL),(115,'Nama Depan115','Nama Belakang115','pria','Alamat115','1999-01-14',NULL),(116,'Nama Depan116','Nama Belakang116','pria','Alamat116','1998-11-11',NULL),(117,'Nama Depan117','Nama Belakang117','pria','Alamat117','1998-09-09',NULL),(118,'Nama Depan118','Nama Belakang118','pria','Alamat118','1998-07-08',NULL),(119,'Nama Depan119','Nama Belakang119','pria','Alamat119','1998-05-08',NULL),(120,'Nama Depan120','Nama Belakang120','pria','Alamat120','1998-03-06',NULL),(121,'Nama Depan121','Nama Belakang121','pria','Alamat121','1998-01-02',NULL),(122,'Nama Depan122','Nama Belakang122','pria','Alamat122','1997-10-30',NULL),(123,'Nama Depan123','Nama Belakang123','pria','Alamat123','1997-08-28',NULL),(124,'Nama Depan124','Nama Belakang124','pria','Alamat124','1997-06-26',NULL),(125,'Nama Depan125','Nama Belakang125','pria','Alamat125','1997-04-26',NULL),(126,'Nama Depan126','Nama Belakang126','pria','Alamat126','1997-02-22',NULL),(127,'Nama Depan127','Nama Belakang127','pria','Alamat127','1996-12-21',NULL),(128,'Nama Depan128','Nama Belakang128','pria','Alamat128','1996-10-18',NULL),(129,'Nama Depan129','Nama Belakang129','pria','Alamat129','1996-08-16',NULL),(130,'Nama Depan130','Nama Belakang130','pria','Alamat130','1996-06-14',NULL),(131,'Nama Depan131','Nama Belakang131','pria','Alamat131','1996-04-14',NULL),(132,'Nama Depan132','Nama Belakang132','pria','Alamat132','1996-02-11',NULL),(133,'Nama Depan133','Nama Belakang133','pria','Alamat133','1995-12-10',NULL),(134,'Nama Depan134','Nama Belakang134','pria','Alamat134','1995-10-07',NULL),(135,'Nama Depan135','Nama Belakang135','pria','Alamat135','1995-08-05',NULL),(136,'Nama Depan136','Nama Belakang136','pria','Alamat136','1995-06-03',NULL),(137,'Nama Depan137','Nama Belakang137','pria','Alamat137','1995-04-02',NULL),(138,'Nama Depan138','Nama Belakang138','pria','Alamat138','1995-01-29',NULL),(139,'Nama Depan139','Nama Belakang139','pria','Alamat139','1994-11-27',NULL),(140,'Nama Depan140','Nama Belakang140','pria','Alamat140','1994-09-24',NULL),(141,'Nama Depan141','Nama Belakang141','pria','Alamat141','1994-07-23',NULL),(142,'Nama Depan142','Nama Belakang142','pria','Alamat142','1994-05-21',NULL),(143,'Nama Depan143','Nama Belakang143','pria','Alamat143','1994-03-21',NULL),(144,'Nama Depan144','Nama Belakang144','pria','Alamat144','1994-01-17',NULL),(145,'Nama Depan145','Nama Belakang145','pria','Alamat145','1993-11-15',NULL),(146,'Nama Depan146','Nama Belakang146','pria','Alamat146','1993-09-12',NULL),(147,'Nama Depan147','Nama Belakang147','pria','Alamat147','1993-07-11',NULL),(148,'Nama Depan148','Nama Belakang148','pria','Alamat148','1993-05-09',NULL),(149,'Nama Depan149','Nama Belakang149','pria','Alamat149','1993-03-09',NULL),(150,'Nama Depan150','Nama Belakang150','pria','Alamat150','1993-01-05',NULL),(151,'Nama Depan151','Nama Belakang151','pria','Alamat151','1992-11-03',NULL),(152,'Nama Depan152','Nama Belakang152','pria','Alamat152','1992-08-31',NULL),(153,'Nama Depan153','Nama Belakang153','pria','Alamat153','1992-06-29',NULL),(154,'Nama Depan154','Nama Belakang154','pria','Alamat154','1992-04-27',NULL),(155,'Nama Depan155','Nama Belakang155','pria','Alamat155','1992-02-26',NULL),(156,'Nama Depan156','Nama Belakang156','pria','Alamat156','1991-12-25',NULL),(157,'Nama Depan157','Nama Belakang157','pria','Alamat157','1991-10-23',NULL),(158,'Nama Depan158','Nama Belakang158','pria','Alamat158','1991-08-20',NULL),(159,'Nama Depan159','Nama Belakang159','pria','Alamat159','1991-06-18',NULL),(160,'Nama Depan160','Nama Belakang160','pria','Alamat160','1991-04-16',NULL),(161,'Nama Depan161','Nama Belakang161','pria','Alamat161','1991-02-13',NULL),(162,'Nama Depan162','Nama Belakang162','pria','Alamat162','1990-12-12',NULL),(163,'Nama Depan163','Nama Belakang163','pria','Alamat163','1990-10-10',NULL),(164,'Nama Depan164','Nama Belakang164','pria','Alamat164','1990-08-07',NULL),(165,'Nama Depan165','Nama Belakang165','pria','Alamat165','1990-06-05',NULL),(166,'Nama Depan166','Nama Belakang166','pria','Alamat166','1990-04-03',NULL),(167,'Nama Depan167','Nama Belakang167','pria','Alamat167','1990-02-01',NULL),(168,'Nama Depan168','Nama Belakang168','pria','Alamat168','1989-11-30',NULL),(169,'Nama Depan169','Nama Belakang169','pria','Alamat169','1989-09-28',NULL),(170,'Nama Depan170','Nama Belakang170','pria','Alamat170','1989-07-26',NULL),(171,'Nama Depan171','Nama Belakang171','pria','Alamat171','1989-05-24',NULL),(172,'Nama Depan172','Nama Belakang172','pria','Alamat172','1989-03-22',NULL),(173,'Nama Depan173','Nama Belakang173','pria','Alamat173','1989-01-20',NULL),(174,'Nama Depan174','Nama Belakang174','pria','Alamat174','1988-11-18',NULL),(175,'Nama Depan175','Nama Belakang175','pria','Alamat175','1988-09-16',NULL),(176,'Nama Depan176','Nama Belakang176','pria','Alamat176','1988-07-14',NULL),(177,'Nama Depan177','Nama Belakang177','pria','Alamat177','1988-05-12',NULL),(178,'Nama Depan178','Nama Belakang178','pria','Alamat178','1988-03-10',NULL),(179,'Nama Depan179','Nama Belakang179','pria','Alamat179','1988-01-09',NULL),(180,'Nama Depan180','Nama Belakang180','pria','Alamat180','1987-11-07',NULL),(181,'Nama Depan181','Nama Belakang181','pria','Alamat181','1987-09-05',NULL),(182,'Nama Depan182','Nama Belakang182','pria','Alamat182','1987-07-03',NULL),(183,'Nama Depan183','Nama Belakang183','pria','Alamat183','1987-05-01',NULL),(184,'Nama Depan184','Nama Belakang184','pria','Alamat184','1987-02-27',NULL),(185,'Nama Depan185','Nama Belakang185','pria','Alamat185','1986-12-27',NULL),(186,'Nama Depan186','Nama Belakang186','pria','Alamat186','1986-10-25',NULL),(187,'Nama Depan187','Nama Belakang187','pria','Alamat187','1986-08-23',NULL),(188,'Nama Depan188','Nama Belakang188','pria','Alamat188','1986-06-20',NULL),(189,'Nama Depan189','Nama Belakang189','pria','Alamat189','1986-04-18',NULL),(190,'Nama Depan190','Nama Belakang190','pria','Alamat190','1986-02-14',NULL),(191,'Nama Depan191','Nama Belakang191','pria','Alamat191','1985-12-15',NULL),(192,'Nama Depan192','Nama Belakang192','pria','Alamat192','1985-10-13',NULL),(193,'Nama Depan193','Nama Belakang193','pria','Alamat193','1985-08-11',NULL),(194,'Nama Depan194','Nama Belakang194','pria','Alamat194','1985-06-08',NULL),(195,'Nama Depan195','Nama Belakang195','pria','Alamat195','1985-04-06',NULL),(196,'Nama Depan196','Nama Belakang196','pria','Alamat196','1985-02-02',NULL),(197,'Nama Depan197','Nama Belakang197','pria','Alamat197','1984-12-03',NULL),(198,'Nama Depan198','Nama Belakang198','pria','Alamat198','1984-10-01',NULL),(199,'Nama Depan199','Nama Belakang199','pria','Alamat199','1984-07-30',NULL),(200,'Nama Depan200','Nama Belakang200','pria','Alamat200','1984-05-27',NULL),(201,'Nama Depan201','Nama Belakang201','pria','Alamat201','1984-03-25',NULL),(202,'Nama Depan202','Nama Belakang202','pria','Alamat202','1984-01-22',NULL),(203,'Nama Depan203','Nama Belakang203','pria','Alamat203','1983-11-22',NULL),(204,'Nama Depan204','Nama Belakang204','pria','Alamat204','1983-09-20',NULL),(205,'Nama Depan205','Nama Belakang205','pria','Alamat205','1983-07-19',NULL),(206,'Nama Depan206','Nama Belakang206','pria','Alamat206','1983-05-16',NULL),(207,'Nama Depan207','Nama Belakang207','pria','Alamat207','1983-03-14',NULL),(208,'Nama Depan208','Nama Belakang208','pria','Alamat208','1983-01-10',NULL),(209,'Nama Depan209','Nama Belakang209','pria','Alamat209','1982-11-09',NULL),(210,'Nama Depan210','Nama Belakang210','pria','Alamat210','1982-09-07',NULL),(211,'Nama Depan211','Nama Belakang211','pria','Alamat211','1982-07-06',NULL),(212,'Nama Depan212','Nama Belakang212','pria','Alamat212','1982-05-03',NULL),(213,'Nama Depan213','Nama Belakang213','pria','Alamat213','1982-03-01',NULL),(214,'Nama Depan214','Nama Belakang214','pria','Alamat214','1981-12-28',NULL),(215,'Nama Depan215','Nama Belakang215','pria','Alamat215','1981-10-28',NULL),(216,'Nama Depan216','Nama Belakang216','pria','Alamat216','1981-08-26',NULL),(217,'Nama Depan217','Nama Belakang217','pria','Alamat217','1981-06-24',NULL),(218,'Nama Depan218','Nama Belakang218','pria','Alamat218','1981-04-21',NULL),(219,'Nama Depan219','Nama Belakang219','pria','Alamat219','1981-02-17',NULL),(220,'Nama Depan220','Nama Belakang220','pria','Alamat220','1980-12-16',NULL),(221,'Nama Depan221','Nama Belakang221','pria','Alamat221','1980-10-16',NULL),(222,'Nama Depan222','Nama Belakang222','pria','Alamat222','1980-08-14',NULL),(223,'Nama Depan223','Nama Belakang223','pria','Alamat223','1980-06-12',NULL),(224,'Nama Depan224','Nama Belakang224','pria','Alamat224','1980-04-09',NULL),(225,'Nama Depan225','Nama Belakang225','pria','Alamat225','1980-02-06',NULL),(226,'Nama Depan226','Nama Belakang226','pria','Alamat226','1979-12-05',NULL),(227,'Nama Depan227','Nama Belakang227','pria','Alamat227','1979-10-05',NULL),(228,'Nama Depan228','Nama Belakang228','pria','Alamat228','1979-08-03',NULL),(229,'Nama Depan229','Nama Belakang229','pria','Alamat229','1979-06-01',NULL),(230,'Nama Depan230','Nama Belakang230','pria','Alamat230','1979-03-29',NULL),(231,'Nama Depan231','Nama Belakang231','pria','Alamat231','1979-01-25',NULL),(232,'Nama Depan232','Nama Belakang232','pria','Alamat232','1978-11-23',NULL),(233,'Nama Depan233','Nama Belakang233','pria','Alamat233','1978-09-22',NULL),(234,'Nama Depan234','Nama Belakang234','pria','Alamat234','1978-07-21',NULL),(235,'Nama Depan235','Nama Belakang235','pria','Alamat235','1978-05-19',NULL),(236,'Nama Depan236','Nama Belakang236','pria','Alamat236','1978-03-16',NULL),(237,'Nama Depan237','Nama Belakang237','pria','Alamat237','1978-01-12',NULL),(238,'Nama Depan238','Nama Belakang238','pria','Alamat238','1977-11-10',NULL),(239,'Nama Depan239','Nama Belakang239','pria','Alamat239','1977-09-10',NULL),(240,'Nama Depan240','Nama Belakang240','pria','Alamat240','1977-07-09',NULL),(241,'Nama Depan241','Nama Belakang241','pria','Alamat241','1977-05-07',NULL),(242,'Nama Depan242','Nama Belakang242','pria','Alamat242','1977-03-04',NULL),(243,'Nama Depan243','Nama Belakang243','pria','Alamat243','1976-12-31',NULL),(244,'Nama Depan244','Nama Belakang244','pria','Alamat244','1976-10-29',NULL),(245,'Nama Depan245','Nama Belakang245','pria','Alamat245','1976-08-29',NULL),(246,'Nama Depan246','Nama Belakang246','pria','Alamat246','1976-06-27',NULL),(247,'Nama Depan247','Nama Belakang247','pria','Alamat247','1976-04-25',NULL),(248,'Nama Depan248','Nama Belakang248','pria','Alamat248','1976-02-21',NULL),(249,'Nama Depan249','Nama Belakang249','pria','Alamat249','1975-12-20',NULL),(251,'Prabowo','Subiyanto','pria','Jakarta Selatan','1950-10-25',NULL);
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `nim` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES ('TI102132','Nuris Akbar','2017-09-02','089699935552'),('TI102133','M Hafidz Muzaki','2017-09-02','089699935553'),('TI102134','Wahyu Safrizal','2017-09-03','089699935554'),('TI102135','Irma Muliana','2017-09-03','089699935555');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
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

-- Dump completed on 2018-11-03 19:14:38

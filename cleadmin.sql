-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cleadmin
-- ------------------------------------------------------
-- Server version	5.5.54-0+deb8u1

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
-- Table structure for table `licences`
--

DROP TABLE IF EXISTS `licences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enseigne` varchar(255) NOT NULL,
  `site` varchar(100) DEFAULT NULL,
  `siret` varchar(20) NOT NULL,
  `nombre_postes` int(11) NOT NULL,
  `duree_utilisation` int(11) DEFAULT NULL,
  `licence` varchar(20) NOT NULL,
  `code_licence` varchar(64) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licences`
--

LOCK TABLES `licences` WRITE;
/*!40000 ALTER TABLE `licences` DISABLE KEYS */;
INSERT INTO `licences` VALUES (1,'Klikx',NULL,'123456789',3,12,'O0BFRNJQ','U6HKWORK',1,1,'2017-05-09 14:03:13','2017-05-06 17:33:13','2017-05-09 14:03:13'),(2,'Jamel',NULL,'1232466461',3,12,'3VURC7YO','ITMZ50KA',1,1,'2017-05-09 13:03:35','2017-05-07 00:57:11','2017-05-09 13:03:35'),(3,'DEMO KLIKX',NULL,'78842364800013',2,12,'HPQKQJGS','YS4DYTTQ',1,2,'2017-05-25 18:08:34','2017-05-09 12:09:17','2017-05-25 18:08:34'),(4,'GELATI NINO','AUBAGNE','31575009100185',3,12,'E2ZM3FHB','VQ9ZIVFB',1,1,NULL,'2017-05-09 13:04:17','2017-05-12 15:51:27'),(5,'DEMO KLIKX',NULL,'79802122600013',2,12,'Demo','Demo',1,1,NULL,'2017-05-09 14:02:44','2017-05-15 17:35:21'),(6,'L\'ARLECCHINO',NULL,'50410969500024',1,12,'TXJCN3MP','IVSGGZC2',1,1,NULL,'2017-05-09 19:56:41','2017-05-09 19:56:41'),(7,'FOOD LOVER',NULL,'82343646400015',1,12,'HJXAPN7U','P7OHL20F',1,1,NULL,'2017-05-09 19:57:51','2017-05-09 19:57:51'),(8,'L\'ITALIEN EN PROVENCE',NULL,'48798948500015',1,12,'UDPQH1VU','VCISJFE4',1,1,NULL,'2017-05-09 19:58:53','2017-05-09 19:58:53'),(9,'CAFE BOVO',NULL,'52756121100022',1,12,'AGR3KNNB','K91AYX1X',1,1,NULL,'2017-05-09 19:59:48','2017-05-09 19:59:48'),(10,'LE CEDRUS',NULL,'50463914700025',1,12,'ODJULXWS','KXSQJJRH',1,1,NULL,'2017-05-09 20:04:18','2017-05-09 20:04:18'),(11,'TAHITI PLAGE',NULL,'82026570000014',1,12,'MSZAPG69','JBBZDDXS',1,1,NULL,'2017-05-09 20:05:32','2017-05-09 20:05:32'),(12,'L\'ARTISANE',NULL,'331 018 135 00011',1,12,'B0IBL8FM','QUE74SEC',1,1,NULL,'2017-05-09 20:06:33','2017-05-12 12:39:34'),(13,'LA PAILLOTE',NULL,'35373151600020',1,6,'MLL6ZWDS','OBACVOUS',1,1,NULL,'2017-05-09 20:10:36','2017-05-09 20:10:36'),(14,'LE KIOSQUE',NULL,'35373151600012',1,6,'UT5SVQD8','E9ZGTRKX',1,1,NULL,'2017-05-09 20:10:59','2017-05-09 20:10:59'),(15,'L\'ESCALE LA CIOTAT',NULL,'82886587300016',1,6,'N58NU4Z9','HTUZFNHP',1,1,NULL,'2017-05-09 20:16:11','2017-05-09 20:16:11'),(16,'LE RESTO',NULL,'82887356200015',1,12,'Z0EE4EJO','0GIH9M11',1,1,NULL,'2017-05-09 20:20:17','2017-05-09 20:20:17'),(17,'L\'OLYMPE',NULL,'41269433300029',1,12,'TXLNSFAY','PBXREDR6',1,1,NULL,'2017-05-09 20:29:57','2017-05-09 20:29:57'),(18,'LE GASTON CREMIEUX',NULL,'82494950700019',1,12,'LUAYCB0W','JQFTDF8S',1,1,NULL,'2017-05-09 20:31:12','2017-05-12 23:40:43'),(19,'Traficoo',NULL,'1234567890',1,12,'HTQMVFQG','D4YSSKQM',0,3,'2017-05-25 18:08:12','2017-05-10 20:15:37','2017-05-25 18:08:12'),(20,'Test2',NULL,'12345655',1,12,'INUKJBE5','XAJ3TFJZ',1,3,NULL,'2017-05-10 20:19:27','2017-05-25 17:40:40'),(21,'LE GYPSOPHILE',NULL,'488 895 459 00011',1,12,'3G04LIWN','L9FPI9FG',1,1,NULL,'2017-05-15 09:04:30','2017-05-15 09:04:30'),(22,'LE FAIR PLAY',NULL,'491 342 648 00012',3,12,'W5UCAYJZ','15MIPRDE',1,1,NULL,'2017-05-15 09:16:33','2017-05-15 09:16:33'),(23,'test olivier',NULL,'12345678900010',1,1,'L5DPZBLY','9RJQSY7G',1,1,'2017-05-15 16:10:52','2017-05-15 16:10:26','2017-05-15 16:10:52'),(24,'test olivier',NULL,'123123123',1,1,'K5YOY0PV','BUA8X1WM',1,4,'2017-05-15 16:16:25','2017-05-15 16:11:53','2017-05-15 16:16:25');
/*!40000 ALTER TABLE `licences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Olivier','olivier@klikx.lol',NULL,NULL,NULL,NULL,'$2y$10$QQuthPQxMAPgor2ZFUI.Y.wc/ESrb0LFkYgOF3H5/EhDGNLf8vPoK','hgTjjOigcLHbHwKyoI6dfcAPttKd36m9NjCMUhAdJHZ08yGk7iMxo6ETqQvz','admin',NULL,'2017-05-01 13:25:19','2017-05-01 13:25:19'),(2,'CBSA','philippe.cbsa06@gmail.com',NULL,NULL,'06220','Vallauris','$2y$10$RPhCfRxiLMxhuFSk6TF0kuPAESk9jIrOkWElhHAkhqG5iHrULvTaq','0VGb14ikv6oBIWKIPukUy8lmHNW9NaW52s1qMgYwDPJXzQqxkXyr09dxQzi0','revendeur','2017-05-25 18:10:08','2017-05-09 10:08:25','2017-05-25 16:10:08'),(3,'Squirro','hello@squirro.io','We Do!','Tunis','1003','Tunis','$2y$10$qtsZTzfzkqjUyQliWSOyKOdjvA.NWQp7q6/mmkBDVeg3SNM1rjhbS','iGM2IaeYjveziQdzy7TWOrx9KFBdgqvkw0L1y8nIsMKeYrebNuChypN3iW9e','revendeur',NULL,'2017-05-10 18:15:05','2017-05-10 18:15:05'),(4,'olivier test','olivierbouvet.perso@gmail.com',NULL,NULL,NULL,NULL,'$2y$10$aEfuBFVtLef30q.uv0.o8.hteZK.DcevSq8781DS07DBw0/1LMs4W','3Zep6xJrRQZkq3Sp5Gy2Z68XciyYWk1TRVG3IeVRyqTYG9lu0EldUxeIbrlT','revendeur','2017-05-15 16:15:44','2017-05-15 14:09:39','2017-05-15 14:15:44');
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

-- Dump completed on 2017-05-25 18:44:55

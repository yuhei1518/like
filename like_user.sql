CREATE DATABASE  IF NOT EXISTS `like` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `like`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: like
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `coment` varchar(200) NOT NULL,
  `anime` varchar(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `hyouji` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('0000-00-00 00:00:00','ｄｄ','ｄｄ','ｄｄｄ','',13,0),('0000-00-00 00:00:00','橋本','yuhei','おはよう','',14,0),('0000-00-00 00:00:00','ukiuki','rrrrr','kyokyokyokyo','',15,0),('0000-00-00 00:00:00','ｓｓ','ｓｓ','ｓｓ','',17,0),('0000-00-00 00:00:00','上地','okinawa','なんくるないさ～','',18,0),('0000-00-00 00:00:00','ｄｒｒ','ｒｑｒｑｗｒｑ','えｔ５う','',19,0),('2024-02-28 12:17:41','野間','ガンダム','SEED','',20,1),('2024-02-28 12:20:10','ｄｄｄｄｄ','ｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄ','ｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄｄ','',21,0),('2024-02-28 13:39:46','ゆうへい','yuhei','まあまあ','僕の心のやばいやつ',22,0),('2024-02-28 14:10:30','赤木','akagi','B級映画はおもろい','トラブる',23,1),('2024-02-28 15:02:22','はしもと','hashimoto','フリーター','シャングリラフロンティア',24,0),('2024-02-28 16:17:51','ドナルド','ほほほほほほ','ケンタッキーには負けん','ジャンクフード戦士ﾏｸﾀﾞｰﾅｰ',25,1),('2024-02-28 16:21:11','1','1','1','1',26,0),('2024-02-29 09:59:08','宮下','ｇｇｇｇｇｇｇｇ','萌え萌えキュン','アンパンマン',27,0),('2024-02-29 11:14:05','宮下','ｈｈｈｈｈｈ','ぽくぽくちん','一休さん',28,1),('2024-02-29 11:25:39','吉村','ｋｋｋｋｋｋｋｋｋｋ','私の言うことは絶対よ！！！','リゼロ',29,1),('2024-02-29 11:43:25','ｌｌ','ｌｌ','ｌｌ','ｌｌ',30,0),('2024-03-01 15:33:12','ｓ','ｓｓ','ｓ','ｓ',31,0),('2024-05-27 14:49:49','ｆｆｆｆｆ','ｆｆｆｆｆ','ｆｆｆｆｆ','ｆｆｆｆ',32,0),('2024-05-27 14:56:53','は','ふ','ひょ','ふ',33,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-27 17:15:22

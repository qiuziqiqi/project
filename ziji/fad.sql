-- MySQL dump 10.13  Distrib 5.5.40, for Win32 (x86)
--
-- Host: localhost    Database: projectfad
-- ------------------------------------------------------
-- Server version	5.5.40

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'root','root'),(3,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) DEFAULT NULL,
  `bname` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (12,10,'南极人'),(13,10,'北极绒'),(14,10,'七匹狼'),(15,11,'爱仕达'),(16,11,'艾格'),(17,11,'红袖'),(18,11,'太平鸟');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `brandid` int(11) DEFAULT NULL,
  `price` float(7,2) DEFAULT '0.00',
  `content` text,
  `express` float(7,2) DEFAULT '0.00',
  `pubtime` int(11) DEFAULT NULL,
  `typestr` varchar(100) DEFAULT NULL,
  `state` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (8,'公主裙',15,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\r\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \r\n性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775705,'>11>12>',9),(7,'少女灰',15,200.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\r\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \r\n性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775567,'>11>12>',9),(9,'公主裙',15,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\r\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \r\n性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775721,'>11>12>',6),(10,'公主裙',15,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\r\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \r\n性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775725,'>11>12>',6),(11,'公主裙',15,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\r\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \r\n性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775732,'>11>12>',3),(12,'蓝色裙',18,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\r\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \r\n性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775734,'>11>12>',3),(13,'公主裙',17,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\r\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \r\n性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775736,'>11>12>',0),(14,'印度风',15,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。\n腰带细节：宽腰带金属质感优质有厚重感，腰带部分弹性优秀收紧腰部！ 精致金属腰带扣，坚固实用。 \n性格可人的动物纹腰带设计，展现了女性的线条美  \n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',100.00,1478775738,'>11>12>',0),(15,'黑夹克',12,123.00,'312312312',12312.00,1479354005,'>10>13>',0),(16,'格子衫',12,123.00,'312312312',12312.00,1479354030,'>10>16>',0),(17,'橙色袖',12,123.00,'312312312',12312.00,1479354070,'>10>17>',0),(18,'绿衬衫',14,222.00,'22',22.00,1479383448,'>10>13>',0),(19,'黑卫衣',14,222.00,'22',22.00,1479383490,'>10>13>',0),(20,'黑西装',14,222.00,'22',22.00,1479383512,'>10>15>',0),(24,'花朵花纹',17,123.00,'春夏大热的镂空元素若隐若现的透视效果 将女人味演绎的淋漓尽致  而把这款的设计感提升到新高度的 则是本次采用的新型纱线  舒适的面料触感更能让亲们享受它带来的穿着体验',10.00,1479883414,'>11>19>',6),(25,'黑白纹',18,213.00,'舒适的面料触感更能让亲们享受它带来的穿着体验',10.00,1479884661,'>11>19>',9),(27,'亮绿花点',18,199.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。',10.00,1479885084,'>11>20>',9),(28,'碎花裙',18,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。',10.00,1479885224,'>11>20>',9),(29,'修身装',18,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。',10.00,1479885266,'>11>20>',9),(30,'格子衫',18,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。',10.00,1479885294,'>11>20>',9),(31,'大红袍',18,100.00,'简约的裙摆，修身的弧线，使裙摆上升到另一高度，传达出女性的端庄与文雅。',10.00,1479885335,'>11>20>',9),(37,'半身裙',17,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479886786,'>11>12>',6),(38,'紫色裙',17,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479886849,'>11>12>',6),(39,'黑色裙',17,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479886873,'>11>12>',6),(41,'蕾丝裙',17,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479886960,'>11>12>',6),(42,'松散衫',17,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479886994,'>11>12>',6),(43,'白沙裙',16,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479887262,'>11>18>',3),(44,'黑纱裙',16,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479887289,'>11>18>',3),(45,'紫纱裙',16,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479887376,'>11>18>',3),(46,'三彩裙',16,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479887414,'>11>18>',3),(47,'金色裙',16,100.00,'性格可人的动物纹腰带设计，展现了女性的线条美  \r\n腰部细节：腰部外加一层贴布，吸汗性强，让皮肤与衣身接触倍感舒适修身的腰部剪裁，让身体曲线更显苗条。',10.00,1479887447,'>11>18>',3);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productimage`
--

DROP TABLE IF EXISTS `productimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(50) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productimage`
--

LOCK TABLES `productimage` WRITE;
/*!40000 ALTER TABLE `productimage` DISABLE KEYS */;
INSERT INTO `productimage` VALUES (36,'58353c0abaeb9.jpg',24),(5,'5829e241a2a64.jpg',8),(34,'58353ab87de29.jpg',9),(35,'58353b26501bd.jpg',10),(8,'5829e2d95cbf2.jpg',11),(39,'58353ebc07a12.jpg',12),(37,'58353c4644aa2.jpg',24),(27,'58343432d59f8.jpg',14),(12,'582d269511f59.jpg',15),(13,'582d26ae84667.jpg',16),(14,'582d26d6b5fdc.jpg',17),(15,'582d99990683e.jpg',18),(16,'582d99c252cf2.jpg',19),(17,'582d99d8ae5ca.jpg',20),(32,'583526a61ab3f.jpg',7),(31,'583526a60f424.jpg',7),(30,'583526a600000.jpg',7),(22,'5834227589544.jpg',21),(23,'5834227590f56.jpg',21),(28,'5834360657bcf.jpg',22),(29,'5834363f81b32.jpg',23),(38,'58353e66d59f8.jpg',13),(40,'58353f75d59f8.jpg',25),(41,'5835411cca2dd.jpg',27),(42,'583541a889544.jpg',28),(43,'583541d2f0537.jpg',29),(44,'583541eeaf79e.jpg',30),(45,'5835421707a12.jpg',31),(46,'5835462e3d090.png',35),(47,'583547c25f5e1.jpg',37),(48,'58354801487ab.jpg',38),(49,'583548191312d.jpg',39),(50,'58354870e8b25.jpg',41),(51,'5835489231975.jpg',42),(52,'5835499e7de29.jpg',43),(53,'583549b931975.jpg',44),(54,'58354a10aba95.jpg',45),(55,'58354a3689544.jpg',46),(56,'58354a572dc6c.jpg',47);
/*!40000 ALTER TABLE `productimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(30) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `state` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tname` (`tname`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (10,'男装',0,1),(11,'女装',0,1),(12,'连衣裙',11,1),(13,'衬衫',10,1),(14,'牛仔裤',10,0),(15,'西装',10,1),(16,'休闲',10,1),(17,'运动服',10,1),(18,'针织衫',11,1),(19,'半身裙',11,1),(20,'雪纺衫',11,1),(22,'风衣',11,0);
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `tel` char(30) DEFAULT NULL,
  `state` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin','123456578@qq.com','123456789',0),(2,'root','root','8281551235@qq.com','32145697',0);
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

-- Dump completed on 2016-11-23 16:03:18

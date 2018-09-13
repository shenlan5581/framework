-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: framework
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `fw_admin`
--

DROP TABLE IF EXISTS `fw_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fw_admin` (
  `a_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `a_user` varchar(30) NOT NULL COMMENT '用户名',
  `a_pass` text NOT NULL COMMENT '密码',
  `a_email` varchar(18) NOT NULL COMMENT '邮箱',
  `a_create_time` int(11) NOT NULL COMMENT '创建时间',
  `a_level` tinyint(1) NOT NULL COMMENT '权限（1～4）',
  `a_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '标记删除',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fw_admin`
--

LOCK TABLES `fw_admin` WRITE;
/*!40000 ALTER TABLE `fw_admin` DISABLE KEYS */;
INSERT INTO `fw_admin` VALUES (33,'YUINJI','ea499fb15dba782c4df0c44ed15d3e82','222548@qq.com',1535734359,2,1),(34,'yuxinji','b0750480fab16c5f7a9dae7d3223a8db','22542812@qq.com',1535724971,1,0),(35,'yuxinjis','b0750480fab16c5f7a9dae7d3223a8db','22542812@qq.com',1535743323,1,0),(36,'yuxinjiji','b0750480fab16c5f7a9dae7d3223a8db','22542812@qq.com',1535744060,2,1),(38,'k','ea499fb15dba782c4df0c44ed15d3e82','22542812@qq.com',1535745566,2,0);
/*!40000 ALTER TABLE `fw_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fw_case`
--

DROP TABLE IF EXISTS `fw_case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fw_case` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_type` tinyint(1) NOT NULL COMMENT '案例类型（祥见php）',
  `c_style` tinyint(1) NOT NULL COMMENT '风格',
  `c_title` varchar(30) NOT NULL,
  `c_title_img` varchar(200) NOT NULL COMMENT '标题图片',
  `c_biref` text NOT NULL COMMENT '简介',
  `c_articel` text NOT NULL,
  `c_date` int(11) NOT NULL,
  `c_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '删除标记',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fw_case`
--

LOCK TABLES `fw_case` WRITE;
/*!40000 ALTER TABLE `fw_case` DISABLE KEYS */;
INSERT INTO `fw_case` VALUES (12,2,1,'建业','http://framework.cn/UploadImage/744629.jpg','建业森林半岛','文章',1536266308,0),(13,2,4,'北欧','http://framework.cn/UploadImage/17042.jpg','白色北欧','&lt;h2&gt;\r\n 装修风格是重要的\r\n&lt;/h2&gt;\r\n&lt;h3&gt;\r\n 注重风水和朝向&lt;img src=&quot;/kindedit_upload/image/20180905/20180905211340_41105.jpeg&quot; alt=&quot;&quot; width=&quot;302&quot; height=&quot;247&quot; /&gt; \r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n &lt;strong&gt;&lt;span style=&quot;background-color:#FFFFFF;color:#EE33EE;&quot;&gt;测试数据&lt;/span&gt;&lt;/strong&gt; \r\n&lt;/p&gt;',1536266401,0);
/*!40000 ALTER TABLE `fw_case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fw_project`
--

DROP TABLE IF EXISTS `fw_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fw_project` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) NOT NULL COMMENT '项目名',
  `Pro_Customer` varchar(30) NOT NULL COMMENT '客户名称',
  `pro_telephone` varchar(30) NOT NULL COMMENT '电话',
  `pro_email` varchar(30) NOT NULL COMMENT '邮箱',
  `pro_com` varchar(30) NOT NULL COMMENT '公司名',
  `pro_addr` varchar(50) NOT NULL COMMENT '地址',
  `pro_brief` varchar(200) NOT NULL COMMENT '简介',
  `pro_date` int(11) NOT NULL COMMENT '日期',
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fw_project`
--

LOCK TABLES `fw_project` WRITE;
/*!40000 ALTER TABLE `fw_project` DISABLE KEYS */;
INSERT INTO `fw_project` VALUES (1,'framework','xingke','13937159810','22542812@qq.com','璀璨','河南-郑州-金水','璀璨科技',1535745566);
/*!40000 ALTER TABLE `fw_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fw_slide`
--

DROP TABLE IF EXISTS `fw_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fw_slide` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_url` varchar(200) NOT NULL,
  `s_date` int(11) NOT NULL COMMENT '创建时间',
  `s_del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fw_slide`
--

LOCK TABLES `fw_slide` WRITE;
/*!40000 ALTER TABLE `fw_slide` DISABLE KEYS */;
INSERT INTO `fw_slide` VALUES (1,'http://framework.cn/UploadImage/693634.jpg',1536265594,0),(2,'http://framework.cn/UploadImage/553494.jpg',1536265810,0),(3,'http://framework.cn/UploadImage/639993.jpg',1536265573,0);
/*!40000 ALTER TABLE `fw_slide` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-07  5:09:33

create user 'tsctf'@'localhost' identified by 'tsctf';
create database tsctf;
grant all privileges on tsctf.* to 'tsctf'@'localhost';
flush privileges;
use tsctf;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tsctf
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `fn_block`
--

DROP TABLE IF EXISTS `fn_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_block` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `site` tinyint(3) NOT NULL COMMENT '站点id',
  `type` tinyint(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_block`
--

LOCK TABLES `fn_block` WRITE;
/*!40000 ALTER TABLE `fn_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_category`
--

DROP TABLE IF EXISTS `fn_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_category` (
  `catid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site` tinyint(3) NOT NULL COMMENT '站点id',
  `typeid` tinyint(1) NOT NULL COMMENT '类别(1内容,2单页,3外链)',
  `modelid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '模型ID',
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `arrparentid` varchar(255) NOT NULL,
  `child` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否存在子栏目，1，存在',
  `arrchildid` varchar(255) NOT NULL,
  `catname` varchar(30) NOT NULL COMMENT '栏目名称',
  `image` varchar(100) NOT NULL COMMENT '图片',
  `content` mediumtext NOT NULL COMMENT '单网页内容',
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `catdir` varchar(30) NOT NULL COMMENT '栏目URL目录',
  `url` varchar(100) NOT NULL COMMENT 'URL地址',
  `urlpath` varchar(255) NOT NULL,
  `items` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '内容数量',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否为菜单',
  `categorytpl` varchar(50) NOT NULL,
  `listtpl` varchar(50) NOT NULL,
  `showtpl` varchar(50) NOT NULL,
  `setting` text NOT NULL,
  `pagesize` smallint(5) NOT NULL,
  PRIMARY KEY (`catid`),
  KEY `listorder` (`listorder`,`child`),
  KEY `ismenu` (`ismenu`),
  KEY `parentid` (`parentid`),
  KEY `site` (`site`),
  KEY `modelid` (`modelid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_category`
--

LOCK TABLES `fn_category` WRITE;
/*!40000 ALTER TABLE `fn_category` DISABLE KEYS */;
INSERT INTO `fn_category` VALUES (1,1,1,1,0,'1,6,14,10,15,17',1,'2,3,4,5','新闻','','','','','','news','/index.php?c=content&a=list&catid=1','',22,1,1,'category_news.html','list_news.html','show_news.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(2,1,1,1,1,'2,3,4,5',0,'','国内','','','','','','guonei','/index.php?c=content&a=list&catid=2','',10,0,1,'category_news.html','list_news.html','show_news.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(3,1,1,1,1,'2,3,4,5',0,'','国际','','','','','','guoji','/index.php?c=content&a=list&catid=3','',7,0,1,'category_news.html','list_news.html','show_news.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(4,1,1,1,1,'2,3,4,5',0,'','军事','','','','','','junshi','/index.php?c=content&a=list&catid=4','',3,0,1,'category_news.html','list_news.html','show_news.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(5,1,1,1,1,'2,3,4,5',0,'','娱乐','','','','','','yule','/index.php?c=content&a=list&catid=5','',2,0,1,'category_news.html','list_news.html','show_news.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(6,1,1,2,0,'1,6,14,10,15,17',1,'9,7,8','图片','','','','','','meitu','/index.php?c=content&a=list&catid=6','',9,2,1,'category_image.html','list_image.html','show_image.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(7,1,1,2,6,'9,7,8',0,'','非主流','','','','','','feizhuliutupian','/index.php?c=content&a=list&catid=7','',3,2,1,'category_image.html','list_image.html','show_image.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(8,1,1,2,6,'9,7,8',0,'','汽车','','','','','','qichetupian','/index.php?c=content&a=list&catid=8','',1,3,1,'category_image.html','list_image.html','show_image.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(9,1,1,2,6,'9,7,8',0,'','美女','','','','','','meinvtupian','/index.php?c=content&a=list&catid=9','',5,1,1,'category_image.html','list_image.html','show_image.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(10,1,2,0,0,'1,6,14,10,15,17',1,'11,12,13','关于','','&lt;p&gt;\r\n	关于我们\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	关于我们\r\n&lt;/p&gt;','','','','guanyuwomen','/index.php?c=content&a=list&catid=10','',0,4,1,'','','page.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(11,1,2,0,10,'11,12,13',0,'','用户条款','','用户条款','','','','yonghutiaokuan','/index.php?c=content&a=list&catid=11','',0,0,1,'','','page.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(12,1,2,0,10,'11,12,13',0,'','联系我们','','联系我们','','','','lianxiwomen','/index.php?c=content&a=list&catid=12','',0,0,1,'','','page.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(13,1,2,0,10,'11,12,13',0,'','免责声明','','&lt;p&gt;\r\n	这种子已经在你的心里发芽，要小心翼翼维护它的枝叶生长蔓延出来。身心茁壮，人自然就是沉着安然的。只有这活泼泼的生机在流动，在渗透，在融汇。生命的喜乐就在于此了。\r\n&lt;/p&gt;','','','','mianzeshengming','/index.php?c=content&a=list&catid=13','',0,0,1,'','','page.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(14,1,1,3,0,'1,6,14,10,15,17',0,'','房产','','','','','','fangwuchuzu','/index.php?c=content&a=list&catid=14','',2,3,1,'list_fang.html','list_fang.html','show_fang.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(15,1,1,4,0,'1,6,14,10,15,17',0,'','下载','','','','','','xiazai','/index.php?c=content&a=list&catid=15','',0,4,1,'list_down.html','list_down.html','show_down.html','a:1:{s:10:\"memberpost\";s:1:\"0\";}',20),(17,1,4,7,0,'1,6,14,10,15,17',0,'','留言','','','','','','liuyan','/index.php?c=content&a=list&catid=17','',0,9,1,'','','post_form.html','a:6:{s:8:\"document\";s:0:\"\";s:10:\"verifypost\";s:1:\"0\";s:9:\"adminpost\";s:1:\"0\";s:10:\"memberpost\";s:1:\"0\";s:9:\"guestpost\";s:0:\"\";s:3:\"url\";a:7:{s:3:\"use\";s:1:\"0\";s:6:\"tohtml\";s:1:\"0\";s:7:\"htmldir\";s:4:\"html\";s:4:\"list\";s:0:\"\";s:9:\"list_page\";s:0:\"\";s:4:\"show\";s:0:\"\";s:9:\"show_page\";s:0:\"\";}}',2);
/*!40000 ALTER TABLE `fn_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content`
--

DROP TABLE IF EXISTS `fn_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content`
--

LOCK TABLES `fn_content` WRITE;
/*!40000 ALTER TABLE `fn_content` DISABLE KEYS */;
INSERT INTO `fn_content` VALUES (40);
/*!40000 ALTER TABLE `fn_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_1`
--

DROP TABLE IF EXISTS `fn_content_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_1` (
  `id` int(10) unsigned NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `modelid` smallint(5) NOT NULL,
  `title` varchar(80) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `hits` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sysadd` tinyint(1) NOT NULL COMMENT '是否后台添加',
  `userid` smallint(8) NOT NULL,
  `username` char(20) NOT NULL,
  `inputtime` bigint(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` bigint(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin` (`modelid`,`status`,`listorder`,`updatetime`),
  KEY `catid` (`catid`,`status`,`updatetime`),
  KEY `member` (`userid`,`modelid`,`status`,`sysadd`,`updatetime`),
  KEY `status` (`status`,`updatetime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_1`
--

LOCK TABLES `fn_content_1` WRITE;
/*!40000 ALTER TABLE `fn_content_1` DISABLE KEYS */;
INSERT INTO `fn_content_1` VALUES (1,2,1,'深圳5名医院正副院长涉嫌受贿被捕','','深圳,受贿','近期深圳检察机关在医疗系统掀起的“反腐风暴”广受社会公众和媒体关注。深圳市人民检察院21日向媒体通报说，在6月份立案侦查的16人中，5名医院正副院长、4名科室主任因涉嫌受贿罪已被检察机关批准逮捕，另外7人被依...','index.php?c=content&a=show&id=1',0,1,5,1,0,'admin',1340300221,1340300221),(2,2,1,'北京5.7亿彩票巨奖得主兑奖介绍投注方式','','北京,彩票','据得主介绍，当天投注时先以机选一注乘以10倍的方式投注，之后让销售员将这注心仪号码以手工输入的方式进行100倍投注。同时中奖者表示自身经济情况良好，所以习惯采用大额倍投方式进行投注。兑奖过程中还发生了一个...','index.php?c=content&a=show&id=2',0,1,1,1,0,'admin',1340300498,1340300498),(3,2,1,'蛟龙22日5时准备第三次下潜试验','','蛟龙','据了解，这次下潜时间预计达10小时，计划下潜深度为6960米左右。试验任务是按照已定的海试计划，继续对潜水器各项指标进行验证和考核，同时对前两次下潜出现故障的改进情况进行验证，为最终冲击7000米深度做好充分准...','index.php?c=content&a=show&id=3',0,1,1,1,0,'admin',1340300547,1340300547),(4,2,1,'湖南洞口县高考提前收卷续:考生利益获补偿','','补偿,高考,洞口县','6月8日上午的高考综合科目考试中，邵阳市洞口县九中考点因信号员错发终考信号导致考试提前结束。湖南省委、省政府高度重视，要求妥善处置，严肃查处相关责任人。省教育厅派出专人赴洞口县会同当地有关部门就此事进行...','index.php?c=content&a=show&id=4',0,1,1,1,0,'admin',1340300592,1340300592),(5,2,1,'云南沾益县否认看守所在押人员看球激动而死','','看守所,云南,在押人员,沾益县','一名网友最近在微博爆料称：沾益县大坡乡新庄村委会老黄口村民舒树兵，在沾益县小河底看守所“自行死亡”，有新说法称，死者“是看欧洲杯足球太精彩过于激动而死！”此事引发了网友较大反响。对此，沾益县政府新闻办...','index.php?c=content&a=show&id=5',0,1,1,1,0,'admin',1340300627,1340300627),(6,2,1,'民政部:设地级三沙市有助加强其开发建设','','沙市,民政部,开发','发言人：国务院于近日批准，撤销海南省西沙群岛、南沙群岛、中沙群岛办事处，设立地级三沙市，管辖西沙群岛、中沙群岛、南沙群岛的岛礁及其海域。三沙市人民政府驻西沙永兴岛。记者：据了解，我国一直设有专门行政机...','index.php?c=content&a=show&id=6',0,1,1,1,0,'admin',1340300664,1340300664),(7,2,1,'西安嫌犯当街杀害1名女子被路人控制','','西安','华商网快讯2012年6月21日晚18时，有多名网友在微博中称，西安东大街一年轻女性被杀。记者从柏树林派出所了解到确有此事，警方表示，具体原因正在调查之中。据警方透露，死者身着白色连衣裙。西安市公安局的刘宏伟科...','index.php?c=content&a=show&id=7',0,1,1,1,0,'admin',1340301272,1340301272),(8,2,1,'青年在青岛创业可申请万元奖励','','创业,奖励,青年','　据介绍，此次评选对象是自主创办生产服务型项目、企业或从事个体经营，同时吸纳了一定数量的社会人员实现就业再就业的城乡各类青年劳动者。评选活动设“青岛市杰出青年创业奖”10名、“青岛市优秀青年创业奖”20名...','index.php?c=content&a=show&id=8',0,1,2,1,0,'admin',1340301300,1340301300),(9,2,1,'北京1名垃圾站站长贪污上万元被公诉','','北京,贪污,垃圾站','据检方指控，2010年7月至2011年7月间，张某利用经手收取垃圾清运费的便利，采用减低收费价格、不开具发票等方式，截留侵吞应上缴的垃圾清运费共计人民币1.3万元。公诉机关认为，应以贪污罪追究张某的刑事责任。记者...','index.php?c=content&a=show&id=9',0,1,12,1,0,'admin',1340301336,1340357564),(10,3,1,'日本民主党前干事长小泽一郎称可能退党建新党','','日本,小泽一郎,干事长','当天下午，在约50名亲小泽派众议员召开的非公开集会上，小泽明确表示将追求最佳解决方案，如果未能实现，也有可能考虑组建新党。由于日本公共债务负担沉重，公债总额约为国内生产总值的两倍。为减轻债务压力，野田内...','index.php?c=content&a=show&id=10',0,1,1,1,0,'admin',1340301368,1340301368),(11,3,1,'美国商务部长布赖森辞职','','美国,商务部长','　奥巴马当天在声明中对布赖森担任商务部长以来所做的工作表示感谢。奥巴马说，布赖森不辞辛苦地工作，为促进美国出口和制造业生产作出了贡献。他称布赖森是有执行力的、杰出的领导，并透露布赖森将在总统出口委员会...','index.php?c=content&a=show&id=11',0,1,0,1,0,'admin',1340301388,1340301388),(12,3,1,'巴基斯坦发生2起爆炸致4死42伤','','巴基斯坦','当地时间21日晚6时30分许，巴基斯坦西北部城市白沙瓦的哈扎尔卡瓦尼地区的一个神庙附近发生炸弹袭击事件。当地消息人士说，爆炸造成包括2名儿童在内的至少3人死亡，另有24人受伤。据悉，此次袭击使用了约10至12公斤...','index.php?c=content&a=show&id=12',0,1,1,1,0,'admin',1340301406,1340301406),(13,3,1,'美媒称中情局协助向叙利亚反对派分发武器','','反对派,叙利亚,中情局','报道援引美国官员和阿拉伯情报官员的话说，这些中情局官员人数不多，他们已在土耳其南部秘密活动数个星期。通过帮助甄别叙利亚反对派武装人员，这些情报官员希望了解更多有关叙利亚境内反对派情况并与之建立关系。报...','index.php?c=content&a=show&id=13',0,1,0,1,0,'admin',1340301423,1340301423),(14,3,1,'土耳其将解除对法国制裁','','土耳其,法国','达武特奥卢表示，两国首脑的会晤是一个良好开端，他本人也将于7月5日造访巴黎开展正式会谈。他称，相互尊重是土耳其外交的准则之一。去年12月，土耳其因法国议会通过的有关“亚美尼亚大屠杀”法案而对法国采取制裁措...','index.php?c=content&a=show&id=14',0,1,0,1,0,'admin',1340301449,1340301449),(15,3,1,'俄罗斯首次证实运送武装直升机赴叙利亚','','俄罗斯,叙利亚,武装直升机','他说，当这艘船经北海驶往大西洋时，船主得知第三方保险已经撤出，该船所处位置的航海分局要求这艘船入港接受检查。为避免延误，这艘船决定停靠在摩尔曼斯克港，预计将于22日抵达。这艘船悬挂俄罗斯国旗，将进行再次...','index.php?c=content&a=show&id=15',0,1,0,1,0,'admin',1340301467,1340301467),(16,3,1,'英国医生抗议养老金改革罢工百万患者受影响','','医生,英国,养老金改革,影响','人民网伦敦6月21日电(记者白阳)由于对政府养老金改革不满，英国国家医疗保障体系(NHS)的医生21日开始进行为期一天的罢工，这是1975年以来英国医生首次进行罢工。据悉，当天约有30000台手术和20000个预约门诊被取消并...','index.php?c=content&a=show&id=16',0,1,0,1,0,'admin',1340301485,1340301485),(17,4,1,'中国就越通过《越南海洋法》提出严正交涉','','越南,海洋法,中国','　2012年6月21日，外交部副部长张志军召见越南驻华大使阮文诗，就越南国会审议通过侵犯中国领土主权的《越南海洋法》向越方提出严正交涉。张志军指出，中国对西沙群岛、南沙群岛及其附近海域拥有无可争辩的主权，《...','index.php?c=content&a=show&id=17',0,1,0,1,0,'admin',1340301522,1340301522),(18,4,1,'李登辉称中日交战时曾到过青岛 认为日打不赢','','青岛,李登辉','据台湾《联合报》报道，台风来袭，李登辉取消云林参访行程，改在饭店内与云林科技大学学生座谈。李登辉座谈时提起往事。他少时乘船赴日，要到京都帝大留学，途中在青岛休息四、五天，看到很多身材高大、脸黑黑的山东...','index.php?c=content&a=show&id=18',0,1,0,1,0,'admin',1340301546,1340301546),(19,4,1,'大陆交换生同李登辉激辩钓鱼岛归属(图)','','交换,李登辉,钓鱼岛','台海网6月6日讯据中评社报道，李登辉5日晚间在台湾中央大学演讲，原本预定晚上8点30分钟落幕，主办单位最后时段开放学生提问，一位大陆交换学生，以台湾历史定位与钓鱼岛等议题问李登辉，意外擦出火花。在中央大学中...','index.php?c=content&a=show&id=19',0,1,0,1,0,'admin',1340301582,1340301582),(20,5,1,'6月21日微博名言录:柯震东手术成功微博报喜','','微博,成功,柯震东','柯震東Kai：手术很成功！我很好！老天一定听到了所有人的祝福！所以我现在很好！谢谢所有人的祝福！我很快就会再出发：)　　背景：台湾艺人柯震东因后脑脂肪瘤需动刀手术引发众多粉丝关心担忧。今日(6月21日)柯震东...','index.php?c=content&a=show&id=20',0,1,0,1,0,'admin',1340301662,1340301662),(21,5,1,'前拳王泰森将在百老汇上演脱口秀','','拳王泰森,百老汇','继成功在“赌城”美国拉斯韦加斯成功连演6场后，由前重量级“拳王”迈克·泰森主演的名为“迈克·泰森：无可争议的真相”的脱口秀将于7月31日至8月5日在百老汇连演6场。泰森和脱口秀导演斯派克·李以及百老汇音乐剧...','index.php?c=content&a=show&id=21',0,1,1,1,0,'admin',1340301749,1340301749),(22,7,2,'麦当娜扮拉拉队','http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg','麦当娜,拉拉队','新浪娱乐讯当地时间2012年6月20日，麦当娜MDNA巡回演唱会抵达西班牙巴塞罗那。麦当娜舞台上卖力依旧，她装嫩扮拉拉队队长，劲歌热舞气氛热烈。IC/图','index.php?c=content&a=show&id=22',0,1,5,1,0,'admin',1340302071,1340311526),(23,7,2,'古装剧中十大让人难以忘怀的角色','http://static11.photo.sina.com.cn/middle/6ad6f8edtvb1bhhsqe4ei&amp;690','角色,十大,古装剧','金庸小说被拍成电影后大部分面目全非，和原著相差十万八千里，如星爷的《鹿鼎记》、徐老怪的《笑傲江湖》，幸运的是，李连杰版《倚天屠龙记》改编得并不那么离谱。在李连杰的演绎下，一向软弱的张无忌相当霸气，令读...','index.php?c=content&a=show&id=23',0,1,3,1,0,'admin',1340302418,1340302418),(24,7,2,'布莱克-弗莱利杂志写真','','写真,杂志,布莱克','新浪娱乐讯美剧《绯闻女孩》女主角布莱克-弗莱利登上《Bullett》杂志封面，24岁的她金发妩媚，电眼迷人。','index.php?c=content&a=show&id=24',0,1,1,1,0,'admin',1340302521,1340302521),(25,9,2,'韩丹彤变声性感女神','http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/703_676843_537627.jpg','性感女神','新浪娱乐讯青年演员韩丹彤曝光最新一组性感写真，她尺度大开火辣出镜，古铜色肌肤、修长细腿将完美曲线展现到极致，身着红白条纹泳衣充满野性的身姿尽显妩媚妖娆。...','index.php?c=content&a=show&id=25',0,1,16,1,0,'admin',1340302645,1340302645),(26,9,2,'吴楚写真气质清新淡雅','http://i0.sinaimg.cn/ent/http/slide.ent.sina.com.cn/U3349P28T3D3664891F522DT20120621124650.jpg','清新,写真','新浪娱乐讯电视剧《风和日丽》的热播，让“刘世晨”吴楚被观众所熟知。此次拍摄的最新写真中，吴楚身穿白衣，配以碎花长裙，在和煦的阳光下静享欢乐时光，气质清新淡雅。...','index.php?c=content&a=show&id=26',0,1,3,1,0,'admin',1340302713,1340302744),(27,9,2,'阚清子绝美冰美人','http://i3.sinaimg.cn/ent/http/slide.ent.sina.com.cn/U2398P28T3D3664803F522DT20120621115725.jpg','冰美人','爱在屋檐下》热播，阚清子最近也是人气大增。最近，她曝光了一组早前拍摄的夏日“透明”人物大片，大片中她一反平日的甜美清新，化身冷艳大气的“冰美人”。...','index.php?c=content&a=show&id=27',0,1,0,1,0,'admin',1340302825,1340302825),(28,9,2,'解惠清美丽端庄(','http://i1.sinaimg.cn/ent/http/slide.ent.sina.com.cn/U2398P28T3D3664739F522DT20120621111000.jpg','','电视剧《我和老妈一起嫁》日前正在北京卫视火热播出，青年演员解惠清在剧中扮演乖乖女苏嘉嘉，近日，解惠清拍摄了一组夏日写真，颇具公主气质。...','index.php?c=content&a=show&id=28',0,1,59,1,0,'admin',1340302890,1340302890),(29,9,2,'殷桃气质典雅(','http://i2.sinaimg.cn/ent/http/slide.ent.sina.com.cn/U2398P28T3D3664700F522DT20120621104403.jpg','','近日，热播剧《我和老妈一起嫁》女主角殷桃曝光了一组全新写真，明艳动人，凸显殷桃时尚冷艳气质，诠释了别样的典雅风情，尽显大气与妩媚。','index.php?c=content&a=show&id=29',0,1,8,1,0,'admin',1340302964,1340302964),(30,8,2,'北京现代 &gt; 瑞纳','http://img1.bitautoimg.com/autoalbum/files/20100721/597/0302495977_1375336_1.JPG','北京现代,瑞纳','北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳北京现代&gt;瑞纳...','index.php?c=content&a=show&id=30',0,1,1,1,0,'admin',1340303135,1340303135),(31,2,1,'北京谋智火狐信息技术有限公司版权所有','','信息技术,有限公司,火狐','北京谋智火狐信息技术有限公司版权所有北京谋智火狐信息技术有限公司版权所有北京谋智火狐信息技术有限公司版权所有北京谋智火狐信息技术有限公司版权所有...','index.php?c=content&a=show&id=31',0,1,25,1,0,'admin',1340357603,1340357603),(34,14,3,'优质套二,低价出租家具家电全齐,交通便利','','出租,低价','房子位于玉洁东街2号，交通位置特别便利，周围买东西特别便利。该房间是套二，但是没有客厅，家具家电全新全齐，有2个空调居家舒适，干净整洁！但是房子是顶楼，可能楼层有点不好！...','index.php?c=content&a=show&id=34',0,1,0,1,0,'admin',1340370988,1340381847),(33,14,3,'科华航空路商圈万科金色海蓉精装全配套二出租','','出租,航空','位于高攀路的万科金色海蓉，紧邻科华路及航空路商圈，交通生活十分便利，到万达广场或天府汇城均可步行。楼下及周边生活配套设施一应俱全，小区环境巴适，万科物业，房子是2010年交房的，很新哦...','index.php?c=content&a=show&id=33',0,1,9,1,0,'admin',1340369035,1340384469);
/*!40000 ALTER TABLE `fn_content_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_1_down`
--

DROP TABLE IF EXISTS `fn_content_1_down`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_1_down` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `content` mediumtext NOT NULL,
  `version` char(20) DEFAULT NULL,
  `language` char(20) DEFAULT NULL,
  `os` text,
  `developers` char(20) DEFAULT NULL,
  `softsize` char(20) DEFAULT NULL,
  `downdata` text,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_1_down`
--

LOCK TABLES `fn_content_1_down` WRITE;
/*!40000 ALTER TABLE `fn_content_1_down` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_content_1_down` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_1_extend`
--

DROP TABLE IF EXISTS `fn_content_1_extend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_1_extend` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `verify` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  KEY `id` (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_1_extend`
--

LOCK TABLES `fn_content_1_extend` WRITE;
/*!40000 ALTER TABLE `fn_content_1_extend` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_content_1_extend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_1_fang`
--

DROP TABLE IF EXISTS `fn_content_1_fang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_1_fang` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `content` mediumtext NOT NULL,
  `quyu` int(5) DEFAULT NULL,
  `shi` tinyint(2) DEFAULT NULL,
  `ting` tinyint(2) DEFAULT NULL,
  `wei` tinyint(2) DEFAULT NULL,
  `zhuangxiu` varchar(20) DEFAULT NULL,
  `louceng` tinyint(2) DEFAULT NULL,
  `zongceng` tinyint(2) DEFAULT NULL,
  `zujin` int(5) DEFAULT NULL,
  `zujinleixing` varchar(30) DEFAULT NULL,
  `mianji` int(20) DEFAULT NULL,
  `xiaoqu` varchar(50) DEFAULT NULL,
  `peizhi` text,
  `tupian` text,
  `dizhi` varchar(200) DEFAULT NULL,
  `dianhua` varchar(40) DEFAULT NULL,
  `ditu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `quyu` (`quyu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_1_fang`
--

LOCK TABLES `fn_content_1_fang` WRITE;
/*!40000 ALTER TABLE `fn_content_1_fang` DISABLE KEYS */;
INSERT INTO `fn_content_1_fang` VALUES (34,14,'房子位于玉洁东街2号，交通位置特别便利，周围买东西特别便利。&lt;br /&gt;\r\n&amp;nbsp; 该房间是套二，但是没有客厅，家具家电全新全齐，有2个空调居家舒适，干净整洁！但是房子是顶楼，可能楼层有点不好！&lt;br /&gt;\r\n&lt;br /&gt;',14,3,1,1,'简单',2,10,8888,'付半年',99,'xxx小区','','','','',''),(33,14,'dfadsfasdfasd fsdfasdfsdfadf&lt;br /&gt;',14,3,1,1,'简单',3,5,12312,'押一付一',123123,'建设北路','','','四川成都市建设北路一段1号','100000000','104.087362|30.717082|17');
/*!40000 ALTER TABLE `fn_content_1_fang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_1_image`
--

DROP TABLE IF EXISTS `fn_content_1_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_1_image` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `content` mediumtext NOT NULL,
  `images` text,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_1_image`
--

LOCK TABLES `fn_content_1_image` WRITE;
/*!40000 ALTER TABLE `fn_content_1_image` DISABLE KEYS */;
INSERT INTO `fn_content_1_image` VALUES (22,7,'新浪娱乐讯 当地时间2012年6月20日，麦当娜MDNA巡回演唱会抵达西班牙巴塞罗那。麦当娜舞台上卖力依旧，她装嫩扮拉拉队队长，劲歌热舞气氛热烈。IC/图&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(23,7,'金庸小说被拍成电影后大部分面目全非，和原著相差十万八千里，如星爷的《鹿鼎记》、徐老怪的《笑傲江湖》，幸运的是，李连杰版《倚天屠龙记》改编得并不那么离谱。在李连杰的演绎下，一向软弱的张无忌相当霸气，令读者对原著里张无忌的优柔寡断一扫而空。&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(24,7,'新浪娱乐讯 美剧《绯闻女孩》女主角布莱克-弗莱利登上《Bullett》杂志封面，24岁的她金发妩媚，电眼迷人。&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(25,9,'新浪娱乐讯 青年演员韩丹彤曝光最新一组性感写真，她尺度大开火辣出镜，古铜色肌肤、修长细腿将完美曲线展现到极致，身着红白条纹泳衣充满野性的身姿尽显妩媚妖娆。&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(26,9,'新浪娱乐讯 电视剧《风和日丽》的热播，让“刘世晨”吴楚被观众所熟知。此次拍摄的最新写真中，吴楚身穿白衣，配以碎花长裙，在和煦的阳光下静享欢乐时光，气质清新淡雅。&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(27,9,'爱在屋檐下》热播，阚清子最近也是人气大增。最近，她曝光了一组早前拍摄的夏日“透明”人物大片，大片中她一反平日的甜美清新，化身冷艳大气的“冰美人”。&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(28,9,'电视剧《我和老妈一起嫁》日前正在北京卫视火热播出，青年演员解惠清在剧中扮演乖乖女苏嘉嘉，近日，解惠清拍摄了一组夏日写真，颇具公主气质。&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(29,9,'近日，热播剧《我和老妈一起嫁》女主角殷桃曝光了一组全新写真，明艳动人，凸显殷桃时尚冷艳气质，诠释了别样的典雅风情，尽显大气与妩媚。&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}'),(30,8,'北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳北京现代 &amp;gt; 瑞纳&lt;br /&gt;','a:2:{s:4:\"file\";a:2:{i:0;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677168_960846.jpg\";i:1;s:70:\"http://www.sinaimg.cn/dy/slidenews/4_img/2012_25/704_677169_630164.jpg\";}s:3:\"alt\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}');
/*!40000 ALTER TABLE `fn_content_1_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_1_news`
--

DROP TABLE IF EXISTS `fn_content_1_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_1_news` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_1_news`
--

LOCK TABLES `fn_content_1_news` WRITE;
/*!40000 ALTER TABLE `fn_content_1_news` DISABLE KEYS */;
INSERT INTO `fn_content_1_news` VALUES (1,2,'近期深圳检察机关在医疗系统掀起的“反腐风暴”广受社会公众和媒体关注。深圳市人民检察院21日向媒体通报说，在6月份立案侦查的16人中，5名医院正副院长、4名科室主任因涉嫌受贿罪已被检察机关批准逮捕，另外7人被依法取保候审。\r\n&lt;p&gt;\r\n	被逮捕的9名犯罪嫌疑人分别是：南山医院院长张某某、横岗医院院长孔某某、坪山医院院长蔡某某、光明医院院长苏某、西丽医院副院长王某某、市妇幼保健院放射科主任曹某某、市三医院口腔科主任李某某、宝安医院药剂科主任张某某、坪山医院药剂科主任黄某某。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	深圳检察院反贪局有关负责人称，今年4月份，福田区人民检察院反贪局根据举报，查办了深圳市妇幼保健院设备采购方面的商业贿赂犯罪，涉嫌受贿犯\r\n罪的4名医疗管理人员和3名行贿人被立案侦查。检察机关在办案过程中，发现医疗设备、耗材和药品采购领域的商业贿赂现象带有普遍性，牵扯出不少医院的主要\r\n负责人或科室负责人有受贿问题。“因此，检察机关在医疗系统集中开展了反腐行动。”\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	深圳市人民检察院和福田区委迅速组成了“5?14”专案组，经过初步调查，6月7日、8日，检察机关对涉嫌受贿的市、区共13家医院的16名管\r\n理人员立案侦查，其中包括正、副院长9人，相关科室负责人7人。加上4月份福田区人民检察院以涉嫌受贿罪立案侦查的4人，检察机关已对医院管理人员共立案\r\n侦查20人，对涉嫌单位行贿和个人行贿的5家公司及7名责任人立案侦查，在深圳医疗系统引起巨大的震荡。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	6月中旬，涉案的5名正副院长、4名科室主任被检察机关陆续批准逮捕。根据法律规定和具体案件情况，检察机关对7名犯罪嫌疑人在立案后采取了取\r\n保候审的强制措施。这7人均认罪态度好，能够主动交代问题，积极配合检察机关的调查，有的属于主动投案自首，有的是受贿数额较小、犯罪情节较轻。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	“不过，医疗行业也并不像大家想象的一团糟，不少医德高尚的医生和管理人员拒绝收取回扣，连医药代表都不得不对其表示钦佩。”办案人员说。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	看病贵是市民反映强烈的热点问题，近年来，深圳市检察机关在医疗系统屡屡刮起反腐“阵风”。2009年，查办了龙岗区坪地医院药剂科副主任范某\r\n新、医师王某琼、叶某标受贿35万元人民币后帮助药品供应商的药品顺利进入医院并保证其供应量一案；2010年，查办了盐田人民医院药剂科主任王某生受贿\r\n36万元人民币后为药品供应商谋取利益的案件；2011年，查办了深圳市北大医院副院长张某共、体检科主任黄某平、特诊科主任吴某、发展部主任杜某榕、主\r\n治医师严某伟等人受贿70余万元人民币后帮助安徽一家医疗设备公司的检测仪顺利中标的案件。(完)\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(2,2,'&lt;strong style=&quot;border-top-width:0px;border-right-width:0px;border-bottom-width:0px;border-left-width:0px;border-style:initial;border-color:initial;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-weight:bold;&quot;&gt;据得主介绍，当天投注时先以机选一注乘以10倍的方式投注，之后让销售员将这注心仪号码以手工输入的方式进行100倍投注。&lt;/strong&gt;同\r\n时中奖者表示自身经济情况良好，所以习惯采用大额倍投方式进行投注。兑奖过程中还发生了一个小插曲，就是因为中奖金额巨大，奖金发放不得不采用5张亿元封\r\n顶的支票支付，同时出于安全考虑采用可挂失的转账支票。最终中奖者凭借这三张售出于北京市朝阳区三里屯南路18号聚隆园宾馆第10588200号投注站的\r\n彩票，领取税后共计4亿5601万2832元的奖金，而同时代扣的1亿1400万3208元中奖所得税，也创下中国彩民中奖缴税纪录。\r\n&lt;p&gt;\r\n	今年双色球呈现出奖销两旺的态势，奖池蓄水速度快并不断刷新我国彩市奖池金额纪录。彩民采用倍投方式以赢得高额奖金无可厚非，但希望彩民朋友保持一颗平常心在投注时量力而为，因为无论奖池金额再高中大奖依然是一件概率极小的偶然事件。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(3,2,'据了解，这次下潜时间预计达10小时，计划下潜深度为6960米左右。试验任务是按照已定的海试计划，继续对潜水器各项指标进行验证和考核，同时对前两次下潜出现故障的改进情况进行验证，为最终冲击7000米深度做好充分准备。\r\n&lt;p&gt;\r\n	海试现场总指挥刘峰说，“在前两次下潜试验中，我们发现并解决了潜水器的一些故障。第三次下潜试验就是要对这些故障排查的情况进行验证。”\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	在6月19日进行的第二次下潜试验中，“蛟龙”号的可调压载系统无法正常实现排水功能。可调压载系统可以使潜水器在海底处于接近零浮力状态，为\r\n巡航、定点作业、悬停作业做准备。刘峰介绍说，可调压载系统出问题，潜水器的很多功能就无法实现，因此22日的下潜试验将重点对可调压载系统功能进行验\r\n证。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	刘峰说，在7000米级海试中，海试团队需要对潜水器200多项指标和功能进行验证，没有充分的下潜试验次数是无法做到这一点的。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	海试现场临时党委书记刘心成说：“我们要把潜水器的所有问题在海试中都‘逼出来’，在源头上解决。绝不能让潜水器的任何一个问题在我们手里‘潜伏’下来，带到今后的实际应用和作业中去。”\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(4,2,'6月8日上午的高考综合科目考试中，邵阳市洞口县九中考点因信号员错发终考信号导致考试提前结束。湖南省委、省政府高度重视，要求妥善处置，严肃查\r\n处相关责任人。省教育厅派出专人赴洞口县会同当地有关部门就此事进行调查，并责成邵阳市教育局、洞口县有关部门对相关责任人按规定进行了处理：给予洞口九\r\n中考点主考、县教育局党委委员、工会主席唐精武党内警告、行政记过处分；给予洞口九中考点副主考、洞口九中校长袁明明党内严重警告、行政记大过处分；给予\r\n洞口九中考点考务组长、洞口县教育局普教股干部刘丁党内严重警告、行政记大过处分；给予洞口九中考点司铃员、洞口九中职工肖浴龙行政降级处分，调离现工作\r\n岗位。\r\n&lt;p&gt;\r\n	湖南省教育厅给记者传来的情况说明说，湖南省教育考试院秉着公平公正的原则，对该考点综合科目在执行同样评分标准的前提下，实行了单独评卷，对\r\n考生在试题卷上作答未填写到答题卡上的，经核实后视为有效，并经专家认真研究、科学测算，对考生因事故耽误的4分48秒时间给予补偿。\r\n&lt;/p&gt;'),(5,2,'一名网友最近在微博爆料称：沾益县大坡乡新庄村委会老黄口村民舒树兵，在沾益县小河底看守所“自行死亡”，有新说法称，死者“是看欧洲杯足球太精彩过于激动而死！”此事引发了网友较大反响。\r\n&lt;p&gt;\r\n	对此，沾益县政府新闻办在通报中称：2012年6月17日，沾益县看守所留所服刑人员舒树兵因病送医院抢救无效死亡。接报后，市、县领导高度重\r\n视，一是曲靖市人民检察院牵头，纪检监察部门监督，由沾益县人民检察院、沾益县人民法院、曲靖市公安局监所管理支队相关人员，对舒树兵同监室在押人员、看\r\n守所值班领导和值班民警进行调查，对监室现场进行勘验，对相关证据进行调取、封存；二是在死者亲属及相关人员现场见证下，由曲靖市检察院及市公安局刑侦支\r\n队法医，对死者尸体进行尸表检验和尸体解剖检验，提取理化检材和病理组织检材送检；三是沾益县委政法委牵头，组织县检察院、县民政局、大坡乡党委政府和章\r\n溪村委会干部，开展善后处理工作。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	联合调查组现查明：2012年6月16日23时14分，沾益县看守所值班民警接到舒树兵同监室人员报称，舒树兵身体不适。接报后，值班民警立即\r\n进入监室查看，并于23时31分将舒树兵紧急送至沾益县医院抢救，6月17日0时17分，舒树兵（男，现年25岁，沾益县大坡乡章奚村人，因犯故意伤害\r\n罪，于2012年3月23日被沾益县人民法院判处有期徒刑1年，现留所执行刑罚）经抢救无效死亡。经曲靖市人民检察院及曲靖市公安局刑侦支队法医进行尸体\r\n检验、理化检验：排除机械性损伤、机械性窒息死亡及中毒死亡。目前，死者病理组织检材已送昆明医科大学进行病理检验。经调查：舒树兵在看守所期间，无被他\r\n人殴打、体罚、虐待等情况。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	6月18日下午，调查组将调查、尸检及理化检验等情况通报死者家属，善后工作正在进行中。\r\n&lt;/p&gt;'),(6,2,'发言人：国务院于近日批准，撤销海南省西沙群岛、南沙群岛、中沙群岛办事处，设立地级三沙市，管辖西沙群岛、中沙群岛、南沙群岛的岛礁及其海域。三沙市人民政府驻西沙永兴岛。\r\n&lt;p&gt;\r\n	记者：据了解，我国一直设有专门行政机构对西沙群岛、中沙群岛、南沙群岛的岛礁及其海域实施管辖，请介绍有关情况？\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	发言人：中国最早发现、命名并持续对西沙群岛、中沙群岛、南沙群岛的岛礁及其海域行使主权管辖。中华人民共和国成立后，于1959年设立了西沙\r\n群岛、南沙群岛、中沙群岛办事处，由海南行政区领导，管辖西沙群岛、中沙群岛、南沙群岛的岛礁及其海域。1988年撤销海南行政区，设立海南省，西沙群\r\n岛、南沙群岛、中沙群岛办事处相应划归海南省管辖。此次设立地级三沙市，是我国对海南省西沙群岛、中沙群岛、南沙群岛的岛礁及其海域行政管理体制的调整和\r\n完善。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	记者：设立海南省三沙市有什么意义？\r\n&lt;/p&gt;\r\n发言人：设立三沙市有利于进一步加强我国对西沙群岛、中沙群岛、南沙群岛的岛礁及其海域的行政管理和开发建设，保护南海海洋环境&lt;br /&gt;'),(7,2,'华商网快讯 2012年6月21日晚18时，有多名网友在微博中称，西安东大街一年轻女性被杀。记者从柏树林派出所了解到确有此事，警方表示，具体原因正在调查之中。据警方透露，死者身着白色连衣裙。西安市公安局的刘宏伟科长说，凶手已经被愤怒的群众逮住了。\r\n&lt;p&gt;\r\n	另有网友微博称，东大街目前交通拥堵严重。过往车辆请择路绕行。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(8,2,'　据介绍，此次评选对象是自主创办生产服务型项目、企业或从事个体经营，同时吸纳了一定数量的社会人员实现就业再就业的城乡各类青年劳动者。评选活\r\n动设“青岛市杰出青年创业奖”10名、“青岛市优秀青年创业奖”20名。“青岛市杰出青年创业奖”每人获得创业贴息资金1万元。同时，符合条件的获奖者还\r\n将推荐申请省青春创业行动指导中心贷款贴息扶持；符合青岛市青年企业家协会会员条件的，推荐参加青岛市青年企业家协会。\r\n&lt;p&gt;\r\n	此外，评选还特别设置“优秀青年公益项目”两个，每项奖金5000元，旨在奖励在践行公益事业中做出成绩的创业青年和高校志愿者团队。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	符合条件的创业青年可于7月中旬前，通过当地团组织推荐报名，也可直接向团市委青工部自荐报名，联系电话：85912695。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(9,2,'据检方指控，2010年7月至2011年7月间，张某利用经手收取垃圾清运费的便利，采用减低收费价格、不开具发票等方式，截留侵吞应上缴的垃圾清运费共计人民币1.3万元。公诉机关认为，应以贪污罪追究张某的刑事责任。\r\n&lt;p&gt;\r\n	记者发现，近年来，所谓的“小角色”成为大贪污犯的案件时有发生。市一中院曾对2005年至2008年所审理的案件进行统计，仅一审就审理了\r\n21件这类“小官员大腐败案”，超过一中院所审理的一审职务犯罪案件的三分之一。26个小人物在21起案件中捞走国家3.4个亿，平均每人的犯罪数额超过\r\n1000万元。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	法院还曾审理过这样的案件，11名来自国家统计局、教育部、国家工商行政管理总局、北京市财政局、国土资源部、北京积水潭医院的收发室“蛀\r\n虫”，因勾结邮局营业员合伙贪污近150万元邮资款获刑；房山区燕山清洁队原队长王远利涉嫌贪污200余万元被判无期。房山区市政管理所出纳董凤杰先后\r\n44次私自填写现金支票，将230.3万元公款用于赌博。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	相关法律人士认为，监管缺位是小人物大腐败的主因。涉案的国有企事业单位，普遍存在对从事公务的人员和国家机关、国有公司、企事业单位委派到非国有公司、企事业单位中从事公务人员的监管缺位，制度不健全。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(10,3,'当天下午，在约50名亲小泽派众议员召开的非公开集会上，小泽明确表示将追求最佳解决方案，如果未能实现，也有可能考虑组建新党。\r\n&lt;p&gt;\r\n	由于日本公共债务负担沉重，公债总额约为国内生产总值的两倍。为减轻债务压力，野田内阁力主提高消费税率。但是对于野田佳彦首相“倾注全部政治\r\n生命”推行的社会保障与税制一体化改革相关法案，小泽则以政府未进行彻底改革就要增税为由表示反对。21日，民主党已经决定将该法案的国会表决时期从22\r\n日推迟到26日。\r\n&lt;/p&gt;\r\n小泽派是民主党内最大派系，在众议院拥有约90名议员。日本媒体普遍认为，跟随小泽退党的民主党议员人数的多少将成为左右民主党命运及日本未来\r\n政局走向的关键。日本众议院现有480个席位，目前联合执政的民主党和国民新党共占有290多个席位。如果退党人数超过54人，执政党在众议院的席位将少\r\n于一半，今后的政权运营将面临较大困难&lt;br /&gt;'),(11,3,'　奥巴马当天在声明中对布赖森担任商务部长以来所做的工作表示感谢。奥巴马说，布赖森不辞辛苦地工作，为促进美国出口和制造业生产作出了贡献。他称布赖森是有执行力的、杰出的领导，并透露布赖森将在总统出口委员会中任职。\r\n&lt;p&gt;\r\n	美国商务部网站当天公布了布赖森写给员工的一封信。布赖森在信中说，目前振兴经济和创造就业的工作比以往更加重要，他决定辞职以防给工作造成干扰。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	布赖森本月9日在加利福尼亚州卷入交通事故案。当时他驾驶的汽车先后撞上两辆汽车，警方抵达现场时，发现布赖森独自一人在车中，不省人事，身负\r\n轻伤。警方认为车祸与酒精或者毒品没有关系。在当地医院经过短暂治疗后，布赖森返回华盛顿，之后向奥巴马请假就医。有媒体猜测，布赖森驾车肇事可能与癫痫\r\n发作有关。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	布赖森现年68岁，去年5月31日获奥巴马提名出任商务部长，接替转任驻华大使的骆家辉，美国会参议院去年10月20日投票批准布赖森出任商务部长。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(12,3,'当地时间21日晚6时30分许，巴基斯坦西北部城市白沙瓦的哈扎尔卡瓦尼地区的一个神庙附近发生炸弹袭击事件。当地消息人士说，爆炸造成包括2名儿童在内的至少3人死亡，另有24人受伤。\r\n&lt;p&gt;\r\n	据悉，此次袭击使用了约10至12公斤炸药，这些炸药被安放在一辆停靠在神庙附近的驴车上。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	几乎与此同时，巴基斯坦西南部城市奎达的戈萨巴德地区的一座清真寺附近也发生爆炸，造成至少1人死亡，另有18人受伤。当地官员说，炸弹被固定于停放在清真寺附近的一辆自行车上。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	两起爆炸发生后，巴安全部队和救援人员迅速抵达现场，并将伤者转移到医院接受救治。白沙瓦医院方面说，至少有10名伤者伤势严重，死亡人数可能会进一步上升。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	目前，尚未有任何组织宣称制造了这两起爆炸事件。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(13,3,'报道援引美国官员和阿拉伯情报官员的话说，这些中情局官员人数不多，他们已在土耳其南部秘密活动数个星期。通过帮助甄别叙利亚反对派武装人员，这些情报官员希望了解更多有关叙利亚境内反对派情况并与之建立关系。\r\n&lt;p&gt;\r\n	报道说，向叙利亚反对派提供的武器包括自动步枪、火箭弹、弹药和部分反坦克武器。这些武器由土耳其、沙特阿拉伯和卡塔尔出资购买。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	美国政府称，美方迄今未向叙利亚反对派提供武器援助，只是提供药品和通讯设备等援助。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	叙利亚危机已经持续15个多月，政府军和反对派武装冲突不断。美国等西方国家要求叙利亚总统巴沙尔下台以便实现政治过渡，俄罗斯和中国则反对通过外来干涉实现政权变更，主张叙利亚各方通过谈判实现和解。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(14,3,'&lt;span style=&quot;color:;&quot;&gt;&lt;/span&gt;达武特奥卢表示，两国首脑的会晤是一个良好开端，他本人也将于7月5日造访巴黎开展正式会谈。他称，相互尊重是土耳其外交的准则之一。\r\n&lt;p&gt;\r\n	去年12月，土耳其因法国议会通过的有关“亚美尼亚大屠杀”法案而对法国采取制裁措施，中止了与法国的军事、经济合作以及所有双边政治磋商。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	法国国民议会于去年12月22日通过一项法案，该法案规定对否认亚美尼亚大屠杀的行为施以惩罚。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	所谓的“亚美尼亚大屠杀”是指1915年至1917年土耳其奥斯曼帝国统治时期150万亚美尼亚人死亡的事件。亚美尼亚认为这是“大屠杀事件”，而土耳其历届政府均否认大屠杀，并声称亚美尼亚人死亡数字被夸大。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(15,3,'他说，当这艘船经北海驶往大西洋时，船主得知第三方保险已经撤出，该船所处位置的航海分局要求这艘船入港接受检查。为避免延误，这艘船决定停靠在摩尔曼斯克港，预计将于22日抵达。这艘船悬挂俄罗斯国旗，将进行再次登记。\r\n&lt;p&gt;\r\n	据报道，17日，美国政府通告英国政府，一艘俄罗斯船只装载有被称为“飞行坦克”的武装直升机和导弹，而该船的目的地是叙利亚，要求英国政府协助将其拦截。而向该船提供海上保险的是英国海上保险公司。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	英国安全机构随即警告英国海上保险公司：不能向俄罗斯船只提供海上保险。英国海上保险公司根据政府的指示，撤销了对向叙利亚运送武器的俄罗斯船只的保险。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	此前，美国国务卿希拉里指责俄罗斯向叙利亚运送进攻性武器，遭到俄罗斯外长拉夫罗夫的否认，掀起两国一场外交争端。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(16,3,'人民网伦敦6月21日电(记者白阳)由于对政府养老金改革不满，英国国家医疗保障体系(NHS)的医生21日开始进行为期一天的罢工，这是1975\r\n年以来英国医生首次进行罢工。据悉，当天约有30000台手术和20000个预约门诊被取消并推迟，受影响患者超过100万人。\r\n&lt;p&gt;\r\n	紧急病患不受影响\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	当天，所有紧急病患和检查都不受罢工影响，急诊和妇产科仍正常运行，癌症等重大疾病的紧急检查也不会耽误。受到影响的主要是需要提前预约的全科\r\n医生诊疗，如果预约的医生参加罢工，预约只能延期。另外，一些非紧急手术如白内障手术等也被延期。牙医由于在体系之外，不参与此次罢工。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	医生对养老金改革不满\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	在削减和紧缩的大环境下，政府要求NHS在2015年前节省200亿英镑支出，同时还不能影响医疗质量和等待时间。根据今年年初政府提出的养老金改革方案，医生养老金的自出资部分将有所提高，同时医生的退休年龄可能将会从65岁提高到68岁。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	代表医生利益的英国医师协会此前就此改革方案对超过10万名成员发起投票，结果显示，超过半数的投票者中，全科医生、医院医师、初级医师中支持罢工的比例高达79%、84%和92%。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	此前一天，英国卫生大臣安德鲁？兰斯利在NHS联盟的年会上表示，为医生们制定的新养老金方案是合理的。他公布了一些新数据，称医生们每付出1\r\n英磅的工作量，就会得到5英镑的养老金补偿，根本不是像英国医师协会所说的那样“付出和养老金严重失调”。兰斯利呼吁医生们不要参加罢工，称不会有任何意\r\n义。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	兰斯利称，目前英国医生的养老金数目已达830亿英镑，而纳税人将为其中660亿英镑埋单，接近80%，而医生们自己需要出的数额仅为170亿\r\n英镑。如果仍让医生支付他们原来需要支付的份额，那么一个年薪30000磅的护士每个月的工资就会少100磅。医生少付的前肯定需要NHS系统内其他的人\r\n来弥补，而其他的人当然不会接受这种不公平的行为，因为医生是NHS中收入最高的群体。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(17,4,'　2012年6月21日，外交部副部长张志军召见越南驻华大使阮文诗，就越南国会审议通过侵犯中国领土主权的《越南海洋法》向越方提出严正交涉。\r\n&lt;p&gt;\r\n	张志军指出，中国对西沙群岛、南沙群岛及其附近海域拥有无可争辩的主权，《越南海洋法》把中国西沙群岛和南沙群岛包含在所谓越南“主权”和“管\r\n辖”范围内，严重侵犯了中国的领土主权，中方对此表示强烈抗议和坚决反对。越方采取使问题复杂化、扩大化的单方面行动，违背了两国领导人共识和《南海各方\r\n行为宣言》的精神，不利于南海地区的和平稳定。越方上述做法是非法和无效的，中方将坚定维护国家领土主权。中方要求越方立即停止并纠正一切错误做法，不做\r\n任何危害中越关系和南海和平稳定的事情。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(18,4,'据台湾《联合报》报道，台风来袭，李登辉取消云林参访行程，改在饭店内与云林科技大学学生座谈。\r\n&lt;p&gt;\r\n	李登辉座谈时提起往事。他少时乘船赴日，要到京都帝大留学，途中在青岛休息四、五天，看到很多身材高大、脸黑黑的山东大汉；媒体追问，“当地小姐美吗？”李登辉则笑答：“没看到小姐，只看到山东大汉。”\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	李登辉印象中青岛是个很漂亮的城市，但让他最有印象的反而是脸庞黝黑、身材高壮的山东大汉；当时中日交战，他还直言：“日本人怎么可能打得赢？”\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	来自西安的赵姓大陆向李登辉提问，对陆生有何看法？李登辉说，希望有更多大陆人来台湾“看看李登辉写什么东西”，看看有何不同。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(19,4,'台海网6月6日讯 据中评社报道，李登辉5日晚间在台湾中央大学演讲，原本预定晚上8点30分钟落幕，主办单位最后时段开放学生提问，一位大陆交换学生，以台湾历史定位与钓鱼岛等议题问李登辉，意外擦出火花。\r\n&lt;p&gt;\r\n	在中央大学中文系就读的陆生，是开放三个提问当中的最后一个，当他起立，站在台前介绍自己身份时，立刻引起全场关注。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	陆生首先问李登辉，两岸学生未来应如何发展？李登辉回答说，两岸应维护好的关系，并用闽南语顺口说“不要说，谁是谁的。”大陆学生当场反应，闽南语他听不懂，李登辉则再次解释，“不要说台湾是中国的一部分。”\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	接着，该陆生话锋一转，又问李登辉，“您接任蒋介石、蒋经国之后，有违背他们的思想。”这个问题，让李登辉当场有些诧异，显然陆生想延续李登辉\r\n“托古改制”及“脱古改新”的论述，但问题可能不甚清楚。李登辉了解后没有正面回答，只说战国时期秦国的商鞅变法，就要是寻求改变。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(20,5,'柯震東Kai：手术很成功！我很好！老天一定听到了所有人的祝福！所以我现在很好！谢谢所有人的祝福！我很快就会再出发：)\r\n　　背景：台湾艺人柯震东因后脑脂肪瘤需动刀手术引发众多粉丝关心担忧。今日(6月21日)柯震东在微博报喜称手术非常成功，也谢谢所有人的祝福，并上传了一个v字手势的&lt;br /&gt;'),(21,5,'继成功在“赌城”美国拉斯韦加斯成功连演6场后，由前重量级“拳王”迈克·泰森主演的名为“迈克·泰森：无可争议的真相”的脱口秀将于7月31日至\r\n8月5日在百老汇连演6场。泰森和脱口秀导演斯派克·李以及百老汇音乐剧制作人詹姆斯·内德兰德，日前共同出席了在纽约举行的新闻发布会。&amp;nbsp;\r\n&lt;p&gt;\r\n	泰森表示，这场脱口秀演出是他人生的一个回顾，内容会非常真实和残酷，但同时也会展露他脆弱的一面，“尽管我的外表强壮，但其实我是个很脆弱的\r\n人，我是谁、我从哪里来、这一切怎样发生，就是我会说的东西。” \r\n泰森还坦言，希望接下来的演出能让更多人看到自己的努力，“我会尽自己最大的全力演出。”&amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	泰森的人生可谓充满了戏剧性，他曾是声名赫赫的一代拳王，也是入狱、吸毒等负面新闻报道的“常客”。据了解，脱口秀将会从他的童年开始说起，然\r\n后叙述他怎样成为惯犯、遇上其启蒙教练达马托、夺得拳王宝座、如何入狱、沉沦毒品和复出。他也将述说他的感情生活和他与当时的对手霍利菲尔德的咬耳朵事\r\n件。\r\n&lt;/p&gt;\r\n&lt;br /&gt;'),(31,2,'&lt;p&gt;\r\n	北京谋智火狐信息技术有限公司版权所有北京谋智火狐信息技术有\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	限公司版权所有北京谋智火狐信息技术有限公司版权所有北京谋智火狐信息技术有限公司版权所有\r\n&lt;/p&gt;\r\n&lt;br /&gt;');
/*!40000 ALTER TABLE `fn_content_1_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_1_verify`
--

DROP TABLE IF EXISTS `fn_content_1_verify`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_1_verify` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `modelid` smallint(5) NOT NULL,
  `userid` mediumint(8) NOT NULL,
  `username` char(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tablename` char(30) NOT NULL,
  `updatetime` bigint(10) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `content` longtext NOT NULL,
  KEY `id` (`id`),
  KEY `catid` (`catid`),
  KEY `modelid` (`modelid`,`updatetime`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_1_verify`
--

LOCK TABLES `fn_content_1_verify` WRITE;
/*!40000 ALTER TABLE `fn_content_1_verify` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_content_1_verify` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_2`
--

DROP TABLE IF EXISTS `fn_content_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_2` (
  `id` int(10) unsigned NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `modelid` smallint(5) NOT NULL,
  `title` varchar(80) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `hits` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sysadd` tinyint(1) NOT NULL COMMENT '是否后台添加',
  `userid` smallint(8) NOT NULL,
  `username` char(20) NOT NULL,
  `inputtime` bigint(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` bigint(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin` (`modelid`,`status`,`listorder`,`updatetime`),
  KEY `catid` (`catid`,`status`,`updatetime`),
  KEY `member` (`userid`,`modelid`,`status`,`sysadd`,`updatetime`),
  KEY `status` (`status`,`updatetime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_2`
--

LOCK TABLES `fn_content_2` WRITE;
/*!40000 ALTER TABLE `fn_content_2` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_content_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_2_extend`
--

DROP TABLE IF EXISTS `fn_content_2_extend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_2_extend` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `verify` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  KEY `id` (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_2_extend`
--

LOCK TABLES `fn_content_2_extend` WRITE;
/*!40000 ALTER TABLE `fn_content_2_extend` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_content_2_extend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_content_2_verify`
--

DROP TABLE IF EXISTS `fn_content_2_verify`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_content_2_verify` (
  `id` int(10) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `modelid` smallint(5) NOT NULL,
  `userid` mediumint(8) NOT NULL,
  `username` char(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tablename` char(30) NOT NULL,
  `updatetime` bigint(10) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `content` longtext NOT NULL,
  KEY `id` (`id`),
  KEY `catid` (`catid`),
  KEY `modelid` (`modelid`,`updatetime`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_content_2_verify`
--

LOCK TABLES `fn_content_2_verify` WRITE;
/*!40000 ALTER TABLE `fn_content_2_verify` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_content_2_verify` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_favorite`
--

DROP TABLE IF EXISTS `fn_favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_favorite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site` tinyint(3) NOT NULL COMMENT '站点id',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `contentid` int(10) NOT NULL,
  `title` char(100) NOT NULL,
  `url` char(100) NOT NULL,
  `adddate` bigint(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `contentid` (`contentid`),
  KEY `userid` (`userid`),
  KEY `site` (`site`),
  KEY `adddate` (`adddate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_favorite`
--

LOCK TABLES `fn_favorite` WRITE;
/*!40000 ALTER TABLE `fn_favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_form`
--

DROP TABLE IF EXISTS `fn_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_form` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_form`
--

LOCK TABLES `fn_form` WRITE;
/*!40000 ALTER TABLE `fn_form` DISABLE KEYS */;
INSERT INTO `fn_form` VALUES (1);
/*!40000 ALTER TABLE `fn_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_form_1_gbook`
--

DROP TABLE IF EXISTS `fn_form_1_gbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_form_1_gbook` (
  `id` int(10) NOT NULL,
  `cid` mediumint(8) NOT NULL,
  `userid` mediumint(8) NOT NULL,
  `username` char(20) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` char(20) DEFAULT NULL,
  `neirong` text,
  `xingming` varchar(255) DEFAULT NULL,
  `dianhua` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `listorder` (`listorder`),
  KEY `status` (`status`),
  KEY `updatetime` (`updatetime`),
  KEY `inputtime` (`inputtime`),
  KEY `userid` (`userid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_form_1_gbook`
--

LOCK TABLES `fn_form_1_gbook` WRITE;
/*!40000 ALTER TABLE `fn_form_1_gbook` DISABLE KEYS */;
INSERT INTO `fn_form_1_gbook` VALUES (1,0,2,'hhfghghg',0,1,1559223516,1559223516,'10.28.239.62','asdadsasd','sffdsdfssa','sadadsdas');
/*!40000 ALTER TABLE `fn_form_1_gbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_ip`
--

DROP TABLE IF EXISTS `fn_ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_ip` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `addtime` bigint(10) NOT NULL,
  `endtime` bigint(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_ip`
--

LOCK TABLES `fn_ip` WRITE;
/*!40000 ALTER TABLE `fn_ip` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_linkage`
--

DROP TABLE IF EXISTS `fn_linkage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_linkage` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site` tinyint(3) NOT NULL COMMENT '站点id',
  `name` varchar(30) NOT NULL,
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `child` tinyint(1) NOT NULL,
  `arrchilds` varchar(200) NOT NULL,
  `keyid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `list` (`site`,`parentid`,`keyid`,`listorder`),
  KEY `keyid` (`site`,`keyid`),
  KEY `child` (`child`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_linkage`
--

LOCK TABLES `fn_linkage` WRITE;
/*!40000 ALTER TABLE `fn_linkage` DISABLE KEYS */;
INSERT INTO `fn_linkage` VALUES (1,0,'地区',0,0,'',0,0),(2,1,'地区一',0,1,'2,6,7,8,9,10',1,0),(3,1,'地区二',0,1,'3,11,12,13',1,0),(4,1,'地区三',0,1,'4,14,15',1,0),(5,1,'地区四',0,1,'5,16,17,18',1,0),(6,1,'街道11',2,0,'6',1,0),(7,1,'街道12',2,0,'7',1,0),(8,1,'街道13',2,0,'8',1,0),(9,1,'街道14',2,0,'9',1,0),(10,1,'街道15',2,0,'10',1,0),(11,1,'街道21',3,0,'11',1,0),(12,1,'街道22',3,0,'12',1,0),(13,1,'街道23',3,0,'13',1,0),(14,1,'街道31',4,0,'14',1,0),(15,1,'街道32',4,0,'15',1,0),(16,1,'街道4',5,0,'16',1,0),(17,1,'街道41',5,0,'17',1,0),(18,1,'街道42',5,0,'18',1,0);
/*!40000 ALTER TABLE `fn_linkage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_member`
--

DROP TABLE IF EXISTS `fn_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_member` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `salt` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT '',
  `groupid` smallint(5) NOT NULL DEFAULT '1',
  `modelid` smallint(5) NOT NULL,
  `credits` int(10) NOT NULL,
  `regdate` bigint(10) unsigned NOT NULL DEFAULT '0',
  `regip` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `randcode` varchar(32) NOT NULL,
  `lastloginip` varchar(15) NOT NULL,
  `lastlogintime` bigint(10) NOT NULL,
  `loginip` varchar(15) NOT NULL,
  `logintime` bigint(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `groupid` (`groupid`),
  KEY `status` (`status`),
  KEY `modelid` (`modelid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_member`
--

LOCK TABLES `fn_member` WRITE;
/*!40000 ALTER TABLE `fn_member` DISABLE KEYS */;
INSERT INTO `fn_member` VALUES (1,'tsctf123','f19403104e4a250b9d6d96ec5b974931','c11634cd74','tsctf123@gmail.com','123','',1,6,0,1559214506,'10.210.1.8',1,'','',1559215460,'',1559223568),(2,'hhfghghg','44c182071d455f90bae6ece9b558d65d','f2e88870c5','aaaa@qq.com','','',1,6,0,1559223482,'10.28.239.62',1,'','',1559223504,'',1559223509),(3,'check_kkekke','4bd86059581c727dc4a3f62ddc282707','e545511c08','kkekke@kkekke.kkekke','check_kkekke','',1,6,0,1559226238,'10.3.8.33',1,'','',1559226888,'',1559228012),(4,'test_bbapbz','ff0cfb7038d9a3c14316ed1e47192623','ea174a80a3','bbapbz@tsctf.com','','',1,6,0,1559232009,'10.3.8.33',1,'','',0,'',1559232009),(5,'test_dqfthv','23819f25b977cef6f07776e831426f46','dba990383c','dqfthv@tsctf.com','','',1,6,0,1559232011,'10.3.8.33',1,'','',0,'',1559232011),(6,'test_aihnca','ae2b7741b5ba51d4e3fbc036344ce8af','ab16fabcb0','aihnca@tsctf.com','','',1,6,0,1559232012,'10.3.8.33',1,'','',0,'',1559232013),(7,'test_jyqhmy','e9f52cb1dae80eb68ba7d42e03d1b5d2','5b0248cb05','jyqhmy@tsctf.com','','',1,6,0,1559232052,'10.3.8.33',1,'','',0,'',1559232052),(8,'test_grvnvc','fd064b9274af7c81e4b1492949906814','5382ddd1fc','grvnvc@tsctf.com','','',1,6,0,1559232053,'10.3.8.33',1,'','',0,'',1559232053),(9,'test_vkthjd','6a45dc703771342c36f1f3c0a2f0fadc','cd8e303ac5','vkthjd@tsctf.com','','',1,6,0,1559232054,'10.3.8.33',1,'','',0,'',1559232055),(10,'test_nyzedp','15ca6bec4da95346ad1b0fe4795c739d','b60793a7ee','nyzedp@tsctf.com','','',1,6,0,1559232085,'10.3.8.33',1,'','',0,'',1559232085),(11,'test_yfglmu','4c04d9a20664fab2ed1eab65f31eea35','0e8d4b54c0','yfglmu@tsctf.com','','',1,6,0,1559232086,'10.3.8.33',1,'','',0,'',1559232087),(12,'test_omcese','fb490cca4212eaa4011745c56ad1d7af','f6194f27ff','omcese@tsctf.com','','',1,6,0,1559232087,'10.3.8.33',1,'','',0,'',1559232087),(13,'test_wsboih','ae2bb029ea93833ebc01c99a3f78dafa','7f0b064e0d','wsboih@tsctf.com','','',1,6,0,1559232094,'10.3.8.33',1,'','',0,'',1559232095),(14,'test_oxxzfg','b2acd846e16e2aa9ccffe4233520984e','7e46723f26','oxxzfg@tsctf.com','','',1,6,0,1559232096,'10.3.8.33',1,'','',0,'',1559232096),(15,'test_nlpgzr','e2bf2957479d266a7e6d313a2e9d337f','50e2f18c52','nlpgzr@tsctf.com','','',1,6,0,1559232098,'10.3.8.33',1,'','',0,'',1559232098),(16,'test_yjtkdn','0c39cfd72726344d9a761539d4754dfb','6f6af33cf8','yjtkdn@tsctf.com','','',1,6,0,1559232150,'10.3.8.33',1,'','',0,'',1559232150),(17,'test_eltqib','cbef5fb1e0194d9911d84affbc126a1b','661825b031','eltqib@tsctf.com','','',1,6,0,1559232152,'10.3.8.33',1,'','',0,'',1559232152),(18,'test_aqvkre','4cd60cb1dda36996ef1c0afbd4feec00','0b492d9d54','aqvkre@tsctf.com','','',1,6,0,1559232154,'10.3.8.33',1,'','',0,'',1559232154),(19,'test_unoios','ed2cd8badcae93f5cc62f6f2e4af034a','29fb35be6d','unoios@tsctf.com','','',1,6,0,1559232180,'10.3.8.33',1,'','',0,'',1559232180),(20,'test_kycxyj','3d186b32748e57f7b6a92201adc41185','d297efeb4b','kycxyj@tsctf.com','','',1,6,0,1559232181,'10.3.8.33',1,'','',0,'',1559232181),(21,'test_tjywlg','9443cddad153ad6d3f4497b3fe6f1d44','11b26f5c8c','tjywlg@tsctf.com','','',1,6,0,1559232182,'10.3.8.33',1,'','',0,'',1559232182),(22,'test_dczewi','b969195024599e322ef460ea79848658','3cb87a7435','dczewi@tsctf.com','','',1,6,0,1559232267,'10.3.8.33',1,'','',0,'',1559232267),(23,'test_zkkdam','e72105234f699434280a5e5bef7119e0','228e668c3a','zkkdam@tsctf.com','','',1,6,0,1559232268,'10.3.8.33',1,'','',0,'',1559232268),(24,'test_faziwz','38878f3163306f0ed9b07d4cd4584154','a64b62053c','faziwz@tsctf.com','','',1,6,0,1559232271,'10.3.8.33',1,'','',0,'',1559232271),(25,'test_tkfpul','0db04e1789bfad544bff781e67edecfc','7ac276a2cd','tkfpul@tsctf.com','','',1,6,0,1559232314,'10.3.8.33',1,'','',0,'',1559232314),(26,'test_iydykx','bc7d6e6a9445d75973464b0289fd8bb6','292b97d608','iydykx@tsctf.com','','',1,6,0,1559232316,'10.3.8.33',1,'','',0,'',1559232316),(27,'test_gxuece','c53342a52dc320698e786c1873e43e22','fa82766d49','gxuece@tsctf.com','','',1,6,0,1559232317,'10.3.8.33',1,'','',0,'',1559232317),(28,'test_vauafn','616a648b9a4a4a61be0618b045b2ac9b','2dcf5398c5','vauafn@tsctf.com','','',1,6,0,1559232351,'10.3.8.33',1,'','',0,'',1559232351),(29,'test_zzishe','542a0d23ac86376090b413b122dd873e','7708e1397e','zzishe@tsctf.com','','',1,6,0,1559232352,'10.3.8.33',1,'','',0,'',1559232352),(30,'test_iktayc','b9e7a90ddd7b0e4218a699e0cde0504d','b9f3e544a5','iktayc@tsctf.com','','',1,6,0,1559232354,'10.3.8.33',1,'','',0,'',1559232354);
/*!40000 ALTER TABLE `fn_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_member_count`
--

DROP TABLE IF EXISTS `fn_member_count`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_member_count` (
  `id` mediumint(8) NOT NULL,
  `post` mediumint(5) NOT NULL,
  `pms` mediumint(5) NOT NULL,
  `updatetime` bigint(10) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_member_count`
--

LOCK TABLES `fn_member_count` WRITE;
/*!40000 ALTER TABLE `fn_member_count` DISABLE KEYS */;
INSERT INTO `fn_member_count` VALUES (1,0,0,0),(3,0,0,1559227488);
/*!40000 ALTER TABLE `fn_member_count` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_member_geren`
--

DROP TABLE IF EXISTS `fn_member_geren`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_member_geren` (
  `id` mediumint(8) NOT NULL,
  `xingming` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_member_geren`
--

LOCK TABLES `fn_member_geren` WRITE;
/*!40000 ALTER TABLE `fn_member_geren` DISABLE KEYS */;
INSERT INTO `fn_member_geren` VALUES (1,'123'),(3,'check_kkekke');
/*!40000 ALTER TABLE `fn_member_geren` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_member_group`
--

DROP TABLE IF EXISTS `fn_member_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_member_group` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `credits` mediumint(8) NOT NULL,
  `allowpost` mediumint(8) NOT NULL,
  `allowpms` mediumint(8) NOT NULL,
  `allowattachment` tinyint(1) NOT NULL,
  `postverify` tinyint(1) NOT NULL,
  `auto` tinyint(1) NOT NULL DEFAULT '0',
  `filesize` smallint(5) NOT NULL,
  `listorder` tinyint(3) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_member_group`
--

LOCK TABLES `fn_member_group` WRITE;
/*!40000 ALTER TABLE `fn_member_group` DISABLE KEYS */;
INSERT INTO `fn_member_group` VALUES (1,'新手上路',0,3,1,0,1,0,5,0,0),(2,'普通会员',20,1,0,0,1,0,10,0,0),(3,'中级会员',50,10,0,0,0,0,20,0,0),(4,'高级会员',100,12,0,1,0,0,50,0,0),(5,'金牌会员',200,100,10,1,0,0,0,0,0);
/*!40000 ALTER TABLE `fn_member_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_member_pms`
--

DROP TABLE IF EXISTS `fn_member_pms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_member_pms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sendname` varchar(30) NOT NULL DEFAULT '',
  `sendid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `toname` varchar(30) NOT NULL DEFAULT '',
  `toid` mediumint(8) NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  `title` varchar(60) NOT NULL DEFAULT '',
  `sendtime` bigint(10) unsigned NOT NULL DEFAULT '0',
  `hasview` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `senddel` mediumint(8) NOT NULL,
  `todel` mediumint(8) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `sendtime` (`sendtime`),
  KEY `sendid` (`sendid`),
  KEY `hasview` (`hasview`),
  KEY `isadmin` (`isadmin`),
  KEY `toid` (`toid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_member_pms`
--

LOCK TABLES `fn_member_pms` WRITE;
/*!40000 ALTER TABLE `fn_member_pms` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_member_pms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_model`
--

DROP TABLE IF EXISTS `fn_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_model` (
  `modelid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site` tinyint(3) NOT NULL COMMENT '站点id',
  `typeid` tinyint(3) NOT NULL,
  `modelname` char(30) NOT NULL,
  `tablename` varchar(30) NOT NULL,
  `categorytpl` varchar(30) NOT NULL,
  `listtpl` varchar(30) NOT NULL,
  `showtpl` varchar(30) NOT NULL,
  `joinid` smallint(5) DEFAULT NULL,
  `setting` text,
  PRIMARY KEY (`modelid`),
  KEY `typeid` (`typeid`),
  KEY `site` (`site`),
  KEY `joinid` (`joinid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_model`
--

LOCK TABLES `fn_model` WRITE;
/*!40000 ALTER TABLE `fn_model` DISABLE KEYS */;
INSERT INTO `fn_model` VALUES (1,1,1,'文章','content_1_news','category_news.html','list_news.html','show_news.html',NULL,'a:1:{s:7:\"default\";a:4:{s:5:\"title\";a:2:{s:4:\"name\";s:6:\"标题\";s:4:\"show\";s:1:\"1\";}s:5:\"thumb\";a:2:{s:4:\"name\";s:9:\"缩略图\";s:4:\"show\";s:1:\"1\";}s:8:\"keywords\";a:2:{s:4:\"name\";s:9:\"关键字\";s:4:\"show\";s:1:\"1\";}s:11:\"description\";a:2:{s:4:\"name\";s:6:\"描述\";s:4:\"show\";s:1:\"1\";}}}'),(2,1,1,'图片','content_1_image','category_image.html','list_image.html','show_image.html',NULL,'a:1:{s:7:\"default\";a:4:{s:5:\"title\";a:2:{s:4:\"name\";s:6:\"标题\";s:4:\"show\";s:1:\"1\";}s:5:\"thumb\";a:2:{s:4:\"name\";s:9:\"缩略图\";s:4:\"show\";s:1:\"1\";}s:8:\"keywords\";a:2:{s:4:\"name\";s:9:\"关键字\";s:4:\"show\";s:1:\"1\";}s:11:\"description\";a:2:{s:4:\"name\";s:6:\"描述\";s:4:\"show\";s:1:\"1\";}}}'),(3,1,1,'房产','content_1_fang','list_fang.html','list_fang.html','show_fang.html',NULL,'a:1:{s:7:\"default\";a:4:{s:5:\"title\";a:2:{s:4:\"name\";s:6:\"标题\";s:4:\"show\";s:1:\"1\";}s:5:\"thumb\";a:2:{s:4:\"name\";s:9:\"缩略图\";s:4:\"show\";s:1:\"1\";}s:8:\"keywords\";a:2:{s:4:\"name\";s:9:\"关键字\";s:4:\"show\";s:1:\"1\";}s:11:\"description\";a:2:{s:4:\"name\";s:6:\"描述\";s:4:\"show\";s:1:\"1\";}}}'),(4,1,1,'下载','content_1_down','list_down.html','list_down.html','show_down.html',NULL,'a:1:{s:7:\"default\";a:4:{s:5:\"title\";a:2:{s:4:\"name\";s:6:\"标题\";s:4:\"show\";s:1:\"1\";}s:5:\"thumb\";a:2:{s:4:\"name\";s:9:\"缩略图\";s:4:\"show\";s:1:\"1\";}s:8:\"keywords\";a:2:{s:4:\"name\";s:9:\"关键字\";s:4:\"show\";s:1:\"1\";}s:11:\"description\";a:2:{s:4:\"name\";s:6:\"描述\";s:4:\"show\";s:1:\"1\";}}}'),(6,1,2,'个人会员','member_geren','category_geren.html','list_geren.html','show_geren.html',NULL,''),(7,1,3,'留言','form_1_gbook','post_gbook.html','list_gbook.html','show_gbook.html',NULL,'a:1:{s:4:\"auth\";a:2:{s:9:\"adminpost\";s:1:\"0\";s:10:\"memberpost\";s:1:\"0\";}}');
/*!40000 ALTER TABLE `fn_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_model_field`
--

DROP TABLE IF EXISTS `fn_model_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_model_field` (
  `fieldid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `modelid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `field` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `length` char(10) NOT NULL,
  `indexkey` varchar(10) NOT NULL,
  `isshow` tinyint(1) NOT NULL,
  `tips` text NOT NULL,
  `not_null` tinyint(1) NOT NULL DEFAULT '0',
  `pattern` varchar(255) NOT NULL,
  `errortips` varchar(255) NOT NULL,
  `formtype` varchar(20) NOT NULL,
  `setting` mediumtext NOT NULL,
  `listorder` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldid`),
  KEY `modelid` (`modelid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_model_field`
--

LOCK TABLES `fn_model_field` WRITE;
/*!40000 ALTER TABLE `fn_model_field` DISABLE KEYS */;
INSERT INTO `fn_model_field` VALUES (1,1,'content','内容','','0','',1,'',0,'','','editor','a:3:{s:5:\"width\";s:2:\"80\";s:6:\"height\";s:3:\"500\";s:4:\"type\";s:1:\"1\";}',0,0),(2,2,'content','内容','','0','',1,'',0,'','','editor','a:3:{s:5:\"width\";s:2:\"80\";s:6:\"height\";s:3:\"300\";s:4:\"type\";s:1:\"0\";}',0,0),(3,2,'images','上传图片','TEXT','0','',1,'',0,'','','files','a:2:{s:4:\"type\";s:16:\"jpg,jpeg,png,gif\";s:4:\"size\";s:1:\"2\";}',0,0),(4,3,'content','内容','','0','',1,'',0,'','','editor','a:3:{s:5:\"width\";s:2:\"90\";s:6:\"height\";s:3:\"200\";s:4:\"type\";s:1:\"0\";}',99,0),(6,3,'quyu','区域','INT','5','INDEX',1,'',0,'','','linkage','a:2:{s:2:\"id\";s:1:\"1\";s:5:\"level\";s:1:\"2\";}',1,0),(7,3,'shi','室','TINYINT','2','',1,'',0,'','','input','a:1:{s:4:\"size\";s:2:\"50\";}',0,0),(8,3,'ting','厅','TINYINT','2','',1,'',0,'','','input','a:1:{s:4:\"size\";s:2:\"50\";}',0,0),(9,3,'wei','卫','TINYINT','2','',1,'',0,'','','input','a:1:{s:4:\"size\";s:2:\"50\";}',0,0),(10,3,'zhuangxiu','装修','VARCHAR','20','',1,'',0,'','','select','a:2:{s:7:\"content\";s:19:\"有装修\n无装修\";s:7:\"default\";s:0:\"\";}',0,0),(11,3,'louceng','楼层','TINYINT','2','',1,'',0,'','','input','a:1:{s:4:\"size\";s:2:\"50\";}',0,0),(12,3,'zongceng','总层','TINYINT','2','',1,'',0,'','','input','a:1:{s:4:\"size\";s:2:\"50\";}',0,0),(13,3,'zujin','租金','INT','5','',1,'',0,'','','input','a:1:{s:4:\"size\";s:2:\"120\";}',0,0),(14,3,'zujinleixing','租金类型','VARCHAR','30','',1,'',0,'','','select','a:2:{s:7:\"content\";s:19:\"全付款\n半付款\";s:7:\"default\";s:0:\"\";}',0,0),(15,3,'mianji','面积','INT','20','',1,'平方',0,'','','input','a:1:{s:4:\"size\";s:3:\"130\";}',6,0),(17,3,'xiaoqu','小区','VARCHAR','50','',1,'',0,'','','input','a:1:{s:4:\"size\";s:3:\"250\";}',2,0),(18,3,'fangwuhuxing','房屋户型','','0','',1,'',0,'','','merge','a:1:{s:7:\"content\";s:39:\"{shi}室 {ting}厅 {wei}卫 {zhuangxiu}\";}',3,0),(19,3,'loucengleixing','楼层类型','','0','',1,'',0,'','','merge','a:1:{s:7:\"content\";s:31:\"{louceng}楼，共{zongceng}楼\";}',4,0),(20,3,'zujingzuhe','租金','','0','',1,'',0,'','','merge','a:1:{s:7:\"content\";s:31:\"{zujin}元/月，{zujinleixing}\";}',5,0),(21,3,'peizhi','房屋配置','','0','',1,'',0,'','','checkbox','a:2:{s:7:\"content\";s:13:\"家电\n床位\";s:7:\"default\";s:0:\"\";}',7,0),(22,3,'tupian','房屋图片','','0','',1,'',0,'','','files','a:2:{s:4:\"type\";s:16:\"jpg,jpeg,png,gif\";s:4:\"size\";s:1:\"2\";}',8,0),(25,3,'dizhi','地址','VARCHAR','200','',1,'',0,'','','input','a:1:{s:4:\"size\";s:3:\"300\";}',8,0),(26,3,'dianhua','联系电话','VARCHAR','40','',1,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',9,0),(27,3,'ditu','地图','VARCHAR','100','',1,'',0,'','','map','a:2:{s:6:\"apikey\";s:40:\"D8DA516A60D11BE12A649224CD1DEB373AEAB063\";s:4:\"city\";s:6:\"成都\";}',0,0),(28,4,'content','软件介绍','','','',1,'',0,'','','editor','a:3:{s:5:\"width\";s:2:\"90\";s:6:\"height\";s:3:\"200\";s:4:\"type\";s:1:\"1\";}',99,0),(29,5,'content','商品描述','','','',1,'',0,'','','editor','a:3:{s:5:\"width\";s:2:\"90\";s:6:\"height\";s:3:\"300\";s:4:\"type\";s:1:\"1\";}',99,0),(30,4,'version','软件版本','CHAR','20','',1,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',0,0),(31,4,'language','软件语言','CHAR','20','',1,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',0,0),(32,4,'os','操作系统','','','',1,'',0,'','','checkbox','a:2:{s:7:\"content\";s:23:\"linux\nwindows\n苹果机\";s:7:\"default\";s:0:\"\";}',0,0),(33,4,'developers','软件作者','CHAR','20','',1,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',0,0),(34,4,'softsize','软件大小','CHAR','20','',1,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',0,0),(35,4,'downdata','下载地址','','','',1,'',0,'','','files','a:2:{s:4:\"type\";s:7:\"zip,rar\";s:4:\"size\";s:2:\"20\";}',0,0),(36,5,'jiage','商品价格','DECIMAL','10,2','',1,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',0,0),(37,5,'shuliang','商品数量','MEDIUMINT','8','',1,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',0,0),(38,5,'chushou','已经出售','MEDIUMINT','8','',0,'',0,'','','input','a:1:{s:4:\"size\";s:0:\"\";}',0,0),(39,6,'xingming','姓名','VARCHAR','255','',1,'',0,'','','input','a:2:{s:4:\"size\";s:3:\"150\";s:7:\"default\";s:0:\"\";}',0,0),(40,7,'neirong','内容','TEXT','255','',1,'',1,'','','textarea','a:3:{s:5:\"width\";s:3:\"400\";s:6:\"height\";s:2:\"90\";s:7:\"default\";s:0:\"\";}',3,0),(41,7,'xingming','姓名','VARCHAR','255','',1,'',1,'','','input','a:2:{s:4:\"size\";s:3:\"200\";s:7:\"default\";s:0:\"\";}',0,0),(42,7,'dianhua','电话','VARCHAR','255','',1,'',1,'','','input','a:2:{s:4:\"size\";s:3:\"200\";s:7:\"default\";s:0:\"\";}',0,0);
/*!40000 ALTER TABLE `fn_model_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_oauth`
--

DROP TABLE IF EXISTS `fn_oauth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_oauth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `oauth_openid` varchar(80) NOT NULL DEFAULT '',
  `oauth_name` varchar(30) NOT NULL DEFAULT '',
  `oauth_data` text NOT NULL,
  `nickname` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `logintimes` bigint(10) unsigned NOT NULL DEFAULT '0',
  `logintime` bigint(10) unsigned NOT NULL DEFAULT '0',
  `addtime` bigint(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `site` (`oauth_openid`,`oauth_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_oauth`
--

LOCK TABLES `fn_oauth` WRITE;
/*!40000 ALTER TABLE `fn_oauth` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_oauth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_plugin`
--

DROP TABLE IF EXISTS `fn_plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_plugin` (
  `pluginid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` tinyint(1) NOT NULL,
  `markid` smallint(5) NOT NULL,
  `name` varchar(40) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `controller` varchar(30) NOT NULL DEFAULT '',
  `dir` varchar(30) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(20) NOT NULL DEFAULT '',
  `disable` tinyint(1) NOT NULL DEFAULT '0',
  `setting` text NOT NULL,
  PRIMARY KEY (`pluginid`),
  KEY `dir` (`dir`),
  KEY `markid` (`markid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_plugin`
--

LOCK TABLES `fn_plugin` WRITE;
/*!40000 ALTER TABLE `fn_plugin` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_plugin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_position`
--

DROP TABLE IF EXISTS `fn_position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_position` (
  `posid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site` tinyint(3) NOT NULL COMMENT '站点id',
  `catid` smallint(5) unsigned DEFAULT '0',
  `name` char(30) NOT NULL DEFAULT '',
  `maxnum` smallint(5) NOT NULL DEFAULT '20',
  PRIMARY KEY (`posid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_position`
--

LOCK TABLES `fn_position` WRITE;
/*!40000 ALTER TABLE `fn_position` DISABLE KEYS */;
INSERT INTO `fn_position` VALUES (1,1,0,'首页头条',1),(2,1,0,'首页推荐',4),(3,1,0,'首页幻灯',5),(4,1,1,'栏目头条',1),(5,1,1,'栏目首页',1),(6,1,1,'栏目推荐',10);
/*!40000 ALTER TABLE `fn_position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_position_data`
--

DROP TABLE IF EXISTS `fn_position_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_position_data` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) NOT NULL,
  `posid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `contentid` mediumint(8) DEFAULT NULL,
  `thumb` varchar(100) NOT NULL DEFAULT '0',
  `title` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `url` varchar(200) NOT NULL,
  `listorder` mediumint(8) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `posid` (`posid`),
  KEY `listorder` (`listorder`),
  KEY `catid` (`catid`),
  KEY `contentid` (`contentid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_position_data`
--

LOCK TABLES `fn_position_data` WRITE;
/*!40000 ALTER TABLE `fn_position_data` DISABLE KEYS */;
INSERT INTO `fn_position_data` VALUES (1,0,1,0,'','FineCMS演示站点','FineCMS是一款基于PHP+MySql开发的内容管理系统,采用MVC设计模式，实现业务逻辑与表现层的适当分离...','http://www.finecms.net',0),(2,0,2,0,'','Apache(.htaccess)和IIS(http.ini)伪静态规则','','http://bbs.finecms.net/forum.php?mod=viewthread&amp;tid=6&amp;extra=page%3D1',0),(3,0,2,0,'','系统核心配置 SYS_DOMAIN 说明','','http://bbs.finecms.net/forum.php?mod=viewthread&amp;tid=4&amp;extra=page%3D1',0),(4,0,2,0,'','自定义路由规则详解','','http://bbs.finecms.net/forum.php?mod=viewthread&amp;tid=3&amp;extra=page%3D1',0),(5,0,2,0,'','FineCMS 模板标签详解','','http://bbs.finecms.net/forum.php?mod=viewthread&amp;tid=5&amp;extra=page%3D1',0),(6,0,3,0,'http://www.finecms.net/views/default/images/logo.png','FineCMS演示站点','','http://www.finecms.net/',0),(7,5,4,0,'','前拳王泰森将在百老汇上演脱口秀','继成功在“赌城”美国拉斯韦加斯成功连演6场后，由前重量级“拳王”迈克·泰森主演的名为“迈克·泰森：无可争议的真相”的脱口秀将于7月31日至8月5日在百老汇连演6场。泰森和脱口秀导演斯派克·李以及百老汇音乐剧...','index.php?c=content&amp;a=show&amp;id=21',0),(8,5,5,0,'','6月21日微博名言录:柯震东手术成功微博报喜','柯震東Kai：手术很成功！我很好！老天一定听到了所有人的祝福！所以我现在很好！谢谢所有人的祝福！我很快就会再出发：)　　背景：台湾艺人柯震东因后脑脂肪....','index.php?c=content&amp;a=show&amp;id=20',0),(9,2,6,0,'','北京1名垃圾站站长贪污上万元被公诉','据检方指控，2010年7月至2011年7月间，张某利用经手收取垃圾清运费的便利，采用减低收费价格、不开具发票等方式，截留侵吞应上缴的垃圾清运费共计人民币1.3万元。公诉机关认为，应以贪污罪追究张某的刑事责任。记者...','index.php?c=content&a=show&id=9',0),(10,9,6,0,'http://i2.sinaimg.cn/ent/http/slide.ent.sina.com.cn/U2398P28T3D3664700F522DT20120621104403.jpg','殷桃气质典雅(','近日，热播剧《我和老妈一起嫁》女主角殷桃曝光了一组全新写真，明艳动人，凸显殷桃时尚冷艳气质，诠释了别样的典雅风情，尽显大气与妩媚。','index.php?c=content&amp;a=show&amp;id=29',0),(11,9,6,0,'http://i3.sinaimg.cn/ent/http/slide.ent.sina.com.cn/U2398P28T3D3664803F522DT20120621115725.jpg','阚清子绝美冰美人','爱在屋檐下》热播，阚清子最近也是人气大增。最近，她曝光了一组早前拍摄的夏日“透明”人物大片，大片中她一反平日的甜美清新，化身冷艳大气的“冰美人”。...','index.php?c=content&amp;a=show&amp;id=27',0),(12,5,6,0,'','前拳王泰森将在百老汇上演脱口秀','继成功在“赌城”美国拉斯韦加斯成功连演6场后，由前重量级“拳王”迈克·泰森主演的名为“迈克·泰森：无可争议的真相”的脱口秀将于7月31日至8月5日在百老汇连演6场。泰森和脱口秀导演斯派克·李以及百老汇音乐剧...','index.php?c=content&amp;a=show&amp;id=21',0),(13,7,6,0,'http://static11.photo.sina.com.cn/middle/6ad6f8edtvb1bhhsqe4ei&amp;690','古装剧中十大让人难以忘怀的角色','金庸小说被拍成电影后大部分面目全非，和原著相差十万八千里，如星爷的《鹿鼎记》、徐老怪的《笑傲江湖》，幸运的是，李连杰版《倚天屠龙记》改编得并不那么离谱。在李连杰的演绎下，一向软弱的张无忌相当霸气，令读...','index.php?c=content&amp;a=show&amp;id=23',0),(14,2,6,0,'','北京1名垃圾站站长贪污上万元被公诉','据检方指控，2010年7月至2011年7月间，张某利用经手收取垃圾清运费的便利，采用减低收费价格、不开具发票等方式，截留侵吞应上缴的垃圾清运费共计人民币1.3万元。公诉机关认为，应以贪污罪追究张某的刑事责任。记者...','index.php?c=content&amp;a=show&amp;id=9',0),(15,2,6,0,'','蛟龙22日5时准备第三次下潜试验','据了解，这次下潜时间预计达10小时，计划下潜深度为6960米左右。试验任务是按照已定的海试计划，继续对潜水器各项指标进行验证和考核，同时对前两次下潜出现故障的改进情况进行验证，为最终冲击7000米深度做好充分准...','index.php?c=content&amp;a=show&amp;id=3',0),(16,0,6,0,'','全局栏目显示','','/',0),(21,2,6,9,'','北京1名垃圾站站长贪污上万元被公诉','据检方指控，2010年7月至2011年7月间，张某利用经手收取垃圾清运费的便利，采用减低收费价格、不开具发票等方式，截留侵吞应上缴的垃圾清运费共计人民币1.3万元。公诉机关认为，应以贪污罪追究张某的刑事责任。记者...','index.php?c=content&a=show&id=9',0),(19,2,2,9,'','北京1名垃圾站站长贪污上万元被公诉','据检方指控，2010年7月至2011年7月间，张某利用经手收取垃圾清运费的便利，采用减低收费价格、不开具发票等方式，截留侵吞应上缴的垃圾清运费共计人民币1.3万元。公诉机关认为，应以贪污罪追究张某的刑事责任。记者...','index.php?c=content&a=show&id=9',0),(22,2,6,31,'','北京谋智火狐信息技术有限公司版权所有','','index.php?c=content&a=show&id=31',0);
/*!40000 ALTER TABLE `fn_position_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_relatedlink`
--

DROP TABLE IF EXISTS `fn_relatedlink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_relatedlink` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `sort` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_relatedlink`
--

LOCK TABLES `fn_relatedlink` WRITE;
/*!40000 ALTER TABLE `fn_relatedlink` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_relatedlink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_role`
--

DROP TABLE IF EXISTS `fn_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_role` (
  `roleid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_role`
--

LOCK TABLES `fn_role` WRITE;
/*!40000 ALTER TABLE `fn_role` DISABLE KEYS */;
INSERT INTO `fn_role` VALUES (1,'超级管理员','超级管理员'),(2,'总编','总编'),(3,'编辑','编辑');
/*!40000 ALTER TABLE `fn_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_search`
--

DROP TABLE IF EXISTS `fn_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_search` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modelid` smallint(5) NOT NULL,
  `catid` smallint(5) NOT NULL,
  `params` varchar(32) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `addtime` bigint(10) unsigned NOT NULL DEFAULT '0',
  `sql` text NOT NULL,
  `total` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `params` (`params`,`addtime`),
  KEY `modelid` (`modelid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_search`
--

LOCK TABLES `fn_search` WRITE;
/*!40000 ALTER TABLE `fn_search` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_tag`
--

DROP TABLE IF EXISTS `fn_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_tag` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `letter` varchar(200) NOT NULL,
  `listorder` tinyint(3) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `letter` (`letter`,`listorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_tag`
--

LOCK TABLES `fn_tag` WRITE;
/*!40000 ALTER TABLE `fn_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_tag_cache`
--

DROP TABLE IF EXISTS `fn_tag_cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_tag_cache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `params` varchar(32) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `addtime` bigint(10) unsigned NOT NULL DEFAULT '0',
  `sql` mediumtext NOT NULL,
  `total` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `params` (`params`,`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_tag_cache`
--

LOCK TABLES `fn_tag_cache` WRITE;
/*!40000 ALTER TABLE `fn_tag_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `fn_tag_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fn_user`
--

DROP TABLE IF EXISTS `fn_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fn_user` (
  `userid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site` tinyint(3) DEFAULT NULL COMMENT '站点id',
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` char(10) NOT NULL,
  `roleid` int(3) NOT NULL,
  `lastloginip` varchar(15) DEFAULT NULL,
  `lastlogintime` bigint(10) unsigned DEFAULT '0',
  `loginip` varchar(15) DEFAULT NULL,
  `logintime` bigint(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `realname` varchar(50) DEFAULT '',
  `usermenu` text,
  PRIMARY KEY (`userid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fn_user`
--

LOCK TABLES `fn_user` WRITE;
/*!40000 ALTER TABLE `fn_user` DISABLE KEYS */;
INSERT INTO `fn_user` VALUES (1,NULL,'admin','e1b5d1e394e4829773aad809cf31d9de','7de699f0dd',1,'10.3.8.33',1559228694,'10.210.1.8',1559233190,NULL,'网站创始人',NULL);
/*!40000 ALTER TABLE `fn_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-31 11:58:57

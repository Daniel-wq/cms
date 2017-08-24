/*
Navicat MySQL Data Transfer

Source Server         : wqcms
Source Server Version : 50554
Source Host           : 47.93.222.57:3306
Source Database       : wqcms

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-24 15:41:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
CREATE TABLE `article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(255) NOT NULL COMMENT '文章标题',
  `click` mediumint(9) NOT NULL DEFAULT '0' COMMENT '查看次数',
  `description` varchar(255) NOT NULL COMMENT '文章描述',
  `content` text NOT NULL COMMENT '文章内容',
  `source` varchar(255) NOT NULL COMMENT '文章来源',
  `author` varchar(255) NOT NULL COMMENT '文章作者',
  `orderby` smallint(6) NOT NULL DEFAULT '100' COMMENT '排序',
  `linkurl` varchar(255) NOT NULL COMMENT '跳转地址',
  `keywords` varchar(255) NOT NULL COMMENT '关键字',
  `iscommend` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `ishot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否热门',
  `thumb` varchar(255) NOT NULL COMMENT '缩略图',
  `isrecycle` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否在回收站',
  `category_cid` int(11) NOT NULL COMMENT '所属栏目id',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  `wechat_keywords` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '满江红', '814', '爱国主义', '<p>怒发冲冠，凭阑处、潇潇雨歇。抬望眼、仰天长啸，壮怀激烈。三十功名尘与土，八千里路云和月。莫等闲，白了少年头，空悲切。\r\n &nbsp;靖康耻，犹未雪；臣子恨，何时灭。驾长车，踏破贺兰山缺。壮志饥餐胡虏肉，笑谈渴饮匈奴血。待从头、收拾旧山河，朝天阙。</p>', '满江红', '岳飞', '50', 'blog.daniel-w.cn', '爱国', '1', '1', 'attachment/2017/07/11/54661499780288.jpg', '0', '1', '0000-00-00 00:00:00', '2017-07-20 21:36:44', '满江红');
INSERT INTO `article` VALUES ('2', '过零丁洋', '834', '回想我早年由科举入仕历尽辛苦，如今战火消歇已熬过了四个年头。\r\n国家危在旦夕恰如狂风中的柳絮，个人又哪堪言说似骤雨里的浮萍。\r\n惶恐滩的惨败让我至今依然惶恐，零丁洋身陷元虏可叹我孤苦零丁。\r\n人生自古以来有谁能够长生不死？我要留一片爱国的丹心映照史册。', '<p>辛苦遭逢起一经， 干戈寥落四周星。\r\n山河破碎风飘絮， 身世浮沉雨打萍。\r\n惶恐滩头说惶恐， 零丁洋里叹零丁。\r\n人生自古谁无死， 留取丹心照汗青。</p>', '过零丁洋', '文天祥', '30', 'http://weibo.com/3895426100/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1', '', '1', '1', 'attachment/2017/07/11/52831499788701.jpg', '0', '3', '0000-00-00 00:00:00', '2017-07-20 21:56:21', '过');
INSERT INTO `article` VALUES ('6', '戴维斯', '62', '啊~打~', '<p>桌球</p>', 'daniel', 'daniel', '92', 'www.baidu.com', '', '0', '0', 'attachment/2017/07/11/54661499780288.jpg', '0', '1', '2017-07-11 21:38:17', '2017-07-20 21:45:07', '111');
INSERT INTO `article` VALUES ('13', '习近平向军事科学院、国防大学、国防科技大学授军旗致训词', '205', '', '<h1 style=\"text-align: center;\">习近平向军事科学院、国防大学、国防科技大学授军旗致训词</h1><p style=\"text-align: right;\"><a href=\"http://pic.people.com.cn/NMediaFile/2017/0719/MAIN201707192113000576306528923.jpg\" id=\"pic_url\" target=\"_blank\">【查看原图】</a></p><p><span class=\"a_right\" style=\"display: inline;\"></span>\r\n &nbsp; &nbsp;<img src=\"http://pic.people.com.cn/NMediaFile/2017/0719/MAIN201707192113000576306528923.jpg\" alt=\"7月19日，新调整组建的军事科学院、国防大学、国防科技大学成立大会暨军队院校、科研机构、训练机构主要领导座谈会在北京八一大楼举行。中共中央总书记、国家主席、中央军委主席习近平向军事科学院、国防大学、国防科技大学授军旗、致训词。新华社记者 李刚 摄\" border=\"0\"/></p><p>7月19日，新调整组建的军事科学院、国防大学、国防科技大学成立大会暨军队院校、科研机构、训练机构主要领导座谈会在北京八一大楼举行。中共中央总书记、国家主席、中央军委主席习近平向军事科学院、国防大学、国防科技大学授军旗、致训词。新华社记者&nbsp;李刚&nbsp;摄</p><p><a href=\"http://pic.people.com.cn/n1/2017/0719/c1016-29416015.html\">1</a><a href=\"http://pic.people.com.cn/n1/2017/0719/c1016-29416015-2.html\">2</a><a href=\"http://pic.people.com.cn/n1/2017/0719/c1016-29416015-3.html\">3</a><a href=\"http://pic.people.com.cn/n1/2017/0719/c1016-29416015-4.html\">4</a><a href=\"http://pic.people.com.cn/n1/2017/0719/c1016-29416015-5.html\">5</a></p><p>来源：<a href=\"http://news.xinhuanet.com/politics/2017-07/19/c_1121347127.htm\" target=\"_blank\">新华社</a>&nbsp;&nbsp;2017年07月19日21:11</p><p style=\"text-indent: 2em;\">\r\n	新华社北京7月19日电（记者曹智）新调整组建的军事科学院、国防大学、国防科技大学成立大会暨军队院校、科研机构、训练机构主要领导座谈会19日在北京八一大楼举行。中共中央总书记、国家主席、中央军委主席习近平向军事科学院、国防大学、国防科技大学授军旗、致训词，出席座谈会并发表重要讲话，强调要忠实履行党和人民赋予的使命，以党在新形势下的强军目标为引领，贯彻新形势下军事战略方针，推进政治建军、改革强军、依法治军，全面实施科技兴军战略，坚持面向战场、面向部队、面向未来，建设世界一流的军事科研机构、综合性联合指挥大学、高等教育院校，努力开创军事人才培养和军事科研工作新局面，为实现中国梦强军梦不断作出新的更大的贡献。</p><p style=\"text-indent: 2em;\">\r\n	上午9时30分，成立大会开始，全场高唱国歌。习近平将军旗郑重授予军事科学院院长杨学军、政治委员方向，国防大学校长郑和、政治委员吴杰明，国防科技大学校长邓小刚、政治委员刘念光，他们从习近平手中接过军旗。全场官兵向军旗敬礼。</p><p style=\"text-indent: 2em;\">\r\n	授旗仪式后，习近平致训词。他指出，调整组建新的军事科学院、国防大学、国防科技大学，是党中央和中央军委着眼实现中国梦强军梦作出的重大决策，是推进改革强军、构建我军新型军事人才培养体系和军事科研体系的战略举措，必将对加快推进国防和军队现代化、把我军建设成为世界一流军队产生重大而深远的影响。</p><p style=\"text-indent: 2em;\">\r\n	习近平强调，军事科学院是全军军事科学研究的拳头力量。要适应军事科研工作新体制新要求，坚持军事理论和军事科技紧密结合，创新军事科研工作组织模式，推动开展协同创新，发展现代军事科学，努力建设世界一流军事科研机构。</p><p style=\"text-indent: 2em;\">\r\n	习近平强调，国防大学是培养联合作战人才和高中级领导干部的重要基地。要把握高级任职教育院校建设特点和规律，推动教学科研管理创新，突出高素质联合作战指挥和参谋人才培养，加强军事理论研究，努力建设世界一流综合性联合指挥大学。</p><p style=\"text-indent: 2em;\">\r\n	习近平强调，国防科技大学是高素质新型军事人才培养和国防科技自主创新高地。要紧跟世界军事科技发展潮流，适应打赢信息化局部战争要求，抓好通用专业人才和联合作战保障人才培养，加强核心关键技术攻关，努力建设世界一流高等教育院校。</p><p style=\"text-indent: 2em;\">\r\n	方向、吴杰明、刘念光分别代表军事科学院、国防大学、国防科技大学表示，坚决贯彻习主席训词，坚决听从党中央、中央军委和习主席指挥，坚决完成党和人民赋予的任务。</p><p style=\"text-indent: 2em;\">\r\n	成立大会结束后，习近平出席军队院校、科研机构、训练机构主要领导座谈会并发表重要讲话。他指出，把我军建设成为世界一流军队必须有一流军事人才、一流军事理论、一流军事科技。科技是现代战争的核心战斗力。我们要赢得军事竞争主动，必须下更大气力推进科技兴军，坚持向科技创新要战斗力，依靠科技进步和创新把我军建设模式和战斗力生成模式转到创新驱动发展的轨道上来。我军院校、科研机构、训练机构是推进科技兴军的骨干力量，地位重要、使命光荣，必须勇担重任、走在前列。</p><p style=\"text-indent: 2em;\">\r\n	习近平对军队院校、科研机构、训练机构的主要领导提出四点希望。一是着力把好正确政治方向，增强“四个意识”，坚决维护党中央权威和集中统一领导，在思想上政治上行动上始终同党中央保持高度一致，毫不动摇坚持党对军队绝对领导。要加强政治能力训练，增强政治敏锐性和政治鉴别力。要把管党治党责任担在肩上，做到敢管敢严、真管真严、长管长严。二是着力抓好改革任务落实，强化责任担当，增强改革执行力，抓好各项改革的协同，确保各项改革举措落地，加快形成军事人才培养和军事科研新质能力。三是着力提高领导水平和专业素养，抓紧钻研军事教育、军事科研、军事训练特点和规律，不断提高知识化、专业化水平，努力成为教学科研训练的内行领导和专门家。要坚持理论和实践相结合，打造具有中国特色和国际视野的军事学术话语体系，形成无愧于时代的当代中国军事学术思想和学术成果。要发扬创新精神，勇于创新、勇于超越，努力开拓具有我军特色的军事人才培养和军事科研新路子。四是着力培育良好作风，坚持从严治校、从严治教、从严治学、从严治训，发扬我军教学科研训练战线光荣传统和优良作风，教育和引导广大教学科研人员砥砺精神品格、端正价值追求，发扬科学精神、奉献精神、苦战作风，立足本职岗位开拓进取、追求卓越。</p><p style=\"text-indent: 2em;\">\r\n	会议期间，习近平分别接见了军事科学院、国防大学、国防科技大学领导班子成员，正师级以上军队院校、科研机构、训练机构主要领导并合影留念。</p><p style=\"text-indent: 2em;\">\r\n	中共中央政治局委员、中央军委副主席范长龙，中共中央政治局委员、中央军委副主席许其亮，中央军委委员常万全、房峰辉、张阳、赵克石、张又侠、吴胜利、马晓天、魏凤和参加活动。</p><p style=\"text-align: right;\"><em id=\"p_editor\">(责编：袁勃、刘军涛)</em><br/></p>', '人民网', '人民网', '30', 'http://pic.people.com.cn/n1/2017/0719/c1016-29416015.html', '习近平', '1', '1', 'attachment/2017/07/20/53501500539552.jpg', '0', '9', '2017-07-20 08:48:32', '2017-07-20 21:36:34', '科技');
INSERT INTO `article` VALUES ('14', 'ASs', '0', '', '', '', 'asS', '0', '', 'Sas', '0', '0', 'attachment/2017/07/11/99651499788771.jpg', '0', '8', '2017-07-20 21:37:35', '2017-07-20 21:37:35', '1');
INSERT INTO `article` VALUES ('15', 'ASD', '0', '', '', '', 'SAD', '0', '', 'ASDA', '0', '0', 'attachment/2017/07/11/58011499777504.jpg', '0', '8', '2017-07-20 21:37:51', '2017-07-20 21:37:51', 'S');
INSERT INTO `article` VALUES ('16', 'S', '0', '', '', '', 'AS', '0', '', '', '0', '0', 'attachment/2017/07/11/8311499780275.jpg', '0', '8', '2017-07-20 21:38:08', '2017-07-20 21:38:08', 'SD');
INSERT INTO `article` VALUES ('17', 'AS', '0', '', '', '', '', '0', '', '', '0', '0', 'attachment/2017/07/11/4581499779006.jpg', '0', '8', '2017-07-20 21:38:23', '2017-07-20 21:38:23', 'SDS');
INSERT INTO `article` VALUES ('18', 'qwert', '0', '', '', '', '', '0', '', '', '0', '0', 'attachment/2017/07/11/58011499777504.jpg', '0', '2', '2017-07-20 21:46:35', '2017-07-20 21:46:35', 'd');

-- ----------------------------
-- Table structure for `attachment`
-- ----------------------------
CREATE TABLE `attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '会员编号',
  `name` varchar(80) NOT NULL,
  `filename` varchar(300) NOT NULL COMMENT '文件名',
  `path` varchar(300) NOT NULL COMMENT '文件路径',
  `extension` varchar(10) NOT NULL DEFAULT '' COMMENT '文件类型',
  `createtime` int(10) NOT NULL COMMENT '上传时间',
  `size` mediumint(9) NOT NULL COMMENT '文件大小',
  `data` varchar(100) NOT NULL DEFAULT '' COMMENT '辅助信息',
  `status` tinyint(1) unsigned NOT NULL COMMENT '状态',
  `content` text NOT NULL COMMENT '扩展数据内容',
  PRIMARY KEY (`id`),
  KEY `data` (`data`),
  KEY `extension` (`extension`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='附件';

-- ----------------------------
-- Records of attachment
-- ----------------------------
INSERT INTO `attachment` VALUES ('1', '0', '16.jpg', '16', 'attachment/2017/07/11/53761499765260.jpg', 'jpg', '1499765260', '81773', '', '0', '');
INSERT INTO `attachment` VALUES ('2', '0', '29.jpg', '29', 'attachment/2017/07/11/81791499765366.jpg', 'jpg', '1499765366', '145764', '', '0', '');
INSERT INTO `attachment` VALUES ('3', '0', '29.jpg', '29', 'attachment/2017/07/11/33131499766380.jpg', 'jpg', '1499766380', '145764', '', '0', '');
INSERT INTO `attachment` VALUES ('4', '0', '09.jpg', '09', 'attachment/2017/07/11/38131499766408.jpg', 'jpg', '1499766408', '525257', '', '0', '');
INSERT INTO `attachment` VALUES ('5', '0', '18.jpg', '18', 'attachment/2017/07/11/44811499766445.jpg', 'jpg', '1499766445', '297270', '', '0', '');
INSERT INTO `attachment` VALUES ('6', '0', '10.jpg', '10', 'attachment/2017/07/11/1211499766474.jpg', 'jpg', '1499766474', '68852', '', '0', '');
INSERT INTO `attachment` VALUES ('7', '0', '3.jpg', '3', 'attachment/2017/07/11/76991499774534.jpg', 'jpg', '1499774534', '4112', '', '0', '');
INSERT INTO `attachment` VALUES ('8', '0', '04.jpg', '04', 'attachment/2017/07/11/58011499777504.jpg', 'jpg', '1499777504', '232682', '', '0', '');
INSERT INTO `attachment` VALUES ('9', '0', '03.jpg', '03', 'attachment/2017/07/11/4581499779006.jpg', 'jpg', '1499779006', '125944', '', '0', '');
INSERT INTO `attachment` VALUES ('10', '0', '18.jpg', '18', 'attachment/2017/07/11/8311499780275.jpg', 'jpg', '1499780275', '297270', '', '0', '');
INSERT INTO `attachment` VALUES ('11', '0', '19.jpg', '19', 'attachment/2017/07/11/54661499780288.jpg', 'jpg', '1499780288', '200748', '', '0', '');
INSERT INTO `attachment` VALUES ('12', '0', '08.jpg', '08', 'attachment/2017/07/11/50111499780602.jpg', 'jpg', '1499780602', '384161', '', '0', '');
INSERT INTO `attachment` VALUES ('13', '0', '29.jpg', '29', 'attachment/2017/07/11/52831499788701.jpg', 'jpg', '1499788701', '145764', '', '0', '');
INSERT INTO `attachment` VALUES ('14', '0', '28.jpg', '28', 'attachment/2017/07/11/99651499788771.jpg', 'jpg', '1499788771', '82574', '', '0', '');
INSERT INTO `attachment` VALUES ('15', '0', '3.jpg', '3', 'attachment/2017/07/20/49701500532174.jpg', 'jpg', '1500532174', '134342', '', '0', '');
INSERT INTO `attachment` VALUES ('16', '0', '1.jpg', '1', 'attachment/2017/07/20/14311500532293.jpg', 'jpg', '1500532293', '145359', '', '0', '');
INSERT INTO `attachment` VALUES ('17', '0', '92771499738868.jpg', '92771499738868', 'attachment/2017/07/20/53501500539552.jpg', 'jpg', '1500539552', '191415', '', '0', '');

-- ----------------------------
-- Table structure for `base_content`
-- ----------------------------
CREATE TABLE `base_content` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of base_content
-- ----------------------------
INSERT INTO `base_content` VALUES ('2', '踏破凌霄~', '2017-07-17 17:44:45', '2017-07-17 20:34:00');
INSERT INTO `base_content` VALUES ('3', '四大皆空~', '2017-07-17 17:48:15', '2017-07-17 20:34:13');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
CREATE TABLE `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` char(30) NOT NULL COMMENT '栏目名称',
  `pid` int(11) NOT NULL COMMENT '父级id',
  `description` varchar(255) NOT NULL COMMENT '栏目描述',
  `linkurl` varchar(255) NOT NULL COMMENT '栏目跳转地址',
  `orderby` smallint(6) NOT NULL COMMENT '排序',
  `thumb` varchar(255) NOT NULL COMMENT '栏目缩略图',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  `iscover` tinyint(4) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '娱乐', '0', '娱乐描述', 'http://www.houdunwang.com', '50', 'attachment/2017/07/11/50111499780602.jpg', '2017-07-10 22:07:35', '2017-07-20 14:57:17', '0');
INSERT INTO `category` VALUES ('2', '体育', '0', '体育描述', 'http://www.houdunwang.com', '10', 'attachment/2017/07/11/76991499774534.jpg', '2017-07-10 22:07:35', '2017-07-20 15:50:16', '0');
INSERT INTO `category` VALUES ('3', 'KTV', '1', 'KTV描述', 'http://www.houdunwang.com', '60', 'attachment/2017/07/11/52831499788701.jpg', '2017-07-10 22:07:35', '2017-07-11 23:58:28', '0');
INSERT INTO `category` VALUES ('4', '篮球', '2', '啦啦啦啦啦', 'www.baidu.com', '93', 'attachment/2017/07/11/54661499780288.jpg', '2017-07-11 17:01:40', '2017-07-11 23:57:25', '0');
INSERT INTO `category` VALUES ('5', '乒乓球', '2', '乒乓球', 'blog.daniel-w.cn', '30', 'attachment/2017/07/11/8311499780275.jpg', '2017-07-11 17:28:08', '2017-07-20 14:57:55', '0');
INSERT INTO `category` VALUES ('7', '桌球', '1', '戴维斯', 'blog.daniel-w.cn', '12', 'attachment/2017/07/11/99651499788771.jpg', '2017-07-11 23:59:57', '2017-07-11 23:59:57', '0');
INSERT INTO `category` VALUES ('8', '诗词歌赋', '0', '余忆童稚时，能张目对日，明察秋毫，见藐小之物必细察其纹理，故时有物外之趣', 'blog.daniel-w.cn', '60', 'attachment/2017/07/11/54661499780288.jpg', '2017-07-12 00:35:06', '2017-07-20 15:50:59', '1');
INSERT INTO `category` VALUES ('9', '新闻', '0', '', 'http://pic.people.com.cn/n1/2017/0719/c1016-29416015.html', '23', 'attachment/2017/07/11/54661499780288.jpg', '2017-07-20 08:45:43', '2017-07-20 08:45:43', '0');

-- ----------------------------
-- Table structure for `config`
-- ----------------------------
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', '{\"csrf_token\":\"\",\"webname\":\"cms.daniel-w.cn\",\"keywords\":\"就是这么牛~~~\",\"description\":\"网站描述\",\"icp\":\"京ICP备17035385号-1\",\"phone\":\"客服电话\",\"wechat\":\"微信公众号\",\"rows\":\"2\"}', '2017-07-12 15:12:23', '2017-07-20 16:43:43');

-- ----------------------------
-- Table structure for `keywords`
-- ----------------------------
CREATE TABLE `keywords` (
  `kid` int(11) NOT NULL AUTO_INCREMENT,
  `module` char(255) NOT NULL,
  `content` char(255) NOT NULL,
  `content_id` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keywords
-- ----------------------------
INSERT INTO `keywords` VALUES ('2', 'base', '悟空', '2', '2017-07-17 17:44:45', '2017-07-17 20:34:00');
INSERT INTO `keywords` VALUES ('3', 'base', '小空', '3', '2017-07-17 17:48:15', '2017-07-17 20:34:13');
INSERT INTO `keywords` VALUES ('4', 'article', '过', '2', '2017-07-17 19:10:37', '2017-07-20 21:56:21');
INSERT INTO `keywords` VALUES ('5', 'article', '满江红', '1', '2017-07-17 20:36:06', '2017-07-20 21:36:44');
INSERT INTO `keywords` VALUES ('11', 'article', '111', '6', '2017-07-18 09:49:55', '2017-07-20 21:45:07');
INSERT INTO `keywords` VALUES ('12', 'article', '科技', '13', '2017-07-20 08:48:32', '2017-07-20 21:36:34');
INSERT INTO `keywords` VALUES ('13', 'article', '1', '14', '2017-07-20 21:37:35', '2017-07-20 21:37:35');
INSERT INTO `keywords` VALUES ('14', 'article', 'S', '15', '2017-07-20 21:37:51', '2017-07-20 21:37:51');
INSERT INTO `keywords` VALUES ('15', 'article', 'SD', '16', '2017-07-20 21:38:08', '2017-07-20 21:38:08');
INSERT INTO `keywords` VALUES ('16', 'article', 'SDS', '17', '2017-07-20 21:38:23', '2017-07-20 21:38:23');
INSERT INTO `keywords` VALUES ('17', 'article', 'd', '18', '2017-07-20 21:46:35', '2017-07-20 21:46:35');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('170710072629_CreateCategoryTable.php', '1');
INSERT INTO `migrations` VALUES ('170710074823_CreateArticleTable.php', '2');
INSERT INTO `migrations` VALUES ('170710080125_CreateUserTable.php', '3');
INSERT INTO `migrations` VALUES ('170710080611_CreateConfigTable.php', '4');
INSERT INTO `migrations` VALUES ('170710080820_CreateSlideTable.php', '5');
INSERT INTO `migrations` VALUES ('170711075456_CreateArticleTable.php', '6');
INSERT INTO `migrations` VALUES ('170713021426_CreateWechatConfigTable.php', '7');
INSERT INTO `migrations` VALUES ('170713041126_CreateModulesTable.php', '8');
INSERT INTO `migrations` VALUES ('170713041749_CreateModulesTable.php', '9');
INSERT INTO `migrations` VALUES ('170717022602_CreateKeywordsTable.php', '10');
INSERT INTO `migrations` VALUES ('170717023410_CreateBaceContentTable.php', '11');
INSERT INTO `migrations` VALUES ('170717042155_CreateBaseContentTable.php', '12');
INSERT INTO `migrations` VALUES ('170717045332_CreateKeywordsTable.php', '13');
INSERT INTO `migrations` VALUES ('170717045436_CreateBaseContentTable.php', '14');
INSERT INTO `migrations` VALUES ('170717045546_CreateBaseContentTable.php', '15');
INSERT INTO `migrations` VALUES ('170717060320_article_add_field_wechat_keywords.php', '16');
INSERT INTO `migrations` VALUES ('170717060737_article_add_field_wechat_keywords.php', '17');
INSERT INTO `migrations` VALUES ('170719031652_category_add_filed_iscover.php', '18');

-- ----------------------------
-- Table structure for `modules`
-- ----------------------------
CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '模块英文标识',
  `title` varchar(255) NOT NULL COMMENT '模块名称',
  `resume` varchar(255) NOT NULL COMMENT '模块介绍',
  `author` varchar(255) NOT NULL COMMENT '模块作者',
  `preview` varchar(255) NOT NULL COMMENT '模块预览',
  `is_system` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否为系统模块',
  `is_wechat` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否处理微信',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modules
-- ----------------------------
INSERT INTO `modules` VALUES ('1', 'student', '学生', '学生模块', 'daniel', 'attachment/2017/07/11/52831499788701.jpg', '0', '1', '2017-07-16 19:52:13', '2017-07-16 19:52:13');
INSERT INTO `modules` VALUES ('2', 'base', '', '', '', '', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `modules` VALUES ('3', 'article', '', '', '', '', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `seeds`
-- ----------------------------
CREATE TABLE `seeds` (
  `seed` varchar(255) NOT NULL,
  `batch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seeds
-- ----------------------------
INSERT INTO `seeds` VALUES ('170710100647_CategoryTableSeeder.php', '1');

-- ----------------------------
-- Table structure for `slide`
-- ----------------------------
CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '幻灯片标题',
  `url` varchar(255) NOT NULL COMMENT '幻灯片地址',
  `displayorder` varchar(255) NOT NULL COMMENT '幻灯片显示要求',
  `thumb` varchar(255) NOT NULL COMMENT '幻灯片翻阅',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO `slide` VALUES ('1', '满江红', 'http://cms.daniel-w.cn/a_1.html', '10', 'attachment/2017/07/20/49701500532174.jpg', '2017-07-20 14:29:37', '2017-07-20 14:29:37');
INSERT INTO `slide` VALUES ('2', '跳转', 'http://weibo.com/3895426100/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1', '', 'attachment/2017/07/20/14311500532293.jpg', '2017-07-20 14:31:35', '2017-07-20 14:32:06');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(255) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for `wechat_config`
-- ----------------------------
CREATE TABLE `wechat_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wechat_config
-- ----------------------------
INSERT INTO `wechat_config` VALUES ('1', '{\"csrf_token\":\"\",\"webname\":\"吾若成魔佛奈我何\",\"account\":\"wq-olympic\",\"appid\":\"wx9a1b880355f1ebb7\",\"appsecret\":\"b27061287de65dbbd5b4c1ba78e8ce66\",\"token\":\"9baad477c278a9817d90bc49537c8265\",\"encodingaeskey\":\"d3d3cd202d72ad852882626149ce25fc9baad477c27\",\"subscribe\":\"你好\",\"default\":\"滚蛋~~~\"}', '2017-07-13 14:37:24', '2017-07-14 15:20:24');
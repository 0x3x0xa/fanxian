/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : fanxian

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-12-16 16:34:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `web_admin`
-- ----------------------------
DROP TABLE IF EXISTS `web_admin`;
CREATE TABLE `web_admin` (
  `id` mediumint(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET gbk NOT NULL,
  `password` varchar(50) CHARACTER SET gbk NOT NULL,
  `logip` char(50) CHARACTER SET gbk NOT NULL COMMENT '上次登录的时间',
  `regtime` varchar(50) CHARACTER SET gbk NOT NULL COMMENT '注册时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户状态',
  `groupid` tinyint(2) NOT NULL COMMENT '用户组id',
  `lasttime` varchar(50) CHARACTER SET gbk NOT NULL COMMENT '上次登录的时间',
  `lognum` mediumint(9) NOT NULL COMMENT '登录次数',
  `sex` tinyint(1) NOT NULL DEFAULT '1',
  `abstract` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `email` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `address` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `errorlognum` mediumint(9) DEFAULT '0',
  `errorlogtime` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of web_admin
-- ----------------------------
INSERT INTO `web_admin` VALUES ('1', 'superadmin', 'cd416bee4377dce8592a9f5d21db36fc', '127.0.0.1', '1477993282', '1', '16', '1481682483', '0', '1', null, 'as1@qq.com', '1', '13128716080', '0', '0');
INSERT INTO `web_admin` VALUES ('2', 'admin', 'b37f4d4dc5a6f05837dd4c7d4c6038c8', '127.0.0.1', '1481682474', '3', '20', '1481682502', '0', '1', null, null, null, '13128716080', '0', '0');

-- ----------------------------
-- Table structure for `web_admin_code`
-- ----------------------------
DROP TABLE IF EXISTS `web_admin_code`;
CREATE TABLE `web_admin_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `effectivetime` varchar(50) DEFAULT NULL,
  `frequency` tinyint(4) DEFAULT NULL,
  `updatetime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员修改密码的验证码表';

-- ----------------------------
-- Records of web_admin_code
-- ----------------------------

-- ----------------------------
-- Table structure for `web_article`
-- ----------------------------
DROP TABLE IF EXISTS `web_article`;
CREATE TABLE `web_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `art_title` varchar(200) NOT NULL,
  `art_info` varchar(255) NOT NULL,
  `art_keyword` varchar(200) NOT NULL,
  `art_content` text NOT NULL,
  `art_author` varchar(200) NOT NULL,
  `art_time` int(10) unsigned NOT NULL DEFAULT '0',
  `art_type` smallint(5) unsigned NOT NULL,
  `art_img` varchar(200) NOT NULL,
  `art_order` int(10) unsigned NOT NULL,
  `art_click` int(10) unsigned NOT NULL DEFAULT '0',
  `art_source` varchar(200) NOT NULL,
  `art_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `type_id` (`art_type`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of web_article
-- ----------------------------
INSERT INTO `web_article` VALUES ('3', '澳门威尼斯人（大陆）理财规则说明', '', '', '<p>&nbsp; &nbsp; 威尼斯人理财是通过对威尼斯人酒店的VIP客户专属授信（放款）而产生收益，关于放款和收款都享有正常司法程序，由威尼斯人理财全权负责，投资人不承担任何法律责任，最终解释权归威尼斯人理财。</p><p>1.投资说明：投资金额为：1000元起投，投资必须是1000的倍数！成功投资30天之后可以随时提取本金；</p><p>2.投资1000元到4.99万元（每一天0.5%-1.5%的收益），投资5万元到19.9万元以上（每一天0.6%-1.6%的收益），投资20万元到59.9万 元（每一天0.7%-1.7%的收益），投资60万元以上（每一天0.8%-2.0%的收益）；注：收益的波动是根据前一天授信额度（放款额度）来确定。</p><p>3.收益（利息）流程：用户成功投资后，24点后系统自动更新显示前一天的投资收益；</p><p>4.收益提现：利息收益每天都可提现，满100元即可提款，T+1到账（24小时后到账），提款每笔收取5元手续费；收益满1000元后，也可通过<span style=\"color: rgb(192, 0, 0);\">我要投资</span>中的<span style=\"color: rgb(192, 0, 0);\">收益钱袋</span>进行转投。</p><p>5.个人邀请奖说明：邀请人可拿其邀请的投资成员每天收益的10%；</p><p>6.团队激励奖说明：团队5层内投资金额达50万元，即可每天享受投资成员全部收益的4%； &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p>7.收益（邀请奖）流程：用户成功邀请投资后可成功收取邀请奖，24点后系统自动更新显示到账邀请奖收益。</p><p>8.本金提现说明：每笔投资本金满30天后可以随时提取，T+3到账，每天提现总次数为6次（按本金提取的3.5%收取手续费），每次限额5万元；提现时先由<span style=\"color: rgb(192, 0, 0);\">本金转出</span>转到<span style=\"color: rgb(192, 0, 0);\">本金钱袋</span>，然后点<span style=\"color: rgb(192, 0, 0);\">本金.收益提现<span style=\"color: rgb(0, 0, 0);\">选择<span style=\"color: rgb(192, 0, 0);\">本金钱袋</span>提现</span></span>到银行卡。（注：从发起提现成功起不再享受利息）。超过90天（从未）提取本金，提取本金可免手续费，系统另外一次性奖励其投资总收益的10%到收益钱包；超过180天（从未）提取本金，提取本金可免手续费，系统另外一次性奖励其投资总收益的12%到收益钱包；超过一年（从未）提取提取本金本金，可免手续费，系统另外一次性奖励其投资总收益的15%到收益钱包；超过三年以上（从未）提取本金，提取本金可免手续费，系统另外一次性奖励其投资总收益的18%到收益钱包。（注：以每一次充值投资成功后，开始计算周期）</p><p>9.会员可以看到自己推广的架构图和看到5层内团队投资的总金额；</p><p>10.系统每一天公布授信额度。（注：授信额度就是指放款额度）</p><p>11.充值说明：每一天<span style=\"font-family: \" microsoft=\"\" hiragino=\"\" sans=\"\" helvetica=\"\" wenquanyi=\"\" micro=\"\" font-size:=\"\" text-align:=\"\" background-color:=\"\" color:=\"\">10：00-20：00为实时充值到帐时间，其余时间充值也是该时间段到帐；</span>投资人在系统页面点击<span style=\"color: rgb(192, 0, 0);\">我要充值</span>后，根据系统提供的账户如实汇入充值金额，成功打款后其<span style=\"color: rgb(192, 0, 0);\">充值记录</span>会显示充值成功，充值金额显示在首页的<span style=\"color: rgb(192, 0, 0);\">本金钱袋</span>中，然后选择<span style=\"color: rgb(192, 0, 0);\">我要投资</span>中的<span style=\"color: rgb(192, 0, 0);\">本金钱袋</span>输入投资金额提交成功、才开始计算投资收益。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (注:除大陆法定节假日外，所有资金都能正常提现到账)</p>', '', '1482060719', '2', '', '0', '0', '', '1');
INSERT INTO `web_article` VALUES ('4', '新系统完全正常运行2周', '', '', '<p>亲爱的各位新老会员！</p><p>&nbsp; 新系统已经正常运行2周，一切工作运行顺畅！如有任何问题请提交到客服，谢谢！<br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp;</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;威尼斯人(大陆)运营部</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2016.12.15</p>', '', '1482062879', '1', '', '0', '0', '', '1');
INSERT INTO `web_article` VALUES ('5', '新系统上线恢复本金，收益提现', '', '', '<p>亲爱的各位会员！</p><p>&nbsp; 新系统正常开放运行，旧系统数据平移完成，如数据有参错，请及时上报给客服；明天恢复所有本金和收益正常提现到账，系统数据移置的这两天收益也正常计算到收益钱包。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 威尼斯人(大陆)运营部</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 威尼斯人(大陆)财务部</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2016.12.1</p>', '', '1482061864', '1', '', '0', '0', '', '1');
INSERT INTO `web_article` VALUES ('6', '26日，27日的提现全部转款完毕', '', '', '<p>亲爱的各位会员！</p><p>&nbsp; 在旧系统11月26日，27日提现的本金和28日提现的收益已经全部转款处理完毕；如有参错，请及时上报客服，谢谢！&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;威尼斯人(大陆)财务部</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2016.12.2</p>', '', '1482062532', '1', '', '0', '0', '', '1');

-- ----------------------------
-- Table structure for `web_articleclass`
-- ----------------------------
DROP TABLE IF EXISTS `web_articleclass`;
CREATE TABLE `web_articleclass` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `pid` mediumint(9) DEFAULT NULL,
  `art_class_name` varchar(60) CHARACTER SET gbk DEFAULT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='文章类型表';

-- ----------------------------
-- Records of web_articleclass
-- ----------------------------
INSERT INTO `web_articleclass` VALUES ('1', '0', '公告列表', '1');
INSERT INTO `web_articleclass` VALUES ('2', '0', '投资规则', '1');

-- ----------------------------
-- Table structure for `web_bank`
-- ----------------------------
DROP TABLE IF EXISTS `web_bank`;
CREATE TABLE `web_bank` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `bankname` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `is_hied` tinyint(1) DEFAULT '1',
  `sort` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='银行表';

-- ----------------------------
-- Records of web_bank
-- ----------------------------
INSERT INTO `web_bank` VALUES ('1', '工商银行', '1', '2');
INSERT INTO `web_bank` VALUES ('2', '建设银行', '1', '0');
INSERT INTO `web_bank` VALUES ('3', '中国银行', '1', '0');
INSERT INTO `web_bank` VALUES ('4', '农业银行', '1', '0');
INSERT INTO `web_bank` VALUES ('5', '交通银行', '1', '0');
INSERT INTO `web_bank` VALUES ('6', '招商银行', '1', '0');
INSERT INTO `web_bank` VALUES ('7', '光大银行', '1', '0');
INSERT INTO `web_bank` VALUES ('8', '平安银行', '1', '0');
INSERT INTO `web_bank` VALUES ('9', '广发银行', '1', '4');
INSERT INTO `web_bank` VALUES ('10', '中信银行', '1', '0');
INSERT INTO `web_bank` VALUES ('11', '民生银行', '1', '0');
INSERT INTO `web_bank` VALUES ('14', '平安银行', '1', '0');
INSERT INTO `web_bank` VALUES ('15', '农村商业银行', '1', '0');
INSERT INTO `web_bank` VALUES ('16', '支付宝', '1', '127');

-- ----------------------------
-- Table structure for `web_bonus`
-- ----------------------------
DROP TABLE IF EXISTS `web_bonus`;
CREATE TABLE `web_bonus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1表示本金钱袋，2表示收益钱袋，3表示直接激励奖，4表示团队激励奖',
  `create_date` varchar(25) NOT NULL,
  `sum` decimal(18,2) NOT NULL DEFAULT '0.00' COMMENT '输入',
  `export` decimal(18,2) NOT NULL DEFAULT '0.00' COMMENT '输出',
  `balance` decimal(18,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1表示输入，2表示支出',
  `explain` varchar(100) NOT NULL COMMENT '描述',
  `source` tinyint(1) DEFAULT NULL COMMENT '1后台充值，2平台产生 3 拒绝提现 4 前台提现',
  `admin_id` int(11) DEFAULT NULL,
  `pursetype` tinyint(1) DEFAULT '1' COMMENT '1 本金钱包，2收益钱包',
  `poundage` decimal(18,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `user_type_create_date` (`uid`,`type`,`create_date`),
  KEY `user` (`uid`),
  KEY `type` (`type`),
  KEY `create_date` (`create_date`),
  KEY `pursetype` (`pursetype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='奖金明细表';

-- ----------------------------
-- Records of web_bonus
-- ----------------------------

-- ----------------------------
-- Table structure for `web_bonusshouyi`
-- ----------------------------
DROP TABLE IF EXISTS `web_bonusshouyi`;
CREATE TABLE `web_bonusshouyi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `order_no` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `create_date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `fbonus` decimal(18,2) DEFAULT NULL,
  `bonus` decimal(18,2) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1' COMMENT '1 直推激励奖，2团队激励奖',
  `message` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='奖金收益';

-- ----------------------------
-- Records of web_bonusshouyi
-- ----------------------------

-- ----------------------------
-- Table structure for `web_chongzhi`
-- ----------------------------
DROP TABLE IF EXISTS `web_chongzhi`;
CREATE TABLE `web_chongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` decimal(18,2) DEFAULT '0.00',
  `uid` int(11) DEFAULT NULL,
  `bankorderno` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '银行交易号',
  `bank` varchar(20) CHARACTER SET gbk DEFAULT NULL COMMENT '银行',
  `status` tinyint(1) DEFAULT NULL COMMENT '1等待审核，2审核通过，3拒绝',
  `admin_id` int(11) DEFAULT NULL,
  `create_date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `no` varchar(20) DEFAULT NULL COMMENT '订单号',
  `replace_date` varchar(20) DEFAULT NULL,
  `bankapliyname` varchar(20) DEFAULT NULL,
  `bankapliyno` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='充值表';

-- ----------------------------
-- Records of web_chongzhi
-- ----------------------------

-- ----------------------------
-- Table structure for `web_code`
-- ----------------------------
DROP TABLE IF EXISTS `web_code`;
CREATE TABLE `web_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `effectivetime` varchar(50) DEFAULT NULL,
  `frequency` tinyint(4) DEFAULT NULL,
  `updatetime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='会员验证码表';

-- ----------------------------
-- Records of web_code
-- ----------------------------
INSERT INTO `web_code` VALUES ('1', '1', 'v2aznx', '1481599002', '1', '1481558400');
INSERT INTO `web_code` VALUES ('2', '2', 'mwy1t5', '1482088971', '1', '1482076800');

-- ----------------------------
-- Table structure for `web_duebank`
-- ----------------------------
DROP TABLE IF EXISTS `web_duebank`;
CREATE TABLE `web_duebank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bankname` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `bankno` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `username` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `create_date` varchar(20) DEFAULT NULL,
  `replace_date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='收款银行';

-- ----------------------------
-- Records of web_duebank
-- ----------------------------
INSERT INTO `web_duebank` VALUES ('2', '工商银行', '11111111111111111111', '2', '刘备', '1', '1481091233', '1481091233');
INSERT INTO `web_duebank` VALUES ('3', '工商银行', '52222112121233222', '1', '额度', '1', '1481992640', '1481992640');

-- ----------------------------
-- Table structure for `web_frozenlog`
-- ----------------------------
DROP TABLE IF EXISTS `web_frozenlog`;
CREATE TABLE `web_frozenlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `create_date` varchar(50) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0' COMMENT '0是系统冻结，1是后台人工冻结',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='冻结日志表';

-- ----------------------------
-- Records of web_frozenlog
-- ----------------------------

-- ----------------------------
-- Table structure for `web_invest`
-- ----------------------------
DROP TABLE IF EXISTS `web_invest`;
CREATE TABLE `web_invest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '订单号',
  `uid` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '1未完成，2已经完成',
  `create_date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `money` decimal(18,2) DEFAULT '0.00' COMMENT '投资金额',
  `day` int(11) DEFAULT '0' COMMENT '返利天数',
  `bonus` decimal(18,2) DEFAULT '0.00' COMMENT '利息',
  `sum` decimal(18,2) DEFAULT '0.00',
  `allbonus` decimal(18,2) DEFAULT '0.00',
  `replace_date` varchar(20) DEFAULT NULL,
  `pursetype` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='投注表';

-- ----------------------------
-- Records of web_invest
-- ----------------------------

-- ----------------------------
-- Table structure for `web_loginlog`
-- ----------------------------
DROP TABLE IF EXISTS `web_loginlog`;
CREATE TABLE `web_loginlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `ip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `country` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `create_date` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `beginip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `endip` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `area` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='登录日志';

-- ----------------------------
-- Records of web_loginlog
-- ----------------------------

-- ----------------------------
-- Table structure for `web_member`
-- ----------------------------
DROP TABLE IF EXISTS `web_member`;
CREATE TABLE `web_member` (
  `id` mediumint(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET gbk NOT NULL COMMENT '账号',
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '昵称',
  `password` varchar(50) CHARACTER SET gbk NOT NULL,
  `towlevelpassword` varchar(50) DEFAULT '' COMMENT '二级密码',
  `status` tinyint(1) DEFAULT '1',
  `logip` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `regtime` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `email` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `lognum` mediumint(20) DEFAULT '0',
  `level` tinyint(1) DEFAULT '0' COMMENT '会员等级',
  `logtime` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '登录时间',
  `recommend` int(11) DEFAULT '0' COMMENT '推荐人id',
  `group` mediumint(9) DEFAULT '0' COMMENT '实际团队人数',
  `directnum` mediumint(9) DEFAULT '0' COMMENT '实际直推人数',
  `wechat` varchar(20) DEFAULT NULL COMMENT '微信号',
  `alipay` varchar(20) DEFAULT NULL COMMENT '支付宝账号',
  `principal` decimal(18,2) DEFAULT '0.00' COMMENT '本金',
  `profit` decimal(18,2) DEFAULT '0.00' COMMENT '收益',
  `laitebino` varchar(50) DEFAULT NULL,
  `laitebidz` varchar(50) DEFAULT NULL,
  `flag` tinyint(1) DEFAULT '0',
  `banknum` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `alipay` (`alipay`),
  UNIQUE KEY `mobile` (`mobile`),
  KEY `member_name` (`username`) USING BTREE,
  KEY `member_regtime` (`regtime`),
  KEY `member_status` (`status`),
  KEY `member_name_regtime_status` (`username`,`status`,`regtime`),
  KEY `recommend` (`recommend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员表';

-- ----------------------------
-- Records of web_member
-- ----------------------------

-- ----------------------------
-- Table structure for `web_message`
-- ----------------------------
DROP TABLE IF EXISTS `web_message`;
CREATE TABLE `web_message` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `addtime` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `content` varchar(1000) CHARACTER SET gbk DEFAULT NULL,
  `type` mediumint(9) DEFAULT NULL,
  `uid` mediumint(9) DEFAULT NULL,
  `reply` varchar(1000) DEFAULT NULL,
  `replytime` varchar(50) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='留言表';

-- ----------------------------
-- Records of web_message
-- ----------------------------

-- ----------------------------
-- Table structure for `web_number`
-- ----------------------------
DROP TABLE IF EXISTS `web_number`;
CREATE TABLE `web_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL COMMENT '1 本金，2收益，3直推激励奖，4团队激励奖',
  `number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='允许的次数表';

-- ----------------------------
-- Records of web_number
-- ----------------------------

-- ----------------------------
-- Table structure for `web_picture`
-- ----------------------------
DROP TABLE IF EXISTS `web_picture`;
CREATE TABLE `web_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `image_path_thumb` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `create_date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `admin_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `replace_date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COMMENT='图片表';

-- ----------------------------
-- Records of web_picture
-- ----------------------------
INSERT INTO `web_picture` VALUES ('32', 'Public/upload/picture/2016-12-14/5850bf2362032.jpg', 'Public/upload/picture/2016-12-14/thumb_5850bf2362032.jpg', '1481686819', '1', '1', '3', '1481686819');
INSERT INTO `web_picture` VALUES ('33', 'Public/upload/picture/2016-12-14/5850bf23ad363.jpg', 'Public/upload/picture/2016-12-14/thumb_5850bf23ad363.jpg', '1481686819', '1', '1', '3', '1481686819');
INSERT INTO `web_picture` VALUES ('34', 'Public/upload/picture/2016-12-14/5850bf23d30e4.jpg', 'Public/upload/picture/2016-12-14/thumb_5850bf23d30e4.jpg', '1481686819', '1', '1', '3', '1481686819');
INSERT INTO `web_picture` VALUES ('35', 'Public/upload/picture/2016-12-14/5850bf2401574.jpg', 'Public/upload/picture/2016-12-14/thumb_5850bf2401574.jpg', '1481686820', '1', '1', '3', '1481686820');
INSERT INTO `web_picture` VALUES ('37', 'Public/upload/picture/2016-12-14/5850bf8963314.jpg', 'Public/upload/picture/2016-12-14/thumb_5850bf8963314.jpg', '1481686921', '1', '1', '3', '1481686921');
INSERT INTO `web_picture` VALUES ('39', 'Public/upload/picture/2016-12-14/5850bf89a6d2c.jpg', 'Public/upload/picture/2016-12-14/thumb_5850bf89a6d2c.jpg', '1481686921', '1', '1', '3', '1481686921');
INSERT INTO `web_picture` VALUES ('40', 'Public/upload/picture/2016-12-14/5850bf89caf54.jpg', 'Public/upload/picture/2016-12-14/thumb_5850bf89caf54.jpg', '1481686921', '1', '1', '3', '1481686921');
INSERT INTO `web_picture` VALUES ('42', 'Public/upload/picture/2016-12-14/5850c19ecd07b.png', 'Public/upload/picture/2016-12-14/thumb_5850c19ecd07b.png', '1481687454', '1', '1', '2', '1481687454');
INSERT INTO `web_picture` VALUES ('43', 'Public/upload/picture/2016-12-14/5850c19eea92a.png', 'Public/upload/picture/2016-12-14/thumb_5850c19eea92a.png', '1481687454', '1', '1', '2', '1481687454');
INSERT INTO `web_picture` VALUES ('44', 'Public/upload/picture/2016-12-14/5850c19f12828.png', 'Public/upload/picture/2016-12-14/thumb_5850c19f12828.png', '1481687455', '1', '1', '2', '1481687455');
INSERT INTO `web_picture` VALUES ('45', 'Public/upload/picture/2016-12-14/5850c19f2ddaf.png', 'Public/upload/picture/2016-12-14/thumb_5850c19f2ddaf.png', '1481687455', '1', '1', '2', '1481687455');
INSERT INTO `web_picture` VALUES ('46', 'Public/upload/picture/2016-12-14/5850c19f49b05.png', 'Public/upload/picture/2016-12-14/thumb_5850c19f49b05.png', '1481687455', '1', '1', '2', '1481687455');
INSERT INTO `web_picture` VALUES ('47', 'Public/upload/picture/2016-12-14/5850c1b3aa2a4.png', 'Public/upload/picture/2016-12-14/thumb_5850c1b3aa2a4.png', '1481687475', '1', '1', '1', '1481687475');
INSERT INTO `web_picture` VALUES ('48', 'Public/upload/picture/2016-12-14/5850c1b3d1795.jpg', 'Public/upload/picture/2016-12-14/thumb_5850c1b3d1795.jpg', '1481687475', '1', '1', '1', '1481687475');
INSERT INTO `web_picture` VALUES ('49', 'Public/upload/picture/2016-12-14/5850c1b41a5f3.jpg', 'Public/upload/picture/2016-12-14/thumb_5850c1b41a5f3.jpg', '1481687476', '1', '1', '1', '1481687476');
INSERT INTO `web_picture` VALUES ('50', 'Public/upload/picture/2016-12-14/5850c1b4595d2.jpg', 'Public/upload/picture/2016-12-14/thumb_5850c1b4595d2.jpg', '1481687476', '1', '1', '1', '1481687476');
INSERT INTO `web_picture` VALUES ('51', 'Public/upload/picture/2016-12-14/5850c1b48743d.jpg', 'Public/upload/picture/2016-12-14/thumb_5850c1b48743d.jpg', '1481687476', '1', '1', '1', '1481687476');
INSERT INTO `web_picture` VALUES ('52', 'Public/upload/picture/2016-12-14/5850c1cc61060.jpg', 'Public/upload/picture/2016-12-14/thumb_5850c1cc61060.jpg', '1481687500', '1', '1', '2', '1481687500');
INSERT INTO `web_picture` VALUES ('53', 'Public/upload/picture/2016-12-14/5850c1cc85a59.jpg', 'Public/upload/picture/2016-12-14/thumb_5850c1cc85a59.jpg', '1481687500', '1', '1', '2', '1481687500');
INSERT INTO `web_picture` VALUES ('54', 'Public/upload/picture/2016-12-14/5850c1ccbb9ae.jpg', 'Public/upload/picture/2016-12-14/thumb_5850c1ccbb9ae.jpg', '1481687500', '1', '1', '2', '1481687500');
INSERT INTO `web_picture` VALUES ('55', 'Public/upload/picture/2016-12-18/5856833a4c269.jpg', 'Public/upload/picture/2016-12-18/thumb_5856833a4c269.jpg', '1482064698', '1', '1', '2', '1482064698');
INSERT INTO `web_picture` VALUES ('56', 'Public/upload/picture/2016-12-18/5856833a8e129.jpg', 'Public/upload/picture/2016-12-18/thumb_5856833a8e129.jpg', '1482064698', '1', '1', '2', '1482064698');
INSERT INTO `web_picture` VALUES ('57', 'Public/upload/picture/2016-12-18/5856833aba823.jpg', 'Public/upload/picture/2016-12-18/thumb_5856833aba823.jpg', '1482064698', '1', '1', '2', '1482064698');
INSERT INTO `web_picture` VALUES ('58', 'Public/upload/picture/2016-12-18/5856833b1c10f.jpg', 'Public/upload/picture/2016-12-18/thumb_5856833b1c10f.jpg', '1482064699', '1', '1', '2', '1482064699');
INSERT INTO `web_picture` VALUES ('59', 'Public/upload/picture/2016-12-18/5856833b3a18e.jpg', 'Public/upload/picture/2016-12-18/thumb_5856833b3a18e.jpg', '1482064699', '1', '1', '2', '1482064699');
INSERT INTO `web_picture` VALUES ('60', 'Public/upload/picture/2016-12-18/585683bd681ac.jpg', 'Public/upload/picture/2016-12-18/thumb_585683bd681ac.jpg', '1482064829', '1', '1', '3', '1482064829');
INSERT INTO `web_picture` VALUES ('61', 'Public/upload/picture/2016-12-18/585683bd8893c.jpg', 'Public/upload/picture/2016-12-18/thumb_585683bd8893c.jpg', '1482064829', '1', '1', '3', '1482064829');
INSERT INTO `web_picture` VALUES ('62', 'Public/upload/picture/2016-12-18/585683bdb541f.jpg', 'Public/upload/picture/2016-12-18/thumb_585683bdb541f.jpg', '1482064829', '1', '1', '3', '1482064829');
INSERT INTO `web_picture` VALUES ('63', 'Public/upload/picture/2016-12-18/585683bddadb7.jpg', 'Public/upload/picture/2016-12-18/thumb_585683bddadb7.jpg', '1482064829', '1', '1', '3', '1482064829');

-- ----------------------------
-- Table structure for `web_power`
-- ----------------------------
DROP TABLE IF EXISTS `web_power`;
CREATE TABLE `web_power` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `pid` mediumint(9) DEFAULT NULL,
  `name` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `control_action` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `sort` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `level` tinyint(10) DEFAULT '0',
  `style` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8 COMMENT='栏目表';

-- ----------------------------
-- Records of web_power
-- ----------------------------
INSERT INTO `web_power` VALUES ('64', '0', '权限管理', '', '111111111', '0', '&#xe60e');
INSERT INTO `web_power` VALUES ('65', '64', '角色列表', 'Rbac/adminrole', '64-65', '1', '');
INSERT INTO `web_power` VALUES ('66', '64', '节点列表', 'Rbac/adminpermission', '64-66', '-1', '');
INSERT INTO `web_power` VALUES ('67', '64', '管理员列表', 'Rbac/adminlist', '64-67', '1', '');
INSERT INTO `web_power` VALUES ('68', '0', '系统设置', '', '63', '0', '&#xe62e');
INSERT INTO `web_power` VALUES ('69', '68', '基本设置', 'Webconfig/index', '68-69', '1', '');
INSERT INTO `web_power` VALUES ('70', '65', '角色编辑', 'Rbac/adminroleedit', '64-65-70', '2', '');
INSERT INTO `web_power` VALUES ('71', '65', '添加角色', 'Rbac/adminroleadd', '64-65-71', '2', '');
INSERT INTO `web_power` VALUES ('72', '65', '删除', 'Rbac/adminRoleDel', '64-65-72', '2', '');
INSERT INTO `web_power` VALUES ('73', '65', '批量删除', 'Rbac/datadelRole', '64-65-73', '2', null);
INSERT INTO `web_power` VALUES ('74', '66', '编辑节点', 'Rbac/poweredit', '64-66-74', '2', '');
INSERT INTO `web_power` VALUES ('75', '66', '删除', 'Rbac/del', '64-66-75', '2', null);
INSERT INTO `web_power` VALUES ('76', '66', '批量删除', 'Rbac/datadelPower', '64-66-76', '2', null);
INSERT INTO `web_power` VALUES ('77', '67', '停用', 'Rbac/admin_stop', '64-67-77', '2', null);
INSERT INTO `web_power` VALUES ('78', '67', '启用', 'Rbac/admin_start', '64-67-78', '2', null);
INSERT INTO `web_power` VALUES ('79', '67', '编辑', 'Rbac/adminedit', '64-67-79', '2', null);
INSERT INTO `web_power` VALUES ('80', '67', '修改密码', 'Rbac/adminpasswordedit', '64-67-80', '2', null);
INSERT INTO `web_power` VALUES ('81', '67', '删除', 'Rbac/adminDel', '64-67-81', '2', null);
INSERT INTO `web_power` VALUES ('84', '67', '批量删除', 'Rbac/datadelAdmin', '64-67-84', '2', null);
INSERT INTO `web_power` VALUES ('85', '0', '会员管理', '', '1', '0', '&#xe60d');
INSERT INTO `web_power` VALUES ('86', '0', '文章管理', '', '11', '0', '&#xe616');
INSERT INTO `web_power` VALUES ('87', '0', '图片管理', '', '111', '0', '&#xe613');
INSERT INTO `web_power` VALUES ('88', '0', '留言管理', '', '1111', '0', '&#xe63b');
INSERT INTO `web_power` VALUES ('89', '85', '会员列表', 'Member/index', '89-89', '1', '');
INSERT INTO `web_power` VALUES ('90', '86', '文章列表', 'Article/index', '86-90', '1', '');
INSERT INTO `web_power` VALUES ('91', '89', '添加用户', 'Member/useradd', '89-89-91', '2', null);
INSERT INTO `web_power` VALUES ('92', '86', '分类管理', 'Article/articleclass', '86-92', '-1', '');
INSERT INTO `web_power` VALUES ('93', '92', '编辑分类', 'Article/articleclassedit', '86-92-93', '2', null);
INSERT INTO `web_power` VALUES ('94', '88', '留言列表', 'Message/index', '79-94', '1', '');
INSERT INTO `web_power` VALUES ('95', '89', '启用', 'Member/user_start', '89-89-95', '2', null);
INSERT INTO `web_power` VALUES ('96', '89', '停用', 'Member/user_stop', '89-89-96', '2', '');
INSERT INTO `web_power` VALUES ('97', '89', '查看详情', 'Member/usershow', '89-89-97', '2', '');
INSERT INTO `web_power` VALUES ('98', '89', '修改资料', 'Member/useredit', '89-89-98', '2', '');
INSERT INTO `web_power` VALUES ('99', '89', '修改密码', 'Member/userpasswordedit', '89-89-99', '2', null);
INSERT INTO `web_power` VALUES ('101', '89', '删除', 'Member/userDel', '89-89-101', '2', null);
INSERT INTO `web_power` VALUES ('102', '90', '启用', 'Article/article_start', '86-90-102', '2', '');
INSERT INTO `web_power` VALUES ('103', '90', '启用', 'Article/article_stop', '86-90-103', '2', '');
INSERT INTO `web_power` VALUES ('104', '90', '批量删除', 'Article/datadelArticle', '86-90-104', '2', '');
INSERT INTO `web_power` VALUES ('105', '90', '删除', 'Article/articleDel', '86-90-105', '2', '');
INSERT INTO `web_power` VALUES ('106', '90', '查看', 'Article/articlezhang', '86-90-106', '2', '');
INSERT INTO `web_power` VALUES ('107', '90', '编辑', 'Article/articleedit', '86-90-107', '2', '');
INSERT INTO `web_power` VALUES ('108', '90', '添加', 'Article/articleadd', '86-90-108', '2', '');
INSERT INTO `web_power` VALUES ('109', '92', '删除分类', 'Article/articleClassDel', '86-92-109', '2', '');
INSERT INTO `web_power` VALUES ('111', '92', '管理分类', 'Article/articleclass', '86-92-111', '2', '');
INSERT INTO `web_power` VALUES ('112', '94', '删除', 'Message/messageDel', '79-94-112', '2', '');
INSERT INTO `web_power` VALUES ('113', '94', '批量删除', 'Message/datadelMessage', '79-94-113', '2', '');
INSERT INTO `web_power` VALUES ('114', '94', '查看/回复', 'Message/messageedit', '79-94-114', '2', '');
INSERT INTO `web_power` VALUES ('115', '87', '图片列表', 'Picture/index', '80-115', '1', null);
INSERT INTO `web_power` VALUES ('129', '115', '添加图片', 'Picture/pictureadd', '80-115-129', '2', '');
INSERT INTO `web_power` VALUES ('130', '115', '启用', 'Picture/picture_start', '80-115-130', '2', null);
INSERT INTO `web_power` VALUES ('131', '115', '停用', 'Picture/picture_stop', '80-115-131', '2', null);
INSERT INTO `web_power` VALUES ('132', '115', '编辑', 'Picture/pictureedit', '80-115-132', '2', null);
INSERT INTO `web_power` VALUES ('133', '115', '删除', 'Picture/pictureDel', '80-115-133', '2', null);
INSERT INTO `web_power` VALUES ('134', '115', '批量删除', 'Picture/datadePicture', '80-115-134', '2', null);
INSERT INTO `web_power` VALUES ('137', '117', '删除', 'Picture/partnerDel', '80-117-137', '2', null);
INSERT INTO `web_power` VALUES ('141', '117', '启用', 'Picture/partner_start', '80-117-141', '2', null);
INSERT INTO `web_power` VALUES ('142', '117', '停用', 'Picture/partner_stop', '80-117-142', '2', null);
INSERT INTO `web_power` VALUES ('167', '64', '系统日志列表', 'Rbac/loginlog', '64-167', '1', '');
INSERT INTO `web_power` VALUES ('169', '89', 'EXCEL', 'Member/downloadexcel', '89-89-169', '2', null);
INSERT INTO `web_power` VALUES ('170', '68', '银行列表', 'Webconfig/banklist', '63-170', '1', null);
INSERT INTO `web_power` VALUES ('171', '170', '停用', 'Webconfig/bank_stop', '63-170-171', '2', null);
INSERT INTO `web_power` VALUES ('172', '170', '启用', 'Webconfig/bank_start', '63-170-172', '2', null);
INSERT INTO `web_power` VALUES ('174', '170', '添加银行', 'Webconfig/bankadd', '63-170-174', '2', null);
INSERT INTO `web_power` VALUES ('175', '170', '编辑银行', 'Webconfig/bankedit', '63-170-175', '2', null);
INSERT INTO `web_power` VALUES ('176', '170', '删除银行', 'Webconfig/bankdel', '63-170-176', '2', null);
INSERT INTO `web_power` VALUES ('177', '68', '参数设置', 'Webconfig/setbonus', '63-177', '1', null);
INSERT INTO `web_power` VALUES ('187', '85', '冻结日志', 'Member/frozenlog', '89-187', '1', null);
INSERT INTO `web_power` VALUES ('188', '89', '修改二级密码', 'Member/usertowpasswordedit', '89-89-188', '2', null);
INSERT INTO `web_power` VALUES ('193', '85', '关系列表', 'Member/usertree', '89-193', '1', null);
INSERT INTO `web_power` VALUES ('194', '89', '充值', 'Member/recharge', '89-89-194', '2', null);
INSERT INTO `web_power` VALUES ('195', '89', '扣币', 'Member/deduct', '89-89-195', '2', null);
INSERT INTO `web_power` VALUES ('196', '68', '收款银行', 'Webconfig/duebank', '63-196', '1', null);
INSERT INTO `web_power` VALUES ('197', '196', '添加收款银行', 'Webconfig/duebankadd', '63-196-197', '2', '');
INSERT INTO `web_power` VALUES ('198', '196', '编辑收款银行', 'Webconfig/duebankedit', '63-196-198', '2', null);
INSERT INTO `web_power` VALUES ('199', '196', '启用', 'Webconfig/duebank_start', '63-196-199', '2', null);
INSERT INTO `web_power` VALUES ('200', '196', '停用', 'Webconfig/duebank_stop', '63-196-200', '2', null);
INSERT INTO `web_power` VALUES ('201', '0', '财务管理', '', '201', '0', '&#xe687');
INSERT INTO `web_power` VALUES ('202', '201', '充值明细', 'Report/recharge', '201-202', '1', null);
INSERT INTO `web_power` VALUES ('203', '201', '资金明细', 'Report/zijinlist', '201-203', '1', null);
INSERT INTO `web_power` VALUES ('204', '201', '投资收益', 'Report/touzishouyi', '201-204', '1', '');
INSERT INTO `web_power` VALUES ('205', '201', '会员充值', 'Report/chongzhilist', '201-205', '1', null);
INSERT INTO `web_power` VALUES ('206', '201', '会员提现', 'Report/tixianlist', '201-206', '1', null);
INSERT INTO `web_power` VALUES ('207', '205', '确认收款', 'Report/ConfirmReceipt', '201-205-207', '2', null);
INSERT INTO `web_power` VALUES ('208', '205', '拒绝收款', 'Report/RefuseCollection', '201-205-208', '2', null);
INSERT INTO `web_power` VALUES ('209', '206', '确认打款', 'Report/FinishedPlaying', '201-206-209', '2', null);
INSERT INTO `web_power` VALUES ('210', '206', '拒绝打款', 'Report/RefuseToPlay', '201-206-210', '2', null);
INSERT INTO `web_power` VALUES ('211', '68', '比例设置', 'Webconfig/setbili', '63-211', '1', null);
INSERT INTO `web_power` VALUES ('212', '201', '直推收益', 'Report/tuijianbonus', '201-212', '1', null);
INSERT INTO `web_power` VALUES ('213', '201', '团队收益', 'Report/tuanduibonus', '201-213', '1', null);
INSERT INTO `web_power` VALUES ('214', '201', '投资列表', 'Report/touzilist', '201-214', '1', null);
INSERT INTO `web_power` VALUES ('215', '201', '投资金额', 'Report/total', '201-215', '-1', null);

-- ----------------------------
-- Table structure for `web_rate`
-- ----------------------------
DROP TABLE IF EXISTS `web_rate`;
CREATE TABLE `web_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` decimal(18,2) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `max` decimal(18,2) DEFAULT NULL,
  `message` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='金额比例参数';

-- ----------------------------
-- Records of web_rate
-- ----------------------------
INSERT INTO `web_rate` VALUES ('1', '1000.00', '0.5', '49999.00', '投资金额：1000-49999 利率0.5%-1.5%');
INSERT INTO `web_rate` VALUES ('2', '50000.00', '0.7', '199999.00', '投资金额：50000-199999利率0.6%-1.6%');
INSERT INTO `web_rate` VALUES ('3', '200000.00', '0.9', '599999.00', '投资金额：200000-599999 利率0.7%-1.7%');
INSERT INTO `web_rate` VALUES ('4', '600000.00', '1.2', '10000000000000.00', '投资金额：600000以上  利率0.8%-2.0%');

-- ----------------------------
-- Table structure for `web_rate_copy`
-- ----------------------------
DROP TABLE IF EXISTS `web_rate_copy`;
CREATE TABLE `web_rate_copy` (
  `id` int(11) NOT NULL,
  `min` decimal(18,2) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `max` decimal(18,2) DEFAULT NULL,
  `message` varchar(50) CHARACTER SET gbk DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='金额比例参数';

-- ----------------------------
-- Records of web_rate_copy
-- ----------------------------
INSERT INTO `web_rate_copy` VALUES ('1', '1000.00', '0.5', '49999.00', '投资金额：1000-49999 利率0.5%-1.5%');
INSERT INTO `web_rate_copy` VALUES ('2', '50000.00', '0.7', '199999.00', '投资金额：50000-199999利率0.6%-1.6%');
INSERT INTO `web_rate_copy` VALUES ('3', '200000.00', '0.9', '599999.00', '投资金额：200000-599999 利率0.7%-1.7%');
INSERT INTO `web_rate_copy` VALUES ('4', '600000.00', '1.2', '10000000000000.00', '投资金额：600000以上  利率0.8%-2.0%');

-- ----------------------------
-- Table structure for `web_recharge`
-- ----------------------------
DROP TABLE IF EXISTS `web_recharge`;
CREATE TABLE `web_recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT NULL,
  `number` decimal(18,0) DEFAULT '0' COMMENT '数量',
  `uid` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `create_date` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '1表示充值，2表示扣币',
  `pursetype` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_type_create_date` (`type`,`uid`,`create_date`),
  KEY `user` (`uid`),
  KEY `type` (`type`),
  KEY `create_date` (`create_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台充值记录表';

-- ----------------------------
-- Records of web_recharge
-- ----------------------------

-- ----------------------------
-- Table structure for `web_role`
-- ----------------------------
DROP TABLE IF EXISTS `web_role`;
CREATE TABLE `web_role` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `remarks` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `power_id` varchar(10000) CHARACTER SET gbk DEFAULT NULL,
  `power_control_action` varchar(10000) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='分组表';

-- ----------------------------
-- Records of web_role
-- ----------------------------
INSERT INTO `web_role` VALUES ('19', '超级管理员', '', '64,65,70,71,72,73,66,74,75,76,67,77,78,79,80,81,84,167,68,69,170,171,172,174,175,176,177,196,197,198,199,200,211,85,89,91,95,96,97,98,99,101,169,188,194,195,187,193,86,90,102,103,104,105,106,107,108,87,115,129,130,131,132,133,134,88,94,112,113,114,201,202,203,204,205,207,208,206,209,210,212,213,214', 'Rbac/adminrole,Rbac/adminpermission,Rbac/adminlist,,Webconfig/index,Rbac/adminroleedit,Rbac/adminroleadd,Rbac/adminRoleDel,Rbac/datadelRole,Rbac/poweredit,Rbac/del,Rbac/datadelPower,Rbac/admin_stop,Rbac/admin_start,Rbac/adminedit,Rbac/adminpasswordedit,Rbac/adminDel,Rbac/datadelAdmin,,,,,Member/index,Article/index,Member/useradd,Message/index,Member/user_start,Member/user_stop,Member/usershow,Member/useredit,Member/userpasswordedit,Member/userDel,Article/article_start,Article/article_stop,Article/datadelArticle,Article/articleDel,Article/articlezhang,Article/articleedit,Article/articleadd,Message/messageDel,Message/datadelMessage,Message/messageedit,Picture/index,Picture/pictureadd,Picture/picture_start,Picture/picture_stop,Picture/pictureedit,Picture/pictureDel,Picture/datadePicture,Rbac/loginlog,Member/downloadexcel,Webconfig/banklist,Webconfig/bank_stop,Webconfig/bank_start,Webconfig/bankadd,Webconfig/bankedit,Webconfig/bankdel,Webconfig/setbonus,Member/frozenlog,Member/usertowpasswordedit,Member/usertree,Member/recharge,Member/deduct,Webconfig/duebank,Webconfig/duebankadd,Webconfig/duebankedit,Webconfig/duebank_start,Webconfig/duebank_stop,,Report/recharge,Report/zijinlist,Report/touzishouyi,Report/chongzhilist,Report/tixianlist,Report/ConfirmReceipt,Report/RefuseCollection,Report/FinishedPlaying,Report/RefuseToPlay,Webconfig/setbili,Report/tuijianbonus,Report/tuanduibonus,Report/touzilist');
INSERT INTO `web_role` VALUES ('20', '普通管理员', '', '85,89,91,95,96,97,98,99,101,169,188,194,195', ',Member/index,Member/useradd,Member/user_start,Member/user_stop,Member/usershow,Member/useredit,Member/userpasswordedit,Member/userDel,Member/downloadexcel,Member/usertowpasswordedit,Member/recharge,Member/deduct');

-- ----------------------------
-- Table structure for `web_shouyi`
-- ----------------------------
DROP TABLE IF EXISTS `web_shouyi`;
CREATE TABLE `web_shouyi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` decimal(18,2) DEFAULT '0.00',
  `sum` decimal(18,2) DEFAULT '0.00',
  `uid` int(11) DEFAULT NULL,
  `create_date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `order_date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `rate` varchar(10) DEFAULT NULL,
  `order_no` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `bonus` decimal(18,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`create_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='每日收益表';

-- ----------------------------
-- Records of web_shouyi
-- ----------------------------

-- ----------------------------
-- Table structure for `web_tixian`
-- ----------------------------
DROP TABLE IF EXISTS `web_tixian`;
CREATE TABLE `web_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` decimal(18,2) DEFAULT '0.00',
  `uid` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '1表示审核，2审核通过，3拒绝',
  `type` tinyint(1) DEFAULT NULL COMMENT '1本金提现，2利息提现',
  `create_date` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `no` varchar(20) DEFAULT NULL,
  `replace_date` varchar(20) DEFAULT NULL,
  `pursetype` tinyint(4) DEFAULT NULL,
  `poundage` decimal(18,2) DEFAULT '0.00',
  `bank` varchar(15) DEFAULT NULL,
  `bankno` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `userbank_id` int(11) DEFAULT NULL,
  `kaihubank` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`type`,`create_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='提现表';

-- ----------------------------
-- Records of web_tixian
-- ----------------------------

-- ----------------------------
-- Table structure for `web_total`
-- ----------------------------
DROP TABLE IF EXISTS `web_total`;
CREATE TABLE `web_total` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `grouptotalmoney` decimal(18,0) DEFAULT '0',
  `grouptotalsum` decimal(18,0) DEFAULT '0',
  `selftotalmoney` decimal(18,0) DEFAULT '0',
  `selftotalsum` decimal(18,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='投资金额总数表';

-- ----------------------------
-- Records of web_total
-- ----------------------------

-- ----------------------------
-- Table structure for `web_userbank`
-- ----------------------------
DROP TABLE IF EXISTS `web_userbank`;
CREATE TABLE `web_userbank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `bank` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `bankno` varchar(60) DEFAULT NULL,
  `username` varchar(30) CHARACTER SET gbk DEFAULT NULL,
  `kaihubank` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员银行';

-- ----------------------------
-- Records of web_userbank
-- ----------------------------

-- ----------------------------
-- Table structure for `web_webconfig`
-- ----------------------------
DROP TABLE IF EXISTS `web_webconfig`;
CREATE TABLE `web_webconfig` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `describe` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `value` varchar(2000) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='基本设置表';

-- ----------------------------
-- Records of web_webconfig
-- ----------------------------
INSERT INTO `web_webconfig` VALUES ('1', '基本设置', '{\"onoff\":\"1\",\"chaoshi\":\"0\",\"webname\":\"\",\"weburl\":\"192.168.1.86:8080\",\"title\":\"\",\"keywords\":\"\",\"description\":\"\",\"copyright\":\"\",\"icp\":\"\",\"cnzz\":\"\",\"ip\":\"\",\"num\":\"5\"}');
INSERT INTO `web_webconfig` VALUES ('2', '参数设置', '{\"touzi_status\":\"1\",\"tixian_status\":\"0\",\"chongzhi_status\":\"0\",\"webmsg\":\"\\u7cfb\\u7edf\\u7ef4\\u62a4\\u4e2d\\uff01\\u8bf7\\u7b49\\u5019\\u901a\\u77e5\\u3002\",\"topmsg\":\"\\u5a01\\u5c3c\\u65af\\u4eba\\u6b22\\u8fce\\u4f60\\uff01\",\"daymsg\":\"\\u6628\\u65e5\\u5171\\u6388\\u4fe118888\\u4e07\",\"benjintianshu\":\"2\",\"benjincishu\":\"6\",\"benjinzuidi\":\"1000\",\"benjinshuxufei\":\"3.5\",\"benjinzuigaotixian\":\"50000\",\"zuidicongzhimoney\":\"1000\",\"zuigaocongzhimoney\":\"50000\",\"chongzhimoneybeishu\":\"1000\",\"benjinbeishu\":\"1000\",\"lxtxzxz\":\"100\",\"lxtxbs\":\"100\",\"lxsxf\":\"5\",\"ztjlj\":\"10\",\"tdjlj\":\"4\",\"tdtzje\":\"500000\"}');
INSERT INTO `web_webconfig` VALUES ('3', '当天比例', '');

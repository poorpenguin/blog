-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-08 10:28:21
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `bg_admin`
--

CREATE TABLE IF NOT EXISTS `bg_admin` (
  `admin_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `admin_pass` char(32) CHARACTER SET latin1 NOT NULL,
  `login_ip` varchar(15) CHARACTER SET latin1 NOT NULL,
  `login_nums` int(10) unsigned NOT NULL DEFAULT '0',
  `login_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bg_admin`
--

INSERT INTO `bg_admin` (`admin_id`, `admin_name`, `admin_pass`, `login_ip`, `login_nums`, `login_time`) VALUES
(1, 'poorpenguin', 'e10adc3949ba59abbe56e057f20f883e', '::1', 16, 1509761371);

-- --------------------------------------------------------

--
-- 表的结构 `bg_article`
--

CREATE TABLE IF NOT EXISTS `bg_article` (
  `art_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` smallint(5) unsigned DEFAULT NULL COMMENT '所属分类',
  `art_title` varchar(60) NOT NULL COMMENT '文章标题',
  `art_thumb` varchar(255) NOT NULL DEFAULT 'default.jpg' COMMENT '缩略图',
  `art_desc` varchar(255) NOT NULL COMMENT '文章描述',
  `art_comment` text NOT NULL COMMENT '文章内容',
  `art_author` varchar(20) NOT NULL COMMENT '文章作者',
  `art_hits` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `art_addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  `is_recomment` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0未推荐,1已推荐',
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '是否删除：1删除 0显示',
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `bg_article`
--

INSERT INTO `bg_article` (`art_id`, `cate_id`, `art_title`, `art_thumb`, `art_desc`, `art_comment`, `art_author`, `art_hits`, `art_addtime`, `is_recomment`, `is_delete`) VALUES
(6, 22, '外交部就美国总统特朗普即将访华举行媒体吹风会', './Uploads/thumb/20171104-144812-814761.jpg', '新华社北京11月3日电（记者孙奕）外交部副部长郑泽光3日在外交部举行中外媒体吹风会，介绍接待美国总统特朗普访华准备工作情况。', '<p>新华社北京11月3日电（记者孙奕）外交部副部长郑泽光3日在外交部举行中外媒体吹风会，介绍接待美国总统特朗普访华准备工作情况。</p>\r\n\r\n<p>郑泽光说，应习近平主席邀请，特朗普总统将于11月8日至10日对中国进行国事访问。这是中共十九大胜利闭幕后中方接待的第一起国事访问。在当前国际形势继续发生深刻复杂变化的大背景下，中美元首北京会晤对推动新时代中美关系健康稳定向前发展，促进亚太地区和世界的和平、稳定、繁荣都具有重大意义。</p>\r\n\r\n<p>郑泽光介绍，一段时间来，中美双方工作团队保持了密切沟通与合作，接待准备工作进展顺利。中方将为特朗普总统提供热情周到的接待，举行全套国事活动，并安排两国元首进行小范围、非正式互动。</p>\r\n\r\n<p>郑泽光表示，美国新一届政府就职以来，习近平主席和特朗普总统通过会晤、通话、通信等方式保持了密切沟通，为中美关系发展提供了战略引领。两国元首将利用此次北京会晤就共同关心的重大问题再次进行战略性沟通，在海湖庄园会晤、汉堡会晤基础上达成新的重要共识，加深相互了解和友谊，促进两国各领域交流与合作，为新时代中美关系发展描绘蓝图。</p>\r\n\r\n<p>在被问及中美经贸问题时，郑泽光引用数据说明，中美经贸关系的本质是互利共赢的，双方经贸合作为两国和两国人民带来巨大利益。中共十九大明确提出，中国将继续深化供给侧结构性改革，进一步扩大对外开放，实行高水平的贸易和投资便利化政策，大幅放宽市场准入。这些举措将为中国同包括美国在内的各国拓展经贸互利合作开辟更广阔的空间。郑泽光强调，要用全球的眼光、全面的眼光、发展的眼光来看待中美贸易不平衡问题。解决这一问题要靠扩大美国对华出口、增加双向投资，而不是限制美国从中国进口。打贸易战只会导致两败俱伤。中美经济高度互补、合作潜力巨大，只要坚持双向、互利原则，拓宽思路、深挖潜力，两国经贸关系就能在动态平衡基础上取得更大发展。</p>\r\n', '新华社', 1, 1509778092, '1', '0'),
(7, 22, '奥巴马如何教育女儿成为领导者', './Uploads/thumb/20171104-145119-169013.jpeg', '“我们一直在向她们传达这样一个观点：我们每个人都有自己的那份责任。”\r\n美国前总统奥巴马知道，他希望在女儿们身上培养怎样的领导价值观。在不久前举办的盖茨基金会赞助的晚宴上，奥巴马在现场做了一个问答互动，讲述了他和妻子如何教育女儿玛丽亚和萨沙成为领导者。', '<p><strong>奥巴马分享了三点建议：</strong></p>\r\n\r\n<p>1. 负责是一种荣耀。</p>\r\n\r\n<p>&ldquo;我们一直在向女儿们传达这样一个观点：我们每个人都有自己的那份责任，&rdquo;奥巴马说，&ldquo;她们小的时候，她们的责任也很小，比如，&lsquo;跟我们说什么时候想上厕所&rsquo; 。而你长大的同时，你的责任也在变大。&rdquo;</p>\r\n\r\n<p>奥巴马继续说，&ldquo;我和米歇尔常对女儿们说的是，负责本身就是一个莫大的荣幸。这标志你已经是一个成年人了，也意味着其他人可以依赖你，你拥有影响别人的能力，你能留下自己的痕迹。如果你做了一些很出色的事情，别人的生活会变得更加美好。&rdquo;</p>\r\n\r\n<p>奥巴马说，他们夫妇一直在努力培养玛丽亚和萨沙&ldquo;简单的朴素价值观&rdquo;：友善、体贴、同情和努力。&ldquo;这些是可以帮你以一种很棒的方式改变你周围世界的工具，&rdquo;奥巴马说，&ldquo;我们努力培养她们这样的观念：这些（从身边开始改变世界）不是别人的工作，而是你的工作。&rdquo;</p>\r\n\r\n<p>2.找到最适合你的方式作出贡献。</p>\r\n\r\n<p>奥巴马解释道，他的女儿们有着不同的能力和性格，这就意味着她们会选择不同的方式来改变这个世界。</p>\r\n\r\n<p>&ldquo;如果你是一个天才工程师，你就没有必要去做演讲。你可以开发一个应用软件，让一些原本就很棒的东西发挥出更大的作用。&rdquo;奥巴马说，&ldquo;如果你喜欢关心他人，你就不必去领导一场抗议游行。你可以为孩子们提供建议和帮助，或者在当地的保健诊所工作，这些同样会改变我们的世界。&rdquo;</p>\r\n\r\n<p>&ldquo;你有很多种方式去作出贡献，这是我和米歇尔经常对孩子们灌输的观点。&rdquo;</p>\r\n\r\n<p>奥巴马补充道：&ldquo;有很多种方式去作出贡献，我们一直在向她们强调这一点。&rdquo;</p>\r\n\r\n<p>3.坚持是关键。</p>\r\n\r\n<p>&ldquo;你必须坚持不懈。我经常和人们提起，我早年间在芝加哥社区工作的经历，教会了我很多东西，尽管不是值得一提的大事。我帮助社区建了一些公园，他们需要这些公园。我创办了一些课外项目。</p>\r\n\r\n<p>我们为那些失业的人们创办了一个职业培训项目。这些事情并不能让社区焕然一新，社区里的人们还是有着各种各样的问题&hellip;&hellip;但是我有了经验，我可以在此基础上做得更好。&rdquo;</p>\r\n\r\n<p>奥巴马说：&ldquo;我们经常会感到不耐烦，是因为改变并没有我们想象得那样显而易见和立竿见影，然后我们就会对此感到失望，沮丧。其实，坚持是很多问题的答案。&rdquo;</p>\r\n', 'Future出国杂志', 5, 1509778279, '1', '0'),
(8, 23, '英外交大臣将赴美挽救伊核协议：不要退啊！', '', '英国《卫报》２日报道，英国外交大臣鲍里斯·约翰逊下周将赴美国华盛顿。他此行主要目的是说服美国会参议员不要促使美国退出伊朗核问题全面协议或对伊朗施加新的制裁。', '<p>美国总统唐纳德&middot;特朗普上月１３日发表讲话，称伊朗没有遵守伊核协议的&ldquo;精神&rdquo;并&ldquo;在多方面违反协议&rdquo;，因此他不会向国会证实伊朗履行伊核协议承诺。特朗普当天向国会提交了有关伊朗的&ldquo;差评&rdquo;报告。按规定，国会将在６０天内决定是否恢复此前取消的美方对伊制裁。</p>\r\n\r\n<p>《卫报》２日报道，约翰逊对英国议会外交委员会发表讲话时表示，伊核协议是一场&ldquo;了不起的外交胜利&rdquo;。此外，&ldquo;国际原子能机构已确认伊朗遵守（伊核协议）&rdquo;。</p>\r\n\r\n<p>约翰逊称，伊核协议确实没有使伊朗的中东政策发生&ldquo;广泛改变&rdquo;，但美国不应因此就全盘否定这一协议。</p>\r\n\r\n<p>他称，&ldquo;也许可以&rdquo;采取措施限制伊方，但这些措施不应影响伊核协议。任何针对伊方的新制裁必须经&ldquo;（各方）都同意的争议解决机制&rdquo;通过，不能由单方面实施。</p>\r\n\r\n<p>２０１５年７月，伊朗与伊核问题六国（美国、英国、法国、俄罗斯、中国和德国）达成伊核问题全面协议。根据协议，伊朗承诺限制其核计划，国际社会将解除对伊制裁，国际原子能机构负责督查伊朗履行协议情况。</p>\r\n', '牛牛', 0, 1509778449, '1', '0'),
(9, 27, '马云：eWTP不仅是马来西亚的机遇更是亚洲的机遇', '', '中新社吉隆坡11月3日电 (记者 赵胜玉)阿里巴巴集团董事局主席马云3日在吉隆坡表示，eWTP不仅是马来西亚的机遇，更是亚洲的机遇。', '<p>阿里巴巴首个海外eWTP试验区&mdash;&mdash;马来西亚数字自由贸易区当日在吉隆坡全面启用。</p>\r\n\r\n<p>eWTP是马云在2016年提出的一个倡议，意在为全球80%的年轻人、中小企业创造参与全球化自由贸易的机会。</p>\r\n\r\n<p>马云指出，eWTP不仅是马来西亚的机遇，更是亚洲的机遇。然而最让他感到欣慰的是，eWTP已经开始实实在在地帮助到当地中小企业走向世界。</p>\r\n', '马云', 22, 1509778503, '1', '0'),
(10, 25, '王岐山的最新文章，到底透露了什么关键信息？', './Uploads/thumb/20171104-145756-836368.jpeg', '老王的文章，把全面从严治党称为“十八届党中央工作的最大亮点”——“实践充分证明，把全面从严治党摆上战略布局英明正确，在实现伟大复兴的关键时刻，校正了党和国家事业前进的航向，使党经历了革命性锻造”。', '<p>文章开篇，王岐山梳理了一个重要问题：中国共产党的执政基础是什么？</p>\r\n\r\n<p>他的答案是：&ldquo;为人民谋幸福是党始终不变的初心，国家发展的巨大成就、人民生活的持续改善以及由此积聚起的民心民意，是党执政最根本的政治基础&rdquo;。同时，&ldquo;坚持党的领导是当代中国的最高政治原则，是实现中华民族伟大复兴的关键所在&rdquo;，&ldquo;没有中国共产党坚强有力的领导，中华民族将是一盘散沙&rdquo;。</p>\r\n\r\n<p>&ldquo;一盘散沙&rdquo;是孙中山的经典论述：&ldquo;中国虽四万万众，实等于一盘散沙。&rdquo;谁改变了这个&ldquo;一盘散沙&rdquo;的状态呢？是团结了最大多数民众、成功建立新中国的中共。从一盘散沙到团结一心谋民族复兴，关键的经验就在于中共的诞生和领导。</p>\r\n\r\n<p>因此，王岐山特意点出了&ldquo;没有前提地搞党政分开&rdquo;的错误（这一话题之前&ldquo;两会&rdquo;时也谈过，侠客岛当时的分析）：</p>\r\n\r\n<p>这个论述，可以打消很多人对于中国政治体制改革的迷思。</p>\r\n', '老王', 14, 1509778676, '1', '0'),
(11, 22, '文章内容测试', '', '文章内容测试', '<p>文章内容测试</p>\r\n\r\n<p><img alt="" src="/blog/Uploads/ckeditor/images/2017-11-04/20171104-070222-143119.jpeg" style="height:367px; width:550px" /></p>\r\n', '测试者', 2, 1509793356, '1', '0');

-- --------------------------------------------------------

--
-- 表的结构 `bg_category`
--

CREATE TABLE IF NOT EXISTS `bg_category` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cate_name` varchar(20) NOT NULL COMMENT '分类名称',
  `cate_pid` smallint(5) unsigned NOT NULL COMMENT '父分类的主键id',
  `cate_sort` smallint(5) unsigned NOT NULL COMMENT '分类排序',
  `cate_desc` varchar(255) DEFAULT NULL COMMENT '分类描述',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `bg_category`
--

INSERT INTO `bg_category` (`cate_id`, `cate_name`, `cate_pid`, `cate_sort`, `cate_desc`) VALUES
(1, '慢生活', 0, 1, '记录生活琐事的主分类'),
(2, '网站开发', 0, 2, '学习笔记的主分类'),
(4, '健身日志', 1, 2, '健身是一种生活方式，更是一种生活态度'),
(7, 'HTML笔记', 2, 1, 'HTML笔记'),
(13, '补剂知识', 1, 3, '补剂知识'),
(14, '游戏资讯', 0, 3, '游戏资讯'),
(15, '国际新闻', 0, 4, '国际新闻'),
(16, 'css笔记', 2, 2, 'css笔记'),
(17, 'js笔记', 2, 3, 'js笔记'),
(18, 'JQuery笔记', 17, 1, 'JQuery笔记'),
(19, '最新游戏', 14, 1, '最新游戏'),
(20, '游戏赛事', 14, 2, '游戏赛事'),
(21, '阿三新闻', 15, 3, '阿三新闻'),
(22, '鹰酱新闻', 15, 1, '鹰酱新闻'),
(23, '牛牛新闻', 15, 2, '牛牛新闻'),
(24, '天朝新闻', 15, 4, '天朝新闻'),
(25, '北京新闻', 24, 1, '北京新闻'),
(26, '南京新闻', 24, 2, '南京新闻'),
(27, '中关村新闻', 25, 1, '中关村新闻');

-- --------------------------------------------------------

--
-- 表的结构 `bg_user`
--

CREATE TABLE IF NOT EXISTS `bg_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pass` char(32) NOT NULL,
  `user_image` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `user_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bg_user`
--

INSERT INTO `bg_user` (`user_id`, `user_name`, `user_pass`, `user_image`, `user_time`) VALUES
(1, 'poorpenguin', 'e10adc3949ba59abbe56e057f20f883e', 'default.jpg', 1510122301);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

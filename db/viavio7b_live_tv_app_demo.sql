/*
Navicat MySQL Data Transfer

Source Server         : KIR_DB
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : viavio7b_live_tv_app_demo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-07 01:59:22
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO tbl_admin VALUES ('1', 'admin', 'admin', 'viaviwebtech@gmail.com', 'profile.png');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO tbl_category VALUES ('1', 'Sports Channel', '86578_Sports.png', '1');
INSERT INTO tbl_category VALUES ('2', 'Fashion Channel', '94282_fashionchannels.png', '1');
INSERT INTO tbl_category VALUES ('3', 'Entertainment Channel', '33969_EW.png', '1');
INSERT INTO tbl_category VALUES ('4', 'News Channels', '18268_news-1.png', '1');
INSERT INTO tbl_category VALUES ('5', 'Kids Channels ', '80151_Cartoon_400X200.jpg', '1');

-- ----------------------------
-- Table structure for `tbl_channels`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_channels`;
CREATE TABLE `tbl_channels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `channel_type` varchar(255) NOT NULL,
  `channel_title` varchar(100) NOT NULL,
  `channel_url` varchar(255) NOT NULL,
  `channel_type_ios` varchar(255) NOT NULL,
  `channel_url_ios` varchar(255) NOT NULL,
  `channel_thumbnail` varchar(255) NOT NULL,
  `channel_desc` text NOT NULL,
  `featured_channel` int(1) NOT NULL DEFAULT '0',
  `slider_channel` int(1) NOT NULL DEFAULT '0',
  `total_views` int(11) NOT NULL DEFAULT '0',
  `total_rate` int(11) NOT NULL DEFAULT '0',
  `rate_avg` decimal(11,2) NOT NULL DEFAULT '0.00',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_channels
-- ----------------------------
INSERT INTO tbl_channels VALUES ('1', '1', 'live_url', 'Ten Sports', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=DRfbBvf_Amc', '24432_ten-sports-tv-logo-design-uk.png', '<p>Ten Sports Live - Watch live tournaments, matches, events of your favorite sports online.</p>\r\n', '0', '0', '9', '1', '5.00', '1');
INSERT INTO tbl_channels VALUES ('2', '1', 'live_url', 'Sony Six', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=8G4GgMaIH9U', '94013_SonySix.png', '<p>Watch Sony Six Live Streaming,Sony Six Tv Live. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and s</p>\r\n', '0', '0', '18', '1', '5.00', '1');
INSERT INTO tbl_channels VALUES ('3', '2', 'live_url', 'f.Diamond', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=1vU6-zd2mZ4', '34851_fdai.jpg', '<p>f.Diamond - International network dedicated to fashion news, shows, models and designers broadcasting 24 hours a day.</p>\r\n', '0', '0', '6', '0', '0.00', '1');
INSERT INTO tbl_channels VALUES ('4', '2', 'live_url', 'Fashion TV', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=7URik9HUd1E', '81756_fash.jpg', '<p>FashionTV Live. Stay tuned for your favorite FashionTV programs and all the latest from the worlds major fashion and celebrity events.</p>\r\n', '0', '0', '5', '0', '0.00', '1');
INSERT INTO tbl_channels VALUES ('5', '4', 'live_url', 'NewsX', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=cTfsfFCAlnc', '49319_news-x-logo.jpg', '<p>NewsX - Best English News Channel of the year 2014. Get the latest IT news, latest breaking news, current affairs, politics, business, technology etc..</p>\r\n', '0', '1', '22', '1', '5.00', '1');
INSERT INTO tbl_channels VALUES ('6', '4', 'live_url', 'Times Now', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=Q-3yA6NsTfU', '16393_timees.png', '<p>TIMES NOW is a Leading 24-hour English News channel that provides complete live coverage of international news, business news, breaking news..</p>\r\n', '0', '0', '15', '0', '0.00', '1');
INSERT INTO tbl_channels VALUES ('9', '3', 'live_url', 'Star TV', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=jWP3ntl64I4', '33560_13129605_274865709522504_1583429812_n.jpg', '<p>Star TV is all about News, Entertainment, Lifestyle and Cooking shows...</p>\r\n', '0', '0', '28', '1', '5.00', '1');
INSERT INTO tbl_channels VALUES ('11', '3', 'live_url', 'TV8', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=Dg-TbQW4eTE', '58533_tv8.jpg', '<p>TV8 offers over 100 television channels, a comprehensive program. TV8, watch high quality TV, HD quality watch TV 8.</p>\r\n', '0', '0', '14', '0', '0.00', '1');
INSERT INTO tbl_channels VALUES ('12', '3', 'live_url', '9XM', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=ohKmfO2spms&list=PLQTSj-_9v-TTdgheDMpJL326oToltMPGu', '51046_9xM.jpg', '<p>Bollywood Music at its best, thats what 9XM is all about.</p>\r\n', '1', '0', '64', '1', '5.00', '0');
INSERT INTO tbl_channels VALUES ('13', '1', 'live_url', 'ESPN', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=NhUxiFAIUVA', '44261_espn.png', '<p>Get the latest NBA basketball news, scores, stats, standings, fantasy games, and more from ESPN</p>\r\n', '1', '1', '56', '1', '5.00', '1');
INSERT INTO tbl_channels VALUES ('15', '4', 'youtube', 'Aajtak Live TV', 'https://www.youtube.com/watch?v=gHykKPYuWvs', 'youtube', 'https://www.youtube.com/watch?v=gHykKPYuWvs', '134_aaj_tak_hd.png', '<p>Aaj Tak has been awarded &#39;News Channel of the Year - Hindi&#39; (News Broadcasting Awards 2016 - ENBA Awards)</p>\r\n', '1', '1', '280', '1', '5.00', '1');
INSERT INTO tbl_channels VALUES ('16', '4', 'youtube', 'NDTV India', 'https://www.youtube.com/watch?v=QOnJm1vxR-U', 'youtube', 'https://www.youtube.com/watch?v=QOnJm1vxR-U', '63267_NDTV-2.png', '<p>NDTV Live TV, Hindi News Channel, Watch Live TV Online - NDTV India</p>\r\n', '0', '1', '126', '2', '3.00', '1');
INSERT INTO tbl_channels VALUES ('17', '5', 'youtube', 'Mr. Bean Cartoon', 'https://www.youtube.com/watch?v=dPkWQnCqcRg', 'youtube', 'https://www.youtube.com/watch?v=dPkWQnCqcRg', '1495_mr_bean.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Welcome to the official Mr Bean Channel. Here you will find all of your favourite Mr Bean moments from the classic series with Rowan Atkinson and his new animated adventures. Make sure to subscribe and never miss a Full Episode of Mr Bean, or Mr Bean Compilations and clips as well as originals including Mr Bean Comics.</p>\r\n', '0', '0', '19', '0', '0.00', '1');
INSERT INTO tbl_channels VALUES ('18', '5', 'youtube', 'WB Kids', 'https://www.youtube.com/watch?v=ESoXIeTLqxQ', 'youtube', 'https://www.youtube.com/watch?v=ESoXIeTLqxQ', '63074_WB_Kids.jpg', '<p>WBKids is the home of all of your favorite clips featuring characters from the Looney Tunes, Scooby-Doo, Tom and Jerry and More!</p>\r\n', '0', '0', '20', '0', '0.00', '1');
INSERT INTO tbl_channels VALUES ('19', '5', 'youtube', 'Talking Tom and Friends', 'https://www.youtube.com/watch?v=vzzsZ2ISgoU', 'youtube', 'https://www.youtube.com/watch?v=vzzsZ2ISgoU', '30665_Tom_1.jpeg', '<p>Talking Tom and Friends LIVE! Enjoy the adventures of Talking Tom, Talking Angela, Talking Hank, Talking Ben, and Talking Ginger all day, every day. Tune in NOW to watch full episodes of non-stop, 24/7 FUN! Grab the popcorn and settle in things are about to get awesome.</p>\r\n', '0', '0', '34', '1', '4.00', '1');
INSERT INTO tbl_channels VALUES ('20', '5', 'youtube', 'Booba Cartoon for Kids', 'https://www.youtube.com/watch?v=-svgU6bj6XA', 'youtube', 'https://www.youtube.com/watch?v=-svgU6bj6XA', '92192_Booba.jpg', '<p>Booba animated cartoon series compilation. Watch all episodes in a row. Booba is a funny creature who likes to discover a modern world. Subscribe and never miss the new episodes.</p>\r\n', '0', '0', '53', '1', '3.00', '1');
INSERT INTO tbl_channels VALUES ('21', '5', 'youtube', 'ChuChu TV', 'https://www.youtube.com/watch?v=cSoOW73E5Do1', 'live_url', 'http://qthttp.apple.com.edgesuite.net/1010qwoeiuryfg/sl.m3u8', '709_chuchu-tv-1.jpg', '<p>ChuChu TV Funzone 3D Nursery Rhymes &amp; Baby Songs - LIVE</p>\r\n', '0', '0', '65', '0', '0.00', '1');

-- ----------------------------
-- Table structure for `tbl_comments`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_comments`;
CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `dt_rate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_comments
-- ----------------------------
INSERT INTO tbl_comments VALUES ('12', '1', '17', 'Nice App..', '2018-07-25 05:03:56');
INSERT INTO tbl_comments VALUES ('13', '22', '17', 'DD National Channel..', '2018-07-25 06:04:22');
INSERT INTO tbl_comments VALUES ('15', '22', '21', 'this application is playing live channels and also playing live server, youtube and local videos. ', '2018-08-07 22:11:32');
INSERT INTO tbl_comments VALUES ('18', '8', '21', 'Amazing application', '2018-08-07 23:03:13');
INSERT INTO tbl_comments VALUES ('21', '16', '21', 'Great app ', '2018-08-08 01:41:32');
INSERT INTO tbl_comments VALUES ('22', '16', '21', 'Amazing job ', '2018-08-08 01:41:46');
INSERT INTO tbl_comments VALUES ('23', '8', '21', 'Test comment ', '2018-08-08 01:42:00');
INSERT INTO tbl_comments VALUES ('24', '12', '18', 'Nice', '2018-08-09 22:02:42');

-- ----------------------------
-- Table structure for `tbl_highlight`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_highlight`;
CREATE TABLE `tbl_highlight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `channel_type` varchar(255) NOT NULL,
  `channel_title` varchar(100) NOT NULL,
  `channel_url` varchar(255) NOT NULL,
  `channel_type_ios` varchar(255) NOT NULL,
  `channel_url_ios` varchar(255) NOT NULL,
  `channel_thumbnail` varchar(255) NOT NULL,
  `channel_desc` text NOT NULL,
  `featured_channel` int(1) NOT NULL DEFAULT '0',
  `slider_channel` int(1) NOT NULL DEFAULT '0',
  `total_views` int(11) NOT NULL DEFAULT '0',
  `total_rate` int(11) NOT NULL DEFAULT '0',
  `rate_avg` decimal(11,2) NOT NULL DEFAULT '0.00',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_highlight
-- ----------------------------
INSERT INTO tbl_highlight VALUES ('1', '1', 'live_url', 'Ten Sports', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=DRfbBvf_Amc', '24432_ten-sports-tv-logo-design-uk.png', '<p>Ten Sports Live - Watch live tournaments, matches, events of your favorite sports online.</p>\r\n', '0', '0', '9', '1', '5.00', '1');
INSERT INTO tbl_highlight VALUES ('2', '1', 'live_url', 'Sony Six', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=8G4GgMaIH9U', '94013_SonySix.png', '<p>Watch Sony Six Live Streaming,Sony Six Tv Live. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and s</p>\r\n', '0', '0', '18', '1', '5.00', '1');
INSERT INTO tbl_highlight VALUES ('3', '2', 'live_url', 'f.Diamond', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=1vU6-zd2mZ4', '34851_fdai.jpg', '<p>f.Diamond - International network dedicated to fashion news, shows, models and designers broadcasting 24 hours a day.</p>\r\n', '0', '0', '6', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('4', '2', 'live_url', 'Fashion TV', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=7URik9HUd1E', '81756_fash.jpg', '<p>FashionTV Live. Stay tuned for your favorite FashionTV programs and all the latest from the worlds major fashion and celebrity events.</p>\r\n', '0', '0', '5', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('5', '4', 'live_url', 'NewsX', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=cTfsfFCAlnc', '49319_news-x-logo.jpg', '<p>NewsX - Best English News Channel of the year 2014. Get the latest IT news, latest breaking news, current affairs, politics, business, technology etc..</p>\r\n', '0', '0', '22', '1', '5.00', '1');
INSERT INTO tbl_highlight VALUES ('6', '4', 'live_url', 'Times Now', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=Q-3yA6NsTfU', '16393_timees.png', '<p>TIMES NOW is a Leading 24-hour English News channel that provides complete live coverage of international news, business news, breaking news..</p>\r\n', '0', '0', '15', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('8', '3', 'live_url', 'MTV', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=agFMqNB9BYM', '88773_mtv.png', '<p>MTV gives you the hottest buzz from the entertainment world that will keep you hooked! Be the first to catch the latest MTV shows, music, artists and more!</p>\r\n', '1', '1', '160', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('9', '3', 'live_url', 'Star TV', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=jWP3ntl64I4', '33560_13129605_274865709522504_1583429812_n.jpg', '<p>Star TV is all about News, Entertainment, Lifestyle and Cooking shows...</p>\r\n', '0', '0', '28', '1', '5.00', '1');
INSERT INTO tbl_highlight VALUES ('10', '3', 'live_url', 'TRT HABER', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=z6IxJKrvk7w', '19501_trthaber.png', '<p>TRT new face in the world of the Internet, international and local news, domestic news, foreign news...</p>\r\n', '0', '0', '21', '1', '5.00', '1');
INSERT INTO tbl_highlight VALUES ('11', '3', 'live_url', 'TV8', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=Dg-TbQW4eTE', '58533_tv8.jpg', '<p>TV8 offers over 100 television channels, a comprehensive program. TV8, watch high quality TV, HD quality watch TV 8.</p>\r\n', '0', '0', '16', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('12', '3', 'live_url', '9XM', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=ohKmfO2spms&list=PLQTSj-_9v-TTdgheDMpJL326oToltMPGu', '51046_9xM.jpg', '<p>Bollywood Music at its best, thats what 9XM is all about.</p>\r\n', '1', '0', '65', '1', '5.00', '0');
INSERT INTO tbl_highlight VALUES ('13', '1', 'live_url', 'ESPN', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=NhUxiFAIUVA', '44261_espn.png', '<p>Get the latest NBA basketball news, scores, stats, standings, fantasy games, and more from ESPN</p>\r\n', '1', '1', '56', '1', '5.00', '1');
INSERT INTO tbl_highlight VALUES ('15', '4', 'youtube', 'Aajtak Live TV', 'https://www.youtube.com/watch?v=gHykKPYuWvs', 'youtube', 'https://www.youtube.com/watch?v=gHykKPYuWvs', '134_aaj_tak_hd.png', '<p>Aaj Tak has been awarded &#39;News Channel of the Year - Hindi&#39; (News Broadcasting Awards 2016 - ENBA Awards)</p>\r\n', '1', '1', '280', '1', '5.00', '1');
INSERT INTO tbl_highlight VALUES ('16', '4', 'youtube', 'NDTV India', 'https://www.youtube.com/watch?v=QOnJm1vxR-U', 'youtube', 'https://www.youtube.com/watch?v=QOnJm1vxR-U', '63267_NDTV-2.png', '<p>NDTV Live TV, Hindi News Channel, Watch Live TV Online - NDTV India</p>\r\n', '0', '1', '126', '2', '3.00', '1');
INSERT INTO tbl_highlight VALUES ('17', '5', 'youtube', 'Mr. Bean Cartoon', 'https://www.youtube.com/watch?v=dPkWQnCqcRg', 'youtube', 'https://www.youtube.com/watch?v=dPkWQnCqcRg', '1495_mr_bean.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Welcome to the official Mr Bean Channel. Here you will find all of your favourite Mr Bean moments from the classic series with Rowan Atkinson and his new animated adventures. Make sure to subscribe and never miss a Full Episode of Mr Bean, or Mr Bean Compilations and clips as well as originals including Mr Bean Comics.</p>\r\n', '0', '0', '16', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('18', '5', 'youtube', 'WB Kids', 'https://www.youtube.com/watch?v=ESoXIeTLqxQ', 'youtube', 'https://www.youtube.com/watch?v=ESoXIeTLqxQ', '63074_WB_Kids.jpg', '<p>WBKids is the home of all of your favorite clips featuring characters from the Looney Tunes, Scooby-Doo, Tom and Jerry and More!</p>\r\n', '0', '0', '18', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('19', '5', 'youtube', 'Talking Tom and Friends', 'https://www.youtube.com/watch?v=vzzsZ2ISgoU', 'youtube', 'https://www.youtube.com/watch?v=vzzsZ2ISgoU', '30665_Tom_1.jpeg', '<p>Talking Tom and Friends LIVE! Enjoy the adventures of Talking Tom, Talking Angela, Talking Hank, Talking Ben, and Talking Ginger all day, every day. Tune in NOW to watch full episodes of non-stop, 24/7 FUN! Grab the popcorn and settle in things are about to get awesome.</p>\r\n', '0', '0', '31', '1', '4.00', '1');
INSERT INTO tbl_highlight VALUES ('20', '5', 'youtube', 'Booba Cartoon for Kids', 'https://www.youtube.com/watch?v=-svgU6bj6XA', 'youtube', 'https://www.youtube.com/watch?v=-svgU6bj6XA', '92192_Booba.jpg', '<p>Booba animated cartoon series compilation. Watch all episodes in a row. Booba is a funny creature who likes to discover a modern world. Subscribe and never miss the new episodes.</p>\r\n', '1', '0', '49', '1', '3.00', '1');
INSERT INTO tbl_highlight VALUES ('21', '5', 'youtube', 'ChuChu TV', 'https://www.youtube.com/watch?v=cSoOW73E5Do', 'live_url', 'http://qthttp.apple.com.edgesuite.net/1010qwoeiuryfg/sl.m3u8', '709_chuchu-tv-1.jpg', '<p>ChuChu TV Funzone 3D Nursery Rhymes &amp; Baby Songs - LIVE</p>\r\n', '0', '0', '65', '0', '0.00', '1');
INSERT INTO tbl_highlight VALUES ('22', '3', 'youtube', 'DD Nationals', 'https://www.youtube.com/watch?v=Mgxx3tHjVQw', 'youtube', 'https://www.youtube.com/watch?v=Mgxx3tHjVQw', '49098_dd.jpg', '<p>Doordarshan 24x7<br />\r\nThis is National Channel of INDIA. Doordarshan.</p>\r\n', '1', '1', '554', '4', '5.00', '1');

-- ----------------------------
-- Table structure for `tbl_home`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_home`;
CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_title` varchar(255) NOT NULL,
  `home_banner` varchar(255) NOT NULL,
  `home_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_home
-- ----------------------------
INSERT INTO tbl_home VALUES ('1', 'Star Sports', '27783_Star_Sports.png', 'http://bglive-a.bitgravity.com/ndtv/prolo/live/native');
INSERT INTO tbl_home VALUES ('3', 'ABP News', '88806_abp_english.jpg', 'http://bglive-a.bitgravity.com/ndtv/prolo/live/native');

-- ----------------------------
-- Table structure for `tbl_rating`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rating`;
CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_rating
-- ----------------------------
INSERT INTO tbl_rating VALUES ('1', '0', '0', '', '0', '2018-07-16 22:02:59');
INSERT INTO tbl_rating VALUES ('2', '15', '11', '11', '5', '2018-07-16 22:48:44');
INSERT INTO tbl_rating VALUES ('3', '13', '11', '11', '5', '2018-07-16 22:50:48');
INSERT INTO tbl_rating VALUES ('4', '14', '11', '11', '4', '2018-07-16 22:51:52');
INSERT INTO tbl_rating VALUES ('5', '12', '11', '11', '5', '2018-07-18 02:47:55');
INSERT INTO tbl_rating VALUES ('6', '5', '11', '11', '5', '2018-07-20 05:12:14');
INSERT INTO tbl_rating VALUES ('7', '10', '11', '11', '5', '2018-07-20 05:25:07');
INSERT INTO tbl_rating VALUES ('8', '1', '17', '17', '5', '2018-07-25 05:01:41');
INSERT INTO tbl_rating VALUES ('9', '14', '17', '17', '5', '2018-07-25 05:01:48');
INSERT INTO tbl_rating VALUES ('10', '2', '17', '17', '5', '2018-07-25 05:01:59');
INSERT INTO tbl_rating VALUES ('11', '22', '16', '16', '5', '2018-07-25 07:33:44');
INSERT INTO tbl_rating VALUES ('12', '22', '18', '18', '5', '2018-07-25 23:53:01');
INSERT INTO tbl_rating VALUES ('13', '22', '17', '17', '5', '2018-08-02 07:09:58');
INSERT INTO tbl_rating VALUES ('14', '22', '21', '21', '3', '2018-08-07 22:48:10');
INSERT INTO tbl_rating VALUES ('15', '9', '17', '17', '5', '2018-08-08 01:36:25');
INSERT INTO tbl_rating VALUES ('16', '16', '21', '21', '1', '2018-08-08 02:17:00');
INSERT INTO tbl_rating VALUES ('17', '14', '21', '21', '3', '2018-08-08 20:58:38');
INSERT INTO tbl_rating VALUES ('18', '16', '17', '17', '5', '2018-08-10 04:55:53');
INSERT INTO tbl_rating VALUES ('19', '19', '21', '21', '4', '2018-08-12 21:44:11');
INSERT INTO tbl_rating VALUES ('20', '20', '21', '21', '3', '2018-08-12 22:58:44');

-- ----------------------------
-- Table structure for `tbl_reports`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_reports`;
CREATE TABLE `tbl_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `report` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_reports
-- ----------------------------
INSERT INTO tbl_reports VALUES ('5', '21', '11', '', 'this is just for testing..\n');
INSERT INTO tbl_reports VALUES ('6', '9', '11', '', 'test\n');
INSERT INTO tbl_reports VALUES ('7', '22', '18', '', 'worked');
INSERT INTO tbl_reports VALUES ('9', '13', '21', '', 'Nice');
INSERT INTO tbl_reports VALUES ('10', '22', '21', '', 'Nice app');
INSERT INTO tbl_reports VALUES ('14', '16', '17', '', 'this is testing\n');
INSERT INTO tbl_reports VALUES ('15', '20', '0', '', 'tet');

-- ----------------------------
-- Table structure for `tbl_settings`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_settings`;
CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_from` varchar(255) NOT NULL,
  `onesignal_app_id` varchar(500) NOT NULL,
  `onesignal_rest_key` varchar(500) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_logo` varchar(255) NOT NULL,
  `app_email` varchar(255) NOT NULL,
  `app_version` varchar(255) NOT NULL,
  `app_author` varchar(255) NOT NULL,
  `app_contact` varchar(255) NOT NULL,
  `app_website` varchar(255) NOT NULL,
  `app_description` text NOT NULL,
  `app_developed_by` varchar(255) NOT NULL,
  `app_privacy_policy` text NOT NULL,
  `api_latest_limit` int(3) NOT NULL,
  `api_cat_order_by` varchar(255) NOT NULL,
  `api_cat_post_order_by` varchar(255) NOT NULL,
  `publisher_id` varchar(500) NOT NULL,
  `interstital_ad` varchar(500) NOT NULL,
  `interstital_ad_id` varchar(500) NOT NULL,
  `interstital_ad_click` varchar(500) NOT NULL,
  `banner_ad` varchar(500) NOT NULL,
  `banner_ad_id` varchar(500) NOT NULL,
  `publisher_id_ios` varchar(500) NOT NULL,
  `app_id_ios` varchar(500) NOT NULL,
  `interstital_ad_ios` varchar(500) NOT NULL,
  `interstital_ad_id_ios` varchar(500) NOT NULL,
  `interstital_ad_click_ios` varchar(500) NOT NULL,
  `banner_ad_ios` varchar(500) NOT NULL,
  `banner_ad_id_ios` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_settings
-- ----------------------------
INSERT INTO tbl_settings VALUES ('1', 'info@viaviweb.in', '0e611d58-a9f2-4665-80c0-3334f0756f82', 'M2U3MDQzZjYtNTFjMi00YjE2LTg1MDUtOWJhNmZkNDBhMTAx', 'Sports', 'App_icon.png', 'info@viaviweb.com', '2.1.5', 'Viavi Webtech', '+919227777522', 'www.viaviweb.com', '<p>Watch your favorite TV channels Live in your mobile phone with this application on your device. that support almost all format.The application is specially optimized to be extremely easy to configure and detailed documentation is provided.</p>\r\n', 'Viavi Webtech', '<p><strong>We are committed to protecting your privacy</strong></p>\r\n\r\n<p>We collect the minimum amount of information about you that is commensurate with providing you with a satisfactory service. This policy indicates the type of processes that may result in data being collected about you. Your use of this website gives us the right to collect that information.&nbsp;</p>\r\n\r\n<p><strong>Information Collected</strong></p>\r\n\r\n<p>We may collect any or all of the information that you give us depending on the type of transaction you enter into, including your name, address, telephone number, and email address, together with data about your use of the website. Other information that may be needed from time to time to process a request may also be collected as indicated on the website.</p>\r\n\r\n<p><strong>Information Use</strong></p>\r\n\r\n<p>We use the information collected primarily to process the task for which you visited the website. Data collected in the UK is held in accordance with the Data Protection Act. All reasonable precautions are taken to prevent unauthorised access to this information. This safeguard may require you to provide additional forms of identity should you wish to obtain information about your account details.</p>\r\n\r\n<p><strong>Cookies</strong></p>\r\n\r\n<p>Your Internet browser has the in-built facility for storing small files - &quot;cookies&quot; - that hold information which allows a website to recognise your account. Our website takes advantage of this facility to enhance your experience. You have the ability to prevent your computer from accepting cookies but, if you do, certain functionality on the website may be impaired.</p>\r\n\r\n<p><strong>Disclosing Information</strong></p>\r\n\r\n<p>We do not disclose any personal information obtained about you from this website to third parties unless you permit us to do so by ticking the relevant boxes in registration or competition forms. We may also use the information to keep in contact with you and inform you of developments associated with us. You will be given the opportunity to remove yourself from any mailing list or similar device. If at any time in the future we should wish to disclose information collected on this website to any third party, it would only be with your knowledge and consent.&nbsp;</p>\r\n\r\n<p>We may from time to time provide information of a general nature to third parties - for example, the number of individuals visiting our website or completing a registration form, but we will not use any information that could identify those individuals.&nbsp;</p>\r\n\r\n<p>In addition Dummy may work with third parties for the purpose of delivering targeted behavioural advertising to the Dummy website. Through the use of cookies, anonymous information about your use of our websites and other websites will be used to provide more relevant adverts about goods and services of interest to you. For more information on online behavioural advertising and about how to turn this feature off, please visit youronlinechoices.com/opt-out.</p>\r\n\r\n<p><strong>Changes to this Policy</strong></p>\r\n\r\n<p>Any changes to our Privacy Policy will be placed here and will supersede this version of our policy. We will take reasonable steps to draw your attention to any changes in our policy. However, to be on the safe side, we suggest that you read this document each time you use the website to ensure that it still meets with your approval.</p>\r\n\r\n<p><strong>Contacting Us</strong></p>\r\n\r\n<p>If you have any questions about our Privacy Policy, or if you want to know what information we have collected about you, please email us at hd@dummy.com. You can also correct any factual errors in that information or require us to remove your details form any list under our control.</p>\r\n', '10', 'category_name', 'channel_title', 'pub-9456493320432553', 'true', 'ca-app-pub-3940256099942544/1033173712', '5', 'true', 'ca-app-pub-3940256099942544/6300978111', 'pub-8356404931736973', 'ca-app-pub-8356404931736973~1544820074', 'true', 'ca-app-pub-3940256099942544/4411468910', '5', 'true', 'ca-app-pub-3940256099942544/2934735716');

-- ----------------------------
-- Table structure for `tbl_tv`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tv`;
CREATE TABLE `tbl_tv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `channel_type` varchar(255) NOT NULL,
  `channel_title` varchar(100) NOT NULL,
  `channel_url` varchar(255) NOT NULL,
  `channel_type_ios` varchar(255) NOT NULL,
  `channel_url_ios` varchar(255) NOT NULL,
  `channel_thumbnail` varchar(255) NOT NULL,
  `channel_desc` text NOT NULL,
  `featured_channel` int(1) NOT NULL DEFAULT '0',
  `slider_channel` int(1) NOT NULL DEFAULT '0',
  `total_views` int(11) NOT NULL DEFAULT '0',
  `total_rate` int(11) NOT NULL DEFAULT '0',
  `rate_avg` decimal(11,2) NOT NULL DEFAULT '0.00',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_tv
-- ----------------------------
INSERT INTO tbl_tv VALUES ('2', '1', 'live_url', 'Sony Six', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=8G4GgMaIH9U', '94013_SonySix.png', '<p>Watch Sony Six Live Streaming,Sony Six Tv Live. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and s</p>\r\n', '0', '0', '18', '1', '5.00', '1');
INSERT INTO tbl_tv VALUES ('3', '2', 'live_url', 'f.Diamond', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=1vU6-zd2mZ4', '34851_fdai.jpg', '<p>f.Diamond - International network dedicated to fashion news, shows, models and designers broadcasting 24 hours a day.</p>\r\n', '0', '0', '6', '0', '0.00', '1');
INSERT INTO tbl_tv VALUES ('4', '2', 'live_url', 'Fashion TV', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=7URik9HUd1E', '81756_fash.jpg', '<p>FashionTV Live. Stay tuned for your favorite FashionTV programs and all the latest from the worlds major fashion and celebrity events.</p>\r\n', '0', '0', '5', '0', '0.00', '1');
INSERT INTO tbl_tv VALUES ('5', '4', 'live_url', 'NewsX', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=cTfsfFCAlnc', '49319_news-x-logo.jpg', '<p>NewsX - Best English News Channel of the year 2014. Get the latest IT news, latest breaking news, current affairs, politics, business, technology etc..</p>\r\n', '0', '0', '22', '1', '5.00', '1');
INSERT INTO tbl_tv VALUES ('6', '4', 'live_url', 'Times Now', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=Q-3yA6NsTfU', '16393_timees.png', '<p>TIMES NOW is a Leading 24-hour English News channel that provides complete live coverage of international news, business news, breaking news..</p>\r\n', '0', '0', '15', '0', '0.00', '1');
INSERT INTO tbl_tv VALUES ('9', '3', 'live_url', 'Star TV', 'http://server.internext.tv:8080/live/dosti/july2018/5483.ts', 'youtube', 'https://www.youtube.com/watch?v=jWP3ntl64I4', '33560_13129605_274865709522504_1583429812_n.jpg', '<p>Star TV is all about News, Entertainment, Lifestyle and Cooking shows...</p>\r\n', '0', '0', '28', '1', '5.00', '1');
INSERT INTO tbl_tv VALUES ('11', '3', 'live_url', 'TV8', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=Dg-TbQW4eTE', '58533_tv8.jpg', '<p>TV8 offers over 100 television channels, a comprehensive program. TV8, watch high quality TV, HD quality watch TV 8.</p>\r\n', '0', '0', '14', '0', '0.00', '1');
INSERT INTO tbl_tv VALUES ('12', '3', 'live_url', '9XM', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=ohKmfO2spms&list=PLQTSj-_9v-TTdgheDMpJL326oToltMPGu', '51046_9xM.jpg', '<p>Bollywood Music at its best, thats what 9XM is all about.</p>\r\n', '1', '0', '65', '1', '5.00', '0');
INSERT INTO tbl_tv VALUES ('13', '1', 'live_url', 'ESPN', 'http://client.safeip.live:8080/live/31C21OWuiu/VGN5vyCGoh/7057.ts', 'youtube', 'https://www.youtube.com/watch?v=NhUxiFAIUVA', '44261_espn.png', '<p>Get the latest NBA basketball news, scores, stats, standings, fantasy games, and more from ESPN</p>\r\n', '1', '1', '56', '1', '5.00', '1');
INSERT INTO tbl_tv VALUES ('15', '4', 'youtube', 'Aajtak Live TV', 'https://www.youtube.com/watch?v=gHykKPYuWvs', 'youtube', 'https://www.youtube.com/watch?v=gHykKPYuWvs', '134_aaj_tak_hd.png', '<p>Aaj Tak has been awarded &#39;News Channel of the Year - Hindi&#39; (News Broadcasting Awards 2016 - ENBA Awards)</p>\r\n', '1', '1', '280', '1', '5.00', '1');
INSERT INTO tbl_tv VALUES ('16', '4', 'youtube', 'NDTV India', 'https://www.youtube.com/watch?v=QOnJm1vxR-U', 'youtube', 'https://www.youtube.com/watch?v=QOnJm1vxR-U', '63267_NDTV-2.png', '<p>NDTV Live TV, Hindi News Channel, Watch Live TV Online - NDTV India</p>\r\n', '0', '1', '126', '2', '3.00', '1');
INSERT INTO tbl_tv VALUES ('17', '5', 'youtube', 'Mr. Bean Cartoon', 'https://www.youtube.com/watch?v=dPkWQnCqcRg', 'youtube', 'https://www.youtube.com/watch?v=dPkWQnCqcRg', '1495_mr_bean.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Welcome to the official Mr Bean Channel. Here you will find all of your favourite Mr Bean moments from the classic series with Rowan Atkinson and his new animated adventures. Make sure to subscribe and never miss a Full Episode of Mr Bean, or Mr Bean Compilations and clips as well as originals including Mr Bean Comics.</p>\r\n', '0', '0', '17', '0', '0.00', '1');
INSERT INTO tbl_tv VALUES ('18', '5', 'youtube', 'WB Kids', 'https://www.youtube.com/watch?v=ESoXIeTLqxQ', 'youtube', 'https://www.youtube.com/watch?v=ESoXIeTLqxQ', '63074_WB_Kids.jpg', '<p>WBKids is the home of all of your favorite clips featuring characters from the Looney Tunes, Scooby-Doo, Tom and Jerry and More!</p>\r\n', '0', '0', '18', '0', '0.00', '1');
INSERT INTO tbl_tv VALUES ('19', '5', 'youtube', 'Talking Tom and Friends', 'https://www.youtube.com/watch?v=vzzsZ2ISgoU', 'youtube', 'https://www.youtube.com/watch?v=vzzsZ2ISgoU', '30665_Tom_1.jpeg', '<p>Talking Tom and Friends LIVE! Enjoy the adventures of Talking Tom, Talking Angela, Talking Hank, Talking Ben, and Talking Ginger all day, every day. Tune in NOW to watch full episodes of non-stop, 24/7 FUN! Grab the popcorn and settle in things are about to get awesome.</p>\r\n', '0', '0', '31', '1', '4.00', '1');
INSERT INTO tbl_tv VALUES ('20', '5', 'youtube', 'Booba Cartoon for Kids', 'https://www.youtube.com/watch?v=-svgU6bj6XA', 'youtube', 'https://www.youtube.com/watch?v=-svgU6bj6XA', '92192_Booba.jpg', '<p>Booba animated cartoon series compilation. Watch all episodes in a row. Booba is a funny creature who likes to discover a modern world. Subscribe and never miss the new episodes.</p>\r\n', '1', '0', '49', '1', '3.00', '1');
INSERT INTO tbl_tv VALUES ('21', '5', 'youtube', 'ChuChu TV', 'https://www.youtube.com/watch?v=cSoOW73E5Do', 'live_url', 'http://qthttp.apple.com.edgesuite.net/1010qwoeiuryfg/sl.m3u8', '709_chuchu-tv-1.jpg', '<p>ChuChu TV Funzone 3D Nursery Rhymes &amp; Baby Songs - LIVE</p>\r\n', '0', '0', '65', '0', '0.00', '1');

-- ----------------------------
-- Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `confirm_code` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO tbl_users VALUES ('5', 'Normal', 'John Deo', 'johndeo@gmail.com', 'password123', '9123456789', '', '1');
INSERT INTO tbl_users VALUES ('10', 'Normal', 'kuldip', 'kuldip@viaviweb.com', '123456', '1234567891', null, '1');
INSERT INTO tbl_users VALUES ('17', 'Normal', 'Vishal Parmar', 'viaviwebtech@gmail.com', 'vishal', '9227777522', null, '1');
INSERT INTO tbl_users VALUES ('18', 'Normal', 'Sample', 'sample@gmail.com', 'karan123', '9879543210', null, '1');
INSERT INTO tbl_users VALUES ('21', 'Normal', 'Ashok Radadiya', 'ashok.viaviweb@gmail.com', '123456', '9725624151', null, '1');
INSERT INTO tbl_users VALUES ('22', 'Normal', 'jfjjtg', 'gjjuyghu@gmail.com', '123456', '1234567890', null, '1');
INSERT INTO tbl_users VALUES ('23', 'Normal', 'rreeddpanda', 'rreeddpanda@gmail.com', '123123123', '123123123', null, '1');

-- ----------------------------
-- Table structure for `tbl_video`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `video_type` varchar(255) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_url` text NOT NULL,
  `video_id` varchar(255) NOT NULL,
  `video_thumbnail` text NOT NULL,
  `total_views` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_video
-- ----------------------------
INSERT INTO tbl_video VALUES ('1', '0', 'youtube', 'Calvin Harris - This Is What You Came For', 'https://www.youtube.com/watch?v=kOkQ4T5WO9E', 'kOkQ4T5WO9E', '75142_forestbridge.jpg', '4', '1');
INSERT INTO tbl_video VALUES ('2', '0', 'server_url', 'Kitkat', 'http://www.viaviweb.in/envato/cc/hdvideo_demo/uploads/kitkat.mp4', '', '22219_video.png', '0', '1');
INSERT INTO tbl_video VALUES ('3', '0', 'local', 'Kitkat Local', 'http://www.viaviweb.in/envato/cc/live_tv_app_demo/uploads/26849_kitkat.mp4', '', '76387_video.png', '0', '1');
INSERT INTO tbl_video VALUES ('4', '0', 'youtube', 'Viavi Webtech - Testimonials', 'https://www.youtube.com/watch?v=JqYsroLntJI', 'JqYsroLntJI', '80681_profile-logo.jpg', '0', '1');

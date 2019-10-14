# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.25)
# Database: imfree
# Generation Time: 2019-10-14 08:38:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;

INSERT INTO `admin` (`id`, `login`, `password`)
VALUES
	(1,'imfreeadmin1','0d77f20d440fe27aa0a73bd8e2c557dd');

/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pageId` int(11) unsigned NOT NULL,
  `title` text,
  `subtitle` text,
  `content` longtext,
  `type` enum('text','pdf','image','video') NOT NULL DEFAULT 'text',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `pageId` (`pageId`),
  KEY `status` (`status`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;

INSERT INTO `contents` (`id`, `pageId`, `title`, `subtitle`, `content`, `type`, `status`, `date_created`)
VALUES
	(1,2,'Mind and Mood','Hear directly from our members 2016','assets/video/black1.mp4','video',1,'2019-09-10 19:07:27'),
	(2,2,'Consumer Video',' Take a look at how Imfree works','assets/video/cons_vid.mp4','video',1,'2019-09-10 19:08:38'),
	(3,1,'Company Profile','A Brief introduction to Imfree.','Imfree Holdings Inc was incorporated in 2012 in Delaware as a software technology company with the explicit goal to shift billions of dollars of inefficient and unaccountable media and marketing spend directly into the hands of the people who value it most.\n\nOur goal was to build the world’s first customised, hyper-contextual mobile engagement platform with retargetable unique user permission based data for marketers, accomplishing the holy grail by turning the marketing funnel into a transaction tunnel with infinite retargeting capability.\n\nSo we moved to Manila to build and test cheaply, quickly and away from the eyes of Silicon Valley. This gave us an unfair cost and talent advantage and a 4 year head start on the inevitable sovereign personal data zeitgeist. It also primed us to launch in Singapore, ‘blitzscale’ across 2.4 billion users in Asia Pacific and race down the long client sponsored corridors to North America, Europe, Latin America and Africa.\n\nBuilt on the universal insight ‘everyone’s valuable to someone’, Imfree created an open and honest value exchange platform between individuals and businesses. A club that rewards members for their data to unlock shared value and knowledge with the brands they love most.\n\nThe user experience has manifested into the world’s first and only Personal Value Compass that seeks out hyper-contextual value and engagements and navigates the member directly to the point of transaction in real time.\n\nWe’ve scientifically mapped the dimensions of value from mobile data and product discounts, to events, subscriptions, entertainment and utilities on partner retail and e-commerce platforms with members retaining complete control of their personal data value and privacy.\n\nIn return, marketers get direct access to real-time first person consumer intelligence and ROI data that is measurable, actionable and retargetable in real time to address any consumer need-state and build Lifetime Customer Value.\n\nImfree’s co-founders are Technology and Marketing veterans with over 25 years of industry-leading experience. Supported by a dynamic and data-driven Management, Product and Development team, Imfree has developed and supported digital platforms for Consumer Packaged Goods companies throughout South East Asia.','text',1,'2019-09-04 18:25:19'),
	(4,1,'Imfree Mantra','What we believe.','At Imfree we believe everyone is valuable to someone.\n\nThat open and mutually shared values are at the heart of the most profound and intimate relationships humans seek.\n\nThese values are fragile, innate and highly contextual. They reflect our history. Our experiences. Our deepest dreams and greatest desires.\n\nThey rest at the intersection of our state of mind and state of motion.\n\nBusinesses, Brands and Advertisers know this too – but never had the tools to engage deeply, contextually or personally at this profound moment.\n\nRelying on the grandfathered technology of cookies as surrogates, screens as loudhailers, and yelling at the masses, it’s been a struggle to get to the most granular needs of the ‘me’.\n\nSo we built Imfree.\n\nThe world’s first Personal Value Compass that seeks out all of the value that surrounds people at the right time, in the right place to navigate them to the things they love most.\n\nFirst, we placed the member at the centre of their own universe, and returned control of the value of their data to them.\n\nBecause this is what friends do.\n\nThey don’t do something to you, they do something for you.\n\nThis honest and humble act of commercial selflessness defines our values and how we value our members.\n\nWe treat every member personally, because we have the only technology in the world that can.\n\nWe encourage advertisers to be genuine with our members.\n\nTo provide authentic value which recognises each individuals value throughout each day and over their lifetime, rather than as anonymous numbers on a quarterly balance sheet.\n\nWe celebrate every engagement as an intimate conversation instead of an indiscriminate broadcast.\n\nThen we complete this journey with transactions that transcend dollars, into deep and trusted shared knowledge, in near real time.\n\nBy building our technology from the member up, we’ve inverted the spam machine of push and liberated the consumer with the ability to pull.\n\nWhich changes everything.\n\nImfree is an ecosystem that shifts behaviour from screening out to seeking out, reinstating the deep personal connections and trust between brands and people.\n\nThis ensures whomever you are, wherever you are, you are deeply connected to, and able to find the things you love the most.\n\nThis is our purpose, the personal zeitgeist that let’s everyone find happiness.\n\nAt Imfree, this is what we are doing today.\n\n','text',1,'2019-09-04 18:25:48'),
	(5,4,'Investor Presentation','','assets/pdf/Investor_Presentation.pdf','pdf',1,'2019-09-06 15:27:19'),
	(6,4,'Historical Financials','','assets/pdf/historical.pdf','pdf',1,'2019-09-04 22:20:13'),
	(7,4,'Huggies x Lazada Case Study','','assets/imgs/huggies.png','image',1,'2019-09-04 22:20:26'),
	(8,5,'Kleenex Case Study',NULL,'assets/imgs/kleenex.png','image',1,'2019-09-04 19:18:41'),
	(9,5,'EQ Diapers Case Study',NULL,'assets/imgs/eqdiapers.png','image',1,'2019-09-04 19:19:11'),
	(10,5,'Clients','','assets/imgs/partners.jpg','image',1,'2019-09-05 18:05:55'),
	(12,1,'test same file','','assets/video/trie.mp4','video',1,'2019-09-10 07:05:08'),
	(13,1,'and another','','assets/imgs/gball.png','image',0,'2019-09-09 18:23:23'),
	(14,1,'and another one','','assets/imgs/gball.png','image',0,'2019-09-09 18:24:08'),
	(15,1,'and another one','face','Imagine waking up one day to find an extra $120,000 in your bank account. You did not make $120,000 or win $120,000, but there it is, $120,000, just sitting there. Cool!\r\n\r\nWhat would you do with all that cash? Pay off the mountain of student loans you’d otherwise be stuck with till you die? Buy a house? Buy a car?\r\n\r\nMaybe you should call the bank and find out what’s going on?\r\n\r\nYeah. Yeah, you definitely should call the bank.\r\n\r\nRobert and Tiffany Williams of Montoursville, Pennsylvania, did not call the bank, police say.\r\n\r\nWhen a non-hypothetical $120,000 intended for a business was accidentally transferred into their BB&T bank account because of a teller error, the couple splurged on a camper, a Chevy, and a racecar, state trooper Aaron Brown told the Williamsport Sun-Gazette. Authorities say they also distributed $15,000 to friends who needed the money.','text',1,'2019-09-10 07:01:57'),
	(16,1,'still anutha','what','assets/video/test_pampi1.mp4','video',1,'2019-09-10 09:32:43'),
	(17,5,'pampi','','assets/video/test_pampi.mp4','video',1,'2019-09-10 06:49:26'),
	(18,1,'TEXT','sub','assets/video/black.mp4','video',1,'2019-09-10 18:02:39'),
	(19,4,'TEXT','sub2','akazamabamaber','text',1,'2019-09-10 18:03:39'),
	(20,1,'Text no subtitle','','Text body\r\n\r\nbody\r\n\r\nbody\r\n\r\nhere','text',1,'2019-09-10 19:06:48'),
	(21,5,'v','for vertigo','assets/imgs/aristotle-header-dark1.jpg','image',1,'2019-09-11 07:53:03');

/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `title`)
VALUES
	(4,'for investors'),
	(1,'home'),
	(5,'improofment case studies'),
	(2,'what we do'),
	(3,'who we are');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table site_visits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_visits`;

CREATE TABLE `site_visits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_id` int(11) NOT NULL DEFAULT '1',
  `session_key` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `page_id` (`page_id`),
  KEY `session_key` (`session_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `site_visits` WRITE;
/*!40000 ALTER TABLE `site_visits` DISABLE KEYS */;

INSERT INTO `site_visits` (`id`, `user_id`, `timestamp`, `page_id`, `session_key`)
VALUES
	(1,1,'2019-09-11 06:31:06',1,'abc'),
	(2,1,'2019-09-11 06:53:25',1,'abc'),
	(3,4,'2019-09-11 07:07:34',1,'def'),
	(4,1,'2019-09-16 07:04:11',1,'6d4a6a4c8e64d34380f1'),
	(5,1,'2019-09-16 07:05:21',2,'6d4a6a4c8e64d34380f1'),
	(6,1,'2019-09-16 07:05:23',3,'6d4a6a4c8e64d34380f1'),
	(7,1,'2019-09-16 07:05:24',4,'6d4a6a4c8e64d34380f1'),
	(8,1,'2019-09-16 07:05:28',5,'6d4a6a4c8e64d34380f1'),
	(9,6,'2019-09-16 08:07:22',1,'dea8bebc5c891dbf86e2'),
	(10,6,'2019-09-16 08:07:33',2,'dea8bebc5c891dbf86e2'),
	(11,6,'2019-09-16 08:08:19',5,'dea8bebc5c891dbf86e2');

/*!40000 ALTER TABLE `site_visits` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `raw` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`, `raw`, `status`, `date_added`)
VALUES
	(1,'ray@engmntprty.com','5f4dcc3b5aa765d61d8327deb882cf99','password',1,'2019-09-02 18:16:33'),
	(4,'marv@imf.com','5f4dcc3b5aa765d61d8327deb882cf99','password',1,'2019-09-04 14:47:13'),
	(5,'clara@imfree.com','c87de121110679c8ba426ad1e6b6bc0b','P7VZW11X',1,'2019-09-04 14:59:31'),
	(6,'pete@imf.com','0c6432070317c02e92e6e75fa422fa0f','XSZOD408',1,'2019-09-04 15:02:59'),
	(7,'test','d41d8cd98f00b204e9800998ecf8427e','',0,'2019-09-10 14:28:22'),
	(8,'test2','d41d8cd98f00b204e9800998ecf8427e','',0,'2019-09-10 14:30:36'),
	(9,'test3','d667291bbe23c2c4e1f53dc86032557a','Y5M36OP7',0,'2019-09-10 14:31:51'),
	(10,'test3@gmail.com','92a6637c9f9280c462190ca03271c5fd','PDMYEQB9',1,'2019-09-10 14:33:24');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

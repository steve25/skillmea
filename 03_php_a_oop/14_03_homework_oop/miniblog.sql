# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: miniblog
# Generation Time: 2015-08-02 13:14:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `post_id` int(11) unsigned NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `slug` varchar(200) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `user_id`, `title`, `text`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,0,'This is a title','Marzipan sweet roll muffin biscuit candy sugar plum. Candy canes soufflé sesame snaps muffin jelly-o jelly macaroon carrot cake. Biscuit sweet roll dragée. Sweet jujubes chupa chups chupa chups tiramisu sweet roll. Biscuit bear claw topping cake macaroon cookie tiramisu marzipan croissant. Fruitcake macaroon cake brownie oat cake dessert chocolate bar pudding biscuit.\r\n\r\nhttps://www.youtube.com/watch?v=vORsKyopHyM&index=48&list=FLa2etvvyIFz8mULUSeACJnA\r\n\r\nPie bear claw cheesecake wafer pie jujubes dessert. Jelly-o lollipop dessert cake brownie jelly-o muffin tiramisu oat cake. Marshmallow carrot cake jujubes marshmallow chocolate cake sesame snaps muffin. Muffin icing marshmallow lemon drops dessert danish cake halvah muffin. Icing chocolate cake. Pudding pie macaroon fruitcake bear claw cheesecake pudding soufflé. Pie donut carrot cake cupcake muffin.\r\n\r\nhttps://youtu.be/LKxWl4PcBY4\r\n\r\nPudding tootsie roll wafer candy croissant cake dessert. Jelly-o croissant ice cream sesame snaps bear claw tiramisu. Caramels marzipan sugar plum sweet roll donut dragée. Fruitcake cupcake cake.','this-is-a-title','2015-07-25 16:02:55','2015-07-31 22:10:51'),
	(2,0,'Ego Tripping At The Gates Of Hell','I was waiting on a moment\r\nBut the moment never came\r\nAll the billion other moments\r\nWere just slipping all away\r\n(I must have been tripping) Were just slipping all away\r\n(Just ego tripping)\r\n\r\nI was wanting you to love me\r\nBut your love, it never came\r\nAll the other love around me\r\nWas just wasting all away\r\n(I must have been tripping) Was just wasting all away\r\n(Just ego tripping) Was just wasting all away\r\n(Must have been trip—)\r\n\r\nI was waiting on a moment\r\nBut the moment never came\r\nBut the moment never came\r\n\r\n(Must have been tripping) But the moment never came\r\n(Just ego tripping) But the moment never came\r\n\r\nhttp://genius.com/The-flaming-lips-ego-tripping-at-the-gates-of-hell-lyrics','ego-tripping-at-the-gates-of-hell','2015-07-29 17:26:38','2015-07-31 16:13:49'),
	(3,0,'The Prince and the Pauper','In the ancient city of London, on a certain autumn day in the second quarter of the sixteenth century, a boy was born to a poor family of the name of Canty, who did not want him. On the same day another English child was born to a rich family of the name of Tudor, who did want him. All England wanted him too. England had so longed for him, and hoped for him, and prayed God for him, that, now that he was really come, the people went nearly mad for joy. Mere acquaintances hugged and kissed each other and cried. Everybody took a holiday, and high and low, rich and poor, feasted and danced and sang, and got very mellow; and they kept this up for days and nights together.\n\nBy day, London was a sight to see, with gay banners waving from every balcony and housetop, and splendid pageants marching along. By night, it was again a sight to see, with its great bonfires at every corner, and its troops of revellers making merry around them. There was no talk in all England but of the new baby, Edward Tudor, Prince of Wales, who lay lapped in silks and satins, unconscious of all this fuss, and not knowing that great lords and ladies were tending him and watching over him—and not caring, either.  But there was no talk about the other baby, Tom Canty, lapped in his poor rags, except among the family of paupers whom he had just come to trouble with his presence.\n\nLet us skip a number of years.\n\nLondon was fifteen hundred years old, and was a great town—for that day. It had a hundred thousand inhabitants—some think double as many.  The streets were very narrow, and crooked, and dirty, especially in the part where Tom Canty lived, which was not far from London Bridge.  The houses were of wood, with the second story projecting over the first, and the third sticking its elbows out beyond the second.  The higher the houses grew, the broader they grew.  They were skeletons of strong criss-cross beams, with solid material between, coated with plaster.  The beams were painted red or blue or black, according to the owner\'s taste, and this gave the houses a very picturesque look.  The windows were small, glazed with little diamond-shaped panes, and they opened outward, on hinges, like doors.\n\nThe house which Tom\'s father lived in was up a foul little pocket called Offal Court, out of Pudding Lane.  It was small, decayed, and rickety, but it was packed full of wretchedly poor families. Canty\'s tribe occupied a room on the third floor.  The mother and father had a sort of bedstead in the corner; but Tom, his grandmother, and his two sisters, Bet and Nan, were not restricted—they had all the floor to themselves, and might sleep where they chose.  There were the remains of a blanket or two, and some bundles of ancient and dirty straw, but these could not rightly be called beds, for they were not organised; they were kicked into a general pile, mornings, and selections made from the mass at night, for service.','the-prince-the-pauper','2015-07-29 17:14:09','2015-07-29 21:06:18'),
	(4,0,'Utwórz kod źródłowy','Powstańcze natarcia na lotnisko bielańskie – nieudana próba opanowania lotniska bielańskiego w Warszawie, podjęta przez żołnierzy Armii Krajowej w pierwszych dniach powstania warszawskiego 1944 roku.\r\n\r\nW powstańczych planach przywiązywano dużą wagę do zdobycia lotniska na Bielanach. Zadanie to mieli wykonać żołnierze VIII Rejonu „Łęgów” Obwodu VII „Obroża”, wsparci przez część sił Obwodu II „Żoliborz”. Mimo znacznego wzmocnienia, jakim było przybycie do Puszczy Kampinoskiej blisko 900 żołnierzy Zgrupowania Stołpecko-Nalibockiego AK, jednostki kampinoskie i żoliborskie były jednak zbyt słabo uzbrojone i nieliczne, aby zdobyć silnie umocnione lotnisko oraz sąsiednie niemieckie punkty oporu. Pierwszy atak, przeprowadzony 1 sierpnia 1944 w godzinie „W”, miał charakter wyłącznie demonstracyjny. Drugi, rozpoczęty wczesnym rankiem 2 sierpnia, został po wielogodzinnej walce odparty z dużymi stratami po stronie polskiej.\r\n\r\nW wyniku tego niepowodzenia oddziały kampinoskie aż do połowy sierpnia 1944 pozostawały niezdolne do prowadzenia poważniejszych działań ofensywnych. Jednocześnie wkrótce po odparciu polskich ataków Niemcy definitywnie zrezygnowali z użytkowania lotniska.','utworz-kod-zrodlowy','2015-07-31 22:27:07','2015-07-31 22:27:07');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `posts_create` BEFORE INSERT ON `posts` FOR EACH ROW SET NEW.created_at = NOW(), NEW.updated_at = NOW() */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `posts_update` BEFORE UPDATE ON `posts` FOR EACH ROW SET NEW.updated_at = NOW(), NEW.created_at = OLD.created_at */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table posts_tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts_tags`;

CREATE TABLE `posts_tags` (
  `post_id` int(11) unsigned NOT NULL DEFAULT '0',
  `tag_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tag_id`,`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `posts_tags` WRITE;
/*!40000 ALTER TABLE `posts_tags` DISABLE KEYS */;

INSERT INTO `posts_tags` (`post_id`, `tag_id`)
VALUES
	(1,1),
	(2,1),
	(4,2),
	(1,3),
	(4,3),
	(2,4);

/*!40000 ALTER TABLE `posts_tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `tag`)
VALUES
	(1,'balls'),
	(3,'judicial branch'),
	(2,'tits'),
	(4,'trippin');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

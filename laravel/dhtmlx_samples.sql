
DROP TABLE IF EXISTS `gantt_links`;
CREATE TABLE `gantt_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
INSERT INTO `gantt_links` VALUES (1,10,11,'3'),(2,10,15,'0'),(3,16,17,'1'),(4,17,19,'1');



DROP TABLE IF EXISTS `gantt_tasks`;
CREATE TABLE `gantt_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `progress` float NOT NULL,
  `sortorder` double NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL,
  `deadline` datetime DEFAULT NULL,
  `planned_start` datetime DEFAULT NULL,
  `planned_end` datetime DEFAULT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
INSERT INTO `gantt_tasks` VALUES (10,'task 1','2010-08-08 00:00:00',4,0.292857,0,0,NULL,NULL,NULL,'2010-08-12 00:00:00'),(11,'Task 1.2','2010-08-03 00:00:00',4,0,0,10,NULL,NULL,NULL,'2010-08-07 00:00:00'),(15,'Task 1.3','2010-08-10 00:00:00',6,0,0,10,NULL,NULL,NULL,'2010-08-15 00:00:00'),(16,'Task 2','2010-08-18 00:00:00',7,0.469388,0,0,NULL,NULL,NULL,'0000-00-00 00:00:00'),(17,'Task 2.1','2010-08-21 00:00:00',5,0.168571,0,16,NULL,NULL,NULL,'2010-08-26 00:00:00'),(19,'Task 2.2','2010-08-20 00:00:00',3,0.652381,0,16,NULL,NULL,NULL,'0000-00-00 00:00:00');


DROP TABLE IF EXISTS `scheduler_events`;
CREATE TABLE `scheduler_events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `details` text,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
INSERT INTO `scheduler_events` VALUES (5,'2010-08-08 05:45:00','2010-08-08 06:45:00','Cross, 4km',NULL),(6,'2010-08-04 12:15:00','2010-08-04 18:25:00','Free time',''),(7,'2010-07-30 10:15:00','2010-07-30 10:20:00','Any',NULL),(8,'2010-07-27 04:45:00','2010-07-27 09:05:00','My event 1',''),(19,'2010-08-10 04:15:00','2010-08-13 05:00:00','My event 2',NULL);
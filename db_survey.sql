# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2018-01-26 19:36:15
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "answered_question"
#

DROP TABLE IF EXISTS `answered_question`;
CREATE TABLE `answered_question` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `answeredSurveyId` varchar(255) DEFAULT NULL,
  `questionId` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "answered_question"
#

INSERT INTO `answered_question` VALUES (5,'2','16','becuase i like'),(6,'2','17','3');

#
# Structure for table "answered_survey"
#

DROP TABLE IF EXISTS `answered_survey`;
CREATE TABLE `answered_survey` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `surveyId` varchar(11) DEFAULT NULL,
  `taker` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "answered_survey"
#

INSERT INTO `answered_survey` VALUES (2,'7','kevin');

#
# Structure for table "question"
#

DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `surveyId` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "question"
#

INSERT INTO `question` VALUES (16,7,'why IT?','open'),(17,7,'rate how you like IT','close');

#
# Structure for table "survey"
#

DROP TABLE IF EXISTS `survey`;
CREATE TABLE `survey` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `creator` varchar(255) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "survey"
#

INSERT INTO `survey` VALUES (7,'Information Tech','appuserk',NULL);

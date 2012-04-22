#
# TABLE STRUCTURE FOR: image
#

DROP TABLE IF EXISTS image;

CREATE TABLE `image` (
  `image_id` int(255) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `titlea` varchar(255) NOT NULL,
  `imagea` varchar(255) NOT NULL,
  `page` int(255) NOT NULL,
  `level` int(255) NOT NULL,
  `language` int(11) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO image (`image_id`, `src`, `type`, `title`, `titlea`, `imagea`, `page`, `level`, `language`, `add_time`) VALUES (27, 'http://localhost/pastletter/static/uploads/iChing_Kouka_(Heads-Coin).gif', 0, '0', '0', 'http://www.greatline.ee', 1, 1, 1, '2012-04-17 17:10:28');


#
# TABLE STRUCTURE FOR: letter
#

DROP TABLE IF EXISTS letter;

CREATE TABLE `letter` (
  `letter_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `is_public` int(11) NOT NULL,
  `content` text NOT NULL,
  `is_sent` int(255) NOT NULL,
  `language` int(11) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`letter_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (3, 'wef', 'everatnight@gmail.com', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:28');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (4, 'wef', 'everatnight@gmail.com', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:29');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (7, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 1, 1, '2012-04-16 16:20:32');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (8, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:32');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (9, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 1, 1, '2012-04-16 16:20:33');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (10, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:34');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (11, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:35');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (12, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:36');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (13, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:37');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (14, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:38');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (15, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:40');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (16, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:40');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (17, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:41');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (18, 'wef', '', '1991', '4', '20', '1', 1, 1, 'fwefewfwef', 0, 1, '2012-04-16 16:20:42');
INSERT INTO letter (`letter_id`, `title`, `email`, `year`, `month`, `day`, `type`, `user_id`, `is_public`, `content`, `is_sent`, `language`, `add_time`) VALUES (19, 'e', '', '3133', '11', '23', '1', 1, 1, 'aaaa', 0, 1, '2012-04-16 17:15:44');


#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (1, 'aaa', '123', 'wef', 1, 1, '2012-04-16 16:19:31');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (2, 'bbb', '123', 'wef', 1, 0, '2012-04-16 16:19:37');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (3, 'aaa', '123', 'wef', 1, 0, '2012-04-16 16:19:39');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (4, 'aaa', '123', 'wef', 1, 0, '2012-04-16 16:19:40');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (5, 'aaa', '123', 'wef', 1, 0, '2012-04-16 16:19:41');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (6, 'aaa', '123', 'wef', 1, 0, '2012-04-16 16:19:41');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (7, 'aaa', '123', 'wef', 1, 0, '2012-04-16 16:19:42');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (8, 'aaa', '123', 'wef', 1, 0, '2012-04-16 16:19:43');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (9, 'aaa', '123', 'wef', 1, 0, '2012-04-16 16:19:44');
INSERT INTO user (`user_id`, `name`, `password`, `email`, `status`, `admin`, `add_time`) VALUES (10, 'aaa', '123', 'wef', 0, 0, '2012-04-16 16:19:45');


#
# TABLE STRUCTURE FOR: user_like
#

DROP TABLE IF EXISTS user_like;

CREATE TABLE `user_like` (
  `user_like_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `letter_id` int(255) NOT NULL,
  PRIMARY KEY (`user_like_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (1, 1, 0);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (2, 1, 1);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (3, 2, 1);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (4, 3, 1);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (5, 4, 1);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (6, 5, 1);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (7, 5, 1);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (8, 7, 1);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (9, 1, 2);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (10, 2, 2);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (11, 3, 2);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (12, 1, 4);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (13, 2, 4);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (14, 1, 6);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (15, 1, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (16, 2, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (17, 3, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (18, 4, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (19, 5, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (20, 6, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (21, 7, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (22, 8, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (23, 9, 7);
INSERT INTO user_like (`user_like_id`, `user_id`, `letter_id`) VALUES (24, 10, 7);



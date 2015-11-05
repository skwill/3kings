CREATE DATABASE ispent;

USE ispent;

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `temp_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` LONGTEXT,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `budget` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `month` varchar(255) NOT NULL DEFAULT '',
  `year` varchar(255) NOT NULL DEFAULT '',
  `income`  numeric(7,2),  
  PRIMARY KEY (`id`),
  FOREIGN KEY (id) REFERENCES user(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` LONGTEXT,
  `amount`  numeric(7,2),  
  PRIMARY KEY (`id`),
  FOREIGN KEY (id) REFERENCES budget(id) ON DELETE CASCADE,
  FOREIGN KEY (id) REFERENCES category(id) ON DELETE CASCADE
) ENGINE=InnoDB;
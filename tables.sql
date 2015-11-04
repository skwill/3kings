CREATE TABLE IF NOT EXISTS `Customers`(
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) DEFAULT '',
	`email` varchar(255) DEFAULT '',
	`phone` varchar(255) DEFAULT '',	
	PRIMARY KEY (id)	
) 	ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Orders`(
	`id` int NOT NULL AUTO_INCREMENT,
	`order` longtext,
	`customer_id` int,
	PRIMARY KEY (id),	
	FOREIGN KEY (customer_id) REFERENCES Customers(id)
) 	ENGINE=InnoDB DEFAULT CHARSET=utf8;
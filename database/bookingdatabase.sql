CREATE DATABASE booking1;
USE booking1;

-- ------------------------------------------
-- Creating user table
-- ------------------------------------------

CREATE TABLE IF NOT EXISTS `create_account` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`mobile` varchar(15) NOT NULL,
    `address` varchar(30) NOT NULL,
	`gender` varchar(6) NOT NULL,
	`role` INT NOT NULL,
	PRIMARY KEY (`id`)
) AUTO_INCREMENT = 2;

  
-- View all records of user table
SELECT * FROM create_account;

-- Inserting data into user table
INSERT INTO create_account VALUES
	(1,'Aviyan Dahal','aviyan@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','9869758616','Kapan','male',1);

-- ------------------------------------------
-- Creating rooms table
-- ------------------------------------------

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `room_no` INT NOT NULL,
  `type` VARCHAR(25) NOT NULL,
  `price` INT NOT NULL,
  `details` LONGTEXT NOT NULL,
  `image` VARCHAR(50) NOT NULL,
  `status` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT = 2 ;
  
-- Inserting data into rooms table
INSERT INTO `rooms` (`id`, `room_no`, `type`, `price`, `details`, `image`, `status`) 
VALUES
('','400','Normal','1500','A suitable room for you and your needs','A.jpg','Open');


  -- View all records of rooms    
SELECT * FROM rooms;

-- ------------------------------------------
-- Creating room_booking_details
-- ------------------------------------------

CREATE TABLE IF NOT EXISTS `room_booking_details` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `room_type` VARCHAR(30) NOT NULL,
   `userid` INT NOT NULL,
   `check_in_date`DATE NOT NULL ,
   `check_in_time` TIME NOT NULL,
   `check_out_date` DATE NOT NULL,
   `occupancy` VARCHAR(10) NOT NULL,
   `status` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userid`) REFERENCES create_account(`id`)
) AUTO_INCREMENT = 2;

-- Inserting data into  booking details table

-- INSERT INTO `room_booking_details` (`id`, `userid`, `room_type`, `check_in_date`, `check_in_time`, `check_out_date`, `occupancy`, `status` ) VALUES
-- (1, 'Astrology');

-- View all records of room booking details table
SELECT * FROM room_booking_details;

-- ------------------------------------------
-- Creating contact table
-- ------------------------------------------

CREATE TABLE IF NOT EXISTS `contact` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `number` INT NOT NULL,
  `message` LONGTEXT NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT = 2;
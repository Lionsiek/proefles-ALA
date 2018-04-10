CREATE TABLE `location`(
   `id` INT(10) NOT NULL AUTO_INCREMENT,
   `name` VARCHAR(40) NOT NULL,
   `adress` VARCHAR(40) NOT NULL,
   `zipcode` VARCHAR(40) NOT NULL,
   `email` VARCHAR(40) NOT NULL,
   `telephone_number` INT(40) NOT NULL,
   `city` VARCHAR(255) NOT NULL,
   `country` VARCHAR(255) NOT NULL,
   `image_url` VARCHAR(255) NOT NULL,


   PRIMARY KEY(`id`)
)engine=InnoDB;

CREATE TABLE `employee`(
   `id` INT(10) NOT NULL AUTO_INCREMENT,
   `first_name` VARCHAR(40) NOT NULL,
   `last_name` VARCHAR(40) NOT NULL,
   `street` VARCHAR(40) NOT NULL,
   `street_number` VARCHAR(5) NOT NULL,
   `city` VARCHAR(40) NOT NULL,
   `country` VARCHAR(40) NOT NULL,
   `city_of_birth` VARCHAR(40)  NOT NULL,
   `country_of_birth` VARCHAR(40)  NOT NULL,
   `email` VARCHAR(40) NOT NULL,
   `gender` ENUM('male', 'female')  NULL,
   `civil_state` ENUM('married', 'single', 'divorced', 'widowed')  NULL,
   `image_url` VARCHAR(255) NOT NULL,
   `station` INT(10) NOT NULL,
   `department` VARCHAR(255) NULL,

   PRIMARY KEY(`id`)
)engine=InnoDB;

CREATE TABLE `customer`(
   `id` INT(10) NOT NULL AUTO_INCREMENT,
   `firstName` VARCHAR(40) NOT NULL,
   `lastName` VARCHAR(40) NOT NULL,
   `email` VARCHAR(40) NOT NULL,
   `gender` ENUM('male', 'female') NOT NULL,
   `date_of_birth` DATE NOT NULL,
   `telephone_number` VARCHAR(40) NOT NULL,

   PRIMARY KEY(`id`)
)engine=InnoDB;

CREATE TABLE `lesson`(
   `id` INT(10) NOT NULL AUTO_INCREMENT,
   `name` VARCHAR(40) NOT NULL,
   `employee` INT(10) NOT NULL,
   `customer_id` INT(10) NOT NULL,
   `date_of_lesson` DATE NOT NULL,
   `lesson_from` TIME NOT NULL,
   `lesson_until` TIME NOT NULL,
   `category` ENUM('Taikwando', ' Kyokushin Karate', 'Kickboks')  NULL,
   `comment` VARCHAR(255) NOT NULL,

   PRIMARY KEY (`id`),
   FOREIGN KEY (customer_id) REFERENCES customer(id),
   FOREIGN KEY (employee) REFERENCES employee(id)
)engine=InnoDB;






CREATE TABLE `appointment`(
   `id` INT(10) NOT NULL AUTO_INCREMENT,
   `name` varchar(40) NOT NULL,
   `location` INT(10) NOT NULL,
   `lesson_id` INT(10) NOT NULL,
   `employee` INT(10)	NOT NULL,
   `customer_id` INT(10) NOT NULL,
   `comment` VARCHAR(80) NULL,
   `status` ENUM('Accepted', 'Awaiting approval', 'Denied') NOT NULL,
   `datepicker` DATE NOT NULL,


   PRIMARY KEY (`id`),
   FOREIGN KEY (location) REFERENCES location(id),
   FOREIGN KEY (employee) REFERENCES employee(id),
   FOREIGN KEY (lesson_id) REFERENCES lesson(id),
   FOREIGN KEY (customer_id) REFERENCES  customer(id)
)engine=InnoDB;

create database contactInfo;

use contactInfo;

create table information
(id int(10) AUTO_INCREMENT,
email varchar(25),
firstName varchar(25),
lastName varchar(25),
phoneNumber varchar(13),
primary key(id));
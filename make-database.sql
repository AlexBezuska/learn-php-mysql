CREATE DATABASE `test`;
USE `examples`;
CREATE TABLE `cars` (
   `id` int UNIQUE NOT NULL,
   `year` varchar(50),
   `make` varchar(40),
   `model` varchar(50),
   PRIMARY KEY(id)
);
INSERT INTO cars VALUES(1,'1993','Toyota', 'Camry');
INSERT INTO cars VALUES(2,'2005','Honda', 'Civic');
INSERT INTO cars VALUES(3,'2007','Scion', 'TC');
INSERT INTO cars VALUES(4,'1984','Volvo', '240');
INSERT INTO cars VALUES(5,'1997','Toyota', 'Avalon');
INSERT INTO cars VALUES(6,'2007','Nissan', 'Versa');
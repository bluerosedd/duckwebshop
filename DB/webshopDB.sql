DROP DATABASE IF EXISTS duckshopDB;
CREATE DATABASE duckshopDB;
USE duckshopDB;

CREATE TABLE company (
companyId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
name varchar(40) NOT NULL, 
phone int NOT NULL,
webpage varchar (30) NOT NULL,
description varchar(255) NOT NULL,
logoPicture varchar(255)
);

CREATE TABLE employees (
employeeId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
firstName varchar (20) NOT NULL, 
lastName varchar (30) NOT NULL,
phone int NOT NULL,
emailAddress varchar (30), 
userName varchar (25) NOT NULL, 
password varchar (60) NOT NULL,
role varchar (20) NOT NULL,
createdDay int, 
createdMonth int,
createdYear int
);

CREATE TABLE news (
newsId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
newsTitle varchar (50) NOT NULL,
description varchar (255) NOT NULL,
createdDay int,
createdMonth int,
createdYear int
);

CREATE TABLE users (
userId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
firstName varchar (30) NOT NULL,
lastName varchar (40) NOT NULL, 
emailAddress varchar (60) NOT NULL, 
birthDay int,
birthMonth int,
birthYear int,
userName varchar (25) NOT NULL,
password varchar (60) NOT NULL,
streetName varchar (40) NOT NULL,
streetNumber int NOT NULL,
city varchar (30) NOT NULL,
zipCode int (10) NOT NULL,
createdDay int ,
createdMonth int,
createdYear int
);

CREATE TABLE categories (
categoryId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
categoryName varchar (40) NOT NULL,
description varchar (255)
);

CREATE TABLE orders (
orderId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
orderStatus varchar (30),
orderPurchase varchar (10),
userId int,
FOREIGN KEY (userId) REFERENCES users (userId)
);

CREATE TABLE products (
productId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
productName varchar (60) NOT NULL,
price decimal(15,2) NOT NULL,
description varchar (255),
productPicture varchar (255) NOT NULL,
isDailySpecialOffer varchar (10),
categoryId int,
FOREIGN KEY (categoryId) REFERENCES categories (categoryId)
);

CREATE TABLE orderDetails (
orderDetailsId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
quantity int NOT NULL,
orderId int,
productId int,
FOREIGN KEY (orderId) REFERENCES orders (orderId),
FOREIGN KEY (productId) REFERENCES products (productId)
);




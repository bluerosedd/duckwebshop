DROP DATABASE IF EXISTS duckshopDB;
CREATE DATABASE duckshopDB;
USE duckshopDB;

CREATE TABLE company (
companyId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
name varchar(40) NOT NULL,
phone int NOT NULL,
webpage varchar (30) NOT NULL,
email varchar (30) NOT NULL,
description varchar(255) NOT NULL,
openingHours varchar(255) NOT NULL,
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
role varchar (30) NOT NULL
);

CREATE TABLE news (
newsId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
newsTitle varchar (50) NOT NULL,
description varchar (255) NOT NULL,
newsPicture varchar (255) NOT NULL,
createdDay int,
createdMonth int,
createdYear int
);

CREATE TABLE users (
userId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
firstName varchar (30) NOT NULL,
lastName varchar (40) NOT NULL,
emailAddress varchar (255) NOT NULL,
birthDay int,
birthMonth int,
birthYear int,
userName varchar (25) NOT NULL,
password varchar (60) NOT NULL,
streetName varchar (40) NOT NULL,
streetNumber int NOT NULL,
city varchar (30) NOT NULL,
zipCode int (10) NOT NULL
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
productName varchar (255) NOT NULL,
code varchar (255) NOT NULL,
price decimal(15,2) NOT NULL,
description varchar (255),
productPicture varchar (255) NOT NULL,
isDailySpecialOffer varchar (10),
categoryId int,
FOREIGN KEY (categoryId) REFERENCES categories (categoryId),
UNIQUE KEY `product_code` (`code`)
) ;

CREATE TABLE orderDetails (
orderDetailsId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
quantity int NOT NULL,
orderId int,
productId int,
FOREIGN KEY (orderId) REFERENCES orders (orderId),
FOREIGN KEY (productId) REFERENCES products (productId)
);


INSERT INTO `company` (`companyId`, `name`, `phone`, `webpage`, `email`, `description`,`openingHours`, `logoPicture`) VALUES
(1, 'Ducky Duckwebshop', 54805606, 'www.patridesign.dk','pd.joergensen@gmail.com', 'hfiaugifuaguof\r\nsdguhsfisdgiusf sdjghsiudfgilauesfglisdiflbslif sdggsdggasdgsagdg','Man 10:00', NULL);
INSERT INTO `employees` (`employeeId`, `firstName`, `lastName`, `phone`, `emailAddress`, `userName`, `password`, `role`) VALUES
(1, 'Patricia', 'Diaz', 53805606, 'pd.joergensen@gmail.com', 'pattifatti', '$2y$15$Q.rE3kqj3kpbH5AiVWP5bebiT5v3FE9ghsjMXT9kLY00ydtemO/I6', 'admin'),
(2, 'Jakob', 'Pettit', 12435, 'j.pettit@gmail.com', 'nocrazyshet', '$2y$15$LrD96zEU1xfo0Sa0smVk..TK.7yU1U7XwriLISbD06xzzXfWb1Loy', 'agadgahg');
INSERT INTO `products` (`productId`, `productName`, `code`, `price`, `description`, `productPicture`, `isDailySpecialOffer`, `categoryId`) VALUES
(1, 'Duck1', '1234edr12', '50.00', 'Beautiful duck ', 'duck1.jpg', NULL, NULL),
(2, 'duck twoo', 'we46gdsw', '25.00', 'eiiiiiii', 'duck2.jpg', NULL, NULL),
(3, 'Hello Duck', 'jajwaj1', '35.00', 'This is a duck', 'duck5.jpg', '66.00', NULL),
(6, 'duck23', '2123332', '100.00', 'Wuakc wuak', 'duck4.jpg', NULL, NULL),
(8, 'eder', 'eder21', '95.00', 'Blue duck chilling in the pool', 'duck2.jpg', NULL, NULL),
(9, 'wwwwwww', '44443', '123.00', 'rrrrrr', 'ru.jpg', NULL, NULL),
(10, 'wwwwww', 'qqqqq', '12.00', '33333', 'ssssssss.PNG', NULL, NULL),
(11, 'wwww', 'qws3459', '125.00', '234rrffff', 'snnnnn.PNG', NULL, NULL),
(12, 'qqqqq', 'iuwrq965', '234.00', '2oiahfoahf', 'WordPress-logotype-wmark.png', NULL, NULL),
(13, 'qqqqqqqqqqq', 'ewrtwetrfgvbc', '236.00', 'wwwwwwwww', 'ru.jpg', NULL, NULL),
(14, 'qqqqlllllll', 'oufkmgbv ', '678.00', 'uytgvuhyj', 'WordPress-logotype-wmark.png', NULL, NULL),
(15, 'wwwwwwwwwww', 'oplthg', '234.00', 'kkkkkkkkkkkkkkkk', '6.PNG', NULL, NULL),
(16, 'www', 'gfhdfs', '456.00', 'nnnnnnnnnn', '6.PNG', NULL, NULL),
(17, 'ghv vjg', 'jrtf6yh45y', '345.00', 'dfgdfbd', 'WordPress.svg.png', NULL, NULL),
(18, 'qqqqqqqqqqqqqqqq', 'jgh79', '345.00', 'q4444444444444444', 'ru.jpg', NULL, NULL),
(19, 'waserdf', '45er6y7', '238.00', 'kmjhngbvf', 'ru.jpg', NULL, NULL);
INSERT INTO `users` (`userId`, `firstName`, `lastName`, `emailAddress`, `birthDay`, `birthMonth`, `birthYear`, `userName`, `password`, `streetName`, `streetNumber`, `city`, `zipCode`) VALUES
(1, 'rata', 'rato', 'ratato@gmail.com', 3, 4, 1993, 'rata', '$2y$15$U1sJXsu/8mmLlYIsM.F1NerPh2C5Y2DqT.tduGCfQesSRtVQ2ZzjG', 'lirio', 6, 'toledo', 45500);


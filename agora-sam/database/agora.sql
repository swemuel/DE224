drop database agora;
create database agora;

use agora;

Drop table listing;
Drop table product;
Drop table orders;
Drop table seller;
Drop table buyer;
Drop table business;

CREATE TABLE Buyer
(
buyerID smallint PRIMARY KEY AUTO_INCREMENT,
firstName varchar(15),
lastName varchar(15),
email varchar(50),
pword varchar(20),
businessID smallint,
foreign key (businessID) references business (businessID)
) engine=innoDB;

CREATE TABLE Business
(
businessID smallint PRIMARY KEY AUTO_INCREMENT,
businessName varchar(15),
email varchar(50),
pword varchar(20)
) engine=innoDB;

CREATE TABLE Seller
(
sellerID smallint PRIMARY KEY AUTO_INCREMENT,
firstName varchar(15),
lastName varchar(15),
email varchar(50),
pword varchar(20),
businessID smallint,
foreign key (businessID) references business (businessID)
)engine=innoDB;

CREATE TABLE Product
(
productID smallint PRIMARY KEY AUTO_INCREMENT,
prodTitle varchar (30),
prodDesc varchar(150),
onHand smallint,
price decimal(6,2),
productImage LONGBLOB
) engine=innoDB;

CREATE TABLE Orders
(
orderNum smallint PRIMARY KEY AUTO_INCREMENT,
listingNum smallint,
buyerID smallint,
Foreign Key (listingNum) references Listing (listingNum),
Foreign Key (buyerID) references Buyer (buyerID)
) engine=innoDB;

CREATE TABLE Listing
(
listingNum smallint not null AUTO_INCREMENT,
productID smallint not null,
sellerID smallint not null,
PRIMARY KEY (listingNum),
Foreign Key (productID) references Product (productID),
Foreign Key (sellerID) references Seller (sellerID)
) engine=innoDB;



load data infile 'D:/Ara/BCDE224/db_data/buyer_data.csv'
into table Buyer
fields terminated by ','
ignore 1 rows;

load data infile 'D:/Ara/BCDE224/db_data/business_data.csv'
into table Business
fields terminated by ','
ignore 1 rows;

load data infile 'D:/Ara/BCDE224/db_data/product_data.csv'
into table Product
fields terminated by ','
ignore 1 rows;

load data infile 'D:/Ara/BCDE224/db_data/seller_data.csv'
into table Seller
fields terminated by ','
ignore 1 rows;

load data infile 'D:/Ara/BCDE224/db_data/order_data.csv'
into table Orders
fields terminated by ','
ignore 1 rows;

load data infile 'D:/Ara/BCDE224/db_data/orderline_data.csv'
into table OrderLine
fields terminated by ','
ignore 1 rows;

select * from OrderLine;

SET SQL_SAFE_UPDATES = 0;
delete from `Product` where `price` between 0 and 1000;
SET SQL_SAFE_UPDATES = 1;

INSERT INTO `Product` (`productID`, `prodTitle`,`prodDesc`, `onHand`, `price`, `productImage`) VALUES
('1000', 'Hammer', 'This is a Hammer', 3, 30.00, '../agora-sam/img/hammer.jpeg' ),
('1101', 'Screwdriver', 'This is a Screwdriver', 3, 15.00, '../agora-sam/img/screwdriver.jfif'),
('1202', 'Nail Gun', 'This is a Nail Gun', 3, 120.00, '../agora-sam/img/nail_gun.jpeg'),
('3100', 'Drill', 'This is a Drill', 3, 180.00, '../agora-sam/img/drill.jpeg'),
('2000', 'Metal Snips', 'This is a Hamster', 3, 60.00, '../agora-sam/img/snips.jpeg'),
('1700', 'Power Riveter', 'This is a Power Riveter', 3, 10.00, '../agora-sam/img/power_riveter.jpeg');
-- LOAD DATA INFILE 'D:/BCDE214/CVS/product.csv' INTO TABLE Product
-- FIELDS TERMINATED BY ','
-- IGNORE 1 ROWS;
SELECT * FROM Product;


CREATE TABLE pizzas (
	pizza varchar(20) NOT NULL,
	price int NOT NULL
);

INSERT INTO pizzas VALUES ('Margherita', 100);
INSERT INTO pizzas VALUES ('Farm House', 200);
INSERT INTO pizzas VALUES ('Peppy Paneer', 200);
INSERT INTO pizzas VALUES ('Mexican Wave', 250);
INSERT INTO pizzas VALUES ('Deluxe Veggie', 150);
INSERT INTO pizzas VALUES ('Veg Extravaganza', 200);
INSERT INTO pizzas VALUES ('CHEESE N CORN', 150);
INSERT INTO pizzas VALUES ('Veggie Paradise', 300);
INSERT INTO pizzas VALUES ('FRESH VEGGIE', 250);
INSERT INTO pizzas VALUES ('Tandoori Paneer', 300);

CREATE TABLE sides (
	side varchar(20) NOT NULL,
	price int NOT NULL
);

INSERT INTO sides VALUES ('Garlic Bread Stix', 50);
INSERT INTO sides VALUES ('Cheesy Momos', 80);
INSERT INTO sides VALUES ('Jalapeno Poppers', 70);
INSERT INTO sides VALUES ('Texas Garlic Dip', 50);
INSERT INTO sides VALUES ('Choco Lava Cake', 80);

CREATE TABLE new_order (
	order_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	customer_name varchar(30),
	phone_number varchar(10),
	address_l1 varchar(50),
	address_l2 varchar(50),
	landmark varchar(20),
	pin_code varchar(6),
	pizza varchar(20),
	size varchar(20),
	side varchar(20),
	extra varchar(100),
	price int
);

COMMIT;
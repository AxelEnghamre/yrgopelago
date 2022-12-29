CREATE TABLE order_items (
	id INT,
	order_id INT,
	name VARCHAR(50),
	amount FLOAT,
	unit VARCHAR(10),
	price FLOAT,
	
	PRIMARY KEY (id),
	FOREIGN KEY (order_id) REFERENCES orders
);
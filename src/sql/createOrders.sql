CREATE TABLE orders (
	id INT,
	user_id INT,
	price FLOAT,
	discount FLOAT,
	total_price FLOAT,
	transfer_code INT,
	

	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);
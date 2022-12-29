CREATE TABLE bookings (
	id INT,
	room VARCHAR(10),
	order_id INT,
	check_in DATE,
	check_out DATE,

	PRIMARY KEY (id),
	FOREIGN Key (order_id) REFERENCES orders(id)
);
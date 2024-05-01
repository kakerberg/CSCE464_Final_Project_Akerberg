create table if not exists Customers(
	customerId int primary key not null auto_increment,
	email varchar(255) not null,
	firstName varchar(255) not null,
	lastName varchar(255) not null,
	phone varchar(255) not null,
	address varchar(255) not null,
	username varchar(255) not null);
drop table if exists usedCars;
drop table if exists newCars;
drop table if exists Customers;
create table if not exists Customers(
	customerId int primary key not null auto_increment,
	email varchar(255) not null,
	firstName varchar(255) not null,
	lastName varchar(255) not null,
	phone varchar(255) not null,
	address varchar(255) not null,
	username varchar(255) not null,
	password varchar(255) not null
);
create table if not exists newCars(
	carId int primary key not null auto_increment,
	modelYear int not null,
	make varchar(255) not null,
	model varchar(255) not null,
	price int not null,
	mileage int not null,
	imagePath varchar(255) not null
);
create table if not exists usedCars(
	carId int primary key not null auto_increment,
	modelYear int not null,
	make varchar(255) not null,
	model varchar(255) not null,
	price int not null,
	mileage int not null,
	imagePath varchar(255) not null
);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Volkswagen",
		"Arteon",
		55000,
		255,
		"../images/arteon.jpg"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Chevrolet",
		"Camaro",
		45000,
		7,
		"../images/camaro_new.jpg"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Chrysler",
		"Pacifica",
		52000,
		90,
		"../images/pacifica.jpg"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Nissan",
		"Z NISMO",
		65000,
		3,
		"../images/nissan_z.jpg"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Rolls-Royce",
		"Dawn",
		720000,
		6,
		"../images/rolls.jpg"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Cadillac",
		"Escalade",
		95000,
		55,
		"../images/escalade.avif"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"BMW",
		"X7",
		90000,
		44,
		"../images/x7.jpg"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Honda",
		"Pilot",
		53000,
		6,
		"../images/pilot.webp"
	);
insert into newCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values (
		2024,
		"Volkswagen",
		"Atlas",
		54000,
		91,
		"../images/atlas.png"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		1993,
		"BMW",
		"750iL",
		11000,
		95443,
		"../images/750il.jpg"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		1970,
		"Chevrolet",
		"Chevelle",
		66000,
		14332,
		"../images/chevelle.avif"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		1991,
		"Toyota",
		"Previa",
		9000,
		155221,
		"../images/previa.jpg"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		1999,
		"Cadillac",
		"Escalade",
		8500,
		112231,
		"../images/old_escalade.jpg"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		1988,
		"Chevrolet",
		"Camaro",
		30000,
		33120,
		"../images/iroc.webp"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		1996,
		"Lincoln",
		"Town Car",
		4000,
		97320,
		"../images/town_car.jpg"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		2007,
		"Volvo",
		"S80",
		17000,
		66932,
		"../images/s80.jpg"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		2008,
		"Mercedes-Benz",
		"SL550",
		21000,
		43001,
		"../images/sl550.jpeg"
	);
insert into usedCars(
		modelYear,
		make,
		model,
		price,
		mileage,
		imagePath
	)
values(
		2000,
		"BMW",
		"X5",
		7500,
		88221,
		"../images/x5.jpg"
	);
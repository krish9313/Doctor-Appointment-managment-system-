Create database damsdatabase;

create table bookappoint
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	Name varchar(100),
	Email varchar(150),
	Telephone bigint(20) DEFAULT NULL,
	BDate datetime,
	specialization varchar(100),
	Doctor varchar(100),
	message varchar(250),
	app_date datetime,
	us_app_cancel varchar(50),
	do_app_cancel varchar(50),
	CONSTRAINT check_us_cancel check(us_app_cancel in("Waiting","Cancel")),
	CONSTRAINT check_doc_cancel check(do_app_cancel in("Pending","Approve","Cancel"))
);

ALTER TABLE bookappoint AUTO_INCREMENT = 4210120;

create table Doctor_Regi
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	f_nm varchar(100),
	l_nm varchar(100),
	username varchar(100),
	password varchar(100),
	Email varchar(100),
	mobile bigint(20) DEFAULT NULL,
	speciality varchar(100),
	gender varchar(50),
	state varchar(50),
	city varchar(50),
	message varchar(200)
);


create table doc_approve
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	f_nm varchar(100),
	l_nm varchar(100),
	username varchar(100),
	password varchar(100),
	Email varchar(100),
	mobile bigint(20) DEFAULT NULL,
	speciality varchar(100),
	gender varchar(50),
	state varchar(50),
	city varchar(50),
	message varchar(200),
	status varchar(10),
	CONSTRAINT check_status check(status in("Approved","Rejected"))
);


create table doc_rejected
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	f_nm varchar(100),
	l_nm varchar(100),
	username varchar(100),
	password varchar(100),
	Email varchar(100),
	mobile bigint(20) DEFAULT NULL,
	speciality varchar(100),
	gender varchar(50),
	state varchar(50),
	city varchar(50),
	message varchar(200),
	status varchar(10),
	CONSTRAINT check_status check(status in("Approved","Rejected"))
);




create table user
(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	username varchar(100),
	password varchar(100),
	speciality varchar(100)
);


create table CSV
(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	username varchar(100),
	password varchar(100),
	speciality varchar(100)
);

INSERT INTO user(username,password,speciality)VALUES('admin','admin','admin');
INSERT INTO user(username,password,speciality)VALUES('anuj11','anuj','ENT');
INSERT INTO user(username,password,speciality)VALUES('vivek44','vivek','General Surgery');

create table Doc_Spe
(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	speciality varchar(100),
	Doctor varchar(100),
	StartT time,
	EndT time
);



-- insert into doc_spe(speciality,Doctor,StartT,EndT) values('ENT','Dr. Anuj Sharma','8:00:00','14:00:00');
-- insert into doc_spe(speciality,Doctor,StartT,EndT) values('Orthopedics','Dr. Niraj Trivedi','9:00:00','12:00:00');
-- insert into doc_spe(speciality,Doctor,StartT,EndT) values('Pathalogy','Dr. Rakesh Khanna','8:00:00','12:00:00');
-- insert into doc_spe(speciality,Doctor,StartT,EndT) values('General Surgery','Dr. Vivek Mistry','10:00:00','13:00:00');



-- insert into user values('anujsharma@gmail.com','anuj#23!');
-- insert into user values('nirajtrivedi@gmail.com','niraj#12!');
-- insert into user values('rakeshkhanna@gmail.com','rakesh#44!');
-- insert into user values('priyankachopra@gmail.com','priyanka#55!');
-- insert into user values('admin123@gmail.com','admin123');

-- ALTER TABLE bookappoint AUTO_INCREMENT = 4210123;

-- ALTER TABLE Doctor_Regi
-- ADD status varchar(10);

-- ALTER TABLE doc_rejected
-- ADD CONSTRAINT check_status check(status in("Approved","Rejected"));


-- ALTER TABLE doc_approve
-- ADD CONSTRAINT check_status check(status in("Approved","Rejected"));

-- ALTER TABLE bookappoint
-- ADD app_date datetime;


-- ALTER TABLE bookappoint
-- ADD app_time time;


-- update bookappoint set app_date='pending' AND app_time='pending';




-- ALTER TABLE bookappoint
-- ADD us_app_cancel varchar(50);

-- ALTER TABLE bookappoint
-- ADD do_app_cancel varchar(50);

-- ALTER TABLE bookappoint
-- ADD CONSTRAINT check_us_cancel check(us_app_cancel in("Waiting","Cancel"));


-- ALTER TABLE bookappoint
-- ADD CONSTRAINT check_doc_cancel check(do_app_cancel in("Pending","Approve","Cancel"));


-- update bookappoint set us_app_cancel='Waiting';	
-- update bookappoint set do_app_cancel='Pending';



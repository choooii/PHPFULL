CREATE TABLE student (
	student_no INT PRIMARY KEY
	,student_name VARCHAR(20) NOT NULL
	,student_birth DATE NOT NULL
	,student_addr VARCHAR(100) NOT NULL
	,student_phone CHAR(11)	NOT NULL
	,student_gender ENUM('1', '2') NOT NULL
	,student_ent DATE	NOT NULL
	,student_grad DATE NOT NULL
	,student_status ENUM('1', '2', '3') NOT NULL
);


CREATE TABLE professor (
	pro_no INT PRIMARY KEY
	,pro_name VARCHAR(30) NOT NULL
	,pro_degree_no	VARCHAR(30)	NOT NULL
	,pro_email VARCHAR(50) NOT NULL
	,pro_title VARCHAR(20) NOT NULL
	,pro_hire_date	DATE NOT NULL
	,pro_room CHAR(3)	NOT NULL
	,pro_gender	ENUM('1', '2')	NOT NULL
	,pro_birth DATE NOT NULL
);


CREATE TABLE subject (
	sub_no INT PRIMARY KEY
	,sub_name VARCHAR(200) NOT NULL
	,pro_no INT NOT NULL
	,sub_personnel	INT NOT NULL
	,sub_semester ENUM('1', '2') NOT NULL
	,sub_room CHAR(3)	NOT NULL
	,sub_start_time TIME	NOT NULL
	,sub_end_time TIME NOT NULL
	,book_no	INT NOT NULL
	,sub_essential ENUM('1') NULL
);

CREATE TABLE grade (
	student_no INT
	,sub_no INT
	,sub_score INT NOT NULL
	,sub_rank INT NOT NULL
	,sub_date DATE NOT NULL
	,CONSTRAINT PRIMARY KEY(student_no, sub_no)
);


CREATE TABLE textbook (
	book_no INT PRIMARY KEY
	,book_name VARCHAR(200) NOT NULL
);
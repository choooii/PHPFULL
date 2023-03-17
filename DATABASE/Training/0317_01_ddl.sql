-- employees 데이터베이스 안의 테이블 만들기
CREATE TABLE employees (
	emp_no INT(11)
	,birth_date DATE NOT NULL
	,first_name VARCHAR(14) NOT NULL
	,last_name VARCHAR(16) NOT NULL
	,gender ENUM('M','F')
	,hire_date DATE NOT NULL
	,CONSTRAINT PK_test_emp_no PRIMARY KEY(emp_no)
);


CREATE TABLE salaries (
	emp_no INT(11)
	,salary INT(11) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT PK_test_sal PRIMARY KEY(emp_no, from_date)
	,CONSTRAINT FK_test FOREIGN KEY(emp_no)
		REFERENCES employees(emp_no)
);


CREATE TABLE titles (
	emp_no INT(11)
	,title VARCHAR(50) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT PK_test_ti PRIMARY KEY(emp_no, title, from_date)
	,CONSTRAINT FK_test_ti FOREIGN KEY(emp_no)
		REFERENCES employees(emp_no)
);

CREATE INDEX emp_no on salaries (emp_no);

CREATE INDEX emp_no on titles (emp_no);


-- 추가
CREATE TABLE departments (
	dept_no CHAR(4)
	,dept_name VARCHAR(40)
	,CONSTRAINT PK_test_dep PRIMARY KEY(dept_no)
);

CREATE INDEX dept_name on departments (dept_name);

CREATE TABLE dept_emp (
	emp_no INT(11)
	,dept_no CHAR(4) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT PK_test_dept PRIMARY KEY(emp_no, dept_no)
	,CONSTRAINT FK_test_dept_emp FOREIGN KEY(emp_no)
		REFERENCES employees(emp_no)
	,CONSTRAINT FK_test_dept_no FOREIGN KEY(dept_no)
		REFERENCES departments(dept_no)
);

CREATE INDEX dept_no ON dept_emp(dept_no);
CREATE INDEX emp_no ON dept_emp(emp_no);


CREATE TABLE dept_manager (
	dept_no CHAR(4)
	,emp_no INT(11)
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT PK_test_deptm PRIMARY KEY(emp_no, dept_no)
	,CONSTRAINT FK_test_deptm_emp FOREIGN KEY(emp_no)
		REFERENCES employees(emp_no)
	,CONSTRAINT FK_test_deptm_dept FOREIGN KEY(dept_no)
		REFERENCES departments(dept_no)
);

CREATE INDEX emp_no ON dept_manager(emp_no);
CREATE INDEX dept_no ON dept_manager(dept_no);

ALTER TABLE departments
ADD CONSTRAINT dept_name UNIQUE (dept_name);


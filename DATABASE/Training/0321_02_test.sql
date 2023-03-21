-- 12
SELECT 
	emp_no
	,birth_date
	,CONCAT(last_name, ' ', first_name)
	,gender
FROM employees;


-- 13
SELECT MAX(salary)
FROM salaries
WHERE to_date = DATE(99990101);


-- 14
SELECT AVG(salary)
FROM salaries
WHERE to_date = DATE(99990101);


-- 15
INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
	,sup_no
)
VALUES(
	500001
	,DATE(19961025)
	,'Aran'
	,'Choe'
	,'F'
	,DATE(20230228)
	,110420
);

SELECT *
FROM employees
WHERE emp_no = 500001;

-- 16
UPDATE employees
SET last_name = 'test'
WHERE emp_no = 500001;

UPDATE employees
SET birth_date = DATE(19900301)
WHERE emp_no = 500001;

-- 17
DELETE FROM employees
WHERE emp_no = 500001;

-- 18
SELECT emp.birth_date, ti.title
FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
WHERE emp.emp_no = 10001
AND ti.to_date = DATE(99990101);

-- 19
CREATE TABLE test1 (
	col_no INT PRIMARY KEY
	,mem_no INT
	,id VARCHAR(30) NOT NULL
	,CONSTRAINT test_unique_mem_no UNIQUE (mem_no)
);

-- 20
CREATE INDEX idx_test1 ON test1(mem_no);

-- 21
DROP TABLE test1;

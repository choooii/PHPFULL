INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES 
(
	500001
	,NOW()
	,'Aran'
	,'Choe'
	,'F'
	,NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500000;



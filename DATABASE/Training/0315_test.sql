-- 1. 사원 정보 테이블에 각자의 정보를 적절하게 넣어주세요.
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
	,DATE(19961025)
	,'Aran'
	,'Choe'
	,'F'
	,DATE(20230228)
);

SELECT *
FROM employees
WHERE emp_no = 500001;


-- 2. 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣어주세요.
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES 
(
	500001
	,71046
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM salaries
WHERE emp_no = 500001;


INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES 
(
	500001
	,'Staff'
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM titles
WHERE emp_no = 500001;

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES 
(
	500001
	,'d006'
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM dept_emp
WHERE emp_no = 500001;

-- 3. 짝꿍의 [1, 2] 정보도 넣어주세요.
-- [1]
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
	500002
	,DATE(19960315)
	,'JH'
	,'O'
	,'M'
	,DATE(20230228)
);

SELECT *
FROM employees
WHERE emp_no = 500002;

-- [2]
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES 
(
	500002
	,70000
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM salaries
WHERE emp_no = 500002;


INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES 
(
	500002
	,'Staff'
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM titles
WHERE emp_no = 500002;

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES 
(
	500002
	,'d003'
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM dept_emp
WHERE emp_no = 500002;


-- 4. 나와 짝꿍의 소속 부서를 d009로 변경해주세요.
INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES 
(
	500001
	,'d009'
	,DATE(20230315)
	,DATE(99990101)
);

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES 
(
	500002
	,'d009'
	,DATE(20230315)
	,DATE(99990101)
);

UPDATE dept_emp
SET to_date = DATE(20230315)
WHERE emp_no = 500001 AND dept_no = 'd006';

UPDATE dept_emp
SET to_date = DATE(20230315)
WHERE emp_no = 500002 AND dept_no = 'd003';

SELECT *
FROM dept_emp
WHERE emp_no = 500001 
OR emp_no = 500002;


-- 5. 짝꿍의 모든 정보 삭제
DELETE FROM employees
WHERE emp_no = 500002;

DELETE FROM salaries
WHERE emp_no = 500002;

DELETE FROM titles
WHERE emp_no = 500002;

DELETE FROM dept_emp
WHERE emp_no = 500002;


-- 6. 'd009'부서의 관리자를 나로 변경해주세요.
UPDATE dept_manager
SET to_date = DATE(20230228)
WHERE dept_no = 'd009'
AND to_date = DATE(99990101);

SELECT *
FROM dept_manager
WHERE emp_no = 111939;

INSERT INTO dept_manager (
	dept_no
	,emp_no
	,from_date
	,to_date
)
VALUES 
(
	'd009'
	,500001
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM dept_manager
WHERE dept_no = 'd009';


-- 7. 오늘 날짜부로 나의 직책을 'senior engineer'로 변경해주세요.
INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES 
(
	500001
	,'Senior Engineer'
	,DATE(20230315)
	,DATE(99990101)
);

UPDATE titles
SET to_date = DATE(20230314)
WHERE emp_no = 500001
AND title = 'Staff';

UPDATE titles
SET to_date = DATE(99990101)
WHERE emp_no = 500001
AND title = 'Senior Engineer';

SELECT *
FROM titles
WHERE emp_no = 500001;


-- 8. 최고 연봉 사원과 최저 연봉 사원의 사번과 이름을 출력해주세요.
SELECT emp_no
FROM salaries
ORDER BY salary
LIMIT 1;

SELECT *
FROM salaries
ORDER BY salary DESC
LIMIT 1;

SELECT emp_no AS '사번', first_name AS '이름'
FROM employees
WHERE emp_no = ( SELECT emp_no
						FROM salaries
						ORDER BY salary
						LIMIT 1
						)
	OR emp_no = ( SELECT emp_no
						FROM salaries
						ORDER BY salary DESC
						LIMIT 1
						);

SELECT emp_no, first_name
FROM employees
WHERE emp_no IN ( 
						SELECT emp_no
						FROM salaries
						WHERE salary = (SELECT MAX(salary) FROM salaries)
						OR salary = (SELECT MIN(salary) FROM salaries)
					);

-- 최저
SELECT emp_no, first_name
FROM employees
WHERE emp_no = ( SELECT emp_no
						FROM salaries
						ORDER BY salary
						LIMIT 1
						);

SELECT emp_no, first_name
FROM employees
WHERE emp_no = ( 
						SELECT emp_no
						FROM salaries
						WHERE salary = (
												SELECT MIN(salary)
												FROM salaries
												WHERE to_date = DATE(99990101)
											)
					);

-- 최고
SELECT emp_no AS '사번', first_name AS '이름'
FROM employees
WHERE emp_no = ( SELECT emp_no
						FROM salaries
						ORDER BY salary DESC
						LIMIT 1
						);


SELECT emp_no, first_name
FROM employees
WHERE emp_no = ( 
						SELECT emp_no
						FROM salaries
						WHERE salary = (
												SELECT max(salary)
												FROM salaries
												WHERE to_date = DATE(99990101)
											)
					);
										
SELECT emp_no
FROM salaries
WHERE salary = (
						SELECT max(salary)
						FROM salaries
						WHERE to_date = DATE(99990101)
					);

SELECT max(salary)
FROM salaries
WHERE to_date = DATE(99990101);


-- 9. 전체 사원의 평균 연봉을 출력해주세요.
SELECT AVG(salary) AS '전체사원 평균 연봉'
FROM salaries
WHERE to_date = DATE(99990101);


-- 10. 사번이 449,975인 사원의 지금까지 평균 연봉을 출력해주세요.
SELECT AVG(salary)
FROM salaries
WHERE emp_no = 449975;

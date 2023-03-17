SELECT *
FROM employees
WHERE emp_no <= 10003
	OR emp_no >= 10005;

SELECT *
FROM employees
WHERE emp_no BETWEEN 10003 AND 10005;

SELECT *
FROM employees
WHERE emp_no IN(10001, 10005);

-- LIKE: 문자 조회
SELECT *
FROM employees
WHERE first_name LIKE('___m');


-- DISTINCT : 중복 레코드 삭제
SELECT DISTINCT emp_no
FROM dept_emp;


-- LIMIT: 불러오는 레코드 숫자 제한
SELECT *
FROM employees
LIMIT 10 OFFSET 4;


-- ORDER BY: 정렬
SELECT *
FROM employees
ORDER BY first_name DESC;


-- 검색한 레코드 수 집계 함수
SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;


-- 평균 집계 함수
SELECT AVG(salary)
FROM salaries;


-- 최대값 집계 함수
SELECT MAX(salary)
FROM salaries;

-- 최솟값 집계 함수
SELECT MIN(salary)
FROM salaries;


-- 그룹으로 묶어서 조회
-- GROUP BY 칼럼명 [HAVING 집계함수 조건]
SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 100000;


-- 서브쿼리(Subquery): 쿼리 안에 또다른 쿼리가 있는 형태
SELECT *
FROM dept_manager
WHERE dept_no = (
						SELECT dept_no 
						FROM dept_manager
						WHERE emp_no = 110344
					);


-- 서브쿼리 앞에 '= ANY' 혹은 'IN'을 삽입하면 결과값 포함 모든 데이터 조회
SELECT *
FROM dept_manager
WHERE emp_no = ANY (
						SELECT emp_no 
						FROM dept_manager
						WHERE dept_no = 'd009'
					);


-- date 타입의 속성 비교 방법
SELECT *, NOW()
FROM titles
WHERE emp_no = 10009
	AND to_date >= NOW();
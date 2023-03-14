-- 직책 테이블의 모든 정보
SELECT *
FROM titles;


-- 급여가 60,000이하 상원 사번
SELECT emp_no
FROM salaries
WHERE salary <= 60000;


-- 급여가 60,000에서 70,000인 사원의 사번
SELECT emp_no
FROM salaries
WHERE salary >= 60000
  AND salary <= 70000;


-- 사원번호가 10001, 10005인 사원의 모든 정보 조회
SELECT *
FROM employees
WHERE emp_no = 10001
	OR emp_no = 10005;


-- 직급명에 Engineer가 포함된 사원의 사번과 직급
SELECT emp_no, title
FROM titles
WHERE title LIKE ('%engineer%');


-- 사원 이름을 오름차순으로 정렬 조회
SELECT *
FROM employees
ORDER BY first_name, last_name;


-- 사원별 급여의 평균
SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no;


-- 사원별 급여의 평균이 30,000 ~ 50,000인 사원번호와 평균급여  조회
SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no 
HAVING avg_s >= 30000 
AND avg_s <= 50000;


-- 사원별 급여 평균이 70,000이상인 사원의 사번, 이름, 성, 성별
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no IN (
					  SELECT emp_no
					  FROM salaries
					  GROUP BY emp_no
					  HAVING AVG(salary) >= 70000
					 );
					
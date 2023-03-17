-- 1. 사원의 사원번호, 풀네임, 직책명을 출력해주세요
SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name), ti.title
FROM employees emp
		INNER JOIN titles ti
			ON emp.emp_no = ti.emp_no
WHERE ti.to_date = DATE(99990101);


-- 2. 사원의 사원번호, 성별, 현재 월급을 출력해주세요.
SELECT emp.emp_no, emp.gender, sal.salary
FROM salaries sal
		INNER JOIN employees emp
			ON sal.emp_no = emp.emp_no
WHERE sal.to_date = DATE(99990101);


-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해주세요.
SELECT CONCAT(emp.first_name, ' ', emp.last_name), sal.salary
FROM salaries sal
		INNER JOIN employees emp
			ON sal.emp_no = emp.emp_no
WHERE emp.emp_no = 10010;


-- 4. 사원의 사원번호, 풀네임, 소속부서명을 출력해주세요.
SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name), dep_n.dept_name
FROM employees emp
		INNER JOIN dept_emp dep
			ON emp.emp_no = dep.emp_no
		INNER JOIN departments dep_n
			ON dep.dept_no = dep_n.dept_no
WHERE dep.to_date = DATE(99990101)
ORDER BY emp.emp_no;


-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해주세요.
-- 5-1. limit 사용
SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name), sal.salary
FROM employees emp
		INNER JOIN salaries sal
			ON emp.emp_no = sal.emp_no
WHERE sal.to_date = DATE(99990101)
ORDER BY sal.salary DESC
LIMIT 10;

-- 5-2. rank 사용
SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name), sal.salary
FROM employees emp
INNER JOIN (SELECT emp_no, salary, RANK() OVER (ORDER BY salary DESC) AS rk
				FROM salaries
				WHERE to_date = DATE(99990101)
				) sal
	ON emp.emp_no = sal.emp_no
WHERE sal.rk <= 10
ORDER BY sal.rk;


-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해주세요.
SELECT dep.dept_name, CONCAT(emp.first_name, ' ', emp.last_name), emp.hire_date
FROM dept_manager dept_m
	INNER JOIN employees emp
		ON dept_m.emp_no = emp.emp_no
	INNER JOIN departments dep
		ON dept_m.dept_no = dep.dept_no
WHERE dept_m.to_date = DATE(99990101);


-- 7. 현재 직책이 'Staff'인 사원의 현재 평균 월급을 출력해주세요.
SELECT AVG(sal.salary)
FROM titles ti
	INNER JOIN salaries sal
		ON ti.emp_no = sal.emp_no
WHERE ti.to_date = DATE(99990101)
AND sal.to_date = DATE(99990101)
AND ti.title = 'Staff';


-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해주세요.
SELECT CONCAT(emp.first_name, ' ', emp.last_name), emp.hire_date, emp.emp_no, dep_m.dept_no
FROM dept_manager dep_m
		INNER JOIN employees emp
			ON dep_m.emp_no = emp.emp_no;
			
SELECT emp_no, COUNT(*)
FROM employees
GROUP BY emp_no
HAVING COUNT(*) > 1 ;


-- 9. 현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로  출력해주세요.
SELECT ti.title, TRUNCATE(AVG(sal.salary), 0) avg_sal
FROM salaries sal
	INNER JOIN titles ti
		ON sal.emp_no = ti.emp_no
WHERE ti.to_date = DATE(99990101)
	AND sal.to_date = DATE(99990101)
GROUP BY ti.title HAVING avg_sal >= 60000
ORDER BY avg_sal DESC;


-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력해주세요.
SELECT ti.title, COUNT(*)
FROM employees emp
	INNER JOIN titles ti
			ON emp.emp_no = ti.emp_no
WHERE emp.gender = 'F'
	AND ti.to_date = DATE(99990101)
GROUP BY ti.title;

SELECT COUNT(*)
FROM employees emp
		INNER JOIN titles ti
			ON emp.emp_no = ti.emp_no
WHERE emp.gender = 'F'
	AND ti.to_date = DATE(99990101)
AND ti.title = 'manager';


-- 11. 직급별 퇴사한 여자 사원수
SELECT ti.title, COUNT(*)
FROM employees emp
	INNER JOIN (
		SELECT emp_no, title
		FROM titles
		GROUP BY emp_no
		HAVING MAX(to_date) != DATE(99990101)
		) ti
	ON emp.emp_no = ti.emp_no
WHERE emp.gender = 'f'
GROUP BY ti. title;

SELECT emp_no, title
FROM titles
GROUP BY emp_no
HAVING MAX(to_date) != DATE(99990101);
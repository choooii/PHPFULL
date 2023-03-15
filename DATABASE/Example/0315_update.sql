-- UPDATE의 기본구조
-- UPDATE 테이블명
-- SET 컬럼명1=값1, 컬럼명2=값2
-- WHERE 조건
--  * 실수를 방지하기 위해 WHERE절을 먼저 작성하고 SET절을 작성하는 것을 추천

UPDATE departments
SET dept_name = '1000'
WHERE dept_no = 'd001';

UPDATE employees
SET birth_date = DATE(19961025), first_name = 'Ara', last_name = 'Choi'
WHERE emp_no = 500000;

SELECT *
FROM employees
WHERE emp_no = 500000;
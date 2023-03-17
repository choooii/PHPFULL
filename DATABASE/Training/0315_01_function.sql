-- 직책이 'Senior Engineer'일 경우는 "관리자" 그외는 "팀원"으로 CASE구문 작성하고,
-- 사번과 CASE구문 분기결과 출력.

SELECT
	emp_no AS '사번'
	,CASE title 
		WHEN 'Senior Engineer' THEN '관리자'
		ELSE '팀원'
	END AS 'k_title'
FROM titles;
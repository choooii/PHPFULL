-- 1. 데이터 형식 변환 함수
-- ** 둘 다 같은 기능을 함
-- CAST(값 AS 데이터형식)
-- CONVERT(값, 데이터형식)
SELECT CAST( 1234 AS CHAR(4) );
SELECT CONVERT( 1234, CHAR(4) );


-- 2. 제어 흐름 함수
-- IF(수식, 참일 경우 결과, 거짓일 경우 결과) : 수식이 참 또는 거짓일 경우에 따라 결과 값 출력
SELECT IF( 1 < 2, '참' , '거짓');
SELECT emp_no, IF(emp_no = 10001, first_name, birth_date)
FROM employees;


-- IFNULL(수식1, 수식2): 수식이 NULL일 경우 수식2, 아니면 수식1 반환
SELECT IFNULL( NULL, 'AA' );
SELECT IFNULL( '123', 'AA' );
SELECT IFNULL( ' ', 'AA' );


-- NULLIF(수식1, 수식2): 수식1=수식2면 NULL, 아니면 수식1 반환
SELECT NULLIF(1 ,2);
SELECT NULLIF(1 ,1);


-- CASE ~ WHEN ~ ELSE ~ END : 다중 분기를 위해 사용
-- CASE 체크하려는 수식1
-- 	WHEN 분기수식1  THEN 결과1
-- 	WHEN 분기수식2  THEN 결과2
-- 	WHEN 분기수식3  THEN 결과3
-- 	ELSE 결과4
-- END

SELECT
	emp_no
	,gender 
	,CASE gender
		WHEN 'M' THEN '남자'
		WHEN 'F' THEN '여자'
		ELSE ' '
	END
FROM employees LIMIT 10;
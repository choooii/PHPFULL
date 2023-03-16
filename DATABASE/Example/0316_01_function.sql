-- 3. 문자열 함수
-- 	CONCAT(문자열1, 문자열2, ...) : 문자열을 이어줍니다.
SELECT CONCAT('안녕하세요. ', '좋은 아침입니다.');

SELECT CONCAT(last_name,' ', first_name) 
FROM employees
WHERE emp_no = 500000;

-- 	CONCAT_WS(구분자, 문자열1, 문자열2, ...) : 문자열 사이에 구분자를 넣어 이어줍니다.
SELECT CONCAT_WS('/', 'a', 'b', 'c');

-- 	FORMAT(숫자, 소숫점 자릿수) : 숫자에 ','를 넣어주고, 소수점 자릿수 까지 표현합니다.
SELECT FORMAT(123456, 1);

-- 	LEFT(문자열, 길이) : 문자열을 왼쪽부터 길이만큼 잘라 반환합니다.
SELECT LEFT('abcdefg', 3);

-- 	RIGHT(문자열, 길이) : 문자열을 오른쪽부터 길이만큼 잘라 반환합니다.
SELECT RIGHT('abcdefg', 3);

-- 	UPPER(문자열) : 소문자를 대문자로 변경합니다.
SELECT UPPER('abc');

-- 	LOWER(문자열) : 대문자를 소문자로 변경합니다.
SELECT LOWER('AaBbC');

-- 	LPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 왼쪽에 넣습니다.
SELECT LPAD('abc', 5, '@');

-- 	RPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 오른쪽에 넣습니다.
SELECT RPAD('abc', 5, '@');

-- 	TRIM(문자열) : 좌우 공백을 제거합니다.
SELECT TRIM('    AB  C ');

-- 	LTRIM(문자열) : 왼쪽 공백을 제거합니다.
SELECT LTRIM('    AB  C ');

-- 	RTRIM(문자열) : 오른쪽 공백을 제거합니다.
SELECT RTRIM('    AB  C ');

-- 	TRIM(방향 문자열1 FROM 문자열2) : 방향을 지정해 문자열2에서 문자열1을 제거합니다.
-- 		** 방향을 LEADING(좌), BOTH(좌우), TRAILING(우) **
SELECT TRIM(LEADING 'abc' FROM 'abcdef');
SELECT TRIM(TRAILING 'abc' FROM 'abcdefabc');
SELECT TRIM(BOTH 'abc' FROM 'abcdefabc');

-- 	SUBSTRING(문자열, 시작위치, 길이) : 문자열을 시작위치에서 길이만큼 잘라서 반환합니다.
SELECT SUBSTRING('abcdef', 1, 4);

-- 	SUBSTRING_INDEX(문자열, 구분자, 횟수) : 왼쪽부터 구분자가 횟수 번째가 나오면 그 이후부터 버립니다.
SELECT SUBSTRING_INDEX('ab.cd.ef.gh', '.', 2);


-- 4. 수학 함수
-- 	CEILING(숫자) : 올림합니다.
SELECT CEILING(1.1);

-- 	FLOOR(숫자) : 내림합니다.
SELECT FLOOR(1.9);

-- 	ROUND(숫자) : 반올림합니다.
SELECT ROUND(1.9);
SELECT ROUND(1.4);
SELECT ROUND(1.5);

-- 	TRUNCATE(숫자, 정수) : 소수점 기준으로 정수위치 까지 구하고 나머지는 버립니다.
SELECT TRUNCATE(1.111, 4);


-- 5. 날짜 및 시간 함수
-- 	NOW() : 현재 날짜/시간을 구합니다. (YYYY-MM-DD HH:MM:DD)
SELECT NOW();
SELECT DATE(NOW());

-- 	ADDDATE(날짜1, INTERVAL 날짜2) : 날짜1에서 날짜2를 더한 날짜를 구합니다.
SELECT ADDDATE(NOW(), INTERVAL 1 DAY);
SELECT ADDDATE(NOW(), INTERVAL -1 DAY);

-- 	SUBDATE(날짜1, INTERVAL 날짜2) : 날짜1에서 날짜2를 뺀 날짜를 구합니다.
SELECT SUBDATE(NOW(), INTERVAL 1 DAY);
SELECT SUBDATE(NOW(), INTERVAL -1 DAY);

-- 	ADDTIME(날짜/시간, 시간) : 날짜/시간에서 시간를 더한 날짜/시간를 구합니다.
SELECT ADDTIME(NOW(), '-1:1:1');

-- 	SUBTIME(날짜/시간, 시간) : 날짜/시간에서 시간를 뺀 날짜/시간를 구합니다.
SELECT SUBTIME(NOW(), '1:1:1');


-- 6. 순위 함수
-- 	RANK() OVER(ORDER BY 속성명 DESC/ASC) : 순위를 매깁니다.
SELECT emp_no, salary, RANK() OVER(ORDER BY salary ASC)
FROM salaries;

-- 	ROW_NUMBER() OVER(ORDER BY 속성명 DESC/ASC) : 레코드에 순위를 매깁니다.
SELECT emp_no, salary, ROW_NUMBER() OVER(ORDER BY salary ASC)
FROM salaries;

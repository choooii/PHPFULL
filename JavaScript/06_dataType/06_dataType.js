// ------------------
// 기본 데이터 타입
// ------------------
// 1. 숫자 (number)
let num = 1;


// 2. 문자열 (string)
let str = "안녕";


// 3. 불리언 (boolean)
let bool = true;


// 4. null
let test1 = null;


// 5. undefined
let test2;


// 6. 심볼 (symbol)
const S_CONST = Symbol("심볼입니다.");



// ------------------
// 객체 타입 (JSON)
// ------------------
let obj1 = {
    u_name: "홍길동"
    ,u_age: 30
    ,u_gender: "남자"
    ,test: function() {
        console.log("객체 함수 test")
    }
    ,addr: {
        addr1: "대구"
        ,addr2: "중구"
    }
}

// obj1.u_name;   // 홍길동
// obj1.u_age;   // 30
// obj1.u_gender;   // 남자


// 배열 (Array)
// js에서는 인덱스 배열만 있음
let arr = [ "탕수육", "짜장면", "짬뽕" ];

// arr[0]  // 탕수육
// arr[1]  // 짜장면
// arr[2]  // 짬뽕
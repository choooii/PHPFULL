// ---------------
// 변수
// ---------------
// var: 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";  // 변수 선언
// var u_name = "갑순이";  // 중복 선언
// u_name = "갑돌이"; // 재할당
// console.log( u_name ); // 변수 출력

// // let: 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// // let u_age = 30;  중복 선언 불가능
// u_age = 30; // 재할당

// // 상수
// // const : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// const u_gender = "남자";
// u_gender = "여자"; 상수로 선언했기 때문에 값이 변하지 않음


// ---------------
// 스코프
// ---------------
// 전역 스코프
let u_name = "홍길동";

// 함수 레벨 스코프
function test() {
    console.log(u_name);
    let u_age = 30;
    console.log(u_age);
}

// 블록 레벨 스코프
function test1() {
    if(true) {
        let v_test1 = "함수 테스트1";  // 중괄호{} 안에서만 사용 가능
        var v_var1 = "var로 선언";
    }
    
    // console.log(v_test1);
    console.log(v_var1);
}


// -------------------
// 호이스팅 (hoisting)
// -------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수가 최상단에 끌어 올려지는 것
console.log( hTest() );
console.log( "54 line : " + varTest );
console.log( "55 line : " + letTest );

function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";
console.log( "62 line : " + varTest );


let letTest = "let 변수";
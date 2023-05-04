// DATE
const NOW = new Date('2023-04-30 15:30:30:123');


// getFullYear() : 연도를 가져오는 메소드
console.log( '연: ' + NOW.getFullYear() ); // 2023

// getMonth() : 월을 가져오는 메소드(0~11 반환)
console.log( '월 : ' + ( NOW.getMonth() + 1 ) );  //+1을 해야 현재 월과 일치함

// getDate() : 날짜를 가져오는 메소드
console.log( '일 : ' + NOW.getDate() );

// getDay() : 요일을 가져오느 메소드 ( 일요일 = 0 ~ 토요일 = 6 )
console.log( '요일 : ' + NOW.getDay() );

// getTime() : 1970/01/01 기준으로 얼마가 지났는지 밀리초를 반환
console.log( '시간(Linux) : ' + NOW.getTime() );

// getHours() : 시간을 가져오는 메소드
console.log( '시 : ' + NOW.getHours() );

// getMinutes() : 분을 가져오는 메소드
console.log( '분 : ' + NOW.getMinutes() );

// getSeconds() : 초를 가져오는 메소드
console.log( '초 : ' + NOW.getSeconds() );

// getMilliseconds() : 밀리초를 가져오는 메소드
console.log( '밀리초 : ' + NOW.getMilliseconds() );


// 기준일 : 2022년 9월 30일 19시 20분 10초
// 몇일 전인지 출력
const SETDATE = new Date('2022-09-30 19:20:10');
const TODAY = new Date();

let setDateTime = SETDATE.getTime();
let todayTime = TODAY.getTime();
let dateDiff = Math.ceil( ( todayTime - setDateTime ) / ( 24 * 60 * 60 * 1000 ) );

console.log( dateDiff + '일');
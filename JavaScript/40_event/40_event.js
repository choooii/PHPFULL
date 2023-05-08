// 1. 인라인 이벤트 등록
// html 파일 13행 참고
// onclick


// 2. 프로퍼티 리스너
const btn1 = document.querySelector("#btn1");
btn1.onclick = function() {
    location.href = "http://www.google.com";
}

// 3. addEventListener(eventType, function) 방식
const btn2 = document.querySelector('#btn2');
// const btn2 = document.getElementById('btn2');

// 현재창에서 열기
// btn2.addEventListener('click', () => {
//     location.href = "http://www.daum.net";
// });

// 팝업으로 열기
let newWindow = null;
btn2.addEventListener('click', () => {
    newWindow = open( 'http://www.daum.net','', 'width=500 height=500' );
});

// 팝업창 닫기
const btn3 = document.querySelector('#btn3');
// btn3.addEventListener('click', popUpClose(newWindow));

// 이벤트 삭제
// removeEventListener(eventType, function)
// addEventLsitener()로 등록한 이벤트의 인자와 같은 인자를 세팅해야 함
// btn3.removeEventListener('click', popUpClose(newWindow));

// function popUpClose(win) {
//     win.close();
// };


// 이벤트 타입
// 1. 마우스 이벤트
//  - mousedown
const div1 = document.getElementById("div1");
// div1.addEventListener('mousedown', () => alert('div1 클릭'));
//  - mouseenter
// div1.addEventListener('mouseenter', () => alert('div1 진입'));
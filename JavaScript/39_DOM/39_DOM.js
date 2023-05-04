// 1. 요소를 선택하는 방법
//  1-1. ID로 선택하는 방법
//      document.getElementById();
const title = document.getElementById('title');
title.style.color = 'blue';

//  1-2. 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');
li[1].style.color = 'yellow';
li[2].style.color = 'red';

// for (let i = 0; i < li.length; i++) {
//     if( i % 2 === 0 ) {
//         li[i].style.background = 'beige';
//     } else {
//         li[i].style.background = 'orange';
//     }
// }

// for ( let i = 0; i < li.length; i+= 2 ) {
//     li[i].style.background = 'orange';
//     li[i + 1].style.background = 'beige';
// }

//  1-3. 클래스명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName( 'none-li' );


//  1-4. CSS 선택자로 요소를 선택하는 방법
// querySelector() : 복수의 요소가 있다면 가장 첫번째 것만 선택
const title2 = document.querySelector( '#title' );
const li2 = document.querySelector( '.none-li' );

// querySelectorAll() : 모든 요소 선택
const li3 = document.querySelectorAll( '.none-li' );


// 2. 요소 조작하기
//  2-1. 텍스트 추가
//  textContent : 순수 텍스트 데이터를 전달, 이전의 태그는 모두 제거
title.textContent = "<span>변경</span>"; // '<span>변경</span>'

// innerHTML : 태그는 태그로 인식하여 전달, 이전의 태그는 모두 제거
title.innerHTML = '<span>변경</span>'; // <span>변경</span>

const div1 = document.querySelector( '#div1' );
div1.innerHTML = '이너로 넣었어요.';

//  2-2. 요소의 속성을 추가
const it = document.getElementById( 'it' );
// it.setAttribute( 'placeholder', '셋어트리뷰트로 삽입' );

const aa = document.getElementById('aa');
aa.setAttribute('href', 'http://www.naver.com');

//  3-2. 요소의 속성을 제거
it.removeAttribute( 'placeholder' );
// aa.removeAttribute( 'href' );

//  3-4. 요소의 스타일링
//  인라인 스타일
// aa.style.textDecoration = 'none'; 

//  클래스로 스타일 추가
aa.classList.add('aa1', 'aa2', 'aa3');

//  3-5. 새로운 요소 만들기
//  요소 만들기
const cli = document.createElement('li');
cli.innerHTML = '야끼우동';

// 요소를 자식 요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild( cli );

// 요소를 특정 위치에 삽입
const zzam = li[2];
ul[0].insertBefore( cli, zzam );

// 삽입한 해당 요소를 지우는 방법
// cli.remove();

// 예제 
// 1. 라조기와 깐풍기 사이에 '잡채밥', '동파육' 추가
const job = document.createElement('li');
job.innerHTML = '잡채밥';

const dong = document.createElement('li');
dong.innerHTML = '동파육';

const ggan = document.querySelector('li:nth-child(7)');

ul[0].insertBefore( job, ggan );
ul[0].insertBefore( dong, ggan );

// 2. 배경색 다시 넣기
for (let i = 0; i < li.length; i++) {
    if( i % 2 === 0 ) {
        li[i].style.background = 'beige';
    } else {
        li[i].style.background = 'orange';
    }
}
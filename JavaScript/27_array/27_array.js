let arr = [1, 2, 3, 4, 5];

// push() method : 배열에 값 추가
arr.push(6);


// delete : 배열의 값 삭제(index는 남아 있음)
delete arr[5]; // [1, 2, 3, 4, 5, empty]


// splice() method : 배열의 요소를 삭제 또는 교체
arr = [1, 2, 3, 4, 5];
arr.splice(2, 1); // 배열에서 arr[2] 삭제
arr.splice(2, 0, 3); // 배열에서 arr[2] 뒤 값이 3인 인덱스 추가
arr.splice(2, 1, 3); // 배열에서 arr[2] 값 3으로 변경
arr.splice(2, 1, 3, 5, 6, 7); // 3번째 매개변수부터는 가변파라미터로 모든 값을 추가


// indexOf() method : 배열에서 특정 요소의 위치를 찾는데 사용
let arr2 = [1, 2, 3, 4, 5];
arr2.indexOf(3);  // 2


// lastIndexOf() method : 배열에서 가장 마지막 위치인 특정요소의 위치를 찾는데 사용
arr2 = [1, 2, 3, 4, 3, 5, 6, 6, 1];
arr2.lastIndexOf(6); // 7

// slice() method : 특정 위치에서 특정 위치까지의 요소를 복사하여 반환
let tt = "abcdefg";
// 참고: https://gent.tistory.com/414


// concat() method : 배열들의 값을 기존 배열에 합쳐서 새 배열 반환
let arrCon1 = [1, 2, 3];
let arrCon2 = [10, 20, 30];
let arrCon3 = arrCon1.concat( arrCon2 );  // [1, 2, 3, 10, 20, 30]


// includes() method : 배열이 특정 요소를 가지고 있는지 판별
let arrInc = [1, 2, 3, 4];
console.log( arrInc.includes( 2 ) );  // true
console.log( arrInc.includes( 7 ) );  // false


// sort() method : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrSort = [ 4, 6, 2, 88, 100, 3, 50 ];
arrSort.sort(); // [100, 2, 3, 4, 50, 6, 88]
arrSort.sort( ( a, b ) => a - b );  // 오름차순 정렬
arrSort.sort( ( a, b ) => b - a );  // 내림차순 정렬


// join() method : 배열의 모든 요소를 연결해서 하나의 문자열로 만들어줌
const arrJoin = ["안녕", "하세", "요"];
console.log(arrJoin.join());  // 안녕,하세,요
console.log(arrJoin.join(""));  // 안녕하세요
console.log(arrJoin.join("/"));  // 안녕/하세/요


// every() method : 배열의 모든 요소들이 주어진 함수를 통과하는지 판별
const arrEvery = [1, 2, 3, 4, 5];
let result = arrEvery.every( function( val ) {
    return val <= 5;
} );

let result2 = arrEvery.every( val => val <= 5 );


// some() method : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome = [1, 2, 3, 4, 5];
let resultSome = arrSome.some( val => val >= 5 );
console.log( resultSome );  // true


// filter() method : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, 5];
let resultFilter = arrFilter.filter( val => val >= 3 );
console.log( resultFilter ); // [3, 4, 5]


// 예제1 '.'으로 문자열 잘라서 반환
let fileName = 'javaScript.log.php';
let first = fileName.indexOf( '.' );
let last = fileName.lastIndexOf( '.' );

fileName.slice( 0, first );
fileName.slice( first + 1, last);
fileName.slice( last + 1 );


// 예제2 모든 요소를 2로 나눈 나머지가 0인지 판별해주세요.
let result3 = arrEvery.every( val => val % 2 === 0 );
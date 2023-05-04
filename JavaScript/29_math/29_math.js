console.log( Math.ceil( 3.33 ) );  // 4
console.log( Math.round( 3.5 ) );  // 4
console.log( Math.floor( 3.8 ) );  // 3

// random() : 0이상 1미만의 실수를 랜덤으로 가져옴
console.log( Math.random() );  

// 0~1 사이의 자연수를 랜덤으로 가져옴
console.log( Math.round( Math.random() ) ); 

// 1~10 사이의 자연수를 랜덤으로 가져옴
let ran = Math.random();
console.log( Math.floor( ran  * 5 ) + 1 );


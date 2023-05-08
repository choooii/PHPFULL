// 타이머 함수

// 1. setTimeout() / clearTimeout()
const timeOut = setTimeout(() => console.log('A'), 2000); // 2초 후에 'A'가 나옴
clearTimeout(timeOut);

// 2. setInterval() / clearInterval()
const myInterval = setInterval(() => console.log('A'), 1000);
clearInterval(myInterval);

// 1~5를 1초마다 콘솔에 출력
let i = 1;

// 1.
// const interval = setInterval(() => {
//     console.log(i);
//     if( i++ === 5 ){
//         clearInterval(interval);
//     }
// }, 1000);

// 2. 
// const interval = setInterval(() => console.log(i++), 1000);
// setInterval(() => clearInterval(interval), 5000);


function timeChange() {
    const time = document.querySelector('#time');
    const NOW = new Date();
    const hour = ('00' + NOW.getHours()).slice(-2);
    const min = ('00' + NOW.getHours()).slice(-2);
    const sec = ('00' + NOW.getSeconds()).slice(-2);
    const ampm = hour < 12 ? '오전' : '오후';
    const nowTime = ampm + ' ' + hour + ':' + min + ':' + sec;
    time.innerHTML = nowTime;
}
timeChange();
const setting = setInterval(() => timeChange(), 1000);

const btn1 = document.querySelector('#btn1');
btn1.addEventListener('click', () => clearInterval(setting));
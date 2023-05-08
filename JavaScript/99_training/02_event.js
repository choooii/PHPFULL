
// 1. 버튼을 클릭시 아래 내용의 알러트가 나옵니다.
// "안녕하세요."
// "숨어있는 div를 찾아보세요."
let ran1 = Math.random();
let ranNum1 = Math.floor( ran1  * 650 ) + 1;
let ran2 = Math.random();
let ranNum2 = Math.floor( ran2  * 1700 ) + 1;

window.onload = function(){
    div1.style.marginTop = ranNum1 + 'px';
    div1.style.marginLeft = ranNum2 + 'px';
};

const btn1 = document.querySelector('#btn1');
btn1.addEventListener('click', () => alert('안녕하세요.\n숨어있는 div를 찾아보세요.'));

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다.
    // "두근두근"
const div1 = document.querySelector('#div1');
div1.addEventListener('mouseenter', function(){
    if(div1.style.background == ''){
        alert('두근두근')
    }
});


// 3. 2번의 영역을 클릭하면 아래의 알러트를 출력하고, 배경색이 베이지 색으로 바뀌어 나타납니다.
// "들켰다!"
// 4. 3번의 상태에서 다시 한번 더 클릭하면 아래의 알러트를 출력하고
// 배경색이 흰색으로 바뀌어 안보이게 됩니다.
// "다시 숨는다"
function randColor() {
    const r = Math.floor( Math.random() * 256 );
    const g = Math.floor( Math.random() * 256 );
    const b = Math.floor( Math.random() * 256 );
    return 'rgb(' + r + ', ' + g + ', ' + b + ')';
}

let color = randColor();
div1.addEventListener('click', function(){
    if(div1.style.background === color){
        let ran3 = Math.random();
        let ranNum3 = Math.floor( ran3  * 650 ) + 1;
        let ran4 = Math.random();
        let ranNum4 = Math.floor( ran4  * 1700 ) + 1;
        div1.style.background = '';
        div1.style.marginTop = ranNum3 + 'px';
        div1.style.marginLeft = ranNum4 + 'px';
        alert('다시 숨는다')
        color = randColor();
    } else {
        alert('들켰다!')
        div1.style.background = color;
    }
})

// setTimeout(() => {
//     console.log('A');
// }, 3000);

// setTimeout(() => {
//     console.log('B');
// }, 2000);

// setTimeout(() => {
//     console.log('C');
// }, 1000);


// 1. 콜백함수를 이용해서 A B C 순서로 콘솔에 출력
// setTimeout(() => {
//     console.log('A');
//     setTimeout(() => {
//         console.log('B');
//         setTimeout(() => {
//             console.log('C');
//         }, 1000);
//     }, 2000);
// }, 3000);

// 2. promise를 이용해서 A B C 수서로 콜솔에 출력
//    ( Promise를 함수로 등록해서 구현 )
const set = {
    setA() {
        return new Promise((resolve) => {
            setTimeout(() => {
                console.log('A');
                resolve();
            }, 3000);
        })
    }
    ,setB() {
        return new Promise((resolve) => {
            setTimeout(() => {
                console.log('B');
                resolve();
            }, 2000);
        })
    }
    ,setC() {
        return new Promise((resolve) => {
            setTimeout(() => {
                console.log('C');
                resolve();
            }, 1000);
        })
    }
}

set.setA()
.then(set.setB)
.then(set.setC)
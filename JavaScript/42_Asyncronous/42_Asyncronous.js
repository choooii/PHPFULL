// 비동기 처리 방식
// console.log('A');
// setTimeout(() => {
//     console.log('B')
// }, 1000);
// console.log('C');
// // 결과: A C B

// const a = 2;
// const b = 3;
// const sum = function () {
//     setTimeout(() => {
//         return a + b;
//     }, 1000);
// }
// console.log(sum());
// 결과: undefined


// 비동기 처리에서의 콜백 지옥(callback hell)
// setTimeout(() => {
//     console.log('a');
//     setTimeout(() => {
//         console.log('b');
//         setTimeout(() => {
//             console.log('c');
//         }, 1000);
//     }, 2000);
// }, 3000);
// 결과: a b c


// 로그인 콜백 지옥
// const login = {
//     chkInput(id, pw, success, error) {
//         setTimeout(() => {
//             if(id !== '' && pw !== '') {
//                 success({chkId: id, chkPw: pw});
//             } else {
//                 error(new Error('잘못 입력 하셨습니다.'));
//             }
//         }, 500);
//     }
//     , loginUser(id, pw, success, error) {
//         setTimeout(() => {
//             if(id === 'php506' && pw === '506') {
//                 success(id);
//             } else {
//                 error(new Error('없는 유저입니다.'));
//             }
//         }, 500);
//     }
//     , chkAuth(id, success, error) {
//         setTimeout(() => {
//             if(id === 'php506') {
//                 success({authId: id, auth: 'admin'});
//             } else {
//                 error(new Error('권한이 없습니다.'));
//             }
//         }, 500);
//     }
// }

// const id = 'php506';
// const pw = '506';

// login.chkInput(
//     id
//     ,pw
//     ,chkData => {
//         login.loginUser(
//             chkData.chkId
//             ,chkData.chkPw
//             ,loginId => {
//                 loginId
//                 ,authData => { console.log(`${authData.authId}유저님, 권한은 ${authData.auth}입니다.`) }
//                 ,authError => { console.log(authError.message); }
//             }
//             ,loginError => { console.log(loginError.message); }
//         )
//     }
//     ,chkError => { console.log(chkError.message); }
//     );


// 콜백 함수
function myCallBack(i) {
    return i + 1;
}

function printNum(fn) {
    console.log(fn(4));
}

printNum(myCallBack);
import { createStore } from "vuex";
import axios from 'axios'

const store = createStore({
    state() {
        return {
            boardData: [], // 게시글 데이터
            lastId: '', // 가장 마지막에 로드된 게시글 id
            moreFlg: true,
            tabFlg: 0, // 탭 ui flg (0: 메인, 1:필터, 2: 작성)
            imgUrl: '', // 이미지 url
            filterClass: '', // 필터 클래스
            content: '', // 글 내용
            ImgFile: null,
        }
    },
    mutations: { // 일반적인 js 함수 정의
        // 초기 데이터 셋팅용
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length - 1].id)
        },
        // 더보기 데이터 세팃용
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id)
        },
        // lastId 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // tabFlg 변경
        chageTabFlg(state, num) {
            state.tabFlg = num;
        },
        // imgUrl 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },

        chageFilterClass(state, filter) {
            state.filterClass = filter;
        },

        clearState(state) {
            state.filterClass = '';
            state.imgUrl = '';
            state.null = '';
        },

        changeContent(state, content) {
            state.content = content;
        },

        changeImgFile(state, ImgFile) {
            state.ImgFile = ImgFile;
        },

        uploadBoardData(state, uploadBoard) {
            state.boardData.unshift(uploadBoard);
        },
    },
    actions: { // 비동기, ajax 처리 정의
        // 메인 게시글 습득
        getMainList(context) { // context -> store를 가리킴
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                // console.log(res.data);
                context.commit('createBoardData', res.data);
            })
            .catch( err => {
                console.log(err);
            })
        },

        // 게시글 추가 습득
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data) {
                    context.commit('addBoardData', res.data)
                    if (context.state.lastId === 1) {
                        context.state.moreFlg = false;
                    }
                }
            })
            .catch( err => {
                console.log(err);
            })
        },

        // 게시글 작성
        writeContent(context) {
            let content = document.getElementById('content');

            const data = {
                name: '최아란',
                filter: context.state.filterClass,
                img: context.state.ImgFile,
                content: content.value,
            }

            // console.log(data);

            const header = {
                headers: {
                    'Content-Type' : 'multipart/form-data'
                }
            }

            axios.post('http://192.168.0.66/api/boards', data, header)
            .then(res => {
                if (res.data) {
                    console.log(res.data)
                    context.commit('clearState')
                    context.commit('uploadBoardData', res.data)
                    context.commit('chageTabFlg', 0)
                    // location.reload();
                }
            })
            .catch(err => {
                console.log(err);
            })
        }
    },
})

export default store
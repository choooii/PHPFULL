<template>
    <div>
        <div>
            <h2>투두 리스트</h2>
        </div>
        <input type="text" autofocus placeholder="내용을 입력하세요." id="content">
        <button type="button" @click="insertList()">등록</button>
    </div>
</template>
<script>
// import axios from 'axios';

export default {
    name: 'inputComponent',
    data() { 
        return {
            content : '',
        }
    },
    methods: {
        insertList() {
            let content = document.getElementById('content').value;

            const data = {
                item: {
                    content: content
                }
            }

            const header = {
                headers: {
                    'Content-Type' : 'application/json'
                }
            }

            axios.post('/api/items', data, header)
            .then(res => {
                if (res.data) {
                    location.reload();
                }
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
}
</script>
<style>
    
</style>
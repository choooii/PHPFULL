<template>
    <div>
        <div v-for="item in list" :key="item">
            <button type="button" @click="checkList(item.id, item.completed)">체크</button>
            <span v-if="item.completed === true">
                <span class="back">{{ item.content }}</span>
            </span>
            <span v-else>
                <span>{{ item.content }}</span>
            </span>
            <button type="button" @click="deleteList(item.id)">삭제</button>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: 'inputComponent',
    data() { 
        return {
            list : [],
        }
    },
    created() {
        this.getList();
    },
    methods: {
        getList() {
            axios.get('/api/items')
            .then(res => {
                // console.log(res.data);
                this.list = res.data;
            })
            .catch( err => {
                console.log(err);
            })
        },

        checkList(listId, boolean) {
            const id = listId;

            const data = {
                item: {
                    completed: !boolean
                }
            }

            const header = {
                headers: {
                    'Content-Type' : 'application/json'
                }
            }

            axios.put('/api/items/' + id, data, header)
            .then(res => {
                if (res.data) {
                    console.log(res.data)
                    location.reload();
                }
            })
            .catch(err => {
                console.log(err);
            })
        },

        deleteList(listId) {
            const id = listId;

            axios.delete('/api/items/' + id)
            .then(res => {
                if (res.data) {
                    // console.log(res.data)
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
    .back {
        text-decoration: line-through;
    }
</style>
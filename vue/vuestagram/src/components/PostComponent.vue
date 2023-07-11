<template>
    <!-- {{ $store.state.boardData }} -->
    <div class="post" v-for="(item, i) in $store.state.boardData" :key="i">
        <div class="post-img" :style="{ backgroundImage : `url(${item.img})`}"></div>
        <div class="post-content">
            <p> 좋아요 {{ item.likes }}</p>
            <p><strong>{{ item.name }}</strong> {{ item.content }}</p>
            <p>{{ item.created_at }}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PostComponent',
    data() {
        return {
        }
    },
}
</script>
<style>
    
</style>
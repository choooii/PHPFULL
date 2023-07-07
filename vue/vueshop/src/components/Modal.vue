<template>
    <div class="bg-black" v-if="modalFlg">
        <div class="bg-white">
            <img :src="products[productNum].img">
            <h4>{{products[productNum].name}}</h4>
            <p>{{products[productNum].content}}</p>
            <p>{{products[productNum].price * products[productNum].count}}원</p>
            
            <div class="cntBtn">
                <span v-if="products[productNum].count === 1">
                <button>-</button>
                </span>
                <span v-else-if="products[productNum].count > 1">
                <button @click="$emit('countDown')">-</button>
                </span>
                <span>{{products[productNum].count}}</span>
                <button @click="$emit('countUp')">+</button>
            </div>
            
            <button @click="$emit('closeModal')">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Modal',
    props: {
        modalFlg: Boolean,
        products: Array,
        productNum: Number,
    }
}
</script>
<style>
    
</style>
<template>
    <div class="bg-black" v-if="modalFlg">
        <div class="bg-white">
            <img :src="products[productNum].img">
            <h4>{{products[productNum].name}}</h4>
            <p>{{products[productNum].content}}</p>
            <p>{{products[productNum].price * modalCount}}원</p>
            <input type="number" v-model="modalCount" min="1">
            <!-- <div class="cntBtn">
                <span v-if="products[productNum].count === 1">
                    <button>-</button>
                </span>
                <span v-else-if="products[productNum].count > 1">
                    <button @click="$emit('countDown')">-</button>
                </span>
                <span>{{products[productNum].count}}</span>
                <button @click="$emit('countUp')">+</button>
            </div> -->
            <br>
            <br>
            <button @click="$emit('closeModal'); modalCount = 1">닫기</button>
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
    },
    data() {
        return {
            modalCount: 1,
        }
    },
    watch: {
        modalCount(input) { 
            if(input >= 10) {
                alert('10개까지만 구매가능합니다.');
                this.modalCount = '1';
            }
        }
    },
}
</script>
<style>
    
</style>
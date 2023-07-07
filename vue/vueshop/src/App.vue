<template>
  <Navi :navList="navList"/>
  <ProductList 
    :product="product"
    @openModal="modalFlg = true; productNum=i"
    v-for="(product, i) in products" :key="i"
  />
  <Modal 
    :modalFlg="modalFlg"
    :products="products"
    :productNum="productNum"
    @closeModal="modalFlg = false"
    @countUp="products[productNum].count++"
    @countDown="products[productNum].count--"
  />

  <!-- 모달 -->
  <!-- <div class="bg-black" v-if="modalFlg">
    <div class="bg-white">
      <img :src="products[productNum].img">
      <h4>{{ products[productNum].name }}</h4>
      <p>{{ products[productNum].price * products[productNum].count }}원</p>
      <p>{{ products[productNum].content }}</p>
      
      <div class="cntBtn">
        <span v-if="products[productNum].count > 1">
          <button v-on:click="products[productNum].count--">-</button>
        </span>
        <span v-else-if="products[productNum].count === 1">
          <button>-</button>
        </span>
          <span>{{ products[productNum].count }}</span>
          <button @click="products[productNum].count++">+</button>
      </div>
      
      <button @click="modalFlg = false;">닫기</button>
    </div>
  </div> -->
</template>

<script>
import data from './assets/js/data.js';
import Navi from './components/Navi.vue';
import ProductList from './components/ProductList.vue';
import Modal from './components/Modal.vue';

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      products: data,
      modalFlg: false,
      productNum: 0,
      navList: ['홈', '상품', '기타', '양말'],

      product1: '양말',
      price1: '3800원',
      product2: '바지',
      price2: '5000원',
      styleR: 'color:red'
    }
  },
  methods: { // 함수를 설정하는 영역
    plus(i) {
      this.products[i].count++;
    },

    sub(i) {
      this.products[i].count--;
    },

    openModal(i) {
      this.modalFlg = true;
      this.productNum = i;
    },

  },
  components: { // 컴포넌트 정의
    Navi: Navi,
    ProductList: ProductList,
    Modal: Modal,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

img {
  width: 400px;
}

.cntBtn {
  margin: 1.33em 0
}

@import url('./assets/css/app.css');
</style>

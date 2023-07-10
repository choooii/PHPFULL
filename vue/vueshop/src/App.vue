<template>
  <Navi :navList="navList"/>

  <div class="discount">
    <p>🤐지금 당장 구매하시면, {{ number }}% 할인😬</p>
  </div>
  <br>
  <br>

  <!-- v-modal 테스트 -->
  <!-- <input type="text" @input="inputTest = $event.target.value"> -->
  <!-- <input type="text" v-model="inputTest">
  <br>
  <br>
  <span>{{ inputTest }}</span> -->

  <ProductList 
    :product="product"
    @openModal="modalFlg = true; productNum=i"
    v-for="(product, i) in products" :key="i"
  />
  <!-- <div class="startTransition" :class="{endTransition : modalFlg}"> -->
    <transition name="modalTransition">
      <Modal 
        :modalFlg="modalFlg"
        :products="products"
        :productNum="productNum"
        @closeModal="modalFlg = false;"
        ref="modalCom"
        />
    </transition>
  <!-- </div> -->
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
      inputTest: '',
      number: 20,

      product1: '양말',
      price1: '3800원',
      product2: '바지',
      price2: '5000원',
      styleR: 'color:red',
    }
  },
  mounted() {
    let interval = setInterval(() => {
      this.number--
      if( this.number === 0 ){
          clearInterval(interval);
      }
    }, 1000);
  },
  watch: {
    inputTest(input) { // 검증하고자 하는 데이터명으로 함수명을 만듦
      if (input == 3) {
        alert('3333');
        this.inputTest = '';
      }
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

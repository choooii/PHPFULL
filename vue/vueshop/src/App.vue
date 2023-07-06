<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- <div>
    <h4>{{product1}}</h4>
    <p>{{price1}}</p>
  </div>
  <div>
    <h4 :style="styleR">{{product2}}</h4>
    <p>{{price2}}</p>
  </div> -->

  <div v-for="(item, i) in products" :key="i">
    <h4>{{ item.name }}</h4>
    <p>{{ item.price }}</p>
  </div>
</template>

<script>

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      products: [
        {name: '티셔츠', price: '3800원'},
        {name: '바지', price: '5000원'},
        {name: '점퍼', price: '6000원'},
      ],
      product1: '양말',
      price1: '3800원',
      product2: '바지',
      price2: '5000원',
      styleR: 'color:red'
    }
  },
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
</style>

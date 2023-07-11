<template>
  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li 
        class="header-button header-button-left"
        v-if="$store.state.tabFlg !== 0"
        @click="$store.commit('chageTabFlg', 0); $store.commit('clearState');"
      >취소</li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li 
        class="header-button header-button-right"
        v-if="$store.state.tabFlg === 1"
        @click="$store.commit('chageTabFlg', 2)"
      >다음</li>
    </ul>
  </div>

  <!-- 컨텐츠 -->
  <ContainerComponent />

  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store" v-if="$store.state.tabFlg === 0">
      <label for="file" class="label-store">+</label>
      <input 
        @change="updateImg" 
        accept="image/*" type="file" id="file" class="input-file"
      >
    </div>
  </div>

</template>

<script>
import ContainerComponent from './components/ContainerComponent.vue';

export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList'); // store의 액션 함수에 접근
  },
  components: {
    ContainerComponent,
  },
  methods: {
    updateImg(e) {
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl', imgUrl)
      this.$store.commit('chageTabFlg', 1)
    }
  }
}
</script>

<style>
@import url('./assets/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

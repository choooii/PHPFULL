<template>
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg === 0">
        <PostComponent />
        <button @click="$store.dispatch('getMoreList')" v-if="$store.state.moreFlg">더보기</button>
        <br><br>
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg === 1">
        <div class="upload-img" :class="$store.state.filterClass" :style="{ backgroundImage : `url(${$store.state.imgUrl})`}"></div>
        <div class="filter-box">
            <div class="filter" v-for="item in filterList" :key="item" :class="item" 
                :style="{ backgroundImage : `url(${$store.state.imgUrl})`}"
                @click="$store.commit('chageFilterClass', item)"
            >
                {{ item }}
            </div>
        </div>
    </div>

    <!-- 글 작성 -->
    <div v-if="$store.state.tabFlg === 2">
        <div class="upload-img" :class="$store.state.filterClass" :style="{ backgroundImage : `url(${$store.state.imgUrl})`}"></div>
        <div>
            <textarea class="write-box" name="content" id="content" placeholder="글 입력" @input="$store.commit('changeContent', $event.target.value)"></textarea>
            <!-- inupt 이벤트보다 dom 사용하는 편이 리소스 관리 측면에서 더 좋음 -->
        </div>
    </div>
</template>

<script>
import PostComponent from './PostComponent.vue';

export default {
    name: 'ContainerComponent',
    data() {
        return {
            filterList: ["aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },
    components: {
        PostComponent,
    }
}
</script>

<style>
    
</style>
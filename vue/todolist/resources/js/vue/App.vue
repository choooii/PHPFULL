<template>
    <div>
    </div>

    <inputComponent />
    <todoComponent />
</template>
<script>
import inputComponent from './components/inputComponent.vue';
import todoComponent from './components/todoComponent.vue';

export default {
    name: 'App',
    components: {
        inputComponent,
        todoComponent,
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
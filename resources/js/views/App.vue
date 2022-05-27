<template>
    <div>
        <HeaderPost />
        <router-view></router-view>
    </div>
</template>

<script>
import HeaderPost from '../components/HeaderPost.vue';
import MainPost from '../components/MainPost.vue';

export default {
    name: 'App',
    components: {
        HeaderPost,
        MainPost,
    }
}
</script>

<style>

</style>
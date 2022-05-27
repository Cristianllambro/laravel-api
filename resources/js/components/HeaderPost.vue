<template>
    <div>
        <router-link :to="{name: 'home'}">Home</router-link>
        <router-link :to="{name: 'blogIndex'}">Blog</router-link>
        <router-link :to="{name: 'about'}">About</router-link>
    </div>
</template>

<script>
export default {
    name: 'HeaderPost'
}
</script>

<style>

</style>
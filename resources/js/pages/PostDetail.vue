<template>
    <div>
        <h1>{{item.title}}</h1>
        <span>From {{ item.user.name }}<span v-if="item.category"> in category {{ item.category.name }}</span></span>
        <div>
            <span v-for="tag in item.tags" :key="tag.id">{{tag.name}}</span>
        </div>
        <img :src="item.img_url" :alt="item.title" class="img-fluid">
        <p>{{item.description}}</p>
    </div>
</template>

<script>
export default {
    name: 'PostDetail',
    props: ['slug'],
    data() {
        return {
            post: null,
            callApi: 'http://localhost:8000/api/posts',
        }
    },

    created() {
        this.getData(this.callApi + '/' + this.slug);
    },

    methods: {
        getData(url) {
            Axios.get(url).then(responseData => {
                this.post = responseData.data.response;
            })
        }
    }
}
</script>

<style>

</style>
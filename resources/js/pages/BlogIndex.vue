<template>
    <div class="row g-4">
        <h1>All our Posts</h1>
        <div class="col-4" v-for="item in posts" :key="item.id">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{item.title}}</h5>
                    <span class="card-text">{{item.description}}</span>
                    <router-link :to="{name: 'PostDetail', params: {slug: item.slug} }" class="btn btn-primary mt-auto">Info Post</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'MainPost',
    data() {
        return {
            posts: [],
            previousPage: '',
            nextPage: '',
        }
    },

    created() {
        Axios.get('http://127.0.0.1:8000/api/posts')
            .then(responseData=> {
                this.posts = responseData.data.response.data;
        })
    }
}
</script>

<style>
.btn{
    width: 8rem;
}
</style>
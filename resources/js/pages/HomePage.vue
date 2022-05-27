<template>
    <div class="row g-4">
        <h1>Some Posts</h1>
        <div class="col-4" v-for="item in posts" :key="item.id">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title">{{item.title}}</h3>
                    <span class="card-text">{{item.description}}</span>
                    <router-link :to="{name: 'postDetail', params: {slug: item.slug} }" class="btn btn-primary mt-auto">Info Post</router-link>
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
        }
    },

    created() {
        //aggiungere ?home per avere il controllo fatto su postController (aggiunta nel url)
        Axios.get('http://127.0.0.1:8000/api/posts?home')
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
<template>
<div class="containe">
    <div class="row g-4">
        <h1>All our Posts</h1>
        <div class="col-4" v-for="item in posts" :key="item.id">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{item.title}}</h5>
                    <span class="card-text">{{item.description}}</span>
                    <router-link :to="{name: 'postDetail', params: {slug: item.slug} }" class="btn btn-primary mt-auto">Info Post</router-link>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled" :class="{disabled: !prevPage}" @click="getData(prevPage)">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item" :class="{disabled: !nextPage}" @click="getData(nextPage)">
                        <a class="page-link">Next</a>
                    </li>
                </ul>
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
            prevPage: null,
            nextPage: null,
        }
    },

    created() {
        Axios.get('http://127.0.0.1:8000/api/posts')
            .then(responseData=> {
                this.posts = responseData.data.response.data;
        })
    },

    methods: {
        getData() {
            Axios.get('http://127.0.0.1:8000/api/posts')
                .then(responseData=> {
                    this.posts = responseData.data.response.data;
                    this.prevPage = responseData.data.response.prevPage;
                    this.nextPage = responseData.data.response.nextPage;
                })
        }
    },
}
</script>

<style>
.btn{
    width: 8rem;
}
.page-link{
    cursor: pointer;
}
</style>
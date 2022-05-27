<template>
        <div class="row g-4">
        <h1>All our Posts</h1>
        <div class="col-4" v-for="item in posts" :key="item.id">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{item.title}}</h5>
                    <span class="card-text">{{item.description}}</span>
                    <a :href="'/posts/' + item.slug" class="btn btn-primary mt-auto">Info Post</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
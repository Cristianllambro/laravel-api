<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Contact us</h1>
                <form action="" method="post">

                    <!-- input name -->
                    <div class="mb-3 pt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <!-- input email -->
                    <div class="mb-3 pt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <!-- input message -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                    <button class="btn btn-primary">Send</button>
                </form>
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
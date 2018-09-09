<template>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <input
                                class="form-control"
                                v-model="email"
                                type="email"
                                placeholder="Email"
                        />
                    </div>
                    <div class="form-group">
                        <input
                                class="form-control"
                                v-model="password"
                                type="password"
                                placeholder="Password"
                        />
                    </div>
                    <button class="btn btn-success right">Login</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>

</style>
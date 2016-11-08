<template>

<div class="row">    

    <div class="col-md-2">

        <div class="card">
            <div class="card-header">
                Menu
            </div>
            <div class="card-block">
                <router-link to="/users" class="btn btn-primary btn-block"><i class="icon-arrow-left-circle"></i> Back</router-link>
            </div>
        </div>

    </div>
    
    <div class="col-md-10">

        <div class="card">
            <div class="card-header">
                New User
            </div>
            <div class="card-block">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="alert alert-info" role="alert">
                    <strong>Heads up!</strong> The password will be generated and can be changed after first login.
                </div>
                <button type="button" class="btn btn-primary">Create User</button>
            </div>
        </div>

    </div>

</div>    

</template>



<script>

    export default {
        data: function () {
            return {
                user: ''
            };
        },

        created: function () {
            this.fetchUser();
        },

        methods: {
            fetchUser: function () {
                this.$http.get('/api/user')
                        .then(response => {
                    this.user = response.data;
                });
            }
        }
    }

</script>    
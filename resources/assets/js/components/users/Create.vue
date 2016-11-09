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
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-user"></i></span>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-envelope"></i></span>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Enter email">
                    </div>
                </div>
                <div class="alert alert-info" role="alert">
                    <i class="icon-info"></i> The password will be automatically generated and send to the user. The user can change the given password after first login.
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
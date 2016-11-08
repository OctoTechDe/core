<template>

<div class="row">    

    <div class="col-md-2">

        <div class="card">
            <div class="card-header">
                Menu
            </div>
            <div class="card-block">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon-magnifier"></i></span>
                    <input type="text" class="form-control" placeholder="Search" v-model="search">
                </div>
                <hr>
                <router-link to="/users/create" class="btn btn-primary btn-block"><i class="icon-plus"></i> New User</router-link>
            </div>
        </div>

    </div>
    
    <div class="col-md-10">

        <div class="card">
            <div class="card-header">
                Users
            </div>
            <div class="card-block">

            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users">
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary btn-sm"><i class="icon-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            </div>
        </div>

    </div>

</div>    

</template>



<script>

    export default {
        data: function () {
            return {
                search: '',
                users: []
            };
        },

        created: function () {
            this.fetchUsers();
        },

        methods: {
            fetchUsers: function () {
                this.$http.get('/api/users')
                        .then(response => {
                    this.users = response.data;
                });
            }
        }
    }

</script>    
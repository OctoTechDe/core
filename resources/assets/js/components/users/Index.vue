<template>
    
<div class="card">
    <div class="card-header">
        Users
    </div>
    <div class="card-block">

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users">
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
            </tr>
        </tbody>
    </table>

    </div>
</div>

</template>



<script>

    export default {
        data: function () {
            return {
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
            },
        }
    }

</script>    
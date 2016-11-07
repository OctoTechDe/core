<template>
    
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users">
      <th></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

</template>



<script>

    export default {
        
        data() {
            
            return {
                users: []
            };
        },

        ready: function() {
            this.fetchUsers();
        },

        methods: {
            fetchUsers: function() {
                this.$http.get('/api/user').then((response) => {
                    this.users = response.data
                });
            }
        }

    }

</script>    
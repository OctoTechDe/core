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
                User {{ user.name }}
            </div>
            <div class="card-block">
                
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
                this.$http.get('/api/user/' + this.$route.params.id)
                        .then(response => {
                    this.user = response.data;
                });
            }
        }
    }

</script>    
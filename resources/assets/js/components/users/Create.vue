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

            <form @submit.prevent="login" class="form-horizontal">
                <alert-error :form="form"></alert-error>
                <alert-success :form="form" message="Success!"></alert-success>

                <div class="form-group" :class="{'has-error': form.errors.has('username')}">
                    <label for="name">Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-user"></i></span>
                        <input v-model="form.username" type="text" name="username" class="form-control">
                    </div>
                    <has-error :form="form" field="username"></has-error>
                </div>
                
                <div class="form-group" :class="{'has-error': form.errors.has('email')}">
                    <label for="name">Email</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-envelope"></i></span>
                        <input v-model="form.email" type="text" name="email" class="form-control">
                    </div>
                    <has-error :form="form" field="email"></has-error>
                </div>

                <div class="alert alert-info" role="alert">
                    <i class="icon-info"></i> The password will be automatically generated and send to the user. The user can change the given password after first login.
                </div>
                <button :disabled="form.busy" type="submit" class="btn btn-primary">
                    <i v-if="form.busy" class="fa fa-fw fa-spinner fa-spin"></i>
                    <i v-else class="icon-plus"></i>
                    Log In
                </button>
            </div>
        </div>

    </div>

</div>    

</template>



<script>

    export default {
        data: function() {
            return {
            // Create a new form instance
            form: this.$form({
                username: '',
                email: ''
            })
        }
    },

  methods: {
    login() {
      // Submit the form via a POST request
      this.form.post('/api/users')
        .then(({data}) => console.log(data))
            }
        }
    }

</script>    
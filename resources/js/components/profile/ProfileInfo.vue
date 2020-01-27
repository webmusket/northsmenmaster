<template>
	<div>
        <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
        </div>

        <div class="deshheding">

            <h1>Profile Information</h1>
        </div>

        <div class="profile-info">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input v-model="profileinfo.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input v-model="profileinfo.password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <small id="passwordHelp" class="form-text text-muted"><a href="#">Change Password</a></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input v-model="profileinfo.name" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    <small id="emailHelp" class="form-text text-muted">Enter your Full Name</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">address</label>
                    <input v-model="profileinfo.state" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Enter your Full Address</small>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">receive newsletter</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>

    </div>
</template>


<script>

    export default {
        name: "ProfileInfo",
        components: {

	    },

	    data(){
	    	return{
	    		profileinfo: "",
	    	}

	    },

	    computed:{
	    	
	    },

        mounted(){
        	this.getuserdata();
        	
        },
	    methods:{
	    	getuserdata(){
	    		this.$http.get('/profileinfo')
                   .then((response)=>{
                       console.log(response.data)
                       this.profileinfo = response.data
                   })
	    	},
	    	
	    }



    }
</script>

<style scoped>
</style>
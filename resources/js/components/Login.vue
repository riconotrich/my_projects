<template>
	<div id="app">
		<NavBar1 activePage = "Login" />
		
		<div class="row">
	        <div class="col-md-3"></div>
	        <div class="col-md-6">
	          <div class="card register-card">
	            <div class="card-body register-card-body">
	              <h3 class="card-title register-card-title">User Login</h3>
	              <p class="card-subtitle register-card-subtitle">
	                Please login with valid user credentials.
	              </p>

	              <form @submit.prevent="authenticate">

	                <div class="row register-card-form">
	                  <p class="register-card-formName">Username  </p>
	                  <input type="text" name="username" class="register-card-textbox" autocomplete="off" placeholder="Enter username" v-model="form.email" required/>
	                </div>
	                <div class="row register-card-form">
	                  <p class="register-card-formName">Password  </p>
	                  <input type="password" name="username" class="register-card-textbox" autocomplete="off" placeholder="Enter password" v-model="form.password" value="login" required/>
	                </div>
	                <div class="row register-card-form">
	                  <router-link to='/'>
	                    <button class="global-btn2">BACK</button>
	                  </router-link>
	                  <button class="global-btn2" style="margin-left: 20px" type="submit">LOGIN</button>
	                </div>

	              </form>

	            </div>
	          </div>
	        </div>
	        <div class="col-md-3"></div>
      </div>
    </div>

</template>

<script>
import {login} from '.././helpers/auth'
import NavBar1 from './navigation/NavBar1'

	export default{
		name: 'Login',
  		components: { NavBar1 },

  		data: function(){
  			return{
  				form:{

  					email: '',
  					password: ''
  				}
  			}
 
  		},

  		created(){ 
    		document.title= "Moments | Login"; 
    
  		},

  		methods: {
  			authenticate(){
  		 		this.$store.dispatch('login');

  				login(this.$data.form)
  					.then((res) => {
  						this.$store.commit("loginSuccess", res);
  						this.$router.push({path: '/dashboard'});
  							
  					})
  					.catch((error) => {
  						this.$store.commit("loginFailed", {error});
  						alert('Invalid username/password');

  					});
  			}

  		},

  		computed: {
  			authError(){
  				return this.$store.getters.authError;

  			}

  		}

	}

</script>


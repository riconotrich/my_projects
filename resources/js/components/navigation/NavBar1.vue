<template>

	<div class="NavBar1" id="app">

	    <nav class="navbar navbar-expand-md navbar-main">
	    	<router-link to='/'>
		      <a class="navbar-brand">
		        <img :src="'/assets/images/logo_default.png'" class="logo">
		      </a>
		    </router-link>

	      <ul class="nav mr-auto">
	        <li class="nav-item" :class="activePage == 'Login' ? 'active': ''">
	        	<router-link to='/login'>
	            	<a class="nav-link1" type="button">Login</a>
	            </router-link>
	        </li>
	        <li class="nav-item ml-auto" :class="activePage == 'Register' ? 'active': ''">
	        	<router-link to='/register'>
	          		<a class="nav-link2" type="button">Register</a>
	          	</router-link>
	        </li>
	      </ul>
	    </nav>

  	</div>

</template>

<script>

	export default{
		props: {

			activePage: String,

		}

	}

</script>


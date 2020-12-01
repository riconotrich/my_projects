<template>

	<div id = "app">

		<NavBar1 />
		<div class="container-fluid">
		    <div class="row" style="display: inline-flex;">
		    	<div class="col-md-5">
		         	<p class="home-text1">
		           		Preserving life's
		           		<br>
		           		precious moments.
		         	</p>
		         	<p class="home-text2">
		          		 Moments is your friend,
		           		<br>
		           		relive your memories now.
		         	</p>
		         	<router-link to='/register'>
		           		<button class="global-btn1">GET STARTED</button>
		         	</router-link>
		        </div>
		        <div class="col-md-7">
		           <img :src="'/assets/images/home-display.png'" class="home-display">
		        </div>
		    </div>
    	</div>

	</div>

</template>

<script>

import NavBar1 from './navigation/NavBar1'

	export default{
		name: 'Login',
  		components: { NavBar1 },

  		created(){
    		document.title= "Moments | Welcome"; 
    
  		}
	}

</script> 
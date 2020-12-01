<template>

	<div id = "app">

		<NavBar2 />
		<SubNavBar activePage = 'Dashboard' />
	
	</div>

</template>

<script>

import NavBar2 from './navigation/NavBar2'
import SubNavBar from './navigation/SubNavBar'

	export default{
		name: 'Dashboard',
  		components: { NavBar2, SubNavBar },

  		computed: {
      		currentUser(){
        		return this.$store.getters.currentUser 
        
     	 	}
   	 	},

  		created(){
    		document.title= "Moments | Dashboard"; 
    
  		}

	}

</script> 
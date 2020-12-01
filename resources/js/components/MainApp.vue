<template>
	<div id="main">
		<div class="content">
			<router-view></router-view>
		</div>
	</div> 
 
</template>

<script>
	import NavBar1 from './navigation/NavBar1';

	export default{
		name: 'main-app',
		components: {NavBar1}

	}
</script>
<template>

  <div class="NavBar2" id="app">

    <nav class="navbar navbar-expand-sm navbar-main">

      <router-link to='/'>
      <a class="navbar-brand">
        <img :src="'assets/images/logo_default.png'" alt="logo" class="logo">
      </a>
      </router-link>

      <ul class="nav ml-auto">
        <li class="nav-item">
            <p class="navbar2-user">Welcome, {{currentUser.name}}!</p>
        </li>

        <li class="nav-item">
          <a class="nav-link-2" type="button" onclick="return confirm('Are you sure you want to logout?');" @click.prevent="logout();">Logout</a>
        </li>
      </ul>

    </nav>

  </div>

</template>

<script>

  export default{
    name: 'NavBar2',
    methods:{
      logout(){
        this.$store.commit('logout');
        this.$router.push('/login');
      }

    },

    computed: {
      currentUser(){
        return this.$store.getters.currentUser 
        
      }
    }

  }

</script>
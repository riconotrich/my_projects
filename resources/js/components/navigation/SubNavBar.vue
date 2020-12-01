<template>

  <div class="SubNavBar" id="app">

    <nav class="subnavbar-main">

      <ul class="nav">
        <li class="subnav-item item1" :class="activePage == 'Dashboard' ? 'active': ''">
          <i class="fa fa-home subnav-icon" ></i><p class="subnav-link">Dashboard</p>
        </li>
        <li class="subnav-item" :class="activePage == 'My Diary' ? 'active': ''">
          <i class="fa fa-edit subnav-icon" ></i><p class="subnav-link">My Diary</p>
        </li>
        <li class="subnav-item" :class="activePage == 'Profile' ? 'active': ''">
          <i class="fa fa-user subnav-icon" ></i><p class="subnav-link">Profile</p>
        </li>
        <li class="subnav-item" :class="activePage == 'Settings' ? 'active': ''">
          <i class="fa fa-cog subnav-icon" ></i><p class="subnav-link">Settings</p>
        </li>
        <li class="subnav-item item5" :class="activePage == 'Info' ? 'active': ''">
          <i class="fa fa-info-circle subnav-icon" ></i><p class="subnav-link">Info</p>
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

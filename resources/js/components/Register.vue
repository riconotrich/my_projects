<template>
  <div id="app">

    <NavBar1 activePage = "Register"/>
    
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="card register-card">
            <div class="card-body register-card-body">
              <h3 class="card-title register-card-title">Registration</h3>
              <p class="card-subtitle register-card-subtitle">
                Create a user account to start reliving your <strong>moments</strong>.
              </p>

                <div class="row register-card-form">
                  <p class="register-card-formName">Full Name</p>
                  <input type="text" name="fullname" id="fullname" class="register-card-textbox" ref="fullname" autocomplete="off" placeholder="Enter your fullname" v-model="fullname" required/>
                </div>
                <div class="row register-card-form">
                  <p class="register-card-formName">Email Address </p>
                  <input type="email" name="email" id="email" ref="email" class="register-card-textbox" autocomplete="off" placeholder="Enter your email address" v-model="email" required/>
                </div>
                <div class="row register-card-form">
                  <p class="register-card-formName">Username </p>
                  <input type="text" name="username" id="username" ref="username" class="register-card-textbox" autocomplete="off" placeholder="Enter a unique username" v-model="username" required/>
                </div>
                <div class="row register-card-form">
                  <p class="register-card-formName">Password  </p>
                  <input type="password" name="username" id="password" ref="password" class="register-card-textbox" autocomplete="off" placeholder="Enter your password" v-on:input="checkPasswordLength" v-model="password" required/>
                </div>
                <div class="row register-card-form">
                  <p class="register-card-formName">Confirm Password  </p>
                  <input type="password" name="cpassword" id="cpassword" class="register-card-textbox" autocomplete="off" placeholder="Confirm Password" v-on:input="checkConfirmPassword" required/>
                </div>
                <div class="row register-card-form">
                  <router-link to='/'>
                  <button class="global-btn2">BACK</button>
                  </router-link>
                  <button class="global-btn2 buttonRegister" id="buttonRegister" style="margin-left: 20px" disabled="true">REGISTER</button>
                </div>

            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>
   
  </div>
</template>

<script>

import NavBar1 from './navigation/NavBar1'

export default {
  name: 'Register',
  components: { NavBar1 },
  data: function(){
    return{
      fullname: '',
      email: '',
      username: '',
      password: '',

    }
  },

  methods: {

    checkPasswordLength: function(){

      var pass = document.getElementById("password").value;

      if(pass.length < 8){
        document.getElementById('password').style.borderColor = "red";
        document.getElementById('password').placeholder = "Password must be atleast 8 characters";
        document.getElementById('cpassword').disabled = true;
        document.getElementById('cpassword').style.borderColor = "#C1C1C1";
        document.getElementById('cpassword').style.backgroundColor = "#EEEEEE";
      }else{
        document.getElementById('password').style.borderColor = "#41B883";
        document.getElementById('cpassword').disabled = false;
        document.getElementById('cpassword').style.borderColor = "#41B883";
        document.getElementById('cpassword').style.backgroundColor = "#FFFFFF";
      }

    },

    checkConfirmPassword: function(){

      var pass = document.getElementById("password").value;
      var cpass = document.getElementById("cpassword").value;

      if(pass == cpass){
        document.getElementById('cpassword').style.borderColor = "#41B883";
        document.getElementById('buttonRegister').disabled = false;
        document.getElementById('buttonRegister').style.backgroundColor = "#35495E";

      }else{
        document.getElementById('cpassword').style.borderColor = "red";
        document.getElementById('cpassword').placeholder = "Password does not match"
        document.getElementById('buttonRegister').style.backgroundColor = "#C1C1C1";
      }

    }

  },

  created(){
  
    document.title= "Moments | Register"; 
    
  }

}

</script>



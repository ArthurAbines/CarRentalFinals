<script>
import axios from 'axios';

export default {
  data: function () {
    return {
      name: '',
      lastname: '',
      password: '',
      confirmPassword: '',
      email: '',
      gender: 'Gender',
      day: '',
      month: '',
      year: '',
      profileImage: null,
      validId: null,
      errorMessages: '',
      currentErrorIndex: 0, 
      loginSignup: 'Sign In',
      buttonDisabled: false,
    };
  },
    mounted() {

        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
            this.loginSignup = 'Sign Up';
            this.errorMessages = ""
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
            this.loginSignup = 'Sign In';
            this.errorMessages = ""
        });
    },
    methods: {

      handleProfileImageUpload(e){
        const file = e.target.files[0];
        if (!file) return;
        this.validId = file;
        console.log(this.validId);
        // const reader = new FileReader();
        // reader.onload = (event) => {
        //   this.client.imagePreview = event.target.result;
        // };
        // reader.readAsDataURL(file);
      },

      handleValidIdUpload(e){
        const file = e.target.files[0];
        if (!file) return;
        this.profileImage = file;
        console.log(this.profileImage);
      },

      registerUser(){
        this.buttonDisabled = true;
        this.loginSignup = "Signing Up"

        const formData = new FormData();
        formData.append('name', this.name);
        formData.append('lastname', this.lastname);
        formData.append('email', this.email);
        formData.append('password', this.password);
        formData.append('password_confirmation', this.confirmPassword);
        formData.append('gender', this.gender);
        formData.append('day', this.day);
        formData.append('month',this.month);
        formData.append('year', this.year);
        formData.append('profile', this.profileImage);
        formData.append('validID', this.validId);
        console.log(formData);

        axios.post(`http://127.0.0.1:8000/api/auth/register`, formData,{
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        })
        .then(response => {
          console.log(response.data);
          this.errorMessages = '';
          const container = document.getElementById('container');
          container.classList.remove("active");
          
          this.buttonDisabled = false;
          this.loginSignup = 'Sign In';
        })
        .catch(error => {
          if (error.response && error.response.data && error.response.data.error) {
            const errors = error.response.data.error;
            this.errorMessages = [];

            // Loop through each error and push them into errorMessages array
            for (let field in errors) {
                this.errorMessages.push(errors[field][0]);
            }

            // Reset the current error index to 0
            this.currentErrorIndex = 0;

            console.error('Errors:', this.errorMessages);
          } else {
              console.error('Error fetching client details:', error);
              // Display a generic error message to the user
              alert('An error occurred while registering. Please try again later.');
          }

          this.buttonDisabled = false;
          this.loginSignup = "Sign Up"
        });

      },

      displayCurrentError() {
        if (this.errorMessages.length > 0) {
            return this.errorMessages[this.currentErrorIndex];
            } else {
                return ''; // Return an empty string if there are no errors
            }
        },
      
    login() {
      this.loginSignup = 'Logging in Please wait...';
      this.buttonDisabled = true;
      // Prepare the login credentials
      const credentials = {
        email: this.email,
        password: this.password
      };

      axios.post('http://localhost:8000/api/auth/login', credentials)
        .then(response => {
          const token = response.data.token;
          console.log('Logged in successfully', 'Token:', token);
          // setCookie('token', token, 2);
          document.cookie = `token=${token}; expires=${new Date(Date.now() + 60 * 24 * 3 * 60 * 1000).toUTCString()}`;
          // this.$router.push({ name: 'admin' });
          this.$router.push({ name: 'browse' });
          this.loginSignup = 'Sign In';
          this.buttonDisabled = false;
     
        })
        .catch(error => {
          // Handle error
          console.error('Login error:', error.response.data.message);
          this.errorMessages = "Invalid credentials"
          this.loginSignup = 'Sign In';
          this.buttonDisabled = false;
        });

      },

    }
}
</script>
  

  <template>
    <body>

     <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <div class="form-group w-100">
                    <div class="row">
                        <div class="col me-3" >
                            <input v-model="name" type="text" placeholder="Name">
                        </div>
                        <div class="col" >
                            
                            <input v-model="lastname" type="text" placeholder="lastname">
                        </div>

                    </div>
                </div>
                
                <input v-model="email" type="email" placeholder="Email">
                <input v-model="password" type="password" placeholder="Password">
                <input v-model="confirmPassword" type="password" class="form-control" placeholder="Confirm Password" >
                
                <!-- Gender -->
                <select class="w-100" v-model="gender">
                    <option value="Gender">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
               
                <!-- Date of Birth -->
                <div class="form-group w-100">
                    <span>Date of Birth:</span>
                    <div class="row">
                        <div class="col" >
                            <input type="number" class="form-control" v-model="day" placeholder="Day" min="1" max="31" >
                        </div>
                        <div class="col ms-3 me-3" >
                            <input type="number" class="form-control" v-model="month" placeholder="Month" min="1" max="12" >
                        </div>
                        <div class="col" >
                            <input type="number" class="form-control" v-model="year" placeholder="Year" min="1900" max="2024" >
                        </div>
                    </div>
                </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <span>Upload Profile Image:</span>
                        <input type="file" class="form-control-file" @change="handleProfileImageUpload" id="profile" accept="image/*" >
                    </div>
                </div>
                <div class="col"  style=" margin-left: 10px;">
                  <div class="form-group">
                      <span>Upload Valid ID:</span>
                  <input type="file" class="form-control-file" @change="handleValidIdUpload" id="validID" accept="image/*" >
                  </div>
                </div>
              </div>
              <a class="text-danger"> {{  displayCurrentError() }}</a>
              <!-- <button @click="registerUser">Sign Up</button> -->
              <button @click.prevent="registerUser" :disabled="buttonDisabled">{{ this.loginSignup }}</button>

            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <input v-model="this.email" type="email" placeholder="Email">
                <input v-model="this.password" type="password" placeholder="Password">
                <a class="text-danger"> {{  this.errorMessages }}</a>
                <a href="#">Forget Your Password?</a>
                <button @click.prevent="login"  :disabled="buttonDisabled">{{ this.loginSignup }}</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <img src="../assets/rental logo.png" alt="Logo" style="max-width: 250px; ">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <img src="../assets/rental logo.png" alt="Logo" style="max-width: 250px; ">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div> 
            </div>
        </div>
    </div>
</body>

  </template>

  
<style scoped>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

body{
  background-color: #c9d6ff;
  background: linear-gradient(to right, #e2e2e2, #c9d6ff);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;
}

.container{
  background-color: #fff;
  border-radius: 30px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
  position: relative;
  overflow: hidden;
  /* padding: 20px; */
  margin: 40px;
  height: 100%;
}

.container p{
  font-size: 14px;
  line-height: 20px;
  letter-spacing: 0.3px;
  margin: 20px 0;
}

.container span{
  font-size: 12px;
}

.container a{
  color: #333;
  font-size: 13px;
  text-decoration: none;
  margin: 15px 0 10px;
}

.container button{
  background-color: #512da8;
  color: #fff;
  font-size: 12px;
  padding: 10px 45px;
  border: 1px solid transparent;
  border-radius: 8px;
  font-weight: 600;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  margin-top: 10px;
  cursor: pointer;
}

.container button.hidden{
  background-color: transparent;
  border-color: #fff;
}

.container form{
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  height: 100%;
}

.container input, 
.container select {
  background-color: #eee;
  border: none;
  margin: 8px 0;
  padding: 10px 15px;
  font-size: 13px;
  border-radius: 8px;
  width: 100%;
  outline: none;
}

.form-container{
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.sign-in{
  left: 0;
  width: 50%;
  z-index: 2;
}

.container.active .sign-in{
  transform: translateX(100%);
}

.sign-up{
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.container.active .sign-up{
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: move 0.6s;
}

@keyframes move{
  0%, 49.99%{
      opacity: 0;
      z-index: 1;
  }
  50%, 100%{
      opacity: 1;
      z-index: 5;
  }
}

.social-icons{
  margin: 20px 0;
}

.social-icons a{
  border: 1px solid #ccc;
  border-radius: 20%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 3px;
  width: 40px;
  height: 40px;
}

.toggle-container{
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: all 0.6s ease-in-out;
  border-radius: 150px 0 0 100px;
  z-index: 1000;
}

.container.active .toggle-container{
  transform: translateX(-100%);
  border-radius: 0 150px 100px 0;
}

.toggle{
  background-color: #512da8;
  height: 100%;
  background: linear-gradient(to right, #5c6bc0, #512da8);
  color: #fff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: all 0.6s ease-in-out;
}

.container.active .toggle{
  transform: translateX(50%);
}

.toggle-panel{
  position: absolute;
  width: 50%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 30px;
  text-align: center;
  top: 0;
  transform: translateX(0);
  transition: all 0.6s ease-in-out;
}

.toggle-left{
  transform: translateX(-200%);
}

.container.active .toggle-left{
  transform: translateX(0);
}

.toggle-right{
  right: 0;
  transform: translateX(0);
}

.container.active .toggle-right{
  transform: translateX(200%);
}
</style>
  
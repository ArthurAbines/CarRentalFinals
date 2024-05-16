<script>

  import * as bootstrap from 'bootstrap';
  import axios from 'axios';

  export default {
    data: function () {
      return {
        isNavbarOpen: false,
        carManufacturers: ['Nissan', 'BMW', 'Chevrolet', 'Foton', 'Gaz', 'Honda', 'Hyundai', 'Mitsubishi', 'Ford', 'Isuzu'],
        bodyTypes: ['SUV', 'Van', 'Sedan', 'Pickup'],
        fuelTypes: ['Gas', 'Diesel', 'Electric'],
        transmissions: ['Automatic', 'CVT', 'Manual'],
        seatingCapacities: Array.from({ length: 15 }, (_, i) => i + 1),
        features: ['Fuel Efficient', 'Power Windows', 'Surround Sound', 'Front Parking Sensor', 'Power Mirror', 'Navigation Ready', 'Rear Parking Sensor', 'Multiple AC', 'Adjustable Seats', 'Push Start Button', 'Remote Controlled Doors'],
        showLogin: '',
        profileModal: null,
        logoutModal: null,
        logoutText: 'Logout',
        user: {
          name: '',
          lastname: '',
          email: '',
          email_verified_at: '',
          gender: '',
          day: '',
          month: '',
          year: '',
          profile: '',
        }
      };
    },

    mounted() {
      this.fetchEvents();
        this.profileModal = new bootstrap.Modal(document.getElementById('profileModal'), {
        // Optional: specify options here
      });
      
      this.logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'), {
        // Optional: specify options here
      });

    },

    methods: {
      toggleNavbar() {
        this.isNavbarOpen = !this.isNavbarOpen;
      },
      
      fetchEvents() {

        const cookieString = document.cookie;
        if (cookieString) {
            const tokenCookie = cookieString.split('; ').find(row => row.startsWith('token='));
            if (tokenCookie) {
                const token = tokenCookie.split('=')[1];
                console.log(token);
                axios.get('http://localhost:8000/api/auth/show', {
                  headers: {
                    Authorization: `Bearer ${token}`
                  }
                })
                .then(response => {
                  this.showLogin = false;
                  console.log(response.data.user.profile);
                  this.profile = response.data.user.profile;
                  this.user.name = response.data.user.name;
                  this.user.lastname = response.data.user.lastname;
                  this.user.email = response.data.user.email;
                  this.user.gender = response.data.user.gender;
                  this.user.day = response.data.user.day;
                  this.user.month = response.data.user.month;
                  this.user.year = response.data.user.year;
                  this.user.profile = 'http://127.0.0.1:8000' + response.data.user.profile;

                  // this.adminEmail = response.data.email;
                })
                .catch(error => {
                  const now = new Date();
                  document.cookie = `token=; expires=${new Date(now.getTime() - 1000).toUTCString()}; path=/`;
                  this.showLogin = true;
                  
                  console.error('Error fetching events:', error);
                });
            } else {
                console.error('Token cookie not found.');
                this.showLogin = true;
            }
        } else {
            console.error('No cookies found.');
            this.showLogin = true;
        }

        // const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];
        // console.log(token);

      },

      showProfile(){
        this.profileModal.show();
      },

      logoutConfirmation(){
        this.logoutModal.show();
        this.profileModal.hide();
      },

      logout() {
        this.logoutText = 'Logging out..';

        const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];

        // const token = getCookie('token');
        axios.post('http://localhost:8000/api/auth/logout', {}, {
          headers: {
            Authorization: `Bearer ${token}`
          }
        })
        .then(response => {
          // Remove the token cookie
          // deleteCookie('token');
          const now = new Date();
          document.cookie = `token=; expires=${new Date(now.getTime() - 1000).toUTCString()}; path=/`;
          this.logoutText = 'Logout';
          // document.cookie = 'token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
          // this.$router.push({ name: 'login' });
          console.log(response.data);
          this.fetchEvents();
          this.logoutModal.hide();
        })
        .catch(error => {
          console.error('An error occurred while logging out. Please try again.', error);
        });

      },
    }
  };
  </script>



<template>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light sticky-top custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img :src="require('@/assets/rental logo.png')" alt="Logo" width="80">
      </a>
      <button class="navbar-toggler" @click="toggleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div :class="['collapse', {'show': isNavbarOpen}]" class="navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" >Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" >Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" >Forum</a>
          </li>
        </ul>
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success me-2" type="submit">Search</button>
        </form>
        <router-link :to="{ name: 'registration' }">
          <button v-if="showLogin" class="btn btn-outline-light">
            Login / Sign up
          </button>

        </router-link>
        <img v-if="!showLogin" :src="`${this.user.profile}`" alt="" @click="showProfile">

      </div>
    </div>
  </nav>
<!--End of Navbar-->



<!--SEARCH CATERGORY AREA-->
    <div class="container-search">
      <!-- Search criteria -->
      <div class="search-container">
        <div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
    <h5 style="background-color: #4D5167; color: white; padding: 10px; margin: 0; border-top-left-radius: 5px; border-radius: 5px; border: 1px solid black">Category or set search criteria</h5>
  </div>


        <!-- Search criteria -->

<!--Car manufactuer-->
<div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px; margin-right: 100px;">
  <h5 style="background-color: #4D5167; color: #fff; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Car manufacturer</h5>
  <div class="checkbox-grid" style="border: 2px solid black; border-top: none; display: flex; background-color: #fff;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
    <div class="checkbox-column" style="padding: 5px;">
      <div v-for="(manufacturer, index) in carManufacturers.slice(0, 5)" :key="index" class="checkbox-item">
        <input type="checkbox" :value="manufacturer" :id="'manufacturer_' + index">
        <label :for="'manufacturer_' + index" style="color: #000;">{{ manufacturer }}</label>
      </div>
    </div>
    <div class="checkbox-column" style="padding: 5px;">
      <div v-for="(manufacturer, index) in carManufacturers.slice(5)" :key="index" class="checkbox-item">
        <input type="checkbox" :value="manufacturer" :id="'manufacturer_' + (index + 5)">
        <label :for="'manufacturer_' + (index + 5)" style="color: #000;">{{ manufacturer }}</label>
      </div>
    </div>
  </div>
</div>
<!--Car manufactuer-->

<!-- Body Type -->
<div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
  <h5 style="background-color: #4D5167; color: #fff; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Body type</h5>
  <div class="checkbox-grid" style="border: 2px solid black; border-top: none; display: grid; grid-template-columns: repeat(2, 1fr); background-color: #fff;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
    <div v-for="(type, index) in bodyTypes.slice(0, 4)" :key="index" class="checkbox-item" style="padding: 5px; display: flex; align-items: center;">
      <input type="checkbox" :value="type" :id="'bodytype_' + index" style="margin-right: 5px;">
      <label :for="'bodytype_' + index" style="color: #000; margin-right: 10px;">{{ type }}</label>
      <!-- Image placeholder for SUV -->
      <img :src="require('@/assets/suv.png')" alt="SUV Image" style="max-width: 70px; max-height: 70px;" v-if="index === 0">
      <!-- Image placeholder for Sedan -->
      <img :src="require('@/assets/van.png')" alt="van" style="max-width: 70px; max-height: 70px;" v-else-if="index === 1">
      <!-- Image placeholder for Van -->
      <img :src="require('@/assets/sedan.png')" alt="sedan Image" style="max-width: 80px; max-height:80px;" v-else-if="index === 2">
      <!-- Image placeholder for Pickup -->
      <img :src="require('@/assets/pick up.png')" alt="Pickup Image" style="max-width: 80px; max-height: 80px;" v-else>
    </div>
  </div>
</div>


<!-- Body Type -->

<!-- Price Range -->
<div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
  <h5 style="background-color: #4D5167; color: #fff; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Price range</h5>
  <div style="padding: 5px; border: 2px solid black; background-color: #fff;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
    <select style="width: 100%; color: #000; background-color: #D9D9D9; border-radius: 5px;">
      <option value="custom" >Custom</option>
      <!-- Add other options here -->
    </select>
  </div>
</div>
<!-- Price Range -->

<!-- Fuel Type -->
<div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
  <h5 style="background-color: #4D5167; color: #fff; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Fuel type</h5>
  <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: flex; justify-content: center; background-color: #fff;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
    <div v-for="(fuel, index) in fuelTypes" :key="index" class="checkbox-item" style="margin-right: 10px;">
      <input type="checkbox" :value="fuel" :id="'fuel_' + index" style="margin-right: 5px;">
      <label :for="'fuel_' + index" style="color: #000;">{{ fuel }}</label>
    </div>
  </div>
</div>
<!-- Fuel Type -->

<!-- Transmission -->
<div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
  <h5 style="background-color: #4D5167; color: #fff; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Transmission</h5>
  <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: flex; justify-content: center; background-color: #fff;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
    <div v-for="(transmission, index) in transmissions" :key="index" class="checkbox-item" style="margin-right: 10px;">
      <input type="checkbox" :value="transmission" :id="'transmission_' + index" style="margin-right: 5px;">
      <label :for="'transmission_' + index" style="color: #000;">{{ transmission }}</label>
    </div>
  </div>
</div>
<!-- Transmission -->

<!-- Seating Capacity -->
<div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
  <h5 style="background-color: #4D5167; color: #fff; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Seating capacity</h5>
  <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: flex; flex-wrap: wrap; justify-content: center; background-color: #fff;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
    <div v-for="(seat, index) in seatingCapacities" :key="index" class="checkbox-item" style="margin-right: 10px; margin-bottom: 10px;">
      <input type="checkbox" :value="seat" :id="'seat_' + index" style="margin-right: 5px;">
      <label :for="'seat_' + index" style="color: #000;">{{ seat }}</label>
    </div>
  </div>
</div>
<!-- Seating Capacity -->

<!-- Features -->
<div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
  <h5 style="background-color: #4D5167; color: #fff; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Features</h5>
  <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; background-color: #fff;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
    <div v-for="(feature, index) in features" :key="index" class="checkbox-item">
      <input type="checkbox" :value="feature" :id="'feature_' + index" style="margin-right: 5px;">
      <label :for="'feature_' + index" style="color: #000;">{{ feature }}</label>
    </div>
  </div>
</div>

</div>


<!--features-->

<!--END of SEARCH CATERGORY AREA-->


      <!-- Cards -->
    
    <!-- Your search criteria content goes here -->
    <div>
    <!-- Your search criteria content goes here -->
    <div class="card-container-big" style="border: 1px solid grey; padding: 10px; margin-top: 10px; margin-right: -40px; margin-left: -90px; border-radius: 5px;">
      <div class="search-criteria-container" style="border: 1px solid black; padding: 10px; margin-bottom: 30px; color: #fff;background-color: #4D5167;border-radius: 5px;">
        <div class="search-criteria" style=" font-size: 18px;">
          Search Criteria:
        </div>
      </div>
      <div class="card-container" style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px; ">
        <!-- Card 1 -->
        <router-link to="/nissan-patrol" class="card-link" style="text-decoration: none;">
          <div class="card" style="width: 365px; height: 310px; margin-bottom: 20px;">
            <img :src="require('@/assets/NISSAN-PATROL.png')" alt="Nissan Patrol Image" style="width: 100%; height: 200px;">
            <div class="card-body" style="padding: 10px;">
              <h5 class="card-title" style="font-weight: bold;">Nissan Patrol</h5>
              <div class="image-logo" style="margin-left: 265px;">
                <img :src="require('@/assets/nissanlogo.png')" alt="Nissan Logo" style="width: 60px; height: 50px;">
              </div>
            </div>
          </div>
        </router-link>
        <!-- Card 2 -->
        <router-link to="/BMWX7" class="card-link" style="text-decoration: none;">
          <div class="card" style="width: 365px; height: 310px; margin-bottom: 20px;">
            <img :src="require('@/assets/bmwx7.png')" alt="BMW X7 Image" style="width: 100%; height: 200px;">
            <div class="card-body" style="padding: 10px;">
              <h5 class="card-title" style="font-weight: bold;">BMW X7</h5>
              <div class="image-logo" style="margin-left: 265px;">
                <img :src="require('@/assets/BMW.svg.png')" alt="BMW Logo" style="width: 60px; height: 50px;">
              </div>
            </div>
          </div>
        </router-link>
        <!-- Card 3 -->
        <router-link to="/ChevroletSuburban" class="card-link" style="text-decoration: none;">
          <div class="card" style="width: 365px; height: 310px; margin-bottom: 20px;">
            <img :src="require('@/assets/chevrolet.webp')" alt="Chevrolet Suburban Image" style="width: 100%; height: 200px;">
            <div class="card-body" style="padding: 10px;">
              <h5 class="card-title" style="font-weight: bold;">Chevrolet Suburban</h5>
              <div class="image-logo" style="margin-left: 265px;">
                <img :src="require('@/assets/Chevrolet-logo.png')" alt="Chevrolet Logo" style="width: 60px; height: 50px;">
              </div>
            </div>
          </div>
        </router-link>
        <!-- Card 4 -->
        <router-link to="/FotonToano" class="card-link" style="text-decoration: none;">
          <div class="card" style="width: 365px; height: 310px; margin-bottom: 20px;">
            <img :src="require('@/assets/foton toano.png')" alt="Foton Toano Image" style="width: 100%; height: 200px;">
            <div class="card-body" style="padding: 10px;">
              <h5 class="card-title" style="font-weight: bold;">Foton Toano</h5>
              <div class="image-logo" style="margin-left: 265px;">
                <img :src="require('@/assets/Foton-logo.png')" alt="Foton Logo" style="width: 60px; height: 50px;">
              </div>
            </div>
          </div>
        </router-link>
        <!-- Card 5 -->
       
      </div>
    </div>
  </div>
  </div>




<!--Footer-->
<div class="footer-container" style="height: auto;">
<footer class="text-center mt-4 text-white" style="background-color: #4D5167;">
    <div class="container" >
      <div class="row">
        
        <!-- Logo -->
        <div class="col-md-2">
          <img src="../assets/rental logo.png" alt="Logo" style="max-width: 250px; margin-left: -15px;">
          <div style=" margin-top:25px;">
          
            <a href="#"><img src="@/assets/Facebook-Logosu.png" alt="Facebook" style="max-width: 50px;"></a>
            <a href="#"><img src="@/assets/ig.png" alt="Twitter" style="max-width: 40px;"></a>
            <a href="#"><img src="@/assets/Telegram-logo.png" alt="Instagram" style="max-width: 50px;"></a>
        </div>
        </div>
        
        <!-- Contact Us -->
        <div class="col-md-4">
            <h5 style="color: #49D06E; margin-top: 20px;">Contact Us</h5>
            
          <p>Phone: +1234567890</p>
          <p>Email: example@gmail.com</p>
        </div>
        <!-- Quick Links -->
        <div class="col-md-3">
            <h5 style="color: #49D06E; margin-top: 20px;">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" style="color: white;">https://discord.com/</a></li>
           
          </ul>
        </div>

        <!-- Questions and Queries -->
        <div class="col-md-3">
            <h5 style="color: #49D06E; margin-top: 20px;">Questions and Queries</h5>
          <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your query" style="height: 70px;">
            </div>
            <button type="submit" class="btn btn-custom btn-block" style="background-color: #3BA859;color: white; margin-top: 10px; width: 100%;">Submit</button>
          </form>
        </div>
        <hr style="border-top: 2px solid black; margin-top: 20px;">
        
    <!-- All Rights Reserved -->
    <p>&copy; 2024 Car Rental. All rights reserved.</p>
      </div>
      
    </div>
    
  </footer>

</div>

    <!-- Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="limitModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Profile Image:</strong> <img :src="user.profile" alt="Profile Image" style="max-width: 100%;"></p>

        <p><strong>Name:</strong> {{ user.name }}</p>
        <p><strong>Lastname:</strong> {{ user.lastname }}</p>
        <p><strong>Email:</strong> {{ user.email }}</p>
        <p><strong>Gender:</strong> {{ user.gender }}</p>
        <p><strong>Date of Birth:</strong> {{ user.day }}/{{ user.month }}/{{ user.year }}</p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" @click="logoutConfirmation">Logout</button>
      </div>
    </div>
  </div>
</div>
<!--Footer-->

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="limitModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Logout?.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="showProfile">Back</button>
        <button type="button" class="btn btn-danger" @click="logout">{{ logoutText }}</button>
      </div>
    </div>
  </div>
</div>



  </template>

  

<style scoped>

.custom-navbar .navbar-brand {
    margin-right: auto;
    margin-left: -90px; /* Adjust the value as needed */
}

.custom-navbar {
    background-color: #4D5167;
}


.custom-navbar .nav-link {
    color: white;
    position: relative; /* Ensure the link is positioned relatively */
}

.custom-navbar .nav-link::before {
    content: ''; /* Add an empty content */
    position: absolute;
    bottom: -3px; /* Adjust the position of the indicator */
    left: 0;
    width: 100%;
    height: 2px; /* Height of the indicator */
    background-color: transparent; /* Initial color of the indicator */
    transition: background-color 0.3s; /* Add transition for smooth color change */
}

.custom-navbar .nav-link:hover::before {
    background-color: white; /* Change color on hover */
}


.custom-navbar .form-control {
    background-color: #fff;
    color: #000;
}

.custom-navbar .btn-success {
    background-color: #28a745;
    border-color: #28a745;
    color: #fff;
}


.container-search {
  display: flex;
  margin-left: -5px; /* Adjust the margin to move the content to the left */
}

.checkbox-column {
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  margin-right: 80px;
}

.checkbox-item {
  display: flex;
  align-items: center;
}

.checkbox-item input[type="checkbox"] {
  margin-right: 5px;
}

.bg-custom {
  background-color: #4D5167;
}

.text-white {
  color: white;
}

.btn-custom {
  background-color:#49D06E;
  color: white;
  border: none;
}

.btn-custom:hover {
  background-color: #3B8C53;
}

.card {
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-control {
  border-radius: 5px;
}

.form-group {
  margin-bottom: 20px;
}

.card-body {
  padding: 40px;
}
.bg-custom-footer {
    background-color: #4D5167; /* Custom background color for the footer */
  }

</style>



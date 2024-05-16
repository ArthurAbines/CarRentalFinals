<template>
     <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #4D5167; padding:.5rem 0;">
    <div class="container">
      <router-link class="navbar-brand d-flex align-items-center" to="/" style="color: #fff; font-weight: bold; margin-left: -100px;">
        <img src="@/assets/rental logo.png" alt="Logo" width="90">
      </router-link>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: -10px;">
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/homepage">Home </router-link>
          </li>
        
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/Services">Services</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/FAQ">FAQ</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/about">About Us </router-link>
          </li>
       
        </ul>
        <form class="d-flex flex-grow-0 justify-content-end">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 0.25rem;">
          <button class="btn btn-success" type="submit" style="border-radius: 0.25rem;"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
    
    
  <div class="container mt-4">
  <h2 class="text-center mb-4">Milestones</h2>
  <div class="row">
    <!-- First Milestone -->
    <div class="col-md-3">
      <div class="card">
        <img src="@/assets/11.png" alt="Milestone Image" class="card-img-top" style="max-width: 200px;">
        <div class="card-body">
          <h5 class="card-title">First Milestone 1999</h5>
          <p class="card-text">Rent X was established.</p>
        </div>
      </div>
    </div>
    <!-- Second Milestone -->
    <div class="col-md-3">
      <div class="card">
        <img src="@/assets/12.png" alt="Milestone Image" class="card-img-top" style="max-width: 200px;">
        <div class="card-body">
          <h5 class="card-title">Second Milestone 2001</h5>
          <p class="card-text">Landed corporate accounts.</p>
        </div>
      </div>
    </div>
    <!-- Third Milestone -->
    <div class="col-md-3">
      <div class="card">
        <img src="@/assets/13.png" alt="Milestone Image" class="card-img-top" style="max-width: 200px;">
        <div class="card-body">
          <h5 class="card-title">Third Milestone 2002</h5>
          <p class="card-text">Rent-x launched its official website</p>
        </div>
      </div>
    </div>
    <!-- Fourth Milestone -->
    <div class="col-md-3">
      <div class="card">
        <img src="@/assets/14.png" alt="Milestone Image" class="card-img-top" style="max-width: 200px;">
        <div class="card-body">
          <h5 class="card-title">Fourth Milestone 2004</h5>
          <p class="card-text">Rent- X started partnership with Caltex Philippines.</p>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="footer-container" style="height: auto; margin-top: 100px;">
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
    
    
    
    
    
    
    </template>
    
    <script>
    export default {
      name: 'NavbarComponent'
    }
    </script>
    
    <style scoped>
    
    
    
    .custom-nav-link {
        font-weight: bold;
        color: white;
        border: 1px solid white;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        padding: 5px;
        margin-left: 5px;
        width: 100px;
        text-align: center;
    }
    
    .custom-nav-link:hover {
        background-color: #E6E6E6; /* Slightly darken the background on hover */
        color: #4D5167;
    }
    

   /* Timeline styles */
.timeline {
  position: relative;
  max-width: 700px;
  margin: 0 auto;
}

.timeline-item {
  display: flex;
 
  margin-bottom: 40px;
}

.timeline-circle {
  width: 20px;
  height: 20px;
  background-color: #4D5167;
  border-radius: 50%;
}

.timeline-line {
  width: 2px;
  height: 100%;
  background-color: #4D5167;

  left: 50%;
  transform: translateX(-50%);
}

.milestone-left {
  flex-grow: 1;
  margin-right: 40px;
}

.milestone-right {
  flex-grow: 1;
  margin-left: 40px;
}

/* Card styles */
.card {
  border: none;
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
  padding: 20px;
}

.card-title {
  color: #4D5167;
}

.card-text {
  color: #6c757d;
}

/* Responsive styles */
@media (max-width: 767px) {
  .timeline-item {
    flex-direction: column;
    align-items: flex-start;
  }

  .timeline-circle {
    margin-bottom: 20px;
  }

  .milestone-left,
  .milestone-right {
    margin: 0;
  }

  .timeline-line {
    display: none;
  }
  .footer-container {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #4D5167;
  color: white;
  text-align: center;
}

}
    </style>
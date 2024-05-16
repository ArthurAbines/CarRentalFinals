<template>
  <div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #4D5167; padding:.5rem 0;">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#" style="color: #fff; font-weight: bold; margin-left: -100px;">
      <img src="@/assets/rental logo.png" alt="Logo" width="80" >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style = "margin-left: -10px;">
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="#">Rentals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="#">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="#">Forum</a>
        </li>
      </ul>
      <form class="d-flex" style="max-width: 250px; margin-right: -90px; ">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 0.25rem; ">
        <button class="btn btn-success" type="submit" style="border-radius: 0.25rem;"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
    <!-- Adjusted button color -->
    <div style="position: relative;">
      <img src="@/assets/22.jpg" alt="Image below navbar" style="width: 100%; height: 900px; ">
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
        <h2 style="text-shadow: 3px 3px 6px rgba(0, 0, 0, 4);">Discover Your Perfect Ride at Affordable Prices</h2>
<p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 4);">Explore our wide selection of featured vehicles and take advantage of our deals. Book now and hit the road!</p>

        <router-link to="/browse">
  <button class="btn btn-success" type="submit">Rent Now</button>
</router-link>
    </div>
  </div>

    <!--CARDS-->
    <div style="background-color: white; text-align: left; padding: 60px;">
      <h3>Top Pick Vehicle This Month</h3>
      <div class="row">
        <div class="col-md-3">
          <a href="/nissan-patrol" style="text-decoration: none;">
            <div class="card h-100" style="width: 20rem;">
              <img src="@/assets/NISSAN-PATROL.png" class="card-img-top" alt="Car 1" style="height: 200px; object-fit: cover;">
              <div class="card-footer" style="background-color: #D9D9D9; position: relative;">
                <h5 class="card-title" style="margin-bottom: 0; color: black;">Nissan Patrol</h5>
                <img src="@/assets/Nissan_2020_logo.png" alt="Logo" width="40" style="position: absolute; bottom: 5px; right: 5px;"> 
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="/FotonToano" style="text-decoration: none;">
            <div class="card h-100" style="width: 20rem;">
              <img src="@/assets/foton toano.png" class="card-img-top" alt="Car 2" style="height: 200px; object-fit: cover;">
              <div class="card-footer" style="background-color: #D9D9D9; position: relative;">
                <h5 class="card-title" style="margin-bottom: 0; color: black;">Foton Toano</h5>
                <img src="@/assets/Foton-logo.png" alt="Logo" height="20" width="60" style="position: absolute; bottom: 10px; right: 10px;"> <!-- Adjusted icon size -->
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="/MitsubishiMirageG4" style="text-decoration: none;">
            <div class="card h-100" style="width: 20rem;">
              <img src="@/assets/mirage.png" class="card-img-top" alt="Car 3" style="height: 200px; object-fit: cover;">
              <div class="card-footer" style="background-color: #D9D9D9; position: relative;">
                <h5 class="card-title" style="margin-bottom: 0; color: black;">Mitsubishi Mirage G4</h5>
                <img src="@/assets/1200px-Mitsubishi-logo.png" alt="Logo" width="60" style="position: absolute; bottom: 5px; right: 5px;"> <!-- Adjusted icon size -->
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="/ChevroletSuburban" style="text-decoration: none;">
            <div class="card h-100" style="width: 20rem;">
              <img src="@/assets/chevrolet.png" class="card-img-top" alt="Car 4" style="height: 200px; object-fit: cover;">
              <div class="card-footer" style="background-color: #D9D9D9; position: relative;">
                <h5 class="card-title" style="margin-bottom: 0; color: black;">Chevrolet Suburban</h5>
                <img src="@/assets/Chevrolet-logo.png" alt="Logo" height="38" width="45" style="position: absolute; bottom: 1px; right: 5px;"> <!-- Adjusted icon size -->
              </div>
            </div>
          </a>
        </div>


        <!-- WE OFFER PART -->
        <div class="col-md-12 text-center mt-4">
          <div class="mb-5"></div>
          <h3>We Offer</h3>
          <div class="mb-5"></div>
          <div class="row align-items-center">
            <div class="col-md-3 text-center">
              <img src="@/assets/reserve.png" alt="Icon 1" style="width: 100px; height: 100px;">
              <h5>Easy Booking Process</h5>
              <p>Browse, Select, and reserve your vehicle in just a few clicks</p>
            </div>
            <div class="col-md-3 text-center">
              <img src="@/assets/car.png" alt="Icon 2" style="width: 100px; height: 100px;"> <!-- Adjusted icon size -->
              <h5>Wide Variety of Vehicles</h5>
              <p>Choose from a variety of well-maintained vehicles to suit your needs.</p>
            </div>
            <div class="col-md-3 text-center">
              <img src="@/assets/calendar.png" alt="Icon 3" style="width: 100px; height: 100px;"> <!-- Adjusted icon size -->
              <h5>Flexible Rental Options</h5>
              <p>Rent by hour,day,week,or month choose what’s most convenient for you</p>
            </div>
            <div class="col-md-3 text-center">
              <img src="@/assets/security.png" alt="Icon 4" style="width: 100px; height: 100px;"> <!-- Adjusted icon size -->
              <h5>Security</h5>
              <p>We ensure that your data remains confidential</p>
            </div>
            <div class="mb-5"></div>
             <div class="col-md-3 text-center">
              <img src="@/assets/receipt.png" alt="Icon 5" style="width: 100px; height: 100px;"> <!-- Adjusted icon size -->
              <h5>Convenient Locations</h5>
              <p>Strategically located pickup points for your convenience.</p>
            </div>
            <div class="col-md-3 text-center">
              <img src="@/assets/customer-service.png" alt="Icon 6" style="width: 100px; height: 100px;"> <!-- Adjusted icon size -->
              <h5>24/7 Support</h5>
              <p>Customer service available round the clock for assistance.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<div style="background-color: white; text-align: center; padding: 20px;">
      <h2>Wide variety of Vehicles</h2>
    </div>


    <!-- CAROUSEL -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="@/assets/nav-pro-4x-stealth-gray.png" class="d-block w-100" alt="..." style="height: 500px; object-fit: contain;">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="@/assets/chevrolet.png" class="d-block w-100" alt="..." style="height: 400px; object-fit: contain;">
    </div>
    <div class="carousel-item">
      <img src="@/assets/elantra-n-section-spec.png" class="d-block w-100" alt="..." style="height: 400px; object-fit: contain;">
    </div>
    <div class="carousel-item">
      <img src="@/assets/nissan.png" class="d-block w-100" alt="..." style="height: 400px; object-fit: contain;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- FOOTER -->
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
            <li><a href="#" style="color: white;">FAQ</a></li>
            <li><a href="#" style="color: white;">Why Choose Us?</a></li>
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
/* Custom styles here */

.card {
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: scale(1.05);
}

.card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.215);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.card:hover::before {
  opacity: 1;
}

.card-footer {
  position: relative;
  z-index: 1;
}

.card-footer h5 {
  color: white;
}

.card-footer img {
  position: absolute;
  bottom: 5px;
  right: 5px;
}

/* Hover effect for icons */
.col-md-3.text-center:hover img {
  transform: scale(1.1); /* Scale the icons on hover */
}
.col-md-3.text-center {
  transition: transform 0.3s ease; /* Smooth transition for scaling */
}

.col-md-3.text-center:hover {
  transform: scale(1.1); /* Scale the icon container on hover */
}



.custom-nav-link {
    font-weight: bold;
    color: white;
   
    border: 1px solid white;
    border-radius: 7px;
    transition: background-color 0.3s, color 0.3s;
    padding:5px;
    margin-left: 5px;
    width: 90px;
    text-align: center;
}

  .custom-nav-link:hover {
    background-color: white;
    color: #4D5167;
  }

</style>
<template>

 <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4D5167;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img :src="require('@/assets/rental logo.png')" alt="Logo" width="80">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Rentals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Forum</a>
          </li>
        </ul>
        <form class="d-flex ms-auto">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
</form>
      </div>
    </div>
  </nav>


  <!-- Name of Car -->
  <div class="container mt-4">
    <div class="row align-items-center ">
     <div class="col">
  <h1 class="text-center" style="color: #000; font-weight: bold;">Nissan Navara<img src="@/assets/Nissan_2020_logo.png" alt="Logo" width="60" height="50"></h1>
  </div>
    </div>
  </div>

   
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-lg-6">

 <!-- Card of the car -->
 <div class="card" style="width: 700px; height: 480px; margin-left: -80px; background-color: #F0F0F0; border-color: #D9D9D9; position: relative;">
  <div class="card-body" style="position: relative;">
    <img src="@/assets/nav-pro-4x-stealth-gray.png" alt="Car" style="width: 100%; height:100%; object-fit: contain;">
    <div class="mt-3" style="color: black; position: absolute; bottom: 15px; left: 10px;"> <!-- Adjusted bottom value -->
      <p class="d-inline" style="margin-right: 10px;">Pricing: 1800/day</p> <!-- Aligned price to the left -->
    </div>
    <div class="mt-3" style="position: absolute; bottom: 15px; right: 10px;"> <!-- Adjusted bottom value -->
      <button class="btn btn-custom" style="background-color: #4D5167; color: white;" @click="showModal = true">Rent Now</button> <!-- Moved button to the right -->
    </div>
  </div>

  <!-- Modal -->
  <div v-if="showModal" class="modal fade show d-block" tabindex="-1" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Select Rental Dates</h5>
          <button type="button" class="btn-close" @click="showModal = false" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="startDate">Start Date:</label>
            <input type="date" class="form-control" id="startDate">
            <input type="time" class="form-control mt-2" id="startTime">
          </div>
          <div class="mb-3">
            <label for="returnDate">Return Date:</label>
            <input type="date" class="form-control" id="returnDate">
            <input type="time" class="form-control mt-2" id="returnTime">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" @click="showModal = false">Close</button>
          <button type="button" class="btn btn-primary" @click="confirmRental">Confirm Rental</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


 <!-- Overview -->
<div class="col-lg-5 text-center mt-5">
  <h2 style="text-decoration: underline;">Nissan NV350 Urvan Overview</h2>
  <p>
    Either for family trips or business use, the Nissan NV350 Urvan is a reliable workhorse that can comfortably accommodate 10 to 18 people, depending on the variant. Nissan Philippines also has a cargo version for business utility.
  </p>
</div>
    </div>
  </div>

  <!-- Specifications Header Left -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h3>Nissan NV350 Urvan Specifications</h3>
        <table class="table table-striped mt-1" style="border-collapse: collapse; border: 1px solid #D9D9D9;"> <!-- Adjusted width of the table -->
          <tbody>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Body Type</td>
              <td style="border: 1px solid #D9D9D9;">Pick-up Truck</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">No. of seats</td>
              <td style="border: 1px solid #D9D9D9;">18</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Fuel Type</td>
              <td style="border: 1px solid #D9D9D9;">Diesel</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Transmission</td>
              <td style="border: 1px solid #D9D9D9;">Manual</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Airbags</td>
              <td style="border: 1px solid #D9D9D9;">2</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Front Parking Sensors</td>
              <td style="border: 1px solid #D9D9D9;">Not Available</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Rear Parking Sensors</td>
              <td style="border: 1px solid #D9D9D9;">Not Available</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Drivetrain</td>
              <td style="border: 1px solid #D9D9D9;">Rear-Wheel Drive</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Fuel Capacity</td>
              <td style="border: 1px solid #D9D9D9;">65 Liters</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Fuel Consumption</td>
              <td style="border: 1px solid #D9D9D9;">8km/L</td>
            </tr>
          </tbody>
        </table>
      </div>
 <div class="col-md-6">
  <div class="d-flex justify-content-start"> <!-- Adjusted justify-content to start -->
    <div style="margin-right: 0;  margin-left: 130px"> <!-- Adjusted margin-right -->
      <h3 class="mb-0">Pros</h3> <!-- Moved "Pros" header to the left -->
    </div>
    <div style="margin-right: 100px; margin-left: 250px;"> <!-- Adjusted margin-left and added negative margin-right -->
      <h3 class="mb-0">Cons</h3> <!-- Added "Cons" header -->
    </div>
  </div>

  <!-- Specifications Header Right -->
  <table class="table table-striped mt-1" style="border-collapse: collapse; border: 1px solid #D9D9D9;"> <!-- Adjusted width of the table -->
    <tbody>
      <tr>
        <td style="border: 1px solid #D9D9D9;">Spacious Interior</td>
        <td style="border: 1px solid #D9D9D9;">Outdated Interior</td>
      </tr>
      <tr>
        <td style="border: 1px solid #D9D9D9;">Versatility</td>
        <td style="border: 1px solid #D9D9D9;">Limited Safety Features</td>
      </tr>
      <tr>
        <td style="border: 1px solid #D9D9D9;">Comfortable Ride</td>
        <td style="border: 1px solid #D9D9D9;">Noise and Vibration</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
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
  data() {
    return {
      showModal: false
    };
  },
  methods: {
    confirmRental() {
      const startDate = document.getElementById("startDate").value;
      const startTime = document.getElementById("startTime").value;
      const returnDate = document.getElementById("returnDate").value;
      const returnTime = document.getElementById("returnTime").value;

      // You can now use startDate, startTime, returnDate, and returnTime to process the rental confirmation
      // For example:
      console.log("Start Date:", startDate);
      console.log("Start Time:", startTime);
      console.log("Return Date:", returnDate);
      console.log("Return Time:", returnTime);

      // Close the modal after confirming rental
      this.showModal = false;
    }
  }
};
</script>

<style>
 .btn-custom {
    background-color: #4D5167;
    border-color: #4D5167;
    color: white;
  }
  /* Define alternate row colors */
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9; /* Alternate row color */
  }
  .table-striped tbody tr:nth-of-type(even) {
    background-color: #ffffff; /* Default row color */
  }
   /* CSS for hover effect */
  .card:hover {
    transform: translateY(-5px); /* Move the card up slightly on hover */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
  }
</style>

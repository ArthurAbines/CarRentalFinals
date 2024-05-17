<template>

 <!-- Navigation Bar -->
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
            <router-link class="nav-link custom-nav-link" to="/about">About Us</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/Services">Services</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/Milestones">Milestones</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/FAQ">FAQ</router-link>
          </li>
       
        </ul>
        <form class="d-flex flex-grow-0 justify-content-end">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 0.25rem;">
          <button class="btn btn-success" type="submit" style="border-radius: 0.25rem;"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>


  <!-- Name of Car -->
  <div class="container mt-4">
    <div class="row align-items-center ">
     <div class="col">
  <h1 class="text-center" style="color: #000; font-weight: bold;">NISSAN PATROL <img src="@/assets/Nissan_2020_logo.png" alt="Nissan Patrol Logo" width="50"></h1>
  </div>
    </div>
  </div>

   

  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-lg-6">


 <!-- Card of the car -->
 <div class="card card-hover responsive-card" style="position: relative; width: 700px; height: 480px; margin-left: -80px; background-color: #F0F0F0; border-color: #D9D9D9;">
  <div class="car-image-container">
    <img src="@/assets/NISSAN-PATROL.png" alt="Car" class="car-image" style="max-width: 100%; max-height: 100%; transition: transform 0.3s ease;">
  </div>
  <!-- Pricing and Rent Now at the bottom -->
  <div class="card-body" style="position: absolute; bottom: 0; width: 100%;">
    <div class="mt-3" style="color: black; position: absolute; bottom: 10px; left: 10px;">
      <p class="d-inline">Pricing: 1000/day</p>
    </div>
    <div class="mt-3" style="position: absolute; bottom: 10px; right: 10px;">
      <button class="btn btn-custom float-end" style="background-color: #4D5167; color: white;" @click="showModal = true">Rent Now</button>
    </div>
  </div>

  <!-- Rental Dates Modal -->
  <div v-if="showModal" class="modal-overlay" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Select Rental Dates</h5>
          <button type="button" class="btn-close" @click="showModal = false"></button>
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
          <button type="button" class="btn btn-primary" @click="showTerms">Confirm Rental</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Terms and Conditions Modal -->
  <div v-if="showTermsModal" class="modal-overlay" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Terms and Conditions</h5>
          <button type="button" class="btn-close" @click="showTermsModal = false"></button>
        </div>
        <div class="modal-body" style="max-height: 300px; overflow-y: auto;">
          <p><strong>Car Rental Terms and Conditions</strong></p>
          <p>Please read these terms and conditions carefully before using our car rental services.</p>
          <ul>
            <li>You must present a valid driver's license and credit card upon rental.</li>
            <li>The rental period starts and ends at the times specified in the rental agreement.</li>
            <li>You are responsible for any damage to the vehicle during the rental period.</li>
            <li>Fuel policy: Return the car with the same fuel level as at the start of the rental.</li>
            <li>Additional charges may apply for late returns, extra mileage, and additional drivers.</li>
            <li>No smoking or pets allowed in the vehicle.</li>
            <li>By agreeing to these terms, you consent to a pre-authorization charge on your credit card for the estimated rental amount.</li>
          </ul>
          <p>By clicking "Agree to All", you accept these terms and conditions and agree to abide by them during your rental period.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" @click="showTermsModal = false">Cancel</button>
          <button type="button" class="btn btn-primary" @click="confirmRental">Agree to All</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
        <!-- Nissan Patrol Overview -->
      <div class="col-lg-5 text-center mt-5"> <!-- Added margin top -->
        <h2>Nissan Patrol Overview</h2>
        <p>
The Nissan Patrol is the brand's flagship SUV model in the Philippines. It comes with Nissan's latest iteration of the V-motion look and comes with a futuristic and modern design. 
It comes with LED C-shaped headlights that are paired with LED daytime running lights and a new V-motion grille. 
At the back, the SUV also comes with a redesigned tailgate that features a chrome garnish similar to that found on the Nissan Terra.

</p>
      </div>
    </div>
  </div>

  <!-- Specifications Header Left -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h3>Nissan Patrol Specifications</h3>
        <table class="table table-striped mt-1" style="border-collapse: collapse; border: 1px solid #D9D9D9;"> <!-- Adjusted width of the table -->
          <tbody>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Body Type</td>
              <td style="border: 1px solid #D9D9D9;">SUV</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">No. of seats</td>
              <td style="border: 1px solid #D9D9D9;">8</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Fuel Type</td>
              <td style="border: 1px solid #D9D9D9;">Gasoline</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Transmission</td>
              <td style="border: 1px solid #D9D9D9;">Automatic</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Airbags</td>
              <td style="border: 1px solid #D9D9D9;">6</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Front Parking Sensors</td>
              <td style="border: 1px solid #D9D9D9;">Available</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Rear Parking Sensors</td>
              <td style="border: 1px solid #D9D9D9;">Available</td>
            </tr>
             <tr>
              <td style="border: 1px solid #D9D9D9;">Drivetrain</td>
              <td style="border: 1px solid #D9D9D9;">Four-Wheel Drive</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Fuel Capacity</td>
              <td style="border: 1px solid #D9D9D9;">100 to 140 liters</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Power Windows</td>
              <td style="border: 1px solid #D9D9D9;">Available</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Key less Entry</td>
              <td style="border: 1px solid #D9D9D9;">Yes</td>
            </tr>
            <tr>
              <td style="border: 1px solid #D9D9D9;">Navigation Ready</td>
              <td style="border: 1px solid #D9D9D9;">Available</td>
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
        <td style="border: 1px solid #D9D9D9;">Off-Road Capability</td>
        <td style="border: 1px solid #D9D9D9;">Fuel Inefficient</td>
      </tr>
      <tr>
        <td style="border: 1px solid #D9D9D9;">Powerful Engine</td>
        <td style="border: 1px solid #D9D9D9;">Less Smooth Handling</td>
      </tr>
      <tr>
        <td style="border: 1px solid #D9D9D9;">Spacious Interior</td>
        <td style="border: 1px solid #D9D9D9;">Outdated Technology</td>
      </tr>
      <tr>
        <td style="border: 1px solid #D9D9D9;">Towing Capacity</td>
        <td style="border: 1px solid #D9D9D9;"></td>
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
  name: 'NavbarComponent',
  data() {
    return {
      showModal: false,
      showTermsModal: false
    };
  },
  methods: {
    showTerms() {
      this.showModal = false;
      this.showTermsModal = true;
    },
      
    closeTermsModal() {
      this.showTermsModal = false;
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
   .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for transform and box-shadow */
}

.card:hover {
    transform: translateY(-5px); /* Move the card up slightly on hover */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
}

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

.card-hover {
  position: relative;
  max-width: 700px;
  margin: 0 auto;
}

.responsive-card {
  width: 100%;
  height: auto;
  background-color: #F0F0F0;
  border-color: #D9D9D9;
}

.car-image-container {
  max-width: 100%;
  max-height: 300px; /* Adjust height as needed */
  overflow: hidden;
}

.car-image {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

/* Modal styles */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgba(0, 0, 0, 0.7);
  z-index: 1050;
}

.modal-dialog {
  width: 90%;
  max-width: 600px;
}

.modal-content {
  background: #fff;
  padding: 20px;
  border-radius: 5px;
}

.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #dee2e6;
}

.modal-body {
  max-height: 70vh;
  overflow-y: auto;
}

.modal-footer {
  display: flex;
  justify-content: flex-end;
  padding-top: 10px;
  border-top: 1px solid #dee2e6;
}

.modal-footer button + button {
  margin-left: 10px; /* Add spacing between buttons */
}

</style>

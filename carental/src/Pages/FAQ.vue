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
            <router-link class="nav-link custom-nav-link" to="/Milestones">Milestones</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link custom-nav-link" to="/FAQ">Services</router-link>
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
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="accordion" id="faqAccordion">
          <div v-for="(question, index) in questions" :key="index" class="accordion-item">
            <h2 class="accordion-header" :id="'heading_' + index">
              <button class="accordion-button collapsed" type="button" :data-bs-toggle="'collapse'" :data-bs-target="'#collapse_' + index" aria-expanded="false" :aria-controls="'collapse_' + index">
                {{ question.text }}
              </button>
            </h2>
            <div :id="'collapse_' + index" class="accordion-collapse collapse" :aria-labelledby="'heading_' + index" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <p>{{ question.answer }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    
    
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
      data() {
        return {
          questions: [
            { text: 'Cost of car rental', answer: 'The cost varies depending on the type of car and rental duration.' },
            { text: 'Do you have available buses?', answer: 'Yes, we have available buses for rental.' },
            { text: 'Duration of rent or lease', answer: 'You can rent a car for as short as a day or for longer periods as needed.' },
            { text: 'Geographical limitations?', answer: 'Our rental services may have geographical limitations, please check with our staff for details.' },
            { text: 'Are self-driven cars available?', answer: 'No, we do not offer self-driven car rental options.' },
            { text: 'Who shoulders expense in case of accidents?', answer: 'The responsibility for expenses in case of accidents depends on the rental agreement and insurance coverage.' },
            { text: 'Booking cancellation fees?', answer: 'Cancellation fees may apply depending on the terms and conditions of your booking.' },
            { text: 'Overtime fees?', answer: 'Overtime fees may apply if you exceed the agreed-upon rental duration.' },
            { text: 'Maintenance for leased cars?', answer: 'Maintenance for leased cars is typically covered by the lessor, but terms may vary.' }
          ]
        };
      }
    };
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
    
    <style>
.accordion-button {
  background-color: #f8f9fa;
  color: #343a40;
  border-color: #dee2e6;
}

.accordion-button:hover {
  background-color: #e9ecef;
}

.accordion-body {
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-top: none;
}

.accordion-item {
  margin-bottom: 20px;
}
</style>
 
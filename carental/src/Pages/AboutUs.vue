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

  <div class="container-fluid px-0">
  <div class="row">
    <div class="col-md-12 px-0">
      <div style="position: relative;">
        <img src="@/assets/ggg.webp" alt="Rent-X Car Services" class="img-fluid" style="width: 100%;">

        <!-- Text Overlay with Black Background -->
        <div style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; background-color: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 10px; width: 80%;">
          <h2 style="font-size: 30px; margin-bottom: 20px;">About Rent-X</h2>
          <p style="font-size: 20px;">Rent-X Car Services began as a family-owned business, originally registered as a single proprietorship in 2005 under the name Reia Rent-A-Car Services.</p>
          <p style="font-size: 20px;">In 2016, due to increasing client demands and heightened industry competition, we transformed into Rent-X Transport Services, Inc.</p>
          <p style="font-size: 20px;">This change was facilitated by partnering with investors to secure the necessary resources for maintaining the high-quality transport services we have provided to both individual and corporate clients over the past decade. </p>
          <p style="font-size: 20px;">At Rent-X, we continuously innovate and adopt best practices in the car rental industry to better serve our valued customers.</p>
          <p style="font-size: 20px;">We prioritize your time and satisfaction, ensuring that your daily commute is the least of your concerns. </p>
          <p style="font-size: 20px;">Rent-X offers a fleet of premium vehicles, allowing you to enjoy seamless transportation without the hassle of procurement, maintenance, or insurance.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4" >
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card mb-3 text-center">
        <img src="@/assets/leadership.png" class="card-img-top" alt="Mission Image" style="max-width: 100px; margin: 0 auto;">
        <div class="card-overlay"></div>
        <div class="card-body">
          <h5 class="card-title">Mission</h5>
          <p class="card-text">Our mission is to provide reliable and affordable transportation solutions to our customers while maintaining the highest standards of safety and customer satisfaction.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-3 text-center">
        <img src="@/assets/vision.png" class="card-img-top" alt="Vision Image" style="max-width: 100px; margin: 0 auto;">
        <div class="card-overlay"></div>
        <div class="card-body">
          <h5 class="card-title">Vision</h5>
          <p class="card-text">Our vision is to be the leading provider of transportation services, recognized for our commitment to excellence, innovation, and sustainability.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-3 text-center">
        <img src="@/assets/commitment.png" class="card-img-top" alt="Commitment Image" style="max-width: 100px; margin: 0 auto;">
        <div class="card-overlay"></div>
        <div class="card-body">
          <h5 class="card-title">Commitment</h5>
          <p class="card-text">We are committed to exceeding our customers' expectations by delivering exceptional service, maintaining a diverse and inclusive workplace, and contributing positively to the communities we serve.</p>
        </div>
        
      </div>
    </div>
  </div>
</div>

<div>
  <h2 class="text-center">Our Commitments</h2>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="background-color: rgba(77, 81, 103, 0.6);">
    <div class="carousel-inner">
      <div v-for="(items, index) in chunkedItems" :key="index" :class="{ 'carousel-item': true, 'active': index === 0 }">
        <div class="container mt-4">
          <div class="row">
            <div v-for="(item, i) in items" :key="i" class="col-md-4">
              <div class="card mb-3">
                <img v-if="item.image === '@/assets/1.png'" src="@/assets/1.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image2.jpg'" src="@/assets/2.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image3.jpg'" src="@/assets/3.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image4.jpg'" src="@/assets/4.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image5.jpg'" src="@/assets/5.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image6.jpg'" src="@/assets/6.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image7.jpg'" src="@/assets/7.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image8.jpg'" src="@/assets/8.png" class="card-img-top carousel-img" alt="Card Image">
                <img v-else-if="item.image === '@/assets/image9.jpg'" src="@/assets/9.png" class="card-img-top carousel-img" alt="Card Image">
                <div class="overlay"></div>
                <div class="card-body">
                  <h5 class="card-title">{{ item.title }}</h5>
                  <p class="card-text">{{ item.description }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
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
  items: [
    { title: 'Confidentiality', description: '', image: '@/assets/1.png' },
    { title: 'Contracts', description: '', image: '@/assets/image2.jpg' },
    { title: 'Payment', description: '', image: '@/assets/image3.jpg' },
    { title: 'Professional Conduct', description: '', image: '@/assets/image4.jpg' },
    { title: 'Quality Assurance', description: '', image: '@/assets/image5.jpg' },
    { title: 'Rates', description: '', image: '@/assets/image6.jpg' },
    { title: 'Fuel', description: '', image: '@/assets/image7.jpg' },
    { title: 'Charity Begins at Home', description: '', image: '@/assets/image8.jpg' },
    { title: 'Charity is the Best Policy', description: '', image: '@/assets/image9.jpg' }
  ],
  activeSlide: 0
};

  },
  computed: {
    chunkedItems() {
      const chunkSize = 3;
      const result = [];
      for (let i = 0; i < this.items.length; i += chunkSize) {
        result.push(this.items.slice(i, i + chunkSize));
      }
      return result;
    }
  },
  methods: {
    isVisibleSlide(index) {
      const currentIndex = this.activeSlide * 3;
      return index >= currentIndex && index < currentIndex + 3;
    }
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
.carousel-img {
  max-width: 100px; /* Adjust width here */
  max-height: 100px; /* Adjust height here */
  height: auto;
  display: block;
  margin: 0 auto;
}




</style>
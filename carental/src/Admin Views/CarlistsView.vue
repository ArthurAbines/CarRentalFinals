<template>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #4D5167;">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img :src="require('@/assets/rental logo.png')" alt="Logo" width="80" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">Reservations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">Client Profiles</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">Approved Rentals</a>
                </li>
               
              </ul>
              <form class="d-flex ms-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
    </form>
            </div>
          </div>
        </nav>
    
    
    
    <!--End of Navbar-->
    
    
    
    <!--SEARCH CATERGORY AREA-->
    <div class="container-search">
  <!-- Search criteria -->
  <div class="search-container">
    <!-- Search criteria -->

    <!-- Dropdowns for Edit, Add, and Delete -->
    <div class="search-group p-2 mb-3" style="width: 350px;">
 <div class="d-flex justify-content-between align-items-center bg-custom p-4 mb-0 rounded-top">

    <div class="dropdown" @click="toggleDropdown('edit')" style="cursor: pointer;">
      <img src="@/assets/pen.png" alt="Edit" class="icon" style="cursor: pointer; width: 20px; height: 20px; object-fit: contain;">
      <label for="dropdownMenuEdit" style="cursor: pointer; margin-left: 5px; color: white;">Edit</label>
      <ul class="dropdown-menu" :class="{ show: isDropdownOpen.edit }" aria-labelledby="dropdownMenuEdit">
        <li><a class="dropdown-item" href="#">Edit Option 1</a></li>
        <li><a class="dropdown-item" href="#">Edit Option 2</a></li>
        <li><a class="dropdown-item" href="#">Edit Option 3</a></li>
      </ul>
    </div>
    <div class="dropdown" @click="toggleDropdown('add')" style="cursor: pointer;">
      <img src="@/assets/transport.png" alt="Add" class="icon" style="cursor: pointer; width: 20px; height: 20px; object-fit: contain;">
      <label for="dropdownMenuAdd" style="cursor: pointer; margin-left: 5px; color: white;">Add</label>
      <ul class="dropdown-menu" :class="{ show: isDropdownOpen.add }" aria-labelledby="dropdownMenuAdd">
        <li><a class="dropdown-item" href="#">Add Option 1</a></li>
        <li><a class="dropdown-item" href="#">Add Option 2</a></li>
        <li><a class="dropdown-item" href="#">Add Option 3</a></li>
      </ul>
    </div>
    <div class="dropdown" @click="toggleDropdown('delete')" style="cursor: pointer;">
      <img src="@/assets/delete.png" alt="Delete" class="icon" style="cursor: pointer; width: 20px; height: 20px; object-fit: contain;">
      <label for="dropdownMenuDelete" style="cursor: pointer; margin-left: 5px; color: white;">Delete</label>
      <ul class="dropdown-menu" :class="{ show: isDropdownOpen.delete }" aria-labelledby="dropdownMenuDelete">
        <li><a class="dropdown-item" href="#">Delete Option 1</a></li>
        <li><a class="dropdown-item" href="#">Delete Option 2</a></li>
        <li><a class="dropdown-item" href="#">Delete Option 3</a></li>
      </ul>
    </div>
  </div>
</div>

    <!-- Dropdowns for Edit, Add, and Delete -->

    <!--Car manufactuer-->
    <div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px; margin-right: 100px;">
      <h5 style="background-color: #D9D9D9; color: #000; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Car manufacturer</h5>
      <div class="checkbox-grid" style="border: 2px solid black; border-top: none; display: flex; background-color: #4D5167;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
        <div class="checkbox-column" style="padding: 5px;">
          <div v-for="(manufacturer, index) in carManufacturers.slice(0, 5)" :key="index" class="checkbox-item">
            <input type="checkbox" :value="manufacturer" :id="'manufacturer_' + index">
            <label :for="'manufacturer_' + index" style="color: #fff;">{{ manufacturer }}</label>
          </div>
        </div>
        <div class="checkbox-column" style="padding: 5px;">
          <div v-for="(manufacturer, index) in carManufacturers.slice(5)" :key="index" class="checkbox-item">
            <input type="checkbox" :value="manufacturer" :id="'manufacturer_' + (index + 5)">
            <label :for="'manufacturer_' + (index + 5)" style="color: #fff;">{{ manufacturer }}</label>
          </div>
        </div>
      </div>
    </div>
    <!--Car manufactuer-->

    <!-- Body Type -->
    <div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
      <h5 style="background-color: #D9D9D9; color: #000; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Body type</h5>
      <div class="checkbox-grid" style="border: 2px solid black; border-top: none; display: grid; grid-template-columns: repeat(2, 1fr); background-color: #4D5167;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
        <div v-for="(type, index) in bodyTypes.slice(0, 4)" :key="index" class="checkbox-item" style="padding: 5px; display: flex; align-items: center;">
          <input type="checkbox" :value="type" :id="'bodytype_' + index" style="margin-right: 5px;">
          <label :for="'bodytype_' + index" style="color: #fff; margin-right: 10px;">{{ type }}</label>
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
      <h5 style="background-color: #D9D9D9; color: #000; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Price range</h5>
      <div style="padding: 5px; border: 2px solid black; background-color: #4D5167;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
        <select style="width: 100%; color: #000; background-color: #D9D9D9; border-radius: 5px;">
          <option value="custom" >Custom</option>
          <!-- Add other options here -->
        </select>
      </div>
    </div>
    <!-- Price Range -->

    <!-- Fuel Type -->
    <div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
      <h5 style="background-color: #D9D9D9; color: #000; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Fuel type</h5>
      <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: flex; justify-content: center; background-color: #4D5167;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
        <div v-for="(fuel, index) in fuelTypes" :key="index" class="checkbox-item" style="margin-right: 10px;">
          <input type="checkbox" :value="fuel" :id="'fuel_' + index" style="margin-right: 5px;">
          <label :for="'fuel_' + index" style="color: #fff;">{{ fuel }}</label>
        </div>
      </div>
    </div>
    <!-- Fuel Type -->

    <!-- Transmission -->
    <div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
      <h5 style="background-color: #D9D9D9; color: #000; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Transmission</h5>
      <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: flex; justify-content: center; background-color: #4D5167;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
        <div v-for="(transmission, index) in transmissions" :key="index" class="checkbox-item" style="margin-right: 10px;">
          <input type="checkbox" :value="transmission" :id="'transmission_' + index" style="margin-right: 5px;">
          <label :for="'transmission_' + index" style="color: #fff;">{{ transmission }}</label>
        </div>
      </div>
    </div>
    <!-- Transmission -->

    <!-- Seating Capacity -->
    <div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
      <h5 style="background-color: #D9D9D9; color: #000; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Seating capacity</h5>
      <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: flex; flex-wrap: wrap; justify-content: center; background-color: #4D5167;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
        <div v-for="(seat, index) in seatingCapacities" :key="index" class="checkbox-item" style="margin-right: 10px; margin-bottom: 10px;">
          <input type="checkbox" :value="seat" :id="'seat_' + index" style="margin-right: 5px;">
          <label :for="'seat_' + index" style="color: #fff;">{{ seat }}</label>
        </div>
      </div>
    </div>
    <!-- Seating Capacity -->

    <!-- Features -->
    <div class="search-group" style="padding: 10px; border-radius: 5px; width: 350px; margin-bottom: -10px;">
      <h5 style="background-color: #D9D9D9; color: #000; padding: 10px; margin: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border: 1px solid black;">Features</h5>
      <div class="checkbox-grid" style="border: 2px solid black; border-top: none; padding: 5px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; background-color: #4D5167;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
        <div v-for="(feature, index) in features" :key="index" class="checkbox-item">
          <input type="checkbox" :value="feature" :id="'feature_' + index" style="margin-right: 5px;">
          <label :for="'feature_' + index" style="color: #fff;">{{ feature }}</label>
        </div>
      </div>
    </div>
 </div>
    <!-- Search criteria -->


    <!-- Dropdowns for Edit, Add, and Delete -->

    <!-- Rest of the search criteria -->
    <!-- ... -->



            <!-- Search criteria -->
    
   
    
    <!--END of SEARCH CATERGORY AREA-->
    
    
    <div>
    <!-- Your search criteria content goes here -->
    <div class="card-container-big" style="border: 1px solid grey; padding: 10px; margin-top: 10px; margin-right: -40px; margin-left: -90px; border-radius: 5px;">
        <div class="search-criteria-container" style="border: 1px solid black; padding: 10px; margin-bottom: 30px; color: #fff;background-color: #4D5167;border-radius: 5px; display: flex; justify-content: flex-end; align-items: center;">
            <div class="dropdown" style="margin-left: 20px; position: relative;">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuUpdateNew" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="@/assets/pen.png" alt="Edit" style="width: 20px; height: 20px;">
                    <span class="text-white" style="margin-left: 5px;">Edit</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuUpdateNew" :class="{ show: isDropdownOpen.updateNew }">
                    <!-- Dropdown items for Edit -->
                    <li><a class="dropdown-item" href="#">Car Image</a></li>
                    <li><a class="dropdown-item" href="#">Car Logo</a></li>
                    <li><a class="dropdown-item" href="#">Car Name</a></li>
                </ul>
            </div>
            <div class="dropdown" style="margin-left: 20px; position: relative;">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuAddNew" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="@/assets/transport.png" alt="Add" style="width: 20px; height: 20px;">
                    <span class="text-white" style="margin-left: 5px;">Add</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuAddNew" :class="{ show: isDropdownOpen.addNew }">
                    <!-- Dropdown items for Add -->
                    <li><a class="dropdown-item" href="#">Car Image</a></li>
                    <li><a class="dropdown-item" href="#">Car Logo</a></li>
                    <li><a class="dropdown-item" href="#">Car Name</a></li>
                </ul>
            </div>
            <div class="dropdown" style="margin-left: 20px; position: relative;">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuDeleteNew" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="@/assets/delete.png" alt="Delete" style="width: 20px; height: 20px;">
                    <span class="text-white" style="margin-left: 5px;">Delete</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuDeleteNew" :class="{ show: isDropdownOpen.deleteNew }">
                    <!-- Dropdown items for Delete -->
                    <li><a class="dropdown-item" href="#">Car Image</a></li>
                    <li><a class="dropdown-item" href="#">Car Logo</a></li>
                    <li><a class="dropdown-item" href="#">Car Name</a></li>
                </ul>
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
        <footer class="text-center mt-5 text-white bg-custom-footer">
          <div class="container" >
            <div class="row">
              <div class="col-md-2">
                <img src="" alt="" style="max-width: 250px; margin-left: -15px;">
                <div style=" margin-top:25px;">
                 
                </div>
              </div>
              <div class="col-md-4">
               
              </div>
              <div class="col-md-3">
               
               
              </div>
              <div class="col-md-3">
               
              </div>
              <hr style="border-top: 2px solid black; margin-top: 20px;">
              <p>&copy; 2024 RENT-X. All rights reserved.</p>
            </div>
          </div>
        </footer>
      </div>
    <!--Footer-->
    
    
      </template>
      
      <script>
export default {
  data() {
    return {
      isDropdownOpen: {
        update: false,
        add: false,
        delete: false
      },
      carManufacturers: ['Nissan', 'BMW', 'Chevrolet', 'Foton', 'Gaz', 'Honda', 'Hyundai', 'Mitsubishi', 'Ford', 'Isuzu'],
      bodyTypes: ['SUV', 'Van', 'Sedan', 'Pickup'],
      fuelTypes: ['Gas', 'Diesel', 'Electric'],
      transmissions: ['Automatic', 'CVT', 'Manual'],
      seatingCapacities: Array.from({ length: 19 }, (_, i) => i + 1),
      features: ['Fuel Efficient', 'Power Windows', 'Front Parking Sensor', 'Rear Parking Sensor', 'Adjustable Seats', 'Navigation Ready','Push Start Button','Key less Entry'],
    };
  },
  methods: {
    toggleDropdown(type) {
      // Toggle the dropdown based on the type
      this.isDropdownOpen[type] = !this.isDropdownOpen[type];
    }
  }
};
</script>
      
      <style scoped>
    
    .custom-navbar .navbar-brand {
        margin-right: auto;
        margin-left: -90px; /* Adjust the value as needed */
    }
    
    .custom-navbar {
        background-color: #4D5167;
    }
    
    .custom-navbar .nav-link {
        color: white !important;
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
    
      .card {
        transition: box-shadow 0.3s ease, background-color 0.3s ease, transform 0.2s ease;
      }
    
      .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        background-color: #f5f5f5;
        transform: scale(1.03);
      }

      .bg-custom {
    background-color: #4D5167;
}
    </style>
    
    
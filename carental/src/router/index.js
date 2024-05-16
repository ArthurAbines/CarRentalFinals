// Import necessary dependencies
import { createRouter, createWebHistory } from 'vue-router'

import '@fortawesome/fontawesome-free/css/all.min.css';

//imports for client side


import RegistrationForm from '../Views/LoginRegisterForm.vue';

import BrowseCars from '../Views/BrowseCars.vue'; // Adjust the import path
import Homepage from '../Views/Homepage.vue';

//import for specific car page
import NissanPatrol from '../ListofCars/NissanPatrol.vue';
import BMWX7 from '../ListofCars/BMWX7.vue';
import ChevroletSuburban from '../ListofCars/ChevroletSuburban.vue';
import FotonToano from '../ListofCars/FotonToano.vue';
import GazelleNext from '../ListofCars/GazelleNext.vue';
import NissanNV350 from '../ListofCars/NissanNV350.vue';
import HondaCity from '../ListofCars/HondaCity.vue';
import HyundaiElantraN from '../ListofCars/HyundaiElantraN.vue';
import MitsubishiMirageG4 from '../ListofCars/MitsubishiMirageG4.vue';
import FordRanger from '../ListofCars/FordRanger.vue';
import IsuzuDMax from '../ListofCars/IsuzuDMax.vue';
import NissanNavara from '../ListofCars/NissanNavara.vue';

//imports for admin pages
import CarlistsView from '../Admin Views/CarlistsView.vue';

// Create routes array
const routes = [
  {
    path: '/',
    redirect: '/homepage' // Redirect to homepage by default
  },
  {
    path: '/browse',
    name: 'Browse',
    component: BrowseCars
  },
  {
    path: '/homepage',
    name: 'Homepage',
    component: Homepage
  },

 

  {
    path: '/registration',
    name: 'registration',
    component: RegistrationForm
  },
  //route for specific car page
  {
    path: '/nissan-patrol',
    name: 'NissanPatrol',
    component: NissanPatrol
  }, 
  {
    path: '/BMWX7',
    name: 'BMWX7',
    component: BMWX7
  }, 
  {
    path: '/ChevroletSuburban',
    name: 'ChevroletSuburban',
    component: ChevroletSuburban
  }, 
  {
    path: '/FotonToano',
    name: 'FotonToano',
    component: FotonToano
  }, 
  {
    path: '/GazelleNext',
    name: 'GazelleNext',
    component: GazelleNext
  }, 
  {
    path: '/NissanNV350',
    name: 'NissanNV350',
    component: NissanNV350
  }, 
  {
    path: '/  HondaCity',
    name: '  HondaCity',
    component:   HondaCity
  }, 
  {
    path: '/MitsubishiMirageG4',
    name: 'MitsubishiMirageG4',
    component: MitsubishiMirageG4
  }, 
  {
    path: '/HyundaiElantraN',
    name: 'HyundaiElantraN',
    component: HyundaiElantraN
  }, 

  {
    path: '/FordRanger',
    name: 'FordRanger',
    component: FordRanger
  }, 
  {
    path: '/IsuzuDMax',
    name: 'IsuzuDMax',
    component: IsuzuDMax
  }, 
  {
    path: '/NissanNavara',
    name: 'NissanNavara',
    component: NissanNavara
  }, 
 
  
//route for admin pages
{
  path: '/AdminCarlist',
  name: 'AdminCarlist',
  component: CarlistsView
}, 


  // {
  //   path: '/about',
  //   name: 'about',
  //   component: AboutView
  // },
  // {
  //   path: '/',
  //   name: 'client',
  //   component: ClientView
  // },
  // {
  //   path: '/login',
  //   name: 'login',
  //   component: LoginView,
  // },
  //  {
  //   path: '/admin',
  //   name: 'admin',
  //   component: AdminView,
  //   meta: { requiresAuth: true }, // Add meta field to indicate route requires authentication
  //   // props: true // This allows passing route params as props
  // },
  // {
  //   path: '/approval',
  //   name: 'approval',
  //   props: true,
  //   component: ApprovalView,
  //   meta: { requiresAuth: true} // Route requires authentication
  // },
  // {
  //   path: '/approved',
  //   name: 'approved',
  //   component: ApprovedView,
  //   meta: { requiresAuth: true} // Route requires authentication
  // },
  // {
  //   // path: '/clientprofile',
  //   path: '/clientprofile/:id',
  //   name: 'clientprofile',
  //   component: ClientProfileView,
  //   meta: { requiresAuth: true}, // Route requires authentication
  // },

  // {
  //   path: '/softdeletes',
  //   name: 'softdeletes',
  //   props: true,
  //   component: SoftDeleteView,
  //   meta: { requiresAuth: true} // Route requires authentication
  // },
  // //route for landing page
  // {
  //   path: '/aboutus',
  //   name: 'aboutus',
  //   component: AboutUsView,
  // },
]


// Create router instance
const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
});

// Add navigation guard to check if user is logged in


// router.beforeEach((to, from, next) => {
//   const isAuthenticated = getCookie('token'); // Check if token exists in cookie
//   const requiresAuth = to.matched.some(record => record.meta.requiresAuth); // Check if route requires authentication

//   // If route requires authentication and user is not logged in, redirect to login page
//   if (requiresAuth && !isAuthenticated) {
//     next('/login');
//   } else if (to.name === 'login'&& isAuthenticated  || isAuthenticated && to.path === '/') {
//     // If user is already logged in and tries to access login page, redirect to admin page or home page
//     next('/admin'); // You can change '/admin' to any other page you want to redirect to
//   }  else if (to.path === '/approval' && !isAuthenticated) {
//     // If user tries to access the approval page without being authenticated, redirect to login
//     next('/login');
//   } else {
//     next(); // Continue to the requested route
//   }
// });
// function getCookie(name) {
//   const cookies = document.cookie.split(';');
//   for (let i = 0; i < cookies.length; i++) {
//     const cookie = cookies[i].trim();
//     if (cookie.startsWith(name + '=')) {
//       return cookie.substring(name.length + 1);
//     }
//   }
//   return null;
// }

// Export router instance
export default router

// Import necessary dependencies
import { createRouter, createWebHistory } from 'vue-router'
import RegistrationForm from '@/components/LoginRegisterForm.vue';
import BrowseCars from '@/components/BrowseCars.vue';

// Create routes array
const routes = [
  {
    path: '/',
    name: 'browse',
    component: BrowseCars
  },
  {
    path: '/registration',
    name: 'registration',
    component: RegistrationForm
  }
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

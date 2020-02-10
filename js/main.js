import PromotionComponent from "./components/PromotionComponent.js";
import ContactComponent from "./components/ContactComponent.js";

const router = new VueRouter({
    routes: [
        { path: "/", name: "home", component: PromotionComponent },
        { path: "/contact", name: "contact", component: ContactComponent }

    ]
})
 var vm = new Vue ({
     el: '#app',

     router,

//     created: function() {
//         // run a fetch call and get the user data
//         console.log('created lifecycle hook fired here, go get user data');

//     },

//     methods: {
//         getUserData() {
//             // do a fetch call here and get the user from the DB
//             const url = './includes/index.php?getUser=1';

//             fetch(url) // get data from the DB
//             .then(res => res.json()) // translate JSON to plain object
//             .then(data => { // use the plain data object (the user)
//                 console.log(data); //log it into the console (testing)
//                 this.user.settings = data[0];
//             })
//             .catch((error) => console.error(error))
//         };
//     }
})
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

     data: {},

     mounted() {},

     methods: {},

     router,
}).$mount("#app");
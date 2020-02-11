import PromotionComponent from "./components/PromotionComponent.js";
import ContactComponent from "./components/ContactComponent.js";

const router = new VueRouter({
    routes: [{
            path: "/",
            name: "home",
            component: PromotionComponent
        },
        {
            path: "/contact",
            name: "contact",
            component: ContactComponent
        }

    ]
})

var vm = new Vue({
    el: '#app',

    data() {
        return {
            input: {
                country: "",
                firstname: "",
                lastname: "",
                email: ""
            }
        }
    },

    mounted() {},

    methods: {
        signup() {
            console.log('attempting to sign up');

            if (this.input.country != "" && this.input.firstname != "" && this.input.lastname != "" && this.input.email != "") {

                let url = `./admin/sign-up.php`;

                const formData = new FormData();

                formData.append("country", this.input.country);
                formData.append("firstname", this.input.firstname);
                formData.append("lastname", this.input.lastname);
                formData.append("email", this.input.email);

                fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data == "Signup Failed") {
                            console.log('login attempt failed');
                            return;
                        } else {

                        }

                    })
                    .catch(function (error) {
                        console.log(error);
                    })

            } else {
                console.log('blank forms');
            }
        }

    },



    router: router

}).$mount("#app");
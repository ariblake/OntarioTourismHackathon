export default {
    props: ['icon, title, description, alts'],

    template: `
    <section class="grid-x" id="exploreSection">
            <div class="cell small-12">
                <h2>Explore Ontario</h2>
            </div>
            <div v-for="icon in explore" sclass="cell small-6 large-3">
                <img  :src="'images/' + icon.icon" :alt="icon.alt">
                <h3 v-for="title in explore">{{ title.title }}</h3>
                <p v-for="description in explore">{{ description.description }}</p>
            </div>
            <div v-for="icon in explore2" sclass="cell small-6 large-3">
                <img  :src="'images/' + icon.icon" :alt="icon.alt">
                <h3 v-for="title in explore2">{{ title.title }}</h3>
                <p v-for="description in explore2">{{ description.description }}</p>
            </div>
            <div v-for="icon in explore3" sclass="cell small-6 large-3">
                <img  :src="'images/' + icon.icon" :alt="icon.alt">
                <h3 v-for="title in explore3">{{ title.title }}</h3>
                <p v-for="description in explore3">{{ description.description }}</p>
            </div>
            <div v-for="icon in explore4" sclass="cell small-6 large-3">
                <img  :src="'images/' + icon.icon" :alt="icon.alt">
                <h3 v-for="title in explore4">{{ title.title }}</h3>
                <p v-for="description in explore4">{{ description.description }}</p>
            </div>
        </section>
    `,

    

    data: function() {
        return {
           
            explore: [
                {icon: 'logo.svg', title: "City", description: "paragraph about city activities", alt: "icon of city"},
            ],
            explore2: [
                {icon: "icon2.svg", title: "Nature", description: "paragraph about nature activities", alt: "icon of nature"},
            ],
            explore3: [
                {icon: "icon3.svg", title: "Three", description: "paragraph about three", alt: "icon of "},
            ],
            explore4: [
                {icon: "icon4.svg", title: "Four", description: "paragraph about four", alt: "icon of "},
            ] 
        }
    }
}





// var app = new Vue({
//     el: '#exploreSection',
//     data: {
//         explore: [
//             {icon: "icon1.svg", title: "City", description: "paragraph about city activities", alt: "icon of city"},
//             {icon: "icon2.svg", title: "Nature", description: "paragraph about nature activities", alt: "icon of nature"},
//             {icon: "icon3.svg", title: "Three", description: "paragraph about activities", alt: "icon of "},
//             {icon: "icon4.svg", title: "Four", description: "paragraph about activities", alt: "icon of "}
//         ],
//         to: [
//             { title: "City"},
//             { title: "Nature"},
//             {title: "Three"},
//             {title: "Four"},
//             ]
//     }       
// })
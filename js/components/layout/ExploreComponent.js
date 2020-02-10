export default {
    props: ['icon, title, description'],

    template: `
    <section class="grid-x" id="exploreSection">
            <div class="cell small-12">
                <h2>Explore Ontario</h2>
            </div>
            <div v-for="item in explore" class="cell small-6 large-3">
                <img :src="'images/' + icon" :alt="alt">
                <h3>{{ title }}</h3>
                <p>{{ description }}</p>
            </div>
        </section>
    `,

    

    // data: function() {
    //     return {
    //         explore: [
    //             {icon: "icon1.svg", title: "City", description: "paragraph about city activities", alt: "icon of city"},
    //             {icon: "icon2.svg", title: "Nature", description: "paragraph about nature activities", alt: "icon of nature"},
    //             {icon: "icon3.svg", title: "Three", description: "paragraph about activities", alt: "icon of "},
    //             {icon: "icon4.svg", title: "Four", description: "paragraph about activities", alt: "icon of "},
    //         ]
    //     }
    // },
}

// new Vue({
//     el: '#exploreSection',
//     data: {
//         explore: [
//             {icon: "icon1.svg", title: "City", description: "paragraph about city activities", alt: "icon of city"},
//             {icon: "icon2.svg", title: "Nature", description: "paragraph about nature activities", alt: "icon of nature"},
//             {icon: "icon3.svg", title: "Three", description: "paragraph about activities", alt: "icon of "},
//             {icon: "icon4.svg", title: "Four", description: "paragraph about activities", alt: "icon of "}
//         ]
//     }       
// })
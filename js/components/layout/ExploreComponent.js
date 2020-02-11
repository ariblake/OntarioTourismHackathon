export default {
    props: ['icon, title, description, alt'],

    template: `
    <section class="grid-x" id="exploreSection">
            <div class="cell small-12">
                <h2>Explore Ontario</h2>
            </div>
            <div v-for="item in explore" class="cell small-6 large-3">
                <img :src="'images/' + item.icon" :alt="item.alt">
                <h3>{{ item.title }}</h3>
                <p>{{ item.description }}</p>
            </div>
        </section>
    `,

    data: function() {
        return {
            explore: [
                {icon: "icon1.png", title: "City", description: "paragraph about city activities", alt: "icon of city"},
                {icon: "icon2.png", title: "Nature", description: "paragraph about nature activities", alt: "icon of nature"},
                {icon: "icon3.png", title: "History", description: "paragraph about activities", alt: "icon of a maple leaf"},
                {icon: "icon4.png", title: "Landmarks", description: "paragraph about activities", alt: "icon of a location symbol"},
            ]
        }
    },
}

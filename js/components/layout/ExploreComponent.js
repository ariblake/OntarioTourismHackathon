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
                {icon: "icon1.png", title: "City", description: "Ontario is the destination for city life. Take a stroll during the day, or enjoy the nightlife. From big cities to small, Ontario has it all!", alt: "icon of city"},
                {icon: "icon2.png", title: "Nature", description: "Looking to take a hike or a ride on a bike? Ontario has hundreds of parks to explore! Bring your dog along too.", alt: "icon of nature"},
                {icon: "icon3.png", title: "History", description: "Learn about Ontario's historical background. There are many museums and sites for you to set sights on.", alt: "icon of a maple leaf"},
                {icon: "icon4.png", title: "Landmarks", description: "From the CN Tower to Niagara Falls, iconic landmarks are plentiful. Plan your adventure and check them off your list!", alt: "icon of a location symbol"},
            ]
        }
    },
}

export default {
    props: ['image, title, alt'],

    template: `
    <section class="grid-x" id="gallerySection">
            <h2 class="hide">Ontario Bucketlist</h2>
            <div v-for="item in gallery" class="cell small-6 large-3" id="galleryItem">
                <img :src="'images/' + item.image" :alt="item.alt">
                <div id="overlay">
                    <div id="overlayText">
                        <h4>{{ item.title }}</h4>
                    </div>
                </div>
            </div>
        </section>
    `,

    data: function() {
        return {
            gallery: [
                {image: "algonquin.jpg", title: "Algonquin Park", alt: "image of Algonquin Park"},
                {image: "niagara.jpg", title: "Niagara Falls", alt: "image of Niagara Falls"},
                {image: "parliament.jpg", title: "Parliament Hill", alt: "image of Parliament Hill"},
                {image: "wonderland.jpg", title: "Canada's Wonderland", alt: "image of Canada's Wonderland"},
                {image: "bluemountain.jpg", title: "Blue Mountain", alt: "image of Blue Mountain"},
                {image: "cntower.jpg", title: "CN Tower", alt: "image of CN Tower"},
                {image: "stratford.jpg", title: "Stratford Festival", alt: "image of Stratford Festival"},
                {image: "muskoka.jpg", title: "Muskoka", alt: "image of Muskoka"},
            ]
        }
    },
}
export default {
    props: ['thumbnail'],

    template: `
    <section class="grid-x" id="gallerySection">
        <h2 class="hide">Gallery Ontario</h2>
        <div v-for="thumbnail in gallery" class="cell small-6 large-3">
             <img :src="'images/' + thumbnail.thumbnail" :alt="thumbnail.alt">
        </div>
    
    </section>s
    `,





data: function() {
    return {
       
        gallery: [
            {thumbnail: 'heroImg.jpg', alt: "icon of 1"},
            {thumbnail: 'logo.svg', alt: "icon of 2"},
            {thumbnail: 'heroImg.jpg', alt: "icon of 3"},
            {thumbnail: 'logo.svg', alt: "icon of 4"},
            {thumbnail: 'heroImg.jpg', alt: "icon of 5"},
            {thumbnail: 'heroImg.jpg', alt: "icon of 6"},
            {thumbnail: 'logo.svg', alt: "icon of 7"},
            {thumbnail: 'heroImg.jpg', alt: "icon of 8"},
        ],
    }
}
}



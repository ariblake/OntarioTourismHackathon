export default {
    props: ['thumbnail'],

    template: `
    <section class="grid-x" id="gallerySection">
        <h2 class="hide">Gallery Ontario</h2>
        <div class="cell small-6 large-3">
             <img src="images/ + " alt="alt">
        </div>
    </section>
    `,





data: function() {
    return {
       
        Gallery: [
            {thumbnail: 'herImg.jpg', alt: "icon of city"},
        ],
    }
}
}
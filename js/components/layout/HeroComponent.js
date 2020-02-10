export default {
    props: ['message'],
    
    template: `
    <section class="grid-x" id="heroSection">
        <div class="cell small-12">
            <h1>{{ message }}</h1>
        </div>
    </section>
    `,
}
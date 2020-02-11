export default {
    props: ['message'],
    
    template: `
    <header class="grid-x" id="mainHeader">
        <h1 class="hide">Ontario Tourism</h1>
        <div class="cell small-4">
            <img src="images/logo.svg" alt="logo" id="logoImg">
        </div>
        <nav id="mainNav" class="cell small-8">
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/contact">Register</router-link></li>
            </ul>
        </nav>
        <section class="grid-x" id="heroSection">
            <div class="cell small-12">
                <h1>{{ message }}</h1>
            </div>
        </section>
    </header>
    `,
}
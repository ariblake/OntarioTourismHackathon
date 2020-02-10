export default {
    template: `
    <header class="grid-x" id="mainHeader">
        <h1 class="hide">Ontario Tourism</h1>
        <div class="cell small-4">
            <img src="images/logo.svg" alt="logo" id="logoImg">
        </div>
        <nav id="mainNav" class="cell small-8">
            <router-link to="/">Home</router-link>
            <router-link to="/contact">Contact</router-link>
        </nav>
    </header>
    `,
}
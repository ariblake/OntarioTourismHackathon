import HeaderComponent from "./layout/HeaderComponent.js";
// import HeroComponent from "./layout/HeroComponent.js";
import FormComponent from "./layout/FormComponent.js";
import FooterComponent from "./layout/FooterComponent.js";

export default {
    template: `
    <section>
        <HeaderComponent message="Register for more information!"/>
        <FormComponent/>
        <FooterComponent/>
    </section>
    `,

    components: {
        HeaderComponent: HeaderComponent,
        // HeroComponent: HeroComponent,
        FormComponent: FormComponent,
        FooterComponent: FooterComponent
    }
}
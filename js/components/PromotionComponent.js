import HeaderComponent from "./layout/HeaderComponent.js";
import HeroComponent from "./layout/HeroComponent.js";
import IntroComponent from "./layout/IntroComponent.js";
import VideoComponent from "./layout/VideoComponent.js";
import ExploreComponent from "./layout/ExploreComponent.js";
import GalleryComponent from "./layout/GalleryComponent.js";
import FooterComponent from "./layout/FooterComponent.js";

export default {
    template: `
    <section>
        <HeaderComponent/>
        <HeroComponent message="Find Yourself at Home"/>
        <IntroComponent/>
        <VideoComponent/>
        <ExploreComponent
            v:bind:icon="explore.icon" v:bind:title="explore.title" v:bind:description="explore.description"
        />
        <GalleryComponent/>
        <FooterComponent/>
    </section>
    `,


    components: {
        HeaderComponent: HeaderComponent,
        HeroComponent: HeroComponent,
        IntroComponent: IntroComponent,
        VideoComponent: VideoComponent,
        ExploreComponent: ExploreComponent,
        GalleryComponent: GalleryComponent,
        FooterComponent: FooterComponent
    }

    // var gallery = new Vue({
    //     el: '#galleryImg',

    //     data : {
    //         galleryData: [
    //             { src: "gallery1.jpg", alt: "image of "},
    //             { src: "gallery1.jpg", alt: "image of "},
    //             { src: "gallery1.jpg", alt: "image of "},
    //             { src: "gallery1.jpg", alt: "image of "},
    //         ]
    
    //     }
    // })
}

// new Vue({
//     // el: '#exploreSection',
//     data: {
//         explore: [
//             {icon: "icon1.svg", title: "City", description: "paragraph about city activities", alt: "icon of city"},
//             {icon: "icon2.svg", title: "Nature", description: "paragraph about nature activities", alt: "icon of nature"},
//             {icon: "icon3.svg", title: "Three", description: "paragraph about activities", alt: "icon of "},
//             {icon: "icon4.svg", title: "Four", description: "paragraph about activities", alt: "icon of "}
//         ]
//     }       
// })
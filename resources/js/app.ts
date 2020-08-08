require("./bootstrap");

import { Nav } from "./nav";
import Glide from "@glidejs/glide";

import Vue from "vue";

(() => {
    Nav();

    // new Glide(".glide", {
    //     perView: 4,
    //     bound: true
    // }).mount();
})();

// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );

Vue.component("price-slider", require("./components/PriceSlider.vue").default);

const app = new Vue({
    el: "#app",
    data: {
        value: 10
    }
});

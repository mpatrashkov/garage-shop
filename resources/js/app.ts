require("./bootstrap");

import { Nav } from "./nav";
import Glide from "@glidejs/glide";

(() => {
    Nav();

    new Glide(".glide", {
        perView: 4,
        bound: true
    }).mount();
})();

import { $ } from "./helpers";

export const Nav = () => {
    $(".nav--menu").click(() => {
        $(".nav--items").toggleClass("nav--items__open");
        console.log(1);
    });
};

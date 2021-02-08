import { $ } from "./helpers";

export const Nav = () => {
    $(".nav--menu").onclick = () => {
        $(".nav--items").classList.toggle("nav--items__open");
        console.log(111111111111111);
    };
};

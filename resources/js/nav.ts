import { $ } from "./helpers";

export const Nav = () => {
    window.onload = (event) => {
        $(".nav--menu").onclick = () => {
            $(".nav--items").classList.toggle("nav--items__open");
        };
    };
};

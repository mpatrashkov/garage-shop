import { $ } from "./helpers";

export const Nav = () => {
    $(".nav--firstRow-menu").addEventListener("click", () => {
        $(".nav--secondRow").classList.toggle("nav--secondRow__open")
    })
}
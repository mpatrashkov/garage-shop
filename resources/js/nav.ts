import { $ } from "./helpers";

export const Nav = () => {
    $(".nav--menu")?.addEventListener("click", () => {
        $(".nav--items")?.classList.toggle("nav--items__open");
    });
};

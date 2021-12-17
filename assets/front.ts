import "./images/1.png";
import "./images/262202024_224353823037268_4300898622644850545_n.png";
import "./images/logo_animNord-removebg-preview.png";
import "./images/marvel2.png";
import "./images/site.png";
import "./images/photo-1499951360447-b19be8fe80f5.png";
import "./images/photo-1488590528505-98d2b5aba04b.png";
// @ts-ignore
import {Animation} from "./ts/Animation.ts";

let animation : Animation = new Animation();
animation.observer();

const modal = document.getElementById("modal") as HTMLDivElement;

if (modal) {
    modal.style.display = "flex";
    setTimeout(function () {
        modal.style.display = "none";
    }, 10000);
}

import "./images/1.png";
import "./images/262202024_224353823037268_4300898622644850545_n.png";
import "./images/logo_animNord-removebg-preview.png";
import "./images/marvel2.png";
import "./images/site.png";
import "./images/photo-1499951360447-b19be8fe80f5.png";
import "./images/photo-1488590528505-98d2b5aba04b.png";

class Animation {

    public observer(): void {
        // creation of an intersection observer
        const ratio: number = .1;
        const options : {
            root: null;
            rootMargin: string;
            threshold: number
        } = {
            root: null,
            rootMargin: '0px',
            threshold: .1
        }

        // Allows to make visible the elements according to the scroll.
        const handleIntersect = function (entries: any[], observer: { unobserve: (arg0: any) => void; }) {
            entries.forEach(function (entry) {
                if (entry.intersectionRatio > ratio) {
                    entry.target.classList.add('reveal-visible');
                    observer.unobserve(entry.target);
                }
            });
        }

        const observer = new IntersectionObserver(handleIntersect, options);
        // The element to observe to make the animation
        document.querySelectorAll('.reveal').forEach(function (r) {
            observer.observe(r);
        });
    }
}

let animation : Animation = new Animation();
animation.observer();

const modal = document.getElementById("modal") as HTMLDivElement;

modal.style.display = "flex";
setTimeout(function () {
    modal.style.display = "none";
}, 10000);
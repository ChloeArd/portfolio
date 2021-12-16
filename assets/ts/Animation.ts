
export class Animation {

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

export let Animation = function () {

    this.observer = function () {
        // creation of an intersection observer
        const ratio = .1;
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: .1
        }

        const handleIntersect = function (entries, observer) {
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
};
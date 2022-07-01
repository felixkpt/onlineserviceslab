function carousel(target, gap = 10) {

    const carouselSlide = document.querySelector(`${target} .carousel-slide`),
        content = document.querySelector(`${target} .carousel-slide-content`),
        next = document.querySelector(`${target} .carousel-slide-nav-next`),
        prev = document.querySelector(`${target} .carousel-slide-nav-prev`);

    next.addEventListener("click", e => {
        carouselSlide.scrollBy(width + gap, 0);
        if (carouselSlide.scrollWidth !== 0) {
            prev.style.display = "block";
        }
        if (content.scrollWidth - width - gap <= carouselSlide.scrollLeft + width) {
            next.style.display = "none";
        }
    });

    prev.addEventListener("click", e => {
        carouselSlide.scrollBy(-(width + gap), 0);
        if (carouselSlide.scrollLeft - width - gap <= 0) {
            prev.style.display = "none";
        }
        if (!content.scrollWidth - width - gap <= carouselSlide.scrollLeft + width) {
            next.style.display = "block";
        }
    });

    let width = carouselSlide.offsetWidth;
    window.addEventListener("resize", e => (width = carouselSlide.offsetWidth));
}
function carousel(target, itemWidth = 0, scrollBy = 0) {

    itemWidth = itemWidth || document.getElementById('sponsored-content').getAttribute('data-carousel-item-width')
    scrollBy = scrollBy || itemWidth

    document.querySelectorAll(`${target} .carousel-slide-item`).forEach((node) => {
        node.style.width = itemWidth
    })
    const carouselSlide = document.querySelector(`${target} .carousel-slide`),
        content = document.querySelector(`${target} .carousel-slide-content`),
        next = document.querySelector(`${target} .carousel-slide-nav-next`),
        prev = document.querySelector(`${target} .carousel-slide-nav-prev`);

    next.addEventListener("click", e => {
        carouselSlide.scrollBy(scrollBy, 0);
        if (carouselSlide.scrollWidth !== 0) {
            prev.style.display = "block";
        }
        if (content.scrollWidth - width - scrollBy <= carouselSlide.scrollLeft + width) {
            next.style.display = "none";
        }
    });

    prev.addEventListener("click", e => {
        carouselSlide.scrollBy(-(scrollBy), 0);
        if (carouselSlide.scrollLeft - width - scrollBy <= 0) {
            prev.style.display = "none";
        }
        if (!content.scrollWidth - width - scrollBy <= carouselSlide.scrollLeft + width) {
            next.style.display = "block";
        }
    });
    let width = carouselSlide.offsetWidth;
    window.addEventListener("resize", e => (width = carouselSlide.offsetWidth));
}
import './bootstrap';

// Navbar Scroll Effect
window.addEventListener("scroll", () => {
    const logoContainer = document.getElementById("logo-container");
    const mainLogo = document.getElementById("main-logo");
    const navDivider = document.getElementById("nav-divider");

    if (!logoContainer || !mainLogo || !navDivider) return;

    if (window.scrollY > 50) {
        // Scrolled down: navbar mode
        logoContainer.classList.replace("pt-6", "pt-2");
        logoContainer.classList.replace("md:pt-8", "md:pt-2");
        logoContainer.classList.replace("pb-4", "pb-2");

        mainLogo.classList.replace("mb-4", "mb-0");

        // Add shadow and hide the wide divider
        logoContainer.classList.add("shadow-md");
        navDivider.classList.add("opacity-0");
    } else {
        // At top: original large logo mode
        logoContainer.classList.replace("pt-2", "pt-6");
        logoContainer.classList.replace("md:pt-2", "md:pt-8");
        logoContainer.classList.replace("pb-2", "pb-4");

        mainLogo.classList.replace("mb-0", "mb-4");

        // Remove shadow and restore divider
        logoContainer.classList.remove("shadow-md");
        navDivider.classList.remove("opacity-0");
    }
});

// Carousel Logic
document.addEventListener("DOMContentLoaded", () => {
    // Welcome Carousel
    const carousel = document.getElementById("welcome-carousel");
    const prevBtn = document.getElementById("carousel-prev");
    const nextBtn = document.getElementById("carousel-next");
    const dotsContainer = document.getElementById("carousel-dots");

    if (carousel && prevBtn && nextBtn && dotsContainer) {
        let currentIndex = 0;

        function getItemsToShow() {
            return window.innerWidth >= 768 ? 3 : 1; // md breakpoint
        }

        function getMaxIndex() {
            const totalSlides = carousel.children.length;
            const itemsToShow = getItemsToShow();
            return Math.max(0, totalSlides - itemsToShow);
        }

        function updateDots() {
            const maxIndex = getMaxIndex();

            // Rebuild dots if count changed
            if (dotsContainer.children.length !== maxIndex + 1) {
                dotsContainer.innerHTML = "";
                for (let i = 0; i <= maxIndex; i++) {
                    const dot = document.createElement("button");
                    dot.setAttribute("aria-label", `Go to slide ${i + 1}`);
                    dot.addEventListener("click", () => {
                        currentIndex = i;
                        updateCarousel();
                    });
                    dotsContainer.appendChild(dot);
                }
            }

            // Update active state
            Array.from(dotsContainer.children).forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.className =
                        "w-8 h-3 rounded-full transition-all duration-300 shadow cursor-pointer bg-[#00A651]";
                } else {
                    dot.className =
                        "w-3 h-3 rounded-full transition-all duration-300 shadow cursor-pointer bg-gray-300 hover:bg-gray-400";
                }
            });
        }

        function updateCarousel() {
            const gap = window.innerWidth >= 768 ? 24 : 16; // md:gap-6 (24px) vs gap-4 (16px)
            const slideWidth = carousel.children[0].offsetWidth;
            const offset = currentIndex * (slideWidth + gap);
            carousel.style.transform = `translateX(-${offset}px)`;
            updateDots();
        }

        function nextSlide() {
            const maxIndex = getMaxIndex();
            currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
            updateCarousel();
        }

        function prevSlide() {
            const maxIndex = getMaxIndex();
            currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
            updateCarousel();
        }

        prevBtn.addEventListener("click", () => {
            prevSlide();
        });

        nextBtn.addEventListener("click", () => {
            nextSlide();
        });

        window.addEventListener("resize", () => {
            const maxIndex = getMaxIndex();
            if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }
            updateCarousel();
        });

        setTimeout(() => {
            updateCarousel();
        }, 100);
    }

    // Main Materials Carousel
    const matTrack = document.getElementById("materials-track");
    const matHeader = document.getElementById("materials-header");
    const matPrev = document.getElementById("mat-btn-prev");
    const matNext = document.getElementById("mat-btn-next");

    if (matTrack && matHeader && matPrev && matNext) {
        let matIndex = 0;

        function getMatSlides() {
            return document.querySelectorAll(".materials-slide");
        }

        function getMatItemsToShow() {
            if (window.innerWidth >= 1280) return 3;
            if (window.innerWidth >= 1024) return 2;
            if (window.innerWidth >= 768) return 1.5;
            return 1;
        }

        function updateMatCarousel() {
            const slides = getMatSlides();
            if (slides.length === 0) return;

            const slideWidth = slides[0].offsetWidth;
            const offset = matIndex * slideWidth;

            matTrack.style.transform = `translateX(-${offset}px)`;

            if (matIndex > 0) {
                matHeader.style.opacity = "0";
                matPrev.classList.remove("opacity-0", "pointer-events-none");
                matPrev.classList.add("opacity-100", "pointer-events-auto");
            } else {
                matHeader.style.opacity = "1";
                matPrev.classList.add("opacity-0", "pointer-events-none");
                matPrev.classList.remove("opacity-100", "pointer-events-auto");
            }

            const itemsToShow = getMatItemsToShow();
            const maxIndex = Math.max(
                0,
                slides.length - Math.floor(itemsToShow),
            );
            if (matIndex >= maxIndex) {
                matNext.classList.add("opacity-0", "pointer-events-none");
                matNext.classList.remove("opacity-100", "pointer-events-auto");
            } else {
                matNext.classList.remove("opacity-0", "pointer-events-none");
                matNext.classList.add("opacity-100", "pointer-events-auto");
            }
        }

        matPrev.addEventListener("click", () => {
            if (matIndex > 0) {
                matIndex--;
                updateMatCarousel();
            }
        });

        matNext.addEventListener("click", () => {
            const maxIndex = Math.max(
                0,
                getMatSlides().length - Math.floor(getMatItemsToShow()),
            );
            if (matIndex < maxIndex) {
                matIndex++;
                updateMatCarousel();
            }
        });

        window.addEventListener("resize", () => {
            const maxIndex = Math.max(
                0,
                getMatSlides().length - Math.floor(getMatItemsToShow()),
            );
            if (matIndex > maxIndex) {
                matIndex = maxIndex;
            }
            updateMatCarousel();
        });
        
        updateMatCarousel();
    }
});

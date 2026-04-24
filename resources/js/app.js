import './bootstrap';

// Navbar Scroll Effect
window.addEventListener("scroll", () => {
    const nav = document.getElementById("main-nav");
    const header = document.getElementById("desktop-header");
    const logo = document.getElementById("main-logo");
    const btn = document.getElementById("register-btn");

    if (!nav || !header || !logo || !btn) return;

    if (window.scrollY > 20) {
        // Shrink state
        header.classList.replace("h-24", "h-16");
        logo.classList.replace("h-16", "h-10");
        btn.classList.replace("h-24", "h-16");
        nav.classList.add("shadow-md");
    } else {
        // Expanded state
        header.classList.replace("h-16", "h-24");
        logo.classList.replace("h-10", "h-16");
        btn.classList.replace("h-16", "h-24");
        nav.classList.remove("shadow-md");
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

        function updateMatCarousel() {
            const slides = getMatSlides();
            if (slides.length === 0) return;

            const gap = window.innerWidth >= 768 ? 24 : 16;
            const slideWidth = slides[0].offsetWidth;
            const containerWidth = matTrack.parentElement.offsetWidth;
            const trackWidth = matTrack.scrollWidth;

            let offset = matIndex * (slideWidth + gap);
            const maxOffset = Math.max(0, trackWidth - containerWidth);
            
            if (offset > maxOffset) {
                offset = maxOffset;
            }

            matTrack.style.transform = `translateX(-${offset}px)`;

            // Prev Button & Header
            if (offset > 0) {
                if (window.innerWidth >= 768) {
                    matHeader.style.opacity = "0";
                }
                matPrev.classList.remove("opacity-0", "pointer-events-none");
                matPrev.classList.add("opacity-100", "pointer-events-auto");
            } else {
                matHeader.style.opacity = "1";
                matPrev.classList.add("opacity-0", "pointer-events-none");
                matPrev.classList.remove("opacity-100", "pointer-events-auto");
            }

            // Next Button
            if (offset >= maxOffset - 5) {
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
            const slides = getMatSlides();
            const gap = window.innerWidth >= 768 ? 24 : 16;
            const slideWidth = slides[0].offsetWidth;
            const containerWidth = matTrack.parentElement.offsetWidth;
            const trackWidth = matTrack.scrollWidth;
            
            const currentOffset = matIndex * (slideWidth + gap);
            const maxOffset = trackWidth - containerWidth;

            if (currentOffset < maxOffset - 5) {
                matIndex++;
                updateMatCarousel();
            }
        });

        window.addEventListener("resize", () => {
            updateMatCarousel();
        });
        
        setTimeout(updateMatCarousel, 100);
    }

    // Page Transition Logic
    const overlay = document.getElementById("page-transition-overlay");
    if (overlay) {
        // 1. Initial Fade Out (Page Entry)
        setTimeout(() => {
            overlay.classList.add("opacity-0");
            overlay.classList.remove("opacity-100");
            setTimeout(() => {
                overlay.classList.add("hidden");
                overlay.classList.remove("pointer-events-auto");
                overlay.classList.add("pointer-events-none");
            }, 500);
        }, 200);

        // 2. Fade In on Navigation (Page Exit)
        document.body.addEventListener("click", (e) => {
            const link = e.target.closest("a");
            if (!link) return;

            const href = link.getAttribute("href");
            const target = link.getAttribute("target");

            // Only animate for internal links, except for same-page anchors
            try {
                const currentUrl = new URL(window.location.href);
                const targetUrl = href ? new URL(href, window.location.origin) : null;
                const isInternal = targetUrl && targetUrl.origin === window.location.origin;
                const isSamePageAnchor = isInternal && 
                                       targetUrl.pathname === currentUrl.pathname && 
                                       targetUrl.hash !== "";
                const isPlainClick = !e.ctrlKey && !e.shiftKey && !e.metaKey && !e.altKey;

                if (isInternal && !isSamePageAnchor && isPlainClick && target !== "_blank") {
                    e.preventDefault();
                    
                    overlay.classList.remove("hidden", "pointer-events-none");
                    overlay.classList.add("pointer-events-auto");
                    
                    setTimeout(() => {
                        overlay.classList.add("opacity-100");
                        overlay.classList.remove("opacity-0");
                    }, 10);

                    setTimeout(() => {
                        window.location.href = href;
                    }, 500);
                }
            } catch (err) {
                // Fallback for relative paths or invalid URLs if any
            }
        });

        // 3. Handle Back Button (BFCache)
        window.addEventListener("pageshow", (event) => {
            if (event.persisted) {
                overlay.classList.add("opacity-0", "hidden", "pointer-events-none");
                overlay.classList.remove("opacity-100", "pointer-events-auto");
            }
        });
    }
});

const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.main-navigation');

if (menuButton && navigation) {
    menuButton.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('is-open');
        menuButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
}


// Hero parallax effect
document.addEventListener('DOMContentLoaded', () => {
    const hero = document.querySelector('.hero-section');

    if (!hero) return;

    // Respect users who prefer reduced motion
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    // Disable parallax on mobile
    if (window.innerWidth <= 768) {
        return;
    }

    let ticking = false;

    const updateParallax = () => {
        const rect = hero.getBoundingClientRect();
        const offset = rect.top * -0.28;

        hero.style.backgroundPosition = `center ${offset}px`;

        ticking = false;
    };

    const handleScroll = () => {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    };

    window.addEventListener('scroll', handleScroll, {
        passive: true
    });

    updateParallax();
});

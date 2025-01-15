/*!
 * kwm24 v1.0.0 (https://fh-ooe.at/campus-hagenberg?gad_source=1&amp;gclid=Cj0KCQiAire5BhCNARIsAM53K1hjaypTgeCZEpva1P2od3nmaiBO0-Z7J28UW2fgYu8Im13wbofom4gaAqyrEALw_wcB)
 * Copyright 2017-2024 Anna Scheuchenpflug
 * Licensed under the GPL-2.0-or-later license
 */
console.log("WE LOVE TYPO3");
console.log("JS ist geladen");

// Swiper von Swiper Bibliothek mit speziellen Effekten
const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 10000,
    },
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,

    // Coverflow Effect Parameters
    effect: 'coverflow', // Aktiviert den Coverflow-Effekt
    coverflowEffect: {
        depth: 100, // Tiefe des Effekts (Z-Achse)
        modifier: 1, // Effektmodifikator (Steuert die Intensität des Effekts)
        rotate: 50, // Drehung der Slides in Grad
        scale: 1, // Skalierung der Slides
        slideShadows: true, // Aktiviert die Schatten der Slides
        stretch: 0, // Abstand zwischen den Slides
    },

    // Wenn du eine Pagination benötigst
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Falls du eine Scrollbar benötigst
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

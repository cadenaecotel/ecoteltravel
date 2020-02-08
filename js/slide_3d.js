$(document).ready(function() {
    var slideImages = [{ src: 'img/gallery/Tour el otro Estados Unidos/1.png' },
        { src: 'img/gallery/Tour el otro Estados Unidos/2.png' },
        { src: 'img/gallery/Tour el otro Estados Unidos/3.png' },
        { src: 'img/gallery/Tour el otro Estados Unidos/4.png' },
        { src: 'img/gallery/Tour el otro Estados Unidos/5.png' },
        { src: 'img/gallery/Tour el otro Estados Unidos/6.png' },
        { src: 'img/gallery/Tour el otro Estados Unidos/7.png' }
    ]
    //var jR3DCarousel;

    jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel({
        width: 1280,
        /* largest allowed width */
        height: 720,
        /* largest allowed height */
        slides: slideImages /* array of images source */
    });
})



/* =========================================================
   SHAJ CORNER
   PREMIUM PRODUCT GALLERY
   ---------------------------------------------------------
   Features:
   - Product thumbnail gallery
   - Lightbox
   - Previous / Next
   - Image counter
   - Mouse drag after zoom
   - Zoom In / Zoom Out
   - Double click zoom
   - Reset zoom
   - Keyboard navigation
   - Mobile swipe
   - ESC close
   ========================================================= */


/* =========================================================
   GLOBAL VARIABLES
   ========================================================= */

let galleryImages = [];

let currentImageIndex = 0;

let zoomLevel = 1;

let translateX = 0;
let translateY = 0;

let isDragging = false;

let dragStartX = 0;
let dragStartY = 0;

let touchStartX = 0;
let touchStartY = 0;


/* =========================================================
   DOCUMENT READY
   ========================================================= */

$(document).ready(function () {

    initializeGallery();

});


/* =========================================================
   INITIALIZE GALLERY
   ========================================================= */

function initializeGallery() {

    galleryImages = [];


    /*
     * Collect all thumbnail images
     */

    $('.sc-thumb').each(function () {

        let image =
            $(this)
                .find('img')
                .attr('src');


        if (
            image &&
            galleryImages.indexOf(image) === -1
        ) {

            galleryImages.push(image);

        }

    });


    /*
     * If no thumbnails found,
     * use main product image
     */

    if (galleryImages.length === 0) {

        let mainImage =
            $('#mainProductImg')
                .attr('src');


        if (mainImage) {

            galleryImages.push(mainImage);

        }

    }


    /*
     * Find current image
     */

    let currentImage =
        $('#mainProductImg')
            .attr('src');


    let index =
        galleryImages.indexOf(currentImage);


    if (index >= 0) {

        currentImageIndex = index;

    } else {

        currentImageIndex = 0;

    }


    updateGalleryCounter();

}


/* =========================================================
   THUMBNAIL CLICK
   ========================================================= */

$(document).on(
    'click',
    '.sc-thumb',
    function () {

        let image =
            $(this)
                .find('img')
                .attr('src');


        if (!image) {
            return;
        }


        /*
         * Change main image
         */

        $('#mainProductImg')
            .stop(true, true)
            .css('opacity', '0.35');


        setTimeout(function () {

            $('#mainProductImg')
                .attr('src', image)
                .css('opacity', '1');

        }, 100);


        /*
         * Active thumbnail
         */

        $('.sc-thumb')
            .removeClass('active');


        $(this)
            .addClass('active');


        /*
         * Current index
         */

        let index =
            galleryImages.indexOf(image);


        if (index >= 0) {

            currentImageIndex = index;

        }


        updateGalleryCounter();

    }
);


/* =========================================================
   CHANGE IMAGE
   ---------------------------------------------------------
   Can also be called from HTML:
   changeImage(this, 'image.jpg')
   ========================================================= */

function changeImage(button, imageUrl) {

    if (!imageUrl) {
        return;
    }


    $('#mainProductImg')
        .stop(true, true)
        .css('opacity', '0.35');


    setTimeout(function () {

        $('#mainProductImg')
            .attr('src', imageUrl)
            .css('opacity', '1');

    }, 100);


    $('.sc-thumb')
        .removeClass('active');


    if (button) {

        $(button)
            .addClass('active');

    }


    let index =
        galleryImages.indexOf(imageUrl);


    if (index >= 0) {

        currentImageIndex = index;

    }


    updateGalleryCounter();

}


/* =========================================================
   GALLERY COUNTER
   ========================================================= */

function updateGalleryCounter() {

    let total =
        galleryImages.length;


    let current =
        currentImageIndex + 1;


    $('.sc-current-image')
        .text(
            String(current)
                .padStart(2, '0')
        );


    $('.sc-image-total')
        .text(
            String(total)
                .padStart(2, '0')
        );

}


/* =========================================================
   OPEN LIGHTBOX
   ========================================================= */

function openLightbox() {

    if (galleryImages.length === 0) {
        return;
    }


    /*
     * Detect currently visible main image
     */

    let mainImage =
        $('#mainProductImg')
            .attr('src');


    let index =
        galleryImages.indexOf(mainImage);


    if (index >= 0) {

        currentImageIndex = index;

    }


    /*
     * Reset zoom
     */

    resetZoom();


    /*
     * Load image
     */

    $('#lightboxImg')
        .attr(
            'src',
            galleryImages[currentImageIndex]
        );


    /*
     * Show lightbox
     */

    $('#productLightbox')
        .addClass('show')
        .attr(
            'aria-hidden',
            'false'
        );


    $('body')
        .addClass(
            'sc-lightbox-open'
        );


    updateLightboxCounter();

}


/* =========================================================
   CLOSE LIGHTBOX
   ========================================================= */

function closeLightbox(event) {

    /*
     * If clicking inside content,
     * don't close.
     */

    if (
        event &&
        event.target &&
        $(event.target).is(
            '#productLightbox'
        ) === false
    ) {

        return;

    }


    $('#productLightbox')
        .removeClass('show')
        .attr(
            'aria-hidden',
            'true'
        );


    $('body')
        .removeClass(
            'sc-lightbox-open'
        );


    /*
     * Reset image position
     */

    resetZoom();

}


/* =========================================================
   NEXT IMAGE
   ========================================================= */

function nextImage() {

    if (galleryImages.length <= 1) {
        return;
    }


    currentImageIndex++;


    if (
        currentImageIndex >=
        galleryImages.length
    ) {

        currentImageIndex = 0;

    }


    showLightboxImage();

}


/* =========================================================
   PREVIOUS IMAGE
   ========================================================= */

function previousImage() {

    if (galleryImages.length <= 1) {
        return;
    }


    currentImageIndex--;


    if (currentImageIndex < 0) {

        currentImageIndex =
            galleryImages.length - 1;

    }


    showLightboxImage();

}


/* =========================================================
   SHOW LIGHTBOX IMAGE
   ========================================================= */

function showLightboxImage() {

    let image =
        galleryImages[currentImageIndex];


    if (!image) {
        return;
    }


    /*
     * Stop dragging
     */

    isDragging = false;


    /*
     * Reset zoom for new image
     */

    zoomLevel = 1;

    translateX = 0;
    translateY = 0;


    /*
     * Fade old image
     */

    $('#lightboxImg')
        .stop(true, true)
        .css({
            opacity: 0.25,
            transform:
                'translate3d(0,0,0) scale(1)'
        });


    /*
     * Load new image
     */

    setTimeout(function () {

        $('#lightboxImg')
            .attr('src', image)
            .css({
                opacity: 1,
                transform:
                    'translate3d(0,0,0) scale(1)'
            });


    }, 100);


    /*
     * Update counter
     */

    updateLightboxCounter();


    /*
     * Update main gallery
     */

    $('#mainProductImg')
        .attr('src', image);


    /*
     * Active thumbnail
     */

    $('.sc-thumb')
        .removeClass('active');


    $('.sc-thumb').each(function () {

        let thumbImage =
            $(this)
                .find('img')
                .attr('src');


        if (thumbImage === image) {

            $(this)
                .addClass('active');

        }

    });


    updateGalleryCounter();

}


/* =========================================================
   LIGHTBOX COUNTER
   ========================================================= */

function updateLightboxCounter() {

    $('.sc-lightbox-current')
        .text(
            String(
                currentImageIndex + 1
            ).padStart(2, '0')
        );


    $('.sc-lightbox-total')
        .text(
            String(
                galleryImages.length
            ).padStart(2, '0')
        );

}


/* =========================================================
   ZOOM IN
   ========================================================= */

function zoomIn() {

    zoomLevel += 0.20;


    if (zoomLevel > 3) {

        zoomLevel = 3;

    }


    applyZoom();

}


/* =========================================================
   ZOOM OUT
   ========================================================= */

function zoomOut() {

    zoomLevel -= 0.20;


    if (zoomLevel <= 1) {

        zoomLevel = 1;

        translateX = 0;
        translateY = 0;

    }


    applyZoom();

}


/* =========================================================
   RESET ZOOM
   ========================================================= */

function resetZoom() {

    zoomLevel = 1;

    translateX = 0;
    translateY = 0;

    isDragging = false;


    $('#lightboxImg')
        .removeClass(
            'sc-image-dragging'
        );


    applyZoom();

}


/* =========================================================
   APPLY ZOOM + POSITION
   ========================================================= */

function applyZoom() {

    $('#lightboxImg').css(
        'transform',

        'translate3d(' +

        translateX +

        'px, ' +

        translateY +

        'px, 0) scale(' +

        zoomLevel +

        ')'
    );

}


/* =========================================================
   MOUSE DOWN
   ========================================================= */

$(document).on(
    'mousedown',
    '#lightboxImg',
    function (e) {

        /*
         * Don't drag when image
         * is not zoomed.
         */

        if (zoomLevel <= 1) {
            return;
        }


        isDragging = true;


        dragStartX =
            e.clientX -
            translateX;


        dragStartY =
            e.clientY -
            translateY;


        $(this)
            .addClass(
                'sc-image-dragging'
            );


        e.preventDefault();

    }
);


/* =========================================================
   MOUSE MOVE
   ========================================================= */

$(document).on(
    'mousemove',
    function (e) {

        if (!isDragging) {
            return;
        }


        /*
         * New position
         */

        translateX =
            e.clientX -
            dragStartX;


        translateY =
            e.clientY -
            dragStartY;


        applyZoom();

    }
);


/* =========================================================
   MOUSE UP
   ========================================================= */

$(document).on(
    'mouseup',
    function () {

        if (!isDragging) {
            return;
        }


        isDragging = false;


        $('#lightboxImg')
            .removeClass(
                'sc-image-dragging'
            );

    }
);


/* =========================================================
   MOUSE LEAVE SAFETY
   ========================================================= */

$(document).on(
    'mouseleave',
    '#productLightbox',
    function () {

        isDragging = false;


        $('#lightboxImg')
            .removeClass(
                'sc-image-dragging'
            );

    }
);


/* =========================================================
   DOUBLE CLICK ZOOM
   ========================================================= */

$(document).on(
    'dblclick',
    '#lightboxImg',
    function (e) {

        e.preventDefault();


        if (zoomLevel === 1) {

            zoomLevel = 2;

        } else {

            zoomLevel = 1;

            translateX = 0;
            translateY = 0;

        }


        applyZoom();

    }
);


/* =========================================================
   TOUCH START
   ========================================================= */

$(document).on(
    'touchstart',
    '#productLightbox',
    function (e) {

        if (
            !e.originalEvent
                .touches ||
            e.originalEvent
                .touches.length === 0
        ) {
            return;
        }


        touchStartX =
            e.originalEvent
                .touches[0]
                .clientX;


        touchStartY =
            e.originalEvent
                .touches[0]
                .clientY;

    }
);


/* =========================================================
   TOUCH END
   ========================================================= */

$(document).on(
    'touchend',
    '#productLightbox',
    function (e) {

        if (
            !e.originalEvent
                .changedTouches ||
            e.originalEvent
                .changedTouches.length === 0
        ) {
            return;
        }


        let touchEndX =
            e.originalEvent
                .changedTouches[0]
                .clientX;


        let touchEndY =
            e.originalEvent
                .changedTouches[0]
                .clientY;


        let differenceX =
            touchStartX -
            touchEndX;


        let differenceY =
            touchStartY -
            touchEndY;


        /*
         * Only swipe when image
         * is not zoomed.
         *
         * When zoomed, dragging
         * should be handled by the
         * browser / touch interaction.
         */

        if (zoomLevel > 1) {
            return;
        }


        /*
         * Ignore small movement
         */

        if (
            Math.abs(differenceX) < 50
        ) {
            return;
        }


        /*
         * Horizontal swipe
         */

        if (
            Math.abs(differenceX) >
            Math.abs(differenceY)
        ) {

            if (differenceX > 0) {

                nextImage();

            } else {

                previousImage();

            }

        }

    }
);


/* =========================================================
   KEYBOARD CONTROLS
   ========================================================= */

$(document).on(
    'keydown',
    function (e) {

        /*
         * Only work while
         * lightbox is open
         */

        if (
            !$('#productLightbox')
                .hasClass('show')
        ) {

            return;

        }


        /*
         * Right arrow
         */

        if (
            e.key === 'ArrowRight'
        ) {

            e.preventDefault();

            nextImage();

        }


        /*
         * Left arrow
         */

        if (
            e.key === 'ArrowLeft'
        ) {

            e.preventDefault();

            previousImage();

        }


        /*
         * ESC
         */

        if (
            e.key === 'Escape'
        ) {

            e.preventDefault();

            closeLightbox();

        }


        /*
         * Plus
         */

        if (
            e.key === '+' ||
            e.key === '='
        ) {

            e.preventDefault();

            zoomIn();

        }


        /*
         * Minus
         */

        if (
            e.key === '-' ||
            e.key === '_'
        ) {

            e.preventDefault();

            zoomOut();

        }


        /*
         * Zero = Reset
         */

        if (e.key === '0') {

            e.preventDefault();

            resetZoom();

        }

    }
);


/* =========================================================
   PREVENT IMAGE DRAGGING BY BROWSER
   ========================================================= */

$(document).on(
    'dragstart',
    '#lightboxImg',
    function (e) {

        e.preventDefault();

    }
);


/* =========================================================
   LIGHTBOX BACKDROP CLICK
   ========================================================= */

$(document).on(
    'click',
    '#productLightbox',
    function (e) {

        /*
         * Only close if the actual
         * backdrop was clicked.
         */

        if (
            e.target ===
            this
        ) {

            closeLightbox();

        }

    }
);


/* =========================================================
   PREVENT LIGHTBOX CONTENT CLICK
   ========================================================= */

$(document).on(
    'click',
    '.sc-lightbox-inner',
    function (e) {

        e.stopPropagation();

    }
);


/* =========================================================
   PRELOAD IMAGES
   ---------------------------------------------------------
   Helps make Next / Previous smoother.
   ========================================================= */

function preloadGalleryImages() {

    galleryImages.forEach(
        function (image) {

            let img =
                new Image();

            img.src = image;

        }
    );

}


/* =========================================================
   START PRELOAD AFTER PAGE LOAD
   ========================================================= */

$(window).on(
    'load',
    function () {

        preloadGalleryImages();

    }
);


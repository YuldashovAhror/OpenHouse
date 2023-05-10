"use strict";
var preloader    = $('.preloader'),
    imagesCount  = $('img').length,
    dBody        = $('body'),
    percent      = 100 / imagesCount,
    progress     = 0,
    imgSum       = $('img').length,
    loadedImg    = 0;


for (var i = 0; i < imagesCount; i++) {
    var img_copy        = new Image();
    img_copy.src        = document.images[i].src;
    img_copy.onload     = img_load;
    img_copy.onerror    = img_load;
}

function img_load () {
    progress += percent;
    loadedImg++;
    if (progress >= 100 || loadedImg == imagesCount) {
        let percentTxt = 0

        let percentInterval = setInterval(() => {
            if(percentTxt < 100) {
                percentTxt++
                $('.preloader__percent').text(percentTxt)
            } else {
                clearInterval(percentInterval)
            }
        }, 35)
        setTimeout(function () {
            // preloader.delay(100).slideUp('slow');
        }, 5000)

        dBody.css('overflow', '');
    }
}



// setTimeout(function (){
//     $('.main__video').css({
//         'height': '34.5rem',
//     })
//     setTimeout(function (){
//         $('.main__video').css({
//             'padding': '0 6rem'
//         })
//         $('.main__title').addClass('anim')
//     }, 200)
//     setTimeout(function (){
//         $('.main__txt').addClass('anim')
//     }, 500)
//     $('.main__video-container').css({
//         'height': '100%',
//     })
// }, 4000)


$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (scrollTop >= 100) {
        $('.main__video').addClass('main__video-pad')
        $('.main__title').addClass('anim')
        $('.header').addClass('header__view')

        setTimeout(function () {
            $('.main__svg').addClass('main__svg-up')
        }, 1500)
        if($(window).width() > 768) {
            $('html').niceScroll({
                cursorwidth: "8px",
                cursorborder: "none",
                cursorborderradius: "0px",
                cursorcolor: "#222",
                autohidemode: false,
                zindex: 9999,
                scrollspeed: 200,
                mousescrollstep: 40,
                touchbehavior: true
            });
        }
    } else if (scrollTop <= 500) {
        $('.main__video').removeClass('main__video-pad')
        $('.header').removeClass('header__view')
        if($(window).width() > 768) {
            $('html').niceScroll({
                scrollspeed: 150,
            });
        }
    } else if (scrollTop >= 700) {
        if($(window).width() > 768) {
            $('html').niceScroll({
                scrollspeed: 30,
            });
        }
    }

});


let s,
    spanizeLetters = {
        settings: {
            letters: $('.general__txt-anim'),
        },
        init: function() {
            s = this.settings;
            this.bindEvents();
        },
        bindEvents: function(){
            s.letters.html(function (i, el) {
                var spanizer = $.trim(el).split("");
                return '<span>' + spanizer.join('</span><span>') + '</span>';
            });
        },
    };
spanizeLetters.init();

let b,
    spanizeWords = {
        settings: {
            words: $('.main__txt'),
        },
        init: function() {
            b = this.settings;
            this.bindEvents();
        },
        bindEvents: function(){
            b.words.html(function (i, el) {
                var spanizer = $.trim(el).split(" ");
                return '<span>' + spanizer.join('</span> <span>') + '</span>';
            });
        },
    };
spanizeWords.init();


$(window).on('load', function () {

    VANTA.WAVES({
        el: ".commerce__anima",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x989898
    })

    let scrollTop = $(window).scrollTop()
    let pad = parseFloat($('.main .main__video').css('padding-left'))

    $('.callback, .popup__btn').click( (event)=> {
        event.preventDefault();
        $('.popup__back').slideDown('200')
        setTimeout(()=> {
            $('.popup').fadeIn('200');
        }, 250)
    });

    $('.popup__close').click(()=> {
        $('.popup').fadeOut('200');
        setTimeout(()=> {
            $('.popup__back').slideUp('200');
        }, 250)
    })

    $('.menu__cat').click(function (event) {
        event.preventDefault();
        $(this).parent().toggleClass('active')
        $(this).parent().children('.box__links').slideToggle('200')
    })


    $('button.header__menu').click(function (event) {
        event.preventDefault();
        $('.menu').slideToggle();
        $(this).toggleClass('active');
        $('.menu__box .box').removeClass('active');
    })

    const animItems = document.querySelectorAll(`.anima-blocks`)
    if (animItems.length > 0) {
        window.addEventListener(`scroll`, animOnScroll)

        function animOnScroll() {
            for (let index = 0; index < animItems.length; index++) {
                const animItem = animItems[index]
                const animItemHeight = animItem.offsetHeight
                const animItemOffSet = offset(animItem).top
                const animStart = 4;
                let animItemPoint = window.innerHeight - animItemHeight / animStart
                if (animItemHeight > window.innerHeight) {
                    animItemPoint = window.innerHeight - window.innerHeight / animStart
                    animItemPoint = window.innerHeight - window.innerHeight / animStart
                }
                if ((pageYOffset > animItemOffSet - animItemPoint) && pageYOffset < (animItemOffSet + animItemHeight)) {
                    animItem.classList.add(`anima-active`)
                } else {
                    if (!(animItem.classList.contains(`_anim-no-hide`))) {
                        // animItem.classList.remove(`anima-active`)
                    }
                }
            }
        }

        function offset(el) {
            const rect = el.getBoundingClientRect()
            let scrollLeft = window.pageXOffset || document.documentElement.scrollLeft
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop
            return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
        }

        setTimeout(() => {
            animOnScroll()
        }, 1000)
    }


    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

    let selector = document.getElementsByClassName("form__tel");
    let im = new Inputmask("+\\9\\98(99)999-99-99");
    im.mask(selector);

    let sliderPartner = new Swiper(".partner__slider", {
        slidesPerView: 5,
        spaceBetween: 10,
        loop: true,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            prevEl: '.partner__prev',
            nextEl: '.partner__next',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1920: {
                slidesPerView: 5,
                spaceBetween: 20,
            }
        },
    });

    let sliderCommerce = new Swiper(".commerce__slider", {
        slidesPerView: 5,
        spaceBetween: 10,
        centeredSlides: true,
        initialSlide: 1,
        navigation: {
            prevEl: '.commerce__prev',
            nextEl: '.commerce__next',
        },
        breakpoints: {
            640: {
                slidesPerView: 1.4,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            }
        },
    });

});

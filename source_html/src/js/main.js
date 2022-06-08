const App = {
    SetBackground: () => {
        $('[setBackground]').each(function() {
            var background = $(this).attr('setBackground')
            $(this).css({
                "background-image": "url(" + background + ")",
                "background-size": "cover",
                "background-position": "center center"
            })
        })
        $('[setBackgroundRepeat]').each(function() {
            var background = $(this).attr('setBackgroundRepeat')
            $(this).css({
                "background-image": "url(" + background + ")",
                "background-repeat": "repeat"
            })
        })
    },
    EqualHeightElement: el => {
        let height = 0;
        let thisHeight = 0;
        $(el).each(function() {
            thisHeight = $(this).height();
            if (thisHeight > height) {
                height = thisHeight;
            }
        });
        $(el).height(height)
    },
    InitLazyLoad: () => {
        return new LazyLoad({
            elements_selector: ".lazy"
        })
    }
}

function MobileMapping() {
    try {
        let MainList = new MappingListener({
            selector: 'header .main-list-wrapper',
            mobileWrapper: 'header .mobile-wrapper',
            mobileMethod: 'appendTo',
            desktopWrapper: 'header .logo-wrapper',
            desktopMethod: 'insertAfter',
            breakpoint: 1200,
        }).watch()
        let SearchIcon = new MappingListener({
            selector: 'header .searchicon',
            mobileWrapper: 'header .left-wrapper',
            mobileMethod: 'appendTo',
            desktopWrapper: 'header .right-wrapper',
            desktopMethod: 'prependTo',
            breakpoint: 1025,
        }).watch()
        let Download = new MappingListener({
            selector: 'header .download-wrapper',
            mobileWrapper: 'header .mobile-wrapper',
            mobileMethod: 'appendTo',
            desktopWrapper: 'header .searchicon',
            desktopMethod: 'insertAfter',
            breakpoint: 1025,
        }).watch()
        let Language = new MappingListener({
            selector: 'header .language-wrapper',
            mobileWrapper: 'header .left-wrapper',
            mobileMethod: 'prependTo',
            desktopWrapper: 'header .download-wrapper',
            desktopMethod: 'insertAfter',
            breakpoint: 1025,
        }).watch()
    } catch (error) {

    }

}

function ToggleMobileNavigation() {
    $('.lmp-gt-navigation .mobile-toggle').on('click', function() {
        $(this).siblings().slideToggle()
    })
    $('.lmp-navigation .mobile-toggle').on('click', function() {
        $(this).siblings().slideToggle()
    })
}

function ToggleSearchWrapper() {
    $('header .searchicon').on('click', function() {
        $('header .search-wrapper').addClass('active')
    })
    $('header .search-wrapper .close-button').on('click', function() {
        $('header .search-wrapper').removeClass('active')
    })
}

function ImageSliderCustomPagination() {
    let CustomThumbSlider = new Swiper('.custom-slider .thumb-image .swiper-container', {
        speed: 1000,
        slidesPerView: 3,
        // spaceBetween: 10,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        autoplay: {
            delay: 4000
        },
        navigation: {
            nextEl: '.custom-slider .swiper-next',
            prevEl: '.custom-slider .swiper-prev'
        },
        breakpoints: {
            1025: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 3
            },
            576: {
                slidesPerView: 2
            }
        }
    })
    let CustomTopSlider = new Swiper('.custom-slider .top-image .swiper-container', {
        speed: 1000,
        autoplay: {
            delay: 4000
        },
        navigation: {
            nextEl: '.custom-slider .swiper-next',
            prevEl: '.custom-slider .swiper-prev'
        },
        thumbs: {
            swiper: CustomThumbSlider
        }
    })
}

function ToggleMobileMenu() {
    $('header .toggle-mobile-wrapper').on('click', function() {
        $('.mobile-wrapper').addClass('active')
        $('.backdrop-wrapper').addClass('active')
    })
    $('header .backdrop-wrapper').on('click', function() {
        $('.backdrop-wrapper').removeClass('active')
        $('.mobile-wrapper').removeClass('active')
    })
    $('header .close-mobile-wrapper').on('click', function() {
        $('.backdrop-wrapper').removeClass('active')
        $('.mobile-wrapper').removeClass('active')
    })
}

function DefaultSlider() {
    let RelatedProduct = new Swiper('.san-pham-ct-2 .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        speed: 1000,
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            400: {
                slidesPerView: 1
            }
        },
        navigation: {
            clickable: true,
            nextEl: '.san-pham-ct-2 .swiper-next',
            prevEl: '.san-pham-ct-2 .swiper-prev'
        }
    })
    let HomeProduct = new Swiper('.home-2 .swiper-container', {
        slidesPerView: 6,
        speed: 1000,
        breakpoints: {
            1200: {
                slidesPerView: 5
            },
            1025: {
                slidesPerView: 4
            },
            768: {
                slidesPerView: 2
            },
            400: {
                slidesPerView: 1
            }
        },
        navigation: {
            clickable: true,
            nextEl: '.home-2 .swiper-next',
            prevEl: '.home-2 .swiper-prev'
        }
    })
    let HomePartner = new Swiper('.home-6 .swiper-container', {
        slidesPerView: 6,
        speed: 1000,
        breakpoints: {
            1200: {
                slidesPerView: 5
            },
            1025: {
                slidesPerView: 4
            },
            768: {
                slidesPerView: 2
            },
            400: {
                slidesPerView: 1
            }
        },
        navigation: {
            clickable: true,
            nextEl: '.home-6 .swiper-next',
            prevEl: '.home-6 .swiper-prev'
        }
    })

    let aboutSlider = new Swiper('.gioi-thieu-4 .swiper-container', {
        slidesPerView: 3,
        speed: 1000,
        breakpoints: {
            1200: {
                slidesPerView: 3
            },
            1025: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 2
            },
            400: {
                slidesPerView: 1
            }
        },
        navigation: {
            clickable: true,
            nextEl: '.gioi-thieu-4 .swiper-next',
            prevEl: '.gioi-thieu-4 .swiper-prev'
        }
    })


    let HomeBanner = new Swiper('.home-banner .swiper-container', {
        speed: 1000,
        navigation: {
            clickable: true,
            nextEl: '.home-banner .swiper-next',
            prevEl: '.home-banner .swiper-prev'
        },
        pagination: {
            el: '.home-banner .swiper-pagination',
            clickable: true
        },
    })
}

function ProductDetailSlider() {
    var GalleryThumb = new Swiper('.san-pham-ct-1 .thumb-wrapper .swiper-container', {
        spaceBetween: 20,
        slidesPerView: 3,
        speed: 1000,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            768: {
                spaceBetween: 10
            }
        },
        // on: {
        //     init: function() {
        //         if ($(window).outerWidth() < 1025) {
        //             $('.san-pham-ct .thumb-wrapper .swiper-slide').each(function() {
        //                 setTimeout(() => {

        //                     $(this).height($(this).width())
        //                 }, 500);
        //             })
        //         }
        //     },
        // }

    })
    let GalleryTop = new Swiper('.san-pham-ct-1 .active-wrapper .swiper-container', {
        effect: 'fade',
        thumbs: {
            swiper: GalleryThumb
        },
        speed: 500,
        autoplay: {
            delay: 3000
        },
        navigation: {
            clickable: true,
            nextEl: '.san-pham-ct-1 .swiper-next',
            prevEl: '.san-pham-ct-1 .swiper-prev'
        }

    });

}

function HeaderScrollActive() {
    if ($(window).scrollTop() > 100)
        $('header').addClass('on-scroll')
    else
        $('header').removeClass('on-scroll')
}

function InitSocialShare() {
    $(".social-share").jsSocials({
        showLabel: false,
        showCount: false,
        shares: [{
            share: 'twitter',
            logo: 'fab fa-twitter'
        }, {
            share: 'facebook',
            logo: 'fab fa-facebook-f'
        }]
    })
}

function BackToTop() {
    $('#backToTop').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 800)
    })
}

function ShowFormApply() {
    $('.ungtuyen').on('click', function() {
        $('.form-apply').slideToggle();
    })
}

function ScrollToActive() {
    if ($('.lmp-gt-navigation').length) {
        $('.lmp-gt-navigation ul li').each(function() {
            let e = $(this).attr('data-scroll')
            let a = $('header').height()
            let i = $(`.gioi-thieu-${e}`).offset().top
            if ($(window).scrollTop() > (i - a)) {
                $('.lmp-gt-navigation ul li').removeClass('active')
                $(this).addClass('active')
            }
        })
    }
}

function ScrollToSection() {
    if ($('.lmp-gt-navigation').length) {
        let a = $('header').height()
        $('.lmp-gt-navigation ul li').on('click', function() {
            let e = $(this).attr('data-scroll')
            $("html, body").animate({ scrollTop: $(`.gioi-thieu-${e}`).offset().top - a + 1 }, 1000);
        })
    }
}

function ScrollToFixed() {
    if ($('.lmp-gt-navigation').length) {
        let e = $('.banner-section').outerHeight()
        let i = $('header').outerHeight()
        if ($(window).scrollTop() > e - i){
			$('.lmp-gt-navigation').addClass('fixed')
			$('.lmp-gt-navigation').css({
				top: i + 'px'
			})}
        else
            $('.lmp-gt-navigation').removeClass('fixed')
    }
}

function ProductViewMoreAjax() {
    if ($('.san-pham-ds-1 .view-more-button').length) {
        let e = $('.san-pham-ds-1 .modulepager .pagination li a.NextPage').attr('href')
        $('.san-pham-ds-1 .view-more-button a').attr('href', e)
        $(document).on('click', '.san-pham-ds-1 .view-more-button a', function(e) {
            e.preventDefault()
            let param = {
                url: '',
                $data: ''
            }
            param.url = $(this).attr('href')
            console.log(param.url)
            $.ajax({
                url: param.url,
                type: 'POST',
                data: {
                    isajax: true
                },
                success: data => {
                    param.$data = $(data)
                    $('.san-pham-ds-1 .product-list .row').append(param.$data.find('.product-list .row').html())
                    if (param.$data.find('.san-pham-ds-1 .modulepager .pagination li a.NextPage').length) {
                        $('.san-pham-ds-1 .view-more-button a').attr('href', param.$data.find('.san-pham-ds-1 .modulepager .pagination li a.NextPage').attr('href'))
                    } else {
                        $('.san-pham-ds-1 .view-more-button a').remove()
                    }
                    // console.log(param.$data.find('.product-list .row').html())
                },
            })
            return
        })
    }
}
$(document).ready(function() {

    $('[data-fancybox]').fancybox({});
    App.SetBackground()
    App.InitLazyLoad()
    setTimeout(() => {

        App.EqualHeightElement('.project-item figure .image img')
    }, 100);
    $('.parallax-window').parallax({});
    MobileMapping()
    ToggleMobileNavigation()
    ImageSliderCustomPagination()
    ToggleSearchWrapper()
    DefaultSlider()
    ToggleMobileMenu()
    ProductDetailSlider()
    InitSocialShare()
    BackToTop()
    ShowFormApply()
    HeaderScrollActive()
    ScrollToActive()
    ScrollToSection()
    ScrollToFixed()
    ProductViewMoreAjax()
})
$(window).on('scroll', function() {
    HeaderScrollActive()
    ScrollToActive()
    ScrollToFixed()
})
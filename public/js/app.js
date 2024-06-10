$(document).ready(function() {
    $('.fancybox').fancybox({
        'autoScale': true,
        'touch': false,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 500,
        'speedOut': 300,
        'autoDimensions': true,
        'centerOnScroll': true
    });

    $('input[name=phone]').mask("+7(999)999-99-99");

    $('#our-experts').owlCarousel(owlSettings(
        30,
        5000,
        {
            0: {
                items: 1
            },
            768: {
                items: 5
            }
        },
        true
    ));

    // Scroll menu
    window.menuScrollFlag = false;
    $('a[data-scroll], div[data-scroll], img[data-scroll]').click(function (e) {
        e.preventDefault();
        if (!window.menuScrollFlag) {
            gotoScroll($(this).attr('data-scroll'));
        }
    });

    // Scroll controls
    setTimeout(() => {
        windowScroll();
        showHideFixedBar();
        setActiveMenu();
        // windowResize();
    }, 300);

    // $(window).on('resize', () => {
    //     windowResize();
    // });
    //
    // if (window.scrollAnchor) {
    //     window.menuScrollFlag = true;
    //     gotoScroll(window.scrollAnchor);
    // }

});

const windowScroll = () => {
    $(window).scroll(function() {
        window.menuScrollFlag = true;
        setActiveMenu();
        showHideFixedBar();
    });
}

const setActiveMenu = () => {
    let win = $(this);
    $('.section').each(function () {
        let scrollData = $(this).attr('data-scroll-destination');
        if (!win.scrollTop()) {
            resetColorHrefsMenu();
            window.menuScrollFlag = false;
        } else if ($(this).offset().top <= win.scrollTop() + 200 && scrollData) {
            window.menuScrollFlag = false;
            resetColorHrefsMenu();
            $('a[data-scroll=' + scrollData + ']').parents('li.nav-item').addClass('active');
        }
    });
}

const showHideFixedBar = () => {
    const fixedBar = $('#fixed-bar');
    if ($(window).scrollTop() > 50 /*$(window).height()*/) {
        fixedBar.css('top',0);
    } else {
        fixedBar.css('top',-42);
    }
}

const resetColorHrefsMenu = () => {
    $('li.nav-item').removeClass('active').blur();
}

const gotoScroll = (scroll) => {
    $('html,body').animate({
        scrollTop: $('div[data-scroll-destination="' + scroll + '"]').offset().top - 40
    }, 'fast', 'easeOutQuad');
}

const toLocalString = (string) => {
    return string.toLocaleString().replace(/\,/g, ' ');
}


const owlSettings = (margin, timeout, responsive, nav) => {
    let navButtonBlack1 = '<img src="/images/arrow_left.svg" />',
        navButtonBlack2 = '<img src="/images/arrow_right.svg" />';
    return {
        margin: margin,
        loop: true,
        nav: nav,
        autoplay: true,
        autoplayTimeout: timeout,
        dots: false,
        responsive: responsive,
        navText: [navButtonBlack1, navButtonBlack2]
    }
}

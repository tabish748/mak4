/**
 * @var $ jQuery
 */

// Full Height...
function fsHeight() {
    let winHeight = $(window).height();
    $('[data-height="viewport"]').css('height', winHeight, '!important');
    $('[data-min-height="viewport"]').css('minHeight', winHeight, '!important');
}

/* Window Load ---------------------- */

$(window).on('load', function () {

    setTimeout(function () {
        $('body').addClass('loaded');
    }, 400);

    setTimeout(function () {
        AOS.init({
            once: true,
            duration: 1000
        });
    }, 800);

});


/* Document Ready ---------------------- */

$(document).ready(function () {

    fsHeight();


    // Inline background image...
    $("[data-bg]").each(function () {
        const image = $(this).attr("data-bg");
        $(this).css({
            backgroundImage: 'url("' + image + '")',
        });
    });

});


/* Window Scroll ---------------------- */

$(window).on('scroll', function () {


});


/* Window Resize ---------------------- */

$(window).on('resize', function () {

    fsHeight();

});

// *****************stick navabar
$(window).scroll(function () {

    // Write code here
    var scroll = $(window).scrollTop();
    if (scroll >= 40) {
        $(".header__wrap").addClass("hdr-scroll");
    } else {
        $(".header__wrap").removeClass("hdr-scroll");
    }
});


/*form show and hide appointment*/
function showaapntform()
{
    document.getElementById("apointmnt-form-parent").style.display="block"
  
}
function hideapntform()
{
    document.getElementById("apointmnt-form-parent").style.display="none"
  
}

// **********ticker
var $ticker = $('[data-ticker="list"]'),
    tickerItem = '[data-ticker="item"]'
    itemCount = $(tickerItem).length,
    viewportWidth = 0;

function setupViewport(){
    $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');
    
    for (i = 0; i < itemCount; i ++){
        var itemWidth = $(tickerItem).eq(i).outerWidth();
        viewportWidth = viewportWidth + itemWidth;
    }
    
    $ticker.css('width', viewportWidth);
}

function animateTicker(){
    $ticker.animate({
        marginLeft: -viewportWidth
      }, 30000, "linear", function() {
        $ticker.css('margin-left', '0');
        animateTicker();
      });
}

function initializeTicker(){
    setupViewport();
    animateTicker();
    
    $ticker.on('mouseenter', function(){
        $(this).stop(true);
    }).on('mouseout', function(){
        animateTicker();
    });
}

initializeTicker();
  
    // **********popup progress
    function hideprogresspopup()
    {
        document.getElementById("under-construction-popup").style.display="none";
    }
     function showprogresspopup()
    {
        document.getElementById("under-construction-popup").style.display="block";
    }
   

function gallery() {
    $('.gallery').collagePlus(
        {
            'fadeSpeed' : 2000,
            'targetHeight'    : 200,
            'allowPartialLastRow'       : true
        }
    );
};

var resizeTimer = null;
$(window).bind('resize', function() {
    // hide all the images until we resize them
    // set the element you are scaling i.e. the first child nodes of ```.Collage``` to opacity 0
    $('.gallery .Image_Wrapper').css("opacity", 0);
    // set a timer to re-apply the plugin
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout(gallery, 200);
});
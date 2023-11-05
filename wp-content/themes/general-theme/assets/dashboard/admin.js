(function ($) {
    // "use strict";
    console.log("evo me tu sam")
    console.log($("[data-bg-src]"))
    /*---------- 06. Set Background Image ----------*/
    if ($("[data-bg-src]").length > 0) {

        $("[data-bg-src]").each(function () {
            var src = $(this).attr("data-bg-src");
            $(this).css("background-image", "url(" + src + ")");
            $(this).removeAttr("data-bg-src").addClass("background-image");
        });
    }

})(jQuery);

console.log(document.querySelector('body'))

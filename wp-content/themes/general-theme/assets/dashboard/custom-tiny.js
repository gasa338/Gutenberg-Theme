// (function () {
//     tinymce.PluginManager
//         .add('stroke_mce_button', function (editor, url) {
//              editor.addButton('stroke_mce_button', {
//                 text: 'Button link',
//                 icon: false,
//                 onclick: function (e, t) {
//                     let selected = tinyMCE.activeEditor.selection.getContent();
//                     let content = ''
//                     if (selected) {
//                         //If the text is selected when the button is pressed, wrap the shortcut around it.
//                         content = '<span>' + selected + '</span>';
//                     } else {
//                         //If the text is not selected when the button is pressed, display default short code.
//                         content = '';
//                     }
//                     editor.insertContent(content);
//                 }
//             });
//         });
//
// })();

(function ($) {
    "use strict";
    /*---------- 06. Set Background Image ----------*/
    if ($("[data-bg-src]").length > 0) {

        $("[data-bg-src]").each(function () {
            var src = $(this).attr("data-bg-src");
            $(this).css("background-image", "url(" + src + ")");
            $(this).removeAttr("data-bg-src").addClass("background-image");
        });
    }

})(jQuery);
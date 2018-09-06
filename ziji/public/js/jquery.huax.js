(function ($) {
    $.extend({
        "huax": function () {
            $(".nav").css({
                "list-style-type": "none",
                "margin": "0",
                "padding": "0",
                "display": "none"
            });
            $(".nav").parent().hover(
                function () {
                    $(this).find(".nav").slideDown();
                }, function () {
                    $(this).find(".nav").slideUp();
                });

        }
    });
}(jQuery));
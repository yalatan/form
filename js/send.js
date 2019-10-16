(function($) {
    $(document).ready(function() {
        $('form').submit(function() {
            $.ajax({
                type: "POST",
                url: "js/mail.php",
                data: $(this).serialize()
            }).done(function() {
                $(this).find("input").val("");
                alert("Спасибо за вопросы! Задавайте еще.");
                $('form').trigger("reset");
            });
            return false;
        });


    });
})(jQuery);
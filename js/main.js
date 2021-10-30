/*$(function () {
    'use strict';
    $('#sendform').on('submit', function (e) {
        e.preventDefault();
        var fd = new FormData(this);
        $.ajax({
            url: '/form/send.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: fd,
            success: function (msg) {
                if (msg == 'ok') {
                  //  $("#sendform").html('<div class="img1"></div><h3 class="zag">Форма обратной связи</h3><p>Письмо успешно отправлено! Совсем скоро мы свяжимся с вами</p><div class="button crosss">Ok</div>');
                } else {
                    $(".button").val("Ошибка");
                    setTimeout(function () {
                        $(".button").val("Отправить");
                    }, 3000);
                }
            }
        });
    });
}); */

$('a').click(function(){
    $('.email').addClass('click')
})
$(function () {
    'use strict';
    $('#sendform').on('submit', function (e) {
        e.preventDefault();
        // var fd = new FormData(this);
        var email = e.target[0].value;
        debugger
        $.ajax({
            url: 'http://localhost:5000/api/emails',
            type: 'POST',
            contentType: 'application/json; charset=utf-8',
            processData: false,
            data: JSON.stringify({newEmail: email}),
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
        e.target[0].value = ''
    });
}); 

$('a').click(function(){
    $('.email').addClass('click')
})
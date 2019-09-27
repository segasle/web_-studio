
$(function() {
    $("body").css({padding:0,margin:0});
    var f = function() {
        $(".ndra-container").css({position:"relative"});
        var h1 = $("body").height();
        var h2 = $(window).height();
        var d = h2 - h1;
        var h = $(".ndra-container").height() + d;
        var ruler = $("<div>").appendTo(".ndra-container");
        h = Math.max(ruler.position().top,h);
        ruler.remove();
        $(".ndra-container").height(h);
    };
    setInterval(f,1000);
    $(window).resize(f);
    f();

    $('#btnMenu').on('click', function(e) {
        e.preventDefault;
        if($(this).hasClass('fa-align-justify')) {
            $(this).toggleClass('fa-times').removeClass('fa-align-justify');
        } else {
            $(this).toggleClass('fa-align-justify').removeClass('fa-times');
        }
    });


    $(".phone-number").each(function() {
        $(this).mask("+7(999)999-99-99");
    });


    $('#ajaxBut').click(function (e) {
        e.preventDefault();
        $('.name').removeClass('is-valid').removeClass('is-invalid');
        $('.phone-number').removeClass('is-valid').removeClass('is-invalid');
        $('.email').removeClass('is-valid').removeClass('is-invalid');
        $('#ansName').html('');
        $('#ansPhone').html('');
        $('#ansEmail').html('');
        $('#ajaxAnsw').html('');
        var form = $('#ajaxBut').closest('form');
        var formElement = document.getElementsByClassName("ask-form");
        var formData = new FormData(formElement[0]);
        $.ajax({
            type: "POST",
            url: "/functions/senddata.php",
            data: formData,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function (data) {
                if (data == 0 || data == 4) {
                    $('#ajaxAnsw').html('<div class="alert alert-danger">Ошибка отправки формы</div>');
                    $('.name').addClass('is-invalid');
                    $('.phone-number').addClass('is-invalid');
                    $('.email').addClass('is-invalid');
                    $('.topic').addClass('is-invalid');
                    $('.message').addClass('is-invalid');
                } else if (data == 1) {
                    $('#ajaxAnsw').html('<div class="alert alert-success">Успешно отправлено</div>');
                    $('.name').addClass('is-valid');
                    $('.phone-number').addClass('is-valid');
                    $('.email').addClass('is-valid');
                    $('.topic').addClass('is-valid');
                    $('.message').addClass('is-valid');
                } else if (data == 2) {
                    $('.name').addClass('is-invalid');
                    $('#ansName').html('<div class="d-block invalid-feedback">Введите имя</div>');
                    $('.phone-number').addClass('is-valid');
                    $('.email').addClass('is-valid');
                } else if(data == 23) {
                    $('.name').addClass('is-invalid');
                    $('#ansName').html('<div class="d-block invalid-feedback">Введите имя</div>');
                    $('.phone-number').addClass('is-invalid');
                    $('#ansPhone').html('<div class="d-block invalid-feedback">Введите телефон</div>');
                    $('.email').addClass('is-invalid');
                    $('#ansEmail').html('<div class="d-block invalid-feedback">или электронную почту</div>');
                } else if (data == 3) {
                    $('.name').addClass('is-valid');
                    $('.phone-number').addClass('is-invalid');
                    $('#ansPhone').html('<div class="d-block invalid-feedback">Введите телефон</div>');
                    $('.email').addClass('is-invalid');
                    $('#ansEmail').html('<div class="d-block invalid-feedback">или электронную почту</div>');
                } else if(data == 5) {
                    $('#ajaxFile').html('<div class="alert alert-danger">Файл не должен превышать 3Мб</div>');
                    $('.name').addClass('is-valid');
                    $('.phone-number').addClass('is-valid');
                    $('.email').addClass('is-valid');
                    $('.topic').addClass('is-valid');
                    $('.message').addClass('is-valid');
                } else if (data == 6) {
                    $('#ajaxFile').html('<div class="alert alert-danger">Неверный формат файла(jpeg, jpg, png, xlsx, docx)</div>');
                    $('.name').addClass('is-valid');
                    $('.phone-number').addClass('is-valid');
                    $('.email').addClass('is-valid');
                    $('.topic').addClass('is-valid');
                    $('.message').addClass('is-valid');
                } else if (data == 7) {
                    $('#ajaxFile').html('<div class="alert alert-danger">Ошибка загрузки файла</div>');
                    $('.name').addClass('is-valid');
                    $('.phone-number').addClass('is-valid');
                    $('.email').addClass('is-valid');
                    $('.topic').addClass('is-valid');
                    $('.message').addClass('is-valid');
                } else {
                    $('#ajaxAnsw').html('<div class="alert alert-danger">Ошибка отправки формы</div>');
                }
            },
            error: function (error, exception) {
                $('#ajaxAnsw').html(error.responseText);
            }
        });
    });
});
;(function(){
    $('#modalContact').on('submit', function (e){
        e.preventDefault();
        $(".alert .alert-danger").alert('close');
        $.ajax({
            url: '/mail',
            type: 'post',
            data: {
                name: $('#inputName2').val(),
                email: $('#inputEmail2').val(),
                tel: $('#inputTel2').val(),
                comment: $('#inputComment2').val(),
                '_token': $('input[name=_token]').val()
            },
            success: function (){
                $(".alert").alert('close');
                $('.contact-container').prepend('<div class="alert alert-success" role="alert"><strong>Ваша заявка отправлена!</strong></div>');
                $('.contact').css('display', 'none');
                setTimeout(function(){
                    $('#contactUsModal').modal('hide');

                }, 1000);
            },
            error: function (err){
                console.log(err);
                $('.contact h4').after('<div class="alert alert-danger" role="alert"><strong>Произошла ошибка!</strong> Попробуйте повторить отправку или повторите позже.</div>');
            }
        });
    });
    $('#contact').on('submit', function (e){
        e.preventDefault();
        $(".alert .alert-danger").alert('close');
        $.ajax({
            url: '/mail',
            type: 'post',
            data: {
                name: $('#inputName').val(),
                email: $('#inputEmail').val(),
                tel: $('#inputTel').val(),
                comment: $('#inputComment').val(),
                '_token': $('input[name=_token]').val()
            },
            success: function (){
                $(".alert").alert('close');
                $('.contact-container').prepend('<div class="alert alert-success" role="alert"><strong>Ваша заявка отправлена!</strong></div>');
                $('.contact').css('display', 'none');
                setTimeout(function(){
                    $('#contactUsModal').modal('hide');

                }, 1000);
            },
            error: function (err){
                console.log(err);
                $('.contact h4').after('<div class="alert alert-danger" role="alert"><strong>Произошла ошибка!</strong> Попробуйте повторить отправку или повторите позже.</div>');
            }
        });
    });
    $('#contactUsModal').on('hidden.bs.modal', function (e) {
        $(".alert .alert-danger").alert('close');
    });
})();
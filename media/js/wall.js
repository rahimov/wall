$(function () {
    $('#form_wall').submit(function(){
        var $form = $(this);

        $('[type=submit]',$form).attr('disabled','disabled');
        $form.find('.alert-error').remove();

        $.ajax({
            type: 'POST',
            url: $form.attr('action'),
            data: $form.serialize(),
            dataType: 'json',
            success: function(data) {
                if(!data.error){
                    $('<div class="well"><h5>'+ data.message.user +' ('+ data.message.publishedon +'):</h5>'+data.message.text+'</div>').insertAfter($form);
                }else{
                    $('<div class="alert alert-error">'+ data.message +'</div>').prependTo($form);
                }
                $('[type=submit]',$form).removeAttr('disabled');
                $('#inputText',$form).val('');
            },
            error: function(){
                $('<div class="alert alert-error">Произошла ошибка соединения</div>').prependTo($form);
                $('[type=submit]',$form).removeAttr('disabled');
            }
        });

        return false;
    });
});
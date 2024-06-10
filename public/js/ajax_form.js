$(document).ready(function ($) {
    processingForm($('#request-form-modal'),true,false);
    processingForm($('#request-form-contacts'),true,false);
});

const processingForm = (form, resetInputs, callback) => {
    const body = $('body'),
        agree = $('input[name=agree]');

    agree.change(function () {
        let button = $(this).parents('form').find('button[type=submit]');
        if (agree.is(':checked')) button.removeAttr('disabled');
        else button.attr('disabled','disabled');
    });

    form.on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData,
            inputError = form.find('input.error'),
            textError = form.find('.error');

        // if (!agree.is(':checked')) return false;

        form.find('input, textarea, select').each(function () {
            let self = $(this);
            if (self.attr('type') === 'file') formData.append(self.attr('name'), self[0].files[0]);
            else if (self.attr('type') === 'checkbox' || self.attr('type') === 'radio') formData = processingCheckFields(formData, self);
            else formData = processingFields(formData, self);
        });

        $('div.error').css('display', 'none').html('');
        inputError.removeClass('error');
        textError.html('');
        form.find('input, select, textarea, button').attr('disabled', 'disabled');
        // addLoader();

        $.ajax({
            url: form.attr('action'),
            data: formData,
            processData: false,
            contentType: false,
            type: form.attr('method'),
            success: function (data) {
                // form.modal('hide');
                unlockAll(body, form);
                if (resetInputs) form.find('input, textarea').val('');
                inputError.removeClass('error');

                $('.modal').modal('hide');
                $('.event-block .roll-up').css('height', 0);

                if (data.message) {
                    const messageModal = $('#message-modal');
                    messageModal.find('h2').html(data.message);
                    messageModal.modal('show');
                }
                if (callback) callback(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                let response = jQuery.parseJSON(jqXHR.responseText),
                    replaceErr = {
                        'password': '«Пароль»',
                        'phone': '«Телефон»',
                        'email': '«E-mail»',
                        'name': '«Имя»',
                        'address': '«Адрес»',
                        'agree': '«Я принимаю…»',
                    };

                $.each(response.errors, function (field, errorMsg) {
                    let errorBlock = form.find('.error.' + field),
                        errorInput = form.find('input[name=' + field + ']');

                    errorMsg = errorMsg[0];
                    $.each(replaceErr, function (src, replace) {
                        errorMsg = errorMsg.replace(src, replace);
                    });

                    errorBlock.css('display', 'block').html(errorMsg);
                    errorInput.addClass('error');
                });
                unlockAll(body, form);
            }
        });
    });
}

const processingFields = (formData, inputObj) => {
    if (inputObj.length) {
        $.each(inputObj, function (key, obj) {
            if (obj.type !== 'checkbox' && obj.type !== 'radio') {
                formData.append(obj.name,obj.value);
            }
        });
    }
    return formData;
}

const processingCheckFields = (formData, inputObj) => {
    if (inputObj.length) {
        inputObj.each(function(){
            var _self = $(this);
            if(_self.is(':checked')) {
                formData.append(_self.attr('name'),_self.val());
            }
        });
    }
    return formData;
}

const unlockAll = (body,form) => {
    form.find('input, select, textarea, button').removeAttr('disabled');
    body.css({
        'overflow-y':'auto',
        'padding-right':0
    });
}

$(document).ready(function() {
    
    var validName = false;
    var validPhone = false;
    var validAppeal = false;
    
    var storage = '';
    var name = '';
    var phone = '';
    var appeal = '';
    
    $('#name').on('input', function() {
        
        name = $(this).val();
        
        if (name.length < 3) {
            $('.name-invalid').show();
            validName = false;
        } else {
            
            $('.name-invalid').hide();
            validName = true;
            
            var testExp = new RegExp(/^[а-яА-ЯёЁa-zA-Z0-9]+$/);
            
            if (!testExp.test(name)) {
                $('.name-invalid').show();
                validName = false;
            }
            
        }
        
    });
    
    $('#phone').on('input', function() {
        
        phone = $(this).val();
        var testExp = new RegExp(/[0-9-()+]{5,20}/);

        if (!testExp.test(phone)) {
            $('.phone-invalid').show();
            validPhone = false;
        } else {
            validPhone = true;
            $('.phone-invalid').hide();
        }
        
    });
    
    $('#appeal').on('input', function() {
        
        appeal = $(this).val();
        
        if (appeal.length < 10) {
            $('.appeal-invalid').show();
            validAppeal = false;
        } else {
            $('.appeal-invalid').hide();
            validAppeal = true;
        }
        
    });
    
    $('form').submit(function(event) {
        
        event.preventDefault();
        
        if (validName && validPhone && validAppeal) {
            
            var storage = $('#storage').val();
            
            var posting = $.post('app/ajax/feedback.php', { name: name, phone: phone , appeal: appeal, storage: storage });
            
            posting.done(function(data) {
                
                data = JSON.parse(data);

                if (data.success === true) {
                    
                    $('form').before('<div class="alert alert-success" role="alert">\n\n\
                                        Мы Вам перезвоним</div>');
                    $('form')[0].reset();
                    
                } else {
                    $('form').before('<div class="alert alert-danger" role="alert">\n\n\
                                        Ошибка на стороне сервера</div>');
                }
                
            });
            
        }
        
    });
    
});
$(".password_button").on('click', function(event) {
    event.preventDefault();
    if($(this).parents(1).children('input.form-control').attr("type") == "text"){
        $(this).parents(1).children('input.form-control').attr('type', 'password');
        $(this).children('i').addClass( "fa-eye" );
        $(this).children('i').removeClass( "fa-eye-slash" );
    }else if($(this).parents(1).children('input.form-control').attr('type') == "password"){
        $(this).parents(1).children('input.form-control').attr('type', 'text');
        $(this).children('i').removeClass( "fa-eye" );
        $(this).children('i').addClass( "fa-eye-slash" );
    }
});

$('.password_control').on('keyup',function(event){
    var pass_1 = $('.password_control')[0]['value'];
    var pass_2 = $('.password_control')[1]['value'];
    if( pass_1.length>4 && pass_2.length>4){
        if(pass_1 == pass_2){
            $('#submit_button').removeAttr('disabled');
            $('.password_control').removeClass('border-danger text-danger');
            $('#match_error').addClass('d-none');
        }
        else{
            $('#submit_button').attr('disabled','true');
            $('.password_control').addClass('border-danger text-danger');
            $('#match_error').removeClass('d-none');
        }
    }
    else{
        $('#submit_button').attr('disabled','true');
        $('.password_control').addClass('border-danger text-danger');
        $('#match_error').removeClass('d-none');
    }
});

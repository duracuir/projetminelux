$(document).ready(function(){
    $('#form').on('submit', function(){
        var username = $('#username').val();
        var password = $('#password').val();
        var password_confirm = $('#password_confirm').val();
        var phone = $('#phone').val();
        var email = $('#eemail').val();

        if (username =='' || password =='' || password_confirm =='' || phone == '' || email == '') {

            $('#erreur').html('Tous les champs doivent etre remplis!');
            $('#affichage_info').html('');
        }else{
            $.ajax({
                url:$(this).attr("action"),
                type:$(this).attr("method"),
                data:$(this).serialize(),
                success:function(data){
                    $('#affichage_info').html(data);
                    $('#erreur').html('');
                }
            });
        }
        return false;
    });
})
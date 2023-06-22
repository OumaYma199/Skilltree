/**
 * script pour la vérification de l'enregistrement des users
 */

$('#register-user').click(function(){
    var prenom = $('#prenom').val();
    var nom = $('#nom').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var password_confirm = $('#password-confirm').val();
    var passwordlength = password.length;
    var Accepterlesconditions=$('#Accepterlesconditions');

    if(prenom != "" && /^[A-Za-zÀ-ÖØ-öø-ÿ]+$/.test(prenom) ){
        $('#prenom').removeClass('is-invalid');
        $('#prenom').addClass('is-valid');
        $('#error-register-prenom').text("");

        if(nom != "" && /^[A-Za-zÀ-ÖØ-öø-ÿ]+$/.test(nom) ){
            $('#nom').removeClass('is-invalid');
            $('#nom').addClass('is-valid');
            $('#error-register-nom').text("");
            if(email != "" && /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email) ){
                $('#email').removeClass('is-invalid');
                $('#email').addClass('is-valid');
                $('#error-register-email').text("");
                if(passwordlength >= 8 ){
                    $('#password').removeClass('is-invalid');
                    $('#password').addClass('is-valid');
                    $('#error-register-password').text("");
                    if(password == password_confirm ){
                        $('#password-confirm').removeClass('is-invalid');
                        $('#password-confirm').addClass('is-valid');
                        $('#error-register-password-confirm').text("");
                        if(Accepterlesconditions.is(':cheked')){
                            $('#Accepterlesconditions').removeClass('is-invalid');
                            $('#error-register-Accepterlesconditions').text("");

                            // envoie du formulaire
                            $('#form-register').submit();
                        }else{
                            $('#Accepterlesconditions').addClass('is-invalid');
                            $('#error-register-Accepterlesconditions').text("Vous devez accepter nos termes et conditions!");
                        }
                    }else{
                        $('#password-confirm').addClass('is-invalid');
                        $('#password-confirm').removeClass('is-valid');
                        $('#error-register-password-confirm').text("Mot de passe doit être identique !");
                    }
                }else{
                    $('#password').addClass('is-invalid');
                    $('#password').removeClass('is-valid');
                    $('#error-register-password').text("Mot de passe au moins 8 caractères!");
                }
            }else{
                $('#email').addClass('is-invalid');
                $('#email').removeClass('is-valid');
                $('#error-register-email').text("Adresse email est non validé!");
            }
        }else{
            $('#nom').addClass('is-invalid');
            $('#nom').removeClass('is-valid');
            $('#error-register-nom').text("Nom est non validé!");
        }
    }else{
        $('#prenom').addClass('is-invalid');
        $('#prenom').removeClass('is-valid');
        $('#error-register-prenom').text("Prénom est non validé!");
    }


});

//Evénement pour l'input les termes et conditions
$('#Accepterlesconditions').change(function(){
    var Accepterlesconditions = $('#Accepterlesconditions');
    if(Accepterlesconditions.is(':checked')){
        $('#Accepterlesconditions').removeClass('is-invalid');
        $('#error-register-Accepterlesconditions').text("");
    }else{
        $('#Accepterlesconditions').addClass('is-invalid');
        $('#error-register-Accepterlesconditions').text("Vous devez accepter nos termes et conditions!");
    }
})


$(document).ready(function() {

// validação do formulário
    $('#contact-form').validate({
        rules: {// condições 
            cpf: {required: true, cpf:true},
            email: {required: true, email: true},
    
        },
        messages: {// ações
             cpf: {required: "Digite seu CPF", cpf:"CPF Inválido"},
            email: {required: "Digite um email", email: "Digite um email válido"},
        },
        highlight: function(element) {
            $(element)
            .closest('.control-group')
            .removeClass('success')
            .addClass('error');
        },
        success: function(element) {
          element
          .text('OK!').addClass('valid')
          .closest('.control-group')
          .removeClass('error')
          .addClass('success');
        },

    });

    jQuery(function($) {
        $(".cpf").mask("999.999.999-99");
    });
}); // end document.ready


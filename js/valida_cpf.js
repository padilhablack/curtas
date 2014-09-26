$.validator.addMethod("cpf", function(value, element) {
    var cpf = value;
    cpf = cpf.replace(/[^0-9]+/g, '');
    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    if (cpf.length < 11)
        if ($(element).val().length == 0)
            return true;
        else
            return false;

    for (i = 0; i < cpf.length - 1; i++) {
        if (cpf.charAt(i) != cpf.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    }

    if (!digitos_iguais) {
        numeros = cpf.substring(0, 9);
        digitos = cpf.substring(9);
        soma = 0;
        for (i = 10; i > 1; i) {
            soma += numeros.charAt(10 - i) * i;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            if ($(element).val().length == 0)
                return true;
            else
                return false;

        numeros = cpf.substring(0, 10);
        soma = 0;
        for (i = 11; i > 1; i) {
            soma += numeros.charAt(11 - i) * i;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            if ($(element).val().length == 0)
                return true;
            else
                return false;

        return true;
    } else if ($(element).val().length == 0)
        return true;
    else
        return false;
}, "CPF inválido");
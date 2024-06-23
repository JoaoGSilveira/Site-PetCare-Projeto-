//Formatação de Celular & CPF com JavaScript

function formatarCelular(celular) {
    celular = celular.replace(/[^\d]/g, '');
    if (celular.length === 11) {
        return '(' + celular.substring(0, 2) + ')' + celular.substring(2, 7) + '-' + celular.substring(7);
    } else {
        return celular;
    }
}

function formatarCPF(cpf) {
    cpf = cpf.replace(/[^\d]/g, '');
    if (cpf.length === 11) {
        return cpf.substring(0, 3) + '.' + cpf.substring(3, 6) + '.' + cpf.substring(6, 9) + '-' + cpf.substring(9);
    } else {
        return cpf;
    }
}

function aplicarFormatacao() {
    var celular = document.getElementById('celular').value;
    var cpf = document.getElementById('cpf').value;

    if (celular.trim() !== '') {
        document.getElementById('celular').value = formatarCelular(celular);
    }
    if (cpf.trim() !== '') {
        document.getElementById('cpf').value = formatarCPF(cpf);
    }
}

function togglePetFields(show) {
    var petFields = document.getElementById("petFields");
    if (show) {
        petFields.style.display = "block";
    } else {
        petFields.style.display = "none";
    }
}

//------------------------------------------------------------------------------------------------------------//

//Formatação de CEP com AJAX

$(document).ready(function () { 
    var $campo = $("#cep");
    $campo.mask('00000-000', {reverse: true});
});

//------------------------------------------------------------------------------------------------------------//
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('cep').focus();
    document.getElementById('cep').value=("");
    document.getElementById('endereco').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('estado').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('endereco').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('estado').value=(conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('endereco').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('estado').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

$('#medico').change(function(e) {
    let medico_id = $(this).val().split("-")[0].trim();
    $('#medico_id').val(medico_id);
});

var medicos = {
    url: function(phrase){
        return "/api/autocomplete/medico";
    },

    getValue: function(element) {
        return (element.id + " - " + element.name);
    },

    ajaxSettings: {
        dataType: 'json',
        method: "GET",
        data: {
            dataType: "json"
        }
    },
    preparePostData: function(data) {
        data.phrase = $("#medico").val();
        console.log(data);
    },

    requestDelay: 40
};

$("#medico").easyAutocomplete(medicos);

$('#paciente').change(function(e) {
    let paciente_id = $(this).val().split("-")[0].trim();
    $('#paciente_id').val(paciente_id);
});

var pacientes = {
    url: function(phrase){
        return "/api/autocomplete/paciente";
    },

    getValue: function(element) {
        return (element.id + " - " + element.name);
    },

    ajaxSettings: {
        dataType: 'json',
        method: "GET",
        data: {
            dataType: "json"
        }
    },

    preparePostData: function(data) {
        data.phrase = $("#paciente").val();
    },

    requestDelay: 40
};

$("#paciente").easyAutocomplete(pacientes);
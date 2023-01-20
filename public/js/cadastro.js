
$("#cpf_cnpj").keydown(function () {
    try {
        $("#cpf_cnpj").unmask();
    } catch (e) { }

    var tamanho = $("#cpf_cnpj").val().length;

    if (tamanho < 11) {
        $("#cpf_cnpj").mask("999.999.999-99");
    } else {
        $("#cpf_cnpj").mask("99.999.999/9999-99");
    }


    var elem = this;
    setTimeout(function () {

        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);

    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});


// let $t = document.getElementById('cpfcnpj');
// $t.addEventListener('paste', function (event) {
//     setTimeout(function () {
//         this.value = this.value.replace(/^\s+|\s+$/g, '')
//     }.bind(this), 0)
// })
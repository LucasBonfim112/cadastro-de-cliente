$("#cpfcnpj").keydown(function(){
    try {
        $("#cpfcnpj").unmask();
    } catch (e) {}

    var tamanho = $("#cpfcnpj").val().length;

    if(tamanho < 11){
        $("#cpfcnpj").mask("999.999.999-99");
    } else {
        $("#cpfcnpj").mask("99.999.999/9999-99");
    }

  
    var elem = this;
    setTimeout(function(){
       
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});
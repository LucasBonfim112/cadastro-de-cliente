//pesquisar
initEventFind();


$(document).ready(function () {
    listar()
})

function formataCPF(cpf, lg) {
    if (lg == 11) {
        cpf = cpf.replace(/[^\d]/g, "");
        return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");

    } else {
        return cpf.replace(/\D/g, '')
            .replace(/^(\d{2})(\d{3})?(\d{3})?(\d{4})?(\d{2})?/, "$1.$2.$3/$4-$5");
    }




}


function listar() {
    $.ajax({
        type: 'get',
        url: 'listarclientes',
        success: function (res) {
            res = JSON.parse(res)
            tab = $('.tabb');
            if (res != '') {
                tab.html('');
                $.each(res, function (i, el) {
                    tab.append("<tr class='conteudo linha" + el.idcliente + "'><td><a href='editar?id=" + el.idcliente + "' type='button' style='color: blue;'><i class='bi bi-pencil'></i></a> </td><td>" + el.nome + "</td><td>" + formataCPF(el.cpf_cnpj, el.cpf_cnpj.length) + "</td><td>" + el.idade + "</td><td>" + el.nascimento + "</td><td><a onclick='excluir(event, " + el.idcliente + ")' type='button' style='color: red;'><i class='bi bi-trash'></i></a></td></tr> ")
                })
            }
        }
    })
}

//excluir
function excluir(e, idcliente) {
    e.preventDefault();
    Swal.fire({
        title: 'Deseja deletar isso?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'sim delete isso!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "get",
                url: base + './deletar?idcliente=' + idcliente,
                data: ({
                    'idcliente': idcliente,
                }),
                success: function (res) {
                    $('.linha' + idcliente).hide(500)
                    Swal.fire(
                        'Deletado!',
                        'Seu registro foi deletado!',
                        'success'
                    )
                }
            });
        }
    })
}





function initEventFind() {
    $('#buscar').keyup(function () {
        var nomeFiltro = $(this).val().toLowerCase();
        $('.tabs').find('.conteudo').each(function () {
            var conteudoCelula = $(this).text()
            var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
            $(this).css('display', corresponde ? '' : 'none');
        });
    });
}
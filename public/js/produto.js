initEventFind()
$(document).ready(function () {
    listar()
})

function cadastrar(dados) {
    $.ajax({
        type: "post",
        url: base + '/cadProdutos',
        data: (
            dados
        ),
        success: function (res) {
            window.location = base + '/produtos'
        }
    })
}

$(document).ready(function () {
    $('#cadastrar').on('click', function () {
        let dados = {
            codigo: $('#codigo').val(),
            nome: $('#nome').val(),
            cor: $('#cor').val(),
            preco: $('#preco').val(),
            quantidade: $('#quantidade').val()
        }
        cadastrar(dados)
    })
})

function listar() {
    $.ajax({
        type: 'get',
        url: 'listarProdutos',
        success: function (res) {
            res = JSON.parse(res)
            tab = $('.tabb');
            if (res != '') {
                tab.html('');
                $.each(res, function (i, el) {
                    tab.append("<tr class='conteudo linha" + el.idproduto + "'><td><a href='editprod?id=" + el.idproduto + "' type='button' style='color: blue;'><i class='bi bi-pencil'></i></a> </td><td>" + el.codigo + "</td><td>" + el.nome + "</td><td>" + el.cor + "</td><td>" + el.preco + "</td></td><td>" + el.quantidade + "</td><td><a onclick='excluir(event, " + el.idproduto + ")' type='button' style='color: red;'><i class='bi bi-trash'></i></a></td></tr> ")
                })
            }
        }
    })
}

function editar(dados) {
    $.ajax({
        type: "post",
        url: base + '/atualizarProd',
        data: (
            dados
        ),
        success: function () {
            window.location = base + '/produtos'
        }
    })
}

$(document).ready(function () {
    $('#editar').on('click', function () {
        let dados = {
            idproduto: $("#idproduto").val(),
            codigo: $('#codigo').val(),
            nome: $('#nome').val(),
            cor: $('#cor').val(),
            preco: $('#preco').val(),
            quantidade: $('#quantidade').val(),
        }
        editar(dados)
    })
})




function excluir(e, idproduto) {
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
                url: base + './excluir?idproduto=' + idproduto,
                data: ({
                    'idproduto': idproduto,
                }),
                success: function (res) {
                    $('.linha' + idproduto).hide(500)
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
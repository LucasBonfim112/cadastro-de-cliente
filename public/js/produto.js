$(document).ready(function () {
    $('.js-example-basic-single').select2();
});


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
        if (dados.codigo) {
            $.ajax({
                url: base + '/validarProd',
                type: "POST",
                data: (dados),
                success: function (res) {
                    res = JSON.parse(res)
                    if (res.existe) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'ja existe um produto com esse codigo!',
                            confirmButtonText: 'OK!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#codigo").val("");
                            }
                        })
                    } else {
                        cadastrar(dados)
                    }
                }
            })
        }
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
                    tab.append("<tr class='conteudo linha" + el.idproduto + "'><td><a href='editprod?id=" + el.idproduto + "' type='button' style='color: blue;'><i class='bi bi-pencil'></i></a> </td><td>" + el.codigo + "</td><td>" + el.nome + "</td><td>" + el.cor + "</td><td>R$" + el.preco + "</td></td><td class='qtd'>" + el.quantidade + "</td><td><a onclick='excluir(event, " + el.idproduto + ")' type='button' style='color: red;'><i class='bi bi-trash'></i></a></td></tr>")

                })
                verificaQtd()
            }
        }
    })
}


function verificaQtd() {
    let qtds = $('.qtd');

    for (let qtd in qtds) {
        if (qtds[qtd].innerText == 0) {
            qtds[qtd].innerText = 'esgotado'
        }
    }
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
            quantidade: $('#quantidade').val()
        }
        if (dados.codigo) {
            $.ajax({
                url: base + '/validarProd',
                type: "POST",
                data: (dados),
                success: function (res) {
                    res = JSON.parse(res)
                    if (res.existe) {
                        Swal.fire({
                            title: 'AVISO!',
                            text: "Dejeja alterar isso?",
                            icon: 'warning',
                            showDenyButton: true,
                            confirmButtonText: 'sim',
                            denyButtonText: `não`,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                editar(dados)
                            } else if (result.isDenied) {
                            }
                        })
                    } else {
                        editar(dados)
                    }
                }
            })
        }
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




$(document).ready(function () {
    $('.js-example-basic-single').select2();
    const valorproduto = $("#valor").val()

    $("#quantidade").keyup(function () {
        let qtd = $("#quantidade").val();
        console.log(qtd)

        if (parseInt(qtd) > 0 && !isNaN(qtd) && qtd != '') {

            let calculo = qtd * valorproduto;
            console.log(calculo)

            // let calFormt = calculo.toLocaleString('pt-br', { minimumFractionDigits: 2 });
            // console.log(calFormt)
            $("#valor").val(calculo.toFixed(2))
        }
    });
})
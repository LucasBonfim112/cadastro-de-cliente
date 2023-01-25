<link rel="stylesheet" href="../public/css/cadastro.css">
<?php $render('header');
?>
<main>
    <div class="position-absolute top-50 start-50 translate-middle cad  ">
        <h2 class="text-center">Editar Seu Produto</h2>
        <form class="formCad" method="POST" action="">

            <label for="inputPassword4">COD produto</label>
            <input type="text" value="<?= $dados["idproduto"] ?>" id="idproduto" name="idproduto" hidden>
            <input type="text" class="" value="<?= $dados["codigo"] ?>" id="codigo" name="codigo" placeholder="codigo">

            <label for="inputEmail4">Nome do Produto</label>
            <input type="text" class="" value="<?= $dados["nome"] ?>" id="nome" name="nome" placeholder="Nome do produto">

            <label for="inputAddress">Cor do produto</label>
            <input type="text" class="" value="<?= $dados["cor"] ?>" id="cor" name="cor" placeholder="cor">

            <label for="inputAddress2">preço do produto</label>
            <input type="text" class="" value="<?= $dados["preco"] ?>" id="preco" name="preco" placeholder="preço">

            <label for="inputAddress2">quantidade do produto</label>
            <input type="text" class="" value="<?= $dados["quantidade"] ?>" id="quantidade" name="quantidade" placeholder="quantidade">

            <input id="editar" type="button" class="btn btn-primary " value="editar">
        </form>
    </div>
</main>
<script defer src="js/produto.js"></script>
<?php $render('footer'); ?>
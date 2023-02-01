<link rel="stylesheet" href="../public/css/produto.css">
<?php $render('header');
?>
<main>
    <div class="formularioContato">
        <form action='<?= $base ?>/vender' method="post">
            <label for="">Produto - <?= $dados["codigo"] ?></label>
            <input type="text" name="idproduto" value="<?= $dados["idproduto"] ?>" hidden>
            <input value="<?= $dados['nome'] ?>">

            <label for="">quantidade de estoque Disponivel = <?= $dados['quantidade'] ?></label>

            <input min="0" max="<?= $dados['quantidade'] ?>" id="quantidade" type="number" name="quantidade" value=1>

            <label for="">preço</label>
            <input id="valor" name="preco" value="<?= $dados['preco'] ?>">

            <h2>Clientes</h2>
            <select class="js-example-basic-single" name="idcliente" id="">
                <?php foreach ($valor as $val) {
                    echo ' <option  value="' . $val['idcliente'] . '">' . $val['nome'] . '</option>';
                } ?>
            </select>
            <input type="submit" class="btn btn-warning" value="VENDER">
        </form>
    </div>
</main>
<script defer src="js/produto.js"></script>
<?php $render('footer'); ?>
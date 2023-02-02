<link rel="stylesheet" href="../public/css/produto.css">
<?php $render('header');
?>

<main>

    <!-- adicionar o pedido no carrinho -->
    <div class="produtos">
        <h2>Produtos</h2>
        <input list="ice-cream-flavors" id="ice-cream-choice" name="produtos" placeholder="produtos">
        <input type="text" value="" placeholder="quantidade do produto">

        <datalist w id="ice-cream-flavors">
            <?php foreach ($dados as $dad) { ?>
                <option value="<?= $dad["nome"] ?>"><?= $dad["nome"] ?> - <?= $dad["quantidade"] ?> unidades </option>';
            <?php } ?>
        </datalist>

        <h2>clientes</h2>
        <input list="browsers" id="myBrowser" name="cliente" placeholder="clientes" />
        <datalist id="browsers">
            <?php foreach ($valor as $val) { ?>
                <option value="<?= $val["idcliente"] ?>"><?= $val["nome"] ?></option>';
            <?php } ?>
        </datalist>

        <a class="btn btn-info" href="">Adicionar ao Carrinho</a>
    </div>

    <!-- trazer do banco e finalizar o pedido -->
    <form action="">
        <div class="carrinho">
            <h3>Carrinho de Compras</h3>
            <p>produto / quantidade / preco / remover do carrinho</p>
            <p>Nome do Cliente / idcliente</p>
            <input type="submit" class="btn btn-warning" value="VENDER">
        </div>
    </form>
</main>

<script defer src="js/produto.js"></script>
<?php $render('footer'); ?>
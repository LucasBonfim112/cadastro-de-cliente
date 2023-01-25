<link rel="stylesheet" href="../public/css/cadastro.css">
<?php $render('header'); ?>

<main>
    <div class="position-absolute top-50 start-50 translate-middle cad  ">
        <h2 class="text-center">Editar Cliente</h2>
        <form class="formCad" method="POST">
            <label for="inputEmail4">Nome</label>
            <input type="text" id="idcliente" hidden value="<?= $dados["idcliente"] ?>" name="idcliente">
            <input type="text" value="<?= $dados["nome"] ?>" id="nome" name="nome" placeholder="Seu Nome">

            <label for="inputPassword4">cpf ou cnpj</label>
            <input id="cpfcnpj" type="text" value="<?= $dados["cpf_cnpj"] ?>" name="cpf_cnpj" placeholder="cpf_cnpj">

            <label for="inputAddress">idade</label>
            <input type="text" value="<?= $dados["idade"] ?>" id="idade" name="idade" placeholder="idade">

            <label for="inputAddress2">data de Nascimento</label>
            <input type="date" value="<?= $dados["nascimento"] ?>" id="data" name="data" placeholder="data nascimento">

            <input type="button" class="btn btn-primary" id="editar" value="editar">
        </form>
    </div>
</main>
<script defer src="js/cadastro.js"></script>
<script defer src="js/clientes.js"></script>
<?php $render('footer'); ?>
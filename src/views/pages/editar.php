<link rel="stylesheet" href="../public/css/cadastro.css">
<?php $render('header'); ?>


<main>
    <div class="position-absolute top-50 start-50 translate-middle cad  ">
        <h2 class="text-center">Editar Cliente</h2>
        <form class="formCad" method="POST" action="<?= $base; ?>/atualizar">
            <label for="inputEmail4">Nome</label>
            <input type="text" hidden value="<?= $dados["idcliente"] ?>" name="idcliente">
            <input type="text" value="<?= $dados["nome"] ?>" id="inputEmail4" name="nome" placeholder="Seu Nome">

            <label for="inputPassword4">cpf ou cnpj</label>
            <input id="cpfcnpj"type="text" + value="<?= $dados["cpf_cnpj"] ?>"  name="cpf_cnpj" placeholder="cpf_cnpj">

            <label for="inputAddress">idade</label>
            <input type="text" value="<?= $dados["idade"] ?>" id="inputAddress" name="idade" placeholder="idade">

            <label for="inputAddress2">data de Nascimento</label>
            <input type="date" value="<?= $dados["nascimento"] ?>" id="inputAddress2" name="data" placeholder="data nascimento">

            <input type="submit" class="btn btn-primary " value="editar">
        </form>
    </div>
</main>
<script defer src="js/cadastro.js"></script>
<?php $render('footer'); ?>
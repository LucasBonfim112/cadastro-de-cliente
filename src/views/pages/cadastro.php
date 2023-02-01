<link rel="stylesheet" href="../public/css/cadastro.css">
<?php $render('header');
?>
<main>
    <div class="position-absolute top-50 start-50 translate-middle cad  ">
        <h2 class="text-center">Cadastro de Clientes</h2>
        <form class="formCad" method="POST" action="">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="" id="nome" name="nome" placeholder="Seu Nome">

            <label for="inputPassword4">cpf ou cnpj</label>
            <input type="text" class="" id="cpf_cnpj" name="cpf_cnpj" placeholder="cpf_cnpj">

            <label for="inputAddress">idade</label>
            <input type="text" class="" id="idade" name="idade" placeholder="idade">

            <label for="inputAddress2">data de Nascimento</label>
            <input type="date" class="" id="data" name="data" placeholder="data nascimento">

            <input id="cadastrar" type="button" class="btn btn-primary " value="Cadastrar">
        </form>
    </div>
</main>
<script defer src="js/cadastro.js"></script>
<script defer src="js/clientes.js"></script>
<?php $render('footer'); ?>
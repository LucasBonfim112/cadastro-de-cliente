<link rel="stylesheet" href="../public/css/cadastro.css">
<?php $render('header'); ?>
<body class="fundoCad">
    <main>
        <div class="position-absolute top-50 start-50 translate-middle cad  ">
            <h2 class="text-center">Cadastro de Clientes</h2>
            <form class="formCad" method="POST" action="<?= $base; ?>/cadastrar">
                <label for="inputEmail4">Nome</label>
                <input type="text" class="" id="inputEmail4" name="nome" placeholder="Seu Nome">

                <label for="inputPassword4">cpf ou cnpj</label>
                <input type="text" class="" id="inputPassword4" name="cpf_cnpj" placeholder="cpf_cnpj">
                
                <label for="inputAddress">idade</label>
                <input type="text" class="" id="inputAddress" name="idade" placeholder="idade">

                <label for="inputAddress2">data de Nascimento</label>
                <input type="date" class="" id="inputAddress2" name="data" placeholder="data nascimento">

                <input type="submit" class="btn btn-primary " value="cadastrar">
            </form>
        </div>
    </main>
    <?php $render('footer'); ?>
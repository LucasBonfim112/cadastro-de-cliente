

<link rel="stylesheet" href="../public/css/login.css">
<link rel="stylesheet" href="<?= $base; ?>/css/style.css">

<body class="fundo">
    <div class=" position-absolute top-50 start-50 translate-middle">
        <div class="login">
            <img src="<?= $base; ?>/img/gazin_logo.png" alt="img">
            <form action="<?= $base; ?>/login_acao" class="formLogin" method="POST">

                <input type="text" class="form-control" placeholder="usuario" name="login">
                <input type="password" class="form-control" placeholder="senha" name="senha">

                <input type="submit" class="form-control btn-primary" value="Entrar">
            </form>
        </div>
    </div>
    <?php $render('footer'); ?>
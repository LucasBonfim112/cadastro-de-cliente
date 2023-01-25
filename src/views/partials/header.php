<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link href="<?= $base ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base ?>/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $base; ?>/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body class="fundo">
  <header class="fundo2  ">
    <nav>
      <ul>
        <li>
          <img src="img/gazin_logo.png" width="160px" />
        </li>
        <li>
          <a class="  " aria-current="page" href="<?= $base; ?>/cadastro">
            <span> <i class="bi bi-card-text"></i></span>
            Cadastro de Clientes
          </a>
        </li>
        <li>
          <a class=" " href="<?= $base; ?>/clientes">
            <span><i class="bi bi-people-fill"></i></span>
            Clientes
          </a>
        </li>
        <li>
          <a class=" " href="<?= $base; ?>/produtoscad">
            <span><i class="bi bi-fan"></i></span>
            Cadastro de Produto
          </a>
        </li>
        <li>
          <a class=" " href="<?= $base; ?>/produtos">
            <span><i class="bi bi-bicycle"></i></span>
            Produtos
          </a>
        </li>
        <li class="sair">
          <a href="<?= $base; ?>/sair">Sair</a>
        </li>
      </ul>
    </nav>
    </div>
  </header>
  <script>
    const base = '<?= $base; ?>';
  </script>
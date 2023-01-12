<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link href="<?= $base ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base ?>/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $base; ?>/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body class="fundo">
  <header class="navbar navbar-dark sticky-top bg-dark  ">
    <nav class="navbar">
      <ul class="d-flex " style="justify-content: center;">
        <li>
          <a class="nav-link navbar-brand  href=" #">Gazin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " aria-current="page" href="<?= $base; ?>/cadastro">
            <span> <i class="bi bi-card-text"></i></span>
            Cadastro
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= $base; ?>/clientes">
            <span><i class="bi bi-people-fill"></i></span>
            Clientes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="<?= $base; ?>/sair">Sair</a>

        </li>
      </ul>
    </nav>
    </div>
  </header>
  <script>
    const base = '<?= $base; ?>';
  </script>
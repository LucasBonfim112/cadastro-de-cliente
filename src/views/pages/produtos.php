<?php $render('header'); ?>
<main class="">
    <h2 class="text-center mt-5" style="color: white;">Produtos Cadastrados</h2>
    <div class="tabelapos">
        <table class="table tabela">
            <input id="buscar" type="text" class="form-control"  placeholder="buscar">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Editar</th>
                    <th scope="col">codigo</th>
                    <th scope="col">nome</th>
                    <th scope="col">cor</th>
                    <th scope="col">preço</th>
                    <th scope="col">quantidade</th>
                    <th scope="col">excluir</th>
                    <th scope="col">Vender</th>
                </tr>
            </thead>
            <tbody class="table-primary tabb tabs">

            </tbody>
        </table>

    </div>
</main>
<?php $render('footer'); ?>
<script src="<?= $base ?>/js/produto.js"></script>
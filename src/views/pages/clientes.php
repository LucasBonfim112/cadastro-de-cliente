<?php $render('header'); ?>
<main class="">
    <h2 class="text-center mt-5" style="color: white;">Clientes Cadastrados</h2>
    <div class="tabelapos">
        <table class="table tabela">
            <input id="buscar" type="text" class="form-control"  placeholder="buscar">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Editar</th>
                    <th scope="col">Nome</th>
                    <th scope="col">cpf_cnpj</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody class="table-primary tabb tabs">

            </tbody>
        </table>

    </div>
</main>
<?php $render('footer'); ?>
<script src="<?= $base ?>/js/clientes.js"></script>
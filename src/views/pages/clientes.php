<?php $render('header'); ?>
<?php $render('menu'); ?>
<main class="">
    <h2 class="text-center mt-5" style="color: white;">Clientes Cadastrados</h2>
    <div class="tabelapos">
        <table class="table tabela">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">cpf_cnpj</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Nascimento</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <?php
                foreach ($dados as $idx => $val) { ?>
                    <tr>
                        <td><?= $val['nome'] ?></td>
                        <td><?= $val['cpf_cnpj'] ?></td>
                        <td><?= $val['idade'] ?> anos</td>
                        <td><?= $val['nascimento'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</main>
<?php $render('footer'); ?>
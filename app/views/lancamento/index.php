<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div class="col-12">
                <a href="<?php echo URL_BASE . "lancamento/novo" ?>" type="submit" class="btn btn-primary">Novo Lançamento</a>
            </div>
            <div class="container mt-5">
                <h2 class="mt-4">Lista de Lancamentos</h2> <br>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Fase</th>
                            <th>Fornecedor</th>
                            <th>pagamento</th>
                            <th>Valor</th>
                            <th>NFe</th>
                            <th>Data</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista as $lancamento) { ?>
                            <tr>
                                <td><?php echo $lancamento->fase ?></td>
                                <td><?php echo $lancamento->fornecedor ?></td>
                                <td><?php echo $lancamento->pagamento ?></td>
                                <td>R$: <?php echo number_format($lancamento->valor, 2, ',', '.') ?></td>
                                <td><?php echo $lancamento->nfe ?></td>
                                <td><?php $data = new DateTime($lancamento->data_pagamento);
                                    $data_formatada = $data->format('d/m/Y');
                                    echo $data_formatada; ?></td>
                                <td><a href="<?php echo URL_BASE . "lancamento/excluir/" . $lancamento->id ?>" class="btn btn-sm btn-danger btn-excluir">Excluir</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
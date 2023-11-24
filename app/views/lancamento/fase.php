<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div class="container mt-5">
                <?php foreach ($fase as $lista_fase) { ?>
                    <div class="card">
                        <h5 class="card-header"><?php echo $lista_fase->descricao ?></h5>
                        <div class="card-body">
                            <?php $valorTotal = 0;  ?>
                            <?php foreach ($lanc as $lancamento) { ?>
                                <?php if ($lista_fase->id == $lancamento->id_fase) {

                                    echo "<table>";
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td  width='30%'>" . $lancamento->fornecedor . "</td>";
                                    echo "<td width='25%'>" . $lancamento->pagamento . "</td>";
                                    echo "<td width='15%'>R$ " . number_format($lancamento->valor, 2, ',', '.') . "</td>";
                                    echo "<td width='10%'>" . $lancamento->nfe . "</td>";
                                    echo "<td width='15%'>" . (new DateTime($lancamento->data_pagamento))->format('d/m/Y') . "</td>";
                                    echo "<td width='20%'><a href='" . URL_BASE . "lancamento/excluir/" . $lancamento->id . "' class='btn btn-sm btn-danger btn-excluir'>Excluir</a></td>";
                                    echo "</tr>";

                                    echo "</tbody>";
                                    echo "</table>";
                                    $valorTotal += $lancamento->valor;
                                } ?>
                            <?php } ?> <br>
                            <a class='btn btn-primary'>Total R$: <?php echo number_format($valorTotal, 2, ',', '.') ?> </a>
                        </div>
                    </div><br><br>
                <?php } ?>
            </div>
        </div>
    </section>
</main>
<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div class="container mt-0">
                <div class="col-12">
                    <a href="<?php echo URL_BASE . "lancamento/index" ?>" type="submit" class="btn btn-primary">Lista de lancamento</a>
                </div>
                <div class="container-fluid px-4">
                    <h2 class="mt-4">Lançamento</h2> <br>
                    <form action="<?php echo URL_BASE . "lancamento/salvar" ?>" method="POST">
                        <div class="form-group">
                            <label for="inputState">Fase</label>
                            <select id="inputState" name="fase" class="form-control">
                                <?php foreach ($fase as $fase_lista) { ?>
                                    <option value="<?php echo $fase_lista->id ?>"> <?php echo $fase_lista->descricao ?> </option>
                                <?php } ?>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="inputState">Fornecedor</label>
                            <select id="inputState" name="fornecedor" class="form-control">
                                <?php foreach ($fornecedor as $fornecedor_lista) { ?>
                                    <option value="<?php echo $fornecedor_lista->id ?>"> <?php echo $fornecedor_lista->descricao ?> </option>
                                <?php } ?>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="inputState">Condição de pagamento</label>
                            <select id="inputState" name="pagamento" class="form-control">
                                <?php foreach ($pagamento as $pagamento_lista) { ?>
                                    <option value="<?php echo $pagamento_lista->id ?>"> <?php echo $pagamento_lista->descricao ?> </option>
                                <?php } ?>
                            </select>
                        </div><br>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Valor</label>
                                    <input type="text" class="form-control" required name="valor" id="valor" onkeyup="formatarMoeda();" placeholder="Digita o valor">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data pagamento</label>
                                    <input type="date" class="form-control" required name="data_pagamento">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nº NFe</label>
                                    <input type="number" class="form-control" required name="nfe" placeholder="Digita o numero da NFe">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    function formatarMoeda() {
        var elemento = document.getElementById('valor');
        var valor = elemento.value;

        valor = valor + '';
        valor = parseInt(valor.replace(/[\D]+/g, ''));
        valor = valor + '';
        valor = valor.replace(/([0-9]{2})$/g, ".$1");

        if (valor.length > 6) {
            valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }

        elemento.value = valor;
    }
</script>
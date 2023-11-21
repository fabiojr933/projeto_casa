<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div class="col-12">
                <a href="<?php echo URL_BASE . "pagamento/index" ?>" type="submit" class="btn btn-primary">Lista de Condição pagamento</a>
            </div>
            <div class="container mt-5">
                <div class="container-fluid px-4">
                    <h2 class="mt-4">Cadastro de Fornecedor</h2> <br>
                    <form action="<?php echo URL_BASE . "Pagamento/salvar" ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descrição</label>
                            <input type="text" class="form-control" required name="pagamento" placeholder="Digita nome da fase">
                        </div> <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
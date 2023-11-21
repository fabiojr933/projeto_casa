<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div class="col-12">
                <a href="<?php echo URL_BASE . "fase/index" ?>" type="submit" class="btn btn-primary">Lista de fase</a>
            </div>
            <div class="container mt-5">
                <div class="container-fluid px-4">
                    <h2 class="mt-4">Cadastro de Fase</h2> <br>
                    <form action="<?php echo URL_BASE . "Fase/salvar" ?>" method="POST">
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" class="form-control" required name="fase" placeholder="Digita nome da fase">
                        </div> <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
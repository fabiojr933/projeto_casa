      <main><br>
        <section id="facts" class="facts">
          <div class="container">
            <div class="col-12">
              <a href="<?php echo URL_BASE . "pagamento/novo" ?>" type="submit" class="btn btn-primary">Nova Condição pagamento</a>
            </div>
            <div class="container mt-5">
            <h2 class="mt-4">Lista de Condição pagamento</h2> <br>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>                  
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($lista as $pagamento) { ?>
                    <tr>
                      <td><?php echo $pagamento->id ?></td>
                      <td><?php echo $pagamento->descricao ?></td>
                      <td><a href="<?php echo URL_BASE."pagamento/excluir/".$pagamento->id ?>" class="btn btn-sm btn-danger btn-excluir">Excluir</a></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </main>
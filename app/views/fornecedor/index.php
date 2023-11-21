      <main><br>
        <section id="facts" class="facts">
          <div class="container">
            <div class="col-12">
              <a href="<?php echo URL_BASE . "fornecedor/novo" ?>" type="submit" class="btn btn-primary">Novo fornecedor</a>
            </div>
            <div class="container mt-5">
            <h2 class="mt-4">Lista de Fornecedor</h2> <br>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($lista as $fornecedor) { ?>
                    <tr>
                      <td><?php echo $fornecedor->id ?></td>
                      <td><?php echo $fornecedor->descricao ?></td>
                      <td><a href="<?php echo URL_BASE."fornecedor/excluir/".$fornecedor->id ?>" class="btn btn-sm btn-danger btn-excluir">Excluir</a></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </main>
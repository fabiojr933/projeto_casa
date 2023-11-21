      <main><br>
        <section id="facts" class="facts">
          <div class="container">
            <div class="col-12">
              <a href="<?php echo URL_BASE . "fase/novo" ?>" type="submit" class="btn btn-primary">Nova fase</a>
            </div>
            <div class="container mt-5">
              <h2 class="mt-4">Lista de Fase</h2> <br>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Descricao</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($lista as $fase) { ?>
                    <tr>
                      <td><?php echo $fase->id ?></td>
                      <td><?php echo $fase->descricao ?></td>
                      <td><a href="<?php echo URL_BASE."fase/excluir/".$fase->id ?>" class="btn btn-sm btn-danger btn-excluir">Excluir</a></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </main>
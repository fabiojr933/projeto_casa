      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Dashboard</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body" style="font-size: large;">Valor financiamento</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="large text-white stretched-link" href="">R$ 151.200,00</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-success text-white mb-4">
                <div class="card-body" style="font-size: large;">Total disponivel </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="large text-white stretched-link" href="">R$: <?php $disponivel = 151200 - $total;
                                                                          echo number_format($disponivel, 2, ',', '.')  ?></a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-danger text-white mb-4">
                <div class="card-body" style="font-size: large;">Valor gasto</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="large text-white stretched-link" href="">R$: <?php echo number_format($total, 2, ',', '.') ?></a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-chart-area me-1"></i>
                  Total por dia
                </div>
                <div id="pieDatachart" style="width: 100%; height: 300px;"></div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-chart-bar me-1"></i>
                  % Valor do financiamento X Valor gastos
                </div>
                <div id="pieTotalGatos" style="width: 100%; height: 300px;"></div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Todos lançamentos
            </div>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>        
                    <th>Fase</th>
                    <th>Fornecedor</th>
                    <th>Pagamento</th>
                    <th>Valor</th>
                    <th>NFe</th>
                    <th>Data</th>
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
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>

      <script type="text/javascript">
        google.charts.load('current', {
          'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Profit'],
            ['2014', 1000],
            ['2015', 1170],
            ['2016', 660],
            ['2017', 1030]
          ]);
          var options = {
            chart: {
              title: 'Company Performance',
              subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            }
          };
          var chart = new google.charts.Bar(document.getElementById('bardata'));
          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
      </script>



      <script type="text/javascript">
        google.charts.load('current', {
          'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          $.ajax({
            url: '<?php echo URL_BASE . "grafico/totalData" ?>',
            type: 'GET',
            dataType: 'JSON',
            success: function(ajaxData) {
              var data = google.visualization.arrayToDataTable(ajaxData);
              var options = {
              };
              var chart = new google.visualization.PieChart(document.getElementById('pieDatachart'));
              chart.draw(data, options);
            },
            error: function(xhr, status, error) {
              console.error(xhr.responseText);
              alert('Erro na requisição AJAX. Verifique o console para detalhes.');
            }
          });
        }
        
      </script>




      <script type="text/javascript">
        google.charts.load('current', {
          'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          $.ajax({
            url: '<?php echo URL_BASE . "grafico/totalGastos" ?>',
            type: 'GET',
            dataType: 'JSON',
            success: function(ajaxData) {
              var data = google.visualization.arrayToDataTable(ajaxData);             
              var options = {
              };             
              var chart = new google.visualization.PieChart(document.getElementById('pieTotalGatos'));
              chart.draw(data, options);
            },
            error: function(xhr, status, error) {
              console.error(xhr.responseText);
              alert('Erro na requisição AJAX. Verifique o console para detalhes.');
            }
          });
        }
      </script>
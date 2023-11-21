<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div class="container mt-5">
                <div class="container-fluid px-4">
                    <h2 class="mt-4">Graficos</h2> <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">% Fases</h5>
                                    <div id="piechart" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">% Fornecedores</h5>
                                    <div id="piechart2" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
</main>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        $.ajax({
            url: '<?php echo URL_BASE . "grafico/totalFase" ?>',
            type: 'GET',
            dataType: 'JSON',
            success: function(ajaxData) {
                // Converte os dados recebidos para o formato adequado do Google Charts
                var data = google.visualization.arrayToDataTable(ajaxData);

                // Opções do gráfico
                var options = {
                   
                };

                // Criação do gráfico de pizza
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                // Desenha o gráfico com os dados e opções
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
            url: '<?php echo URL_BASE . "grafico/totalFornecedor" ?>',
            type: 'GET',
            dataType: 'JSON',
            success: function(ajaxData) {
                // Converte os dados recebidos para o formato adequado do Google Charts
                var data = google.visualization.arrayToDataTable(ajaxData);

                // Opções do gráfico
                var options = {
                   
                };

                // Criação do gráfico de pizza
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

                // Desenha o gráfico com os dados e opções
                chart.draw(data, options);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Erro na requisição AJAX. Verifique o console para detalhes.');
            }
        });
    }
</script>
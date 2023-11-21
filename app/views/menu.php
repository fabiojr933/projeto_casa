<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="index.html">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>
        <div class="sb-sidenav-menu-heading">Interface</div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
          Cadastro
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo URL_BASE . "fase/novo" ?>">Fase</a>
            <a class="nav-link" href="<?php echo URL_BASE . "fornecedor/novo" ?>">Fornecedor</a>
            <a class="nav-link" href="<?php echo URL_BASE . "pagamento/novo" ?>">Cond. pagamento</a>
          </nav>
        </div>

        <a class="nav-link" href="<?php echo URL_BASE . "lancamento/novo" ?>">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          Lançamento
        </a>
        <div class="sb-sidenav-menu-heading">Relatorios</div>
        <a class="nav-link" href="<?php echo URL_BASE . "grafico/index" ?>">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          Graficos
        </a>
        <a class="nav-link" href="<?php echo URL_BASE . "lancamento/fase" ?>">
          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
          Lista de lançamentos
        </a>
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      Start Bootstrap
    </div>
  </nav>
</div>
<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\models\dao\LancamentoDao;


class LancamentoController extends Controller
{
   public function index()
   {
      $dao = new LancamentoDao();

      $dados["lista"] = $dao->listaLancamento();
      $dados["view"] = "lancamento/index";
      $this->load("template", $dados);
   }


   public function novo()
   {
      $tabela1 = "fase";
      $tabela2 = "pagamento";
      $tabela3 = "fornecedor";

      $dados["fase"] = Service::lista($tabela1);
      $dados["pagamento"] = Service::lista($tabela2);
      $dados["fornecedor"] = Service::lista($tabela3);

      $dados["view"] = "lancamento/novo";
      $this->load("template", $dados);
   }

   public function salvar()
   {
      $tabela = "lancamento";
      $campo  = "id";
      $validacao = [];

      $lancamento = new \stdClass();
      $lancamento->id_fase          = $_POST["fase"];
      $lancamento->id_fornecedor    = $_POST["fornecedor"];
      $lancamento->id_pagamento     = $_POST["pagamento"];
      $lancamento->valor            = floatval($_POST["valor"]);
      $lancamento->data_pagamento   = $_POST["data_pagamento"];
      $lancamento->nfe              = strtoupper($_POST["nfe"]);

      Service::salvar($lancamento, $campo, $validacao, $tabela);
      $this->redirect(URL_BASE . "lancamento/index");
   }

   public function excluir($id)
   {
      $tabela = "lancamento";
      $campo  = "id";

      Service::excluir($tabela, $campo, $id);
      $this->redirect(URL_BASE . "lancamento/index");
   }

   public function fase()
   {
      $tabela1 = "fase";
      $dao = new LancamentoDao();

      $dados["lanc"] = $dao->listaLancamento();
      $dados["fase"] = Service::lista($tabela1);

      $dados["view"] = "lancamento/fase";
      $this->load("template", $dados);
   }
  
}

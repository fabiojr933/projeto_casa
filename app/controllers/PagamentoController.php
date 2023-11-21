<?php
namespace app\controllers;
use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\ClienteService;

class PagamentoController extends Controller{    

   public function index(){
      $tabela = "pagamento";
      $dados["lista"] = Service::lista($tabela);
      $dados["view"]       = "pagamento/index";
	   $this->load("template", $dados);
   }  

   public function novo(){
      $dados["view"]       = "pagamento/novo";
	   $this->load("template", $dados);
   } 

   public function salvar()
   {
      $tabela = "pagamento";
      $campo  = "id";
      $validacao = [];

      $pagamento = new \stdClass();
      $pagamento->descricao  =  strtoupper($_POST["pagamento"]);
      Service::salvar($pagamento, $campo, $validacao, $tabela);
      $this->redirect(URL_BASE . "pagamento/index");
   }

   public function excluir($id)
   {
      $tabela = "pagamento";
      $campo  = "id";

      Service::excluir($tabela, $campo, $id);
      $this->redirect(URL_BASE . "pagamento/index");
   }

}

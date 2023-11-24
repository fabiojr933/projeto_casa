<?php
namespace app\controllers;
use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\ClienteService;

class FornecedorController extends Controller{    

   public function index(){
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE );
      }
      $tabela = "fornecedor";
      $dados["lista"] = Service::lista($tabela);
      $dados["view"]       = "fornecedor/index";
	   $this->load("template", $dados);
   }  

   public function novo(){
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE );
      }
      $dados["view"]       = "fornecedor/novo";
	   $this->load("template", $dados);
   } 
   
   public function salvar()
   {
      $tabela = "fornecedor";
      $campo  = "id";
      $validacao = [];

      $fornecedor = new \stdClass();
      $fornecedor->descricao  =  strtoupper($_POST["fornecedor"]);
      Service::salvar($fornecedor, $campo, $validacao, $tabela);
      $this->redirect(URL_BASE . "fornecedor/index");
   }

   public function excluir($id)
   {
      $tabela = "fornecedor";
      $campo  = "id";

      Service::excluir($tabela, $campo, $id);
      $this->redirect(URL_BASE . "fornecedor/index");
   }
}

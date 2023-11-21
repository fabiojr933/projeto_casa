<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;

class FaseController extends Controller
{

   public function index()
   {
      $tabela = "fase";
      $dados["lista"] = Service::lista($tabela);
      $dados["view"]       = "fase/index";
      $this->load("template", $dados);
   }

   public function novo()
   {
      $dados["view"]       = "fase/novo";
      $this->load("template", $dados);
   }

   public function salvar()
   {
      $tabela = "fase";
      $campo  = "id";
      $validacao = [];

      $fase = new \stdClass();
      $fase->descricao  =  strtoupper($_POST["fase"]);
      Service::salvar($fase, $campo, $validacao, $tabela);
      $this->redirect(URL_BASE . "fase/index");
   }

   public function excluir($id)
   {
      $tabela = "fase";
      $campo  = "id";

      Service::excluir($tabela, $campo, $id);
      $this->redirect(URL_BASE . "fase/index");
   }
}

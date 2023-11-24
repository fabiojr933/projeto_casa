<?php

namespace app\controllers;

use app\core\Controller;
use app\models\dao\LancamentoDao;


class HomeController extends Controller
{
   public function index()
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE );
      }
      $dao = new LancamentoDao();

      $dados["lista"] = $dao->listaLancamento();
      $dao = new LancamentoDao();
      $total = $dao->totalLancamento();
      $dados['total'] = $total[0]->total;
      $dados["view"]       = "home";
      $this->load("template", $dados);
   }
}

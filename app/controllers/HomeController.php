<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\models\dao\LancamentoDao;

class HomeController extends Controller
{

   public function index()
   {
      $dao = new LancamentoDao();
      $total = $dao->totalLancamento();    
      $dados['total'] = $total[0]->total;
      $dados["view"]       = "home";
      $this->load("template", $dados);
   }
}

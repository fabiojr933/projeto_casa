<?php

namespace app\controllers;

use app\core\Controller;
use app\models\dao\GraficoDao;
use DateTime;

class GraficoController extends Controller
{

   public function index()
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE );
      }
      $dados["view"]       = "grafico/index";
      $this->load("template", $dados);
   }
   public function totalFase()
   {
      $dao = new GraficoDao();
      $dados = $dao->totalFases();
      $dadosFormatados = [['Task', 'Hours per Day']];

      foreach ($dados as $item) {
         $valor_formatado = number_format($item->valor, 2, '.', '');
         $dadosFormatados[] = [$item->descricao, floatval($valor_formatado)];
      }

      header('Content-Type: application/json');
      echo json_encode($dadosFormatados);
      exit;
   }
   public function totalFornecedor()
   {
      $dao = new GraficoDao();
      $dados = $dao->totalFornecedor();
      $dadosFormatados = [['Task', 'Hours per Day']];

      foreach ($dados as $item) {
         $valor_formatado = number_format($item->valor, 2, '.', '');
         $dadosFormatados[] = [$item->descricao, floatval($valor_formatado)];
      }

      header('Content-Type: application/json');
      echo json_encode($dadosFormatados);
      exit;
   }

   public function totalData()
   {
      $dao = new GraficoDao();
      $dados = $dao->totalData();
      $dadosFormatados = [['Data', 'Valor']];

      foreach ($dados as $item) {
         $data = new DateTime($item->data_pagamento);
         $data_formatada = $data->format('d/m/Y');
         $valor_formatado = number_format($item->valor, 2, '.', '');
         $dadosFormatados[] = [$data_formatada, floatval($valor_formatado)];
      }

      header('Content-Type: application/json');
      echo json_encode($dadosFormatados);
      exit;
   }
   public function totalGastos()
   {
      $dao = new GraficoDao();
      $dados = $dao->totalGastos();
      $dadosFormatados = [['Data', 'Valor']];

      foreach ($dados as $item) {
         $valor_formatado = number_format($item->valor, 2, '.', '');
         $dadosFormatados[] = [$item->total, floatval($valor_formatado)];
      }
      $dadosFormatados[] = ['Financiamento', 151200];
      
      header('Content-Type: application/json');
      echo json_encode($dadosFormatados);
      exit;
   }
   public function mesGastos()
   {
      $dao = new GraficoDao();
      $dados = $dao->mesesGastos();
      $dadosFormatados = [['Mes', 'Valor']];

      foreach ($dados as $item) {
         $valor_formatado = number_format($item->valor, 2, '.', '');
         $dadosFormatados[] = [$item->mes, floatval($valor_formatado)];
      }    
      
      header('Content-Type: application/json');
      echo json_encode($dadosFormatados);
      exit;
   }
}

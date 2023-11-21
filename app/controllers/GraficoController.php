<?php

namespace app\controllers;

use app\core\Controller;
use app\models\dao\GraficoDao;
use DateTime;

class GraficoController extends Controller
{

   public function index()
   {
      $dados["view"]       = "grafico/index";
      $this->load("template", $dados);
   }
   public function totalFase()
   {
      $dao = new GraficoDao();
      $dados = $dao->totalFases();
      $dadosFormatados = [['Task', 'Hours per Day']];

      foreach ($dados as $item) {
         $dadosFormatados[] = [$item->descricao, floatval($item->valor)];
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
         $dadosFormatados[] = [$item->descricao, floatval($item->valor)];
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
         $dadosFormatados[] = [$data_formatada, floatval($item->valor)];
      }

      header('Content-Type: application/json');
      echo json_encode($dadosFormatados);
      exit;
   }
}

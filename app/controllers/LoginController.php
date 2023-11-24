<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\models\dao\LancamentoDao;
use MordiSacks\LocalStorage\LocalStorage;

class LoginController extends Controller
{

   public function index()
   {
      unset($_SESSION['Fox_email']);
      unset($_SESSION['Fox_senha']);
      $dados["view"]       = "login/login";
      $this->load("login", $dados);
   }

   public function entrar()
   {
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      if ($email == 'fabiojr933@gmail.com' && $senha == '1022') {
         $_SESSION['Fox_email'] = $email;
         $_SESSION['Fox_senha'] = $senha;
         header("location: " . URL_BASE . 'home');
      } else {
         $dados['mensagem'] = 'Usuario ou senha invalido';
         $dados["view"]       = "login/login";
         $this->load("login", $dados);
      }
   }
   public function sair()
   {
      session_unset();
      header("location: " . URL_BASE . 'home');
   }
}

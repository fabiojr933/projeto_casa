<?php
namespace app\models\validacao;

use app\core\Validacao;

class ClienteValidacao{
    public static function salvar($cliente){
        $validacao = new Validacao();
        $validacao->setData("aluna", $cliente->aluna);
        $validacao->setData("idade", $cliente->idade);
        $validacao->setData("data", $cliente->data);
        $validacao->setData("endereco", $cliente->endereco);
        $validacao->setData("telefone", $cliente->telefone);
        $validacao->setData("responsavel", $cliente->responsavel);
       

        $validacao->getData("aluna")->isVazio();
        $validacao->getData("idade")->isVazio();
        $validacao->getData("data")->isVazio();
        $validacao->getData("endereco")->isVazio();
        $validacao->getData("telefone")->isVazio();
        $validacao->getData("responsavel")->isVazio();

        return $validacao;
    }
}
<?php
namespace app\models\validacao;

use app\core\Validacao;

class ContatoValidacao{
    public static function salvar($contato){
        $validacao = new Validacao();
        $validacao->setData("contato", $contato->contato);
        $validacao->setData("cpf", $contato->cpf);
        $validacao->setData("bairro", $contato->bairro);
        $validacao->setData("cep", $contato->cep);
        $validacao->setData("cidade", $contato->cidade);
        $validacao->setData("bairro", $contato->bairro);
        $validacao->setData("uf", $contato->uf);
        $validacao->setData("endereco", $contato->endereco);

        //fazendo a validação

        $validacao->getData("contato")->isVazio();
        $validacao->getData("cep")->isVazio();
        $validacao->getData("cpf")->isVazio();
        $validacao->getData("bairro")->isVazio();
        $validacao->getData("cidade")->isVazio();
        $validacao->getData("bairro")->isVazio();
        $validacao->getData("uf")->isVazio();
        $validacao->getData("endereco")->isVazio();
        
        return $validacao;
    }
}